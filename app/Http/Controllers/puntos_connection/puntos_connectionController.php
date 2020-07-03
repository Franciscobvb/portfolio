<?php

namespace App\Http\Controllers\puntos_connection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

date_default_timezone_set('America/Mexico_City');

class puntos_connectionController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $conexion5 = DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('PuntosConnection')
            ->select('AssociateName', 'Pais', 'Rango', 'Periodo', 'VP', 'VGP', 'Incorp_Influencers', 'KinYa')
            ->where('Associateid', '=', $associateid)
            ->get();

            if(sizeof($abiInfo) <= 0){
                $abiInfo = $conexion5->table('Puntos2020')
                ->select('AssociateName', 'Rango', 'Pais')
                ->where('Associateid', $associateid)
                ->get();
            }

            $lastUpdate = $conexion5->table('Historico_Ejecucion')
            ->select('Last_Update')
            ->where('Programa', '=', 'Estrategia_Kingo')
            ->orderBy('Last_Update', 'desc')
            ->first();

            $getWinners = $conexion5->table('WinPuntosConnection')
            ->select('Pais', 'Estatus', 'FechaInicio', 'FechaFin')
            ->where('associateid', '=', $associateid)
            ->get();
        \DB::disconnect('sqlsrv5');
        $meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $lastUpdate = explode('.', $lastUpdate[1]);
        $lastUpdate = $lastUpdate[0];
        
        return view('puntos_connection.index', compact('associateid', 'abiInfo', 'meses', 'lastUpdate', 'getWinners'));
    }
}
