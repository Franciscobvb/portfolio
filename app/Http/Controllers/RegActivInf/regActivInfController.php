<?php

namespace App\Http\Controllers\RegActivInf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class regActivInfController extends Controller{

    public function index(Request $request){
        //$associateid = base64_decode($request->associateid);
        $associateid = $request->associateid;
        $totalUnidades = 0;
        $periodo = Date('Ym');
        $conexion = \DB::connection('sqlsrv');
            $unaUnidad = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_UNA a 
                                            INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                            WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
            if(sizeof($unaUnidad) <= 0){
                $dosUnidades = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_DOS a
                                                  INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                  WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                if(sizeof($dosUnidades) <= 0){
                    $tresUnidades = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_TRESoMAS a
                                                       INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                       WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                }
            }
        \DB::disconnect('sqlsrv5');

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->select("SELECT AssociateName, Rango, Pais, Vp FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');

        $username = "";
        if(sizeof($abiInfo) > 0){
            $username = trim($abiInfo[0]->AssociateName, ' ');
            $lastname = $associateid . " | " . $abiInfo[0]->Rango;
        }
        return view('regactivinf.home', compact('unaUnidad', 'dosUnidades', 'tresUnidades', 'abiInfo', 'username', 'lastname', 'associateid'));
    }
}
