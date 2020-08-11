<?php

namespace App\Http\Controllers\myNikkenLatam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myNikkenLatamController extends Controller{
    public function genRadial(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiinfo = $conexion5->select("SELECT top 5 AssociateName FROM Puntos2020 WHERE Associateid = $associateid and Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        return view('myNikkenLatam.genRadial', compact('associateid', 'abiinfo'));
    }

    public function getDataGenPers(Request $request){
        $associateid = $request->associateid;
        $periodo = Date('Ym');

        $conexion = \DB::connection('LAT_MyNIKKEN');
            $genealogy = $conexion->select("EXEC Sp_TreePerId $associateid, $periodo, 'ORG';");
        \DB::disconnect('LAT_MyNIKKEN');

        return $genealogy;
    }

    public function genLateral(Request $request){
        return view('myNikkenLatam.genLateral');
    }
}
