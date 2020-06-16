<?php

namespace App\Http\Controllers\ViajerosPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

date_default_timezone_set('America/Mexico_City');

class ViajerosProController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $periodo = Date('Ym');

        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('Puntos2020')
                ->select('associateid','Sponsorid','AssociateName','Pais','Rango','Email','VP','VGP','VpAcumulado','VGPacumulado','kinya','KinYaL1','RangoN','Rango_Pago','Periodo')
                ->where('associateid', '=', $associateid)
                ->where('Periodo', '=', $periodo)
                ->get();
            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
        \DB::disconnect('sqlsrv5');
        return view('ViajerosPro.index', compact('associateid', 'abiInfo', 'totalsKinya'));
    }

    public function vpGetMonts(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $meses = $conexion5->table('Puntos2020')
                ->select('associateid','Sponsorid','AssociateName','Pais','Rango','Email','VP','VGP','VpAcumulado','VGPacumulado','kinya','KinYaL1','RangoN','Rango_Pago','Periodo','Cumple_MesV')
                ->where('associateid', '=', $associateid)
                ->get();
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $meses,
        ];
        return $data;
    }

    public function vpGetRank(Request $request){
        $periodo = Date('Ym');
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT Associateid, AssociateName, Pais, VGP_Acumulado, Rango FROM ViajerosPremium ORDER BY VGP_Acumulado DESC");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }
}
