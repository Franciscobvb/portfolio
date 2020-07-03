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
                ->join('ViajerosPremium', 'Puntos2020.Associateid', '=', 'ViajerosPremium.Associateid')
                ->select('Puntos2020.associateid','Puntos2020.AssociateName','Puntos2020.Pais','Puntos2020.Rango','Puntos2020.VpAcumulado','Puntos2020.VGPacumulado','Puntos2020.kinya','Puntos2020.KinYaL1','Puntos2020.RangoN','Puntos2020.Rango_Pago','Puntos2020.Periodo', 'ViajerosPremium.NumRangoPagoCumplido', 'Puntos2020.VGPLatam', 'Puntos2020.VGPLatamAcumu')
                ->where('Puntos2020.associateid', '=', $associateid)
                ->where('Puntos2020.Periodo', '=', $periodo)
                ->get();
            $totalsKinya = $conexion5->select("SELECT SUM(kinya) AS totalKinya, SUM(KinYaL1) AS totalKinyalvl FROM Puntos2020 WHERE associateid = $associateid");
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Puntos2020' ORDER BY Last_Update DESC;");
            $rankLenght = $conexion5->table('ViajerosPremium')
            ->where('Validacion', '=', 'T')
            ->count();
        \DB::disconnect('sqlsrv5');
        $lastUpdate = explode(' ',  $lastUpdate[0]->Last_Update); $lastUpdate = explode('.', $lastUpdate[1]); $lastUpdate = $lastUpdate[0];
        return view('ViajerosPro.index', compact('associateid', 'abiInfo', 'totalsKinya', 'lastUpdate', 'rankLenght'));
    }

    public function vpGetMonts(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $meses = $conexion5->table('Puntos2020')
                ->select('associateid','Sponsorid','AssociateName','Pais','Rango','Email','VP','VGP','VpAcumulado','VGPacumulado','kinya','KinYaL1','RangoN','Rango_Pago','Periodo','Cumple_MesV', 'VGPLatam', 'VGPLatamAcumu')
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
            $ranking = $conexion5->select("SELECT Associateid, AssociateName, Pais, VGP_Acumulado, Rango, NumRangoPagoCumplido, KinyaAcumulado, KinyaFrontalAcumulado, Opcion FROM ViajerosPremium WHERE Validacion='T' ORDER BY VGP_Acumulado DESC");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }
}
