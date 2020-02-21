<?php

namespace App\Http\Controllers\RegActivInf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class regActivInfController extends Controller{

    public function index(Request $request){
        $associateid = $request->associateid;
        $totalUnidades = 0;
        $conexion = \DB::connection('sqlsrv');
            $unaUnidad = $conexion->select("SELECT * FROM Influencer_UNA WHERE Owner_Influencer = $associateid;");
            if(sizeof($unaUnidad) <= 0){
                $dosUnidades = $conexion->select("SELECT * FROM Influencer_DOS WHERE Owner_Influencer = $associateid;");
                if(sizeof($dosUnidades) <= 0){
                    $tresUnidades = $conexion->select("SELECT * FROM Influencer_TRESoMAS WHERE Owner_Influencer = $associateid;");
                }
            }
        \DB::disconnect('sqlsrv5');

        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiInfo = $conexion5->select("SELECT AssociateName, Rango, Pais FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
            $getVP = $conexion5->select("SELECT Associateid, VP FROM LatamVolume WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        
        $username = trim($abiInfo[0]->AssociateName, ' ');
        $lastname = $associateid . " | " . $abiInfo[0]->Rango;
        return view('regactivinf.home', compact('unaUnidad', 'dosUnidades', 'tresUnidades', 'abiInfo', 'username', 'lastname', 'getVP'));
    }
}
