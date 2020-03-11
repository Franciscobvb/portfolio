<?php

namespace App\Http\Controllers\myNikkenLatam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myNikkenLatamController extends Controller{
    public function genRadial(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiinfo = $conexion5->select("SELECT AssociateName FROM Puntos2020 WHERE Associateid = $associateid and Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        return view('myNikkenLatam.genRadial', compact('associateid', 'abiinfo'));
    }

    public function getDataGenPers(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            //$genealogy = $conexion5->select("SELECT Associateid, AssociateName FROM ClubKiai WHERE Sponsorid = $associateid AND Periodo = 202002 AND Vp > 100;");
            $genealogy = $conexion5->select("EXEC Gen_PropositoSaludable $associateid, 1;");
        \DB::disconnect('sqlsrv5');
        return $genealogy;
    }

    public function genLateral(Request $request){
        return view('myNikkenLatam.genLateral');
    }
}
