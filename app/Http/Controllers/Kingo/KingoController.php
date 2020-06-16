<?php

namespace App\Http\Controllers\Kingo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

date_default_timezone_set('America/Mexico_City');

class KingoController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaKingo')
                ->select('associateName', 'Rango', 'Pais', 'TotalBoletos', 'VP_Mes', 'VP_Pimag', 'BoletoxKit', 'BoletoxVP', 'BoletoxEntorno', 'Boletox100VP', 'BoletoxClub', 'VPTotalMenosPimag')
                ->where('Associateid', $associateid)
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

            $detalleBoletos = $conexion5->table('Boletox100VP_Kingo')
                ->select('Puntos', 'TotalBoletos', 'Period', 'FolioIni', 'FolioFin', 'semana')
                ->where('Associateid', '=', $associateid)
                ->orderBy('semana', 'ASC')
                ->get();
        \DB::disconnect('sqlsrv5');
        
        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $lastUpdate = explode('.', $lastUpdate[1]);
        $lastUpdate = $lastUpdate[0];
        return view('kingo.index', compact('associateid', 'abiInfo', 'lastUpdate', 'detalleBoletos'));
    }

    public function indexTest(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaKingo')
                ->select('associateName', 'Rango', 'Pais', 'TotalBoletos', 'VP_Mes', 'VP_Pimag', 'BoletoxKit', 'BoletoxVP', 'BoletoxEntorno', 'Boletox100VP', 'BoletoxClub', 'VPTotalMenosPimag')
                ->where('Associateid', $associateid)
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

            $detalleBoletos = $conexion5->table('Boletox100VP_Kingo')
                ->select('Puntos', 'TotalBoletos', 'Period', 'FolioIni', 'FolioFin', 'semana')
                ->where('Associateid', '=', $associateid)
                ->get();
        \DB::disconnect('sqlsrv5');
        
        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $lastUpdate = explode('.', $lastUpdate[1]);
        $lastUpdate = $lastUpdate[0];
        return view('kingo.test', compact('associateid', 'abiInfo', 'lastUpdate', 'detalleBoletos'));
    }

    public function indexTestClub(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaKingo')
                ->select('AssociateName', 'TotalBoletos')
                ->where('Associateid', '=', $associateid)
                ->get();

            $lastUpdate = $conexion5->table('Historico_Ejecucion')
                ->select('Last_Update')
                ->where('Programa', '=', 'Estrategia_Kingo')
                ->orderBy('Last_Update', 'desc')
                ->first();
        \DB::disconnect('sqlsrv5');

        $lastUpdate = explode(' ', $lastUpdate->Last_Update);
        $lastUpdate = explode('.', $lastUpdate[1]);
        $lastUpdate = $lastUpdate[0];
        return view('kingo.club', compact('associateid', 'abiInfo', 'lastUpdate'));
    }

    public function getRank(Request $request){
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT top 100 associateid, associateName, Rango, Pais, TotalBoletos FROM EstrategiaKingo ORDER BY TotalBoletos DESC;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }

    public function kgGetDetail(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT * FROM RedDetailsKingo ($associateid);");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }

    public function kgGetordenClub(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT Associateid, AssociateName, Pais, Ordernum, OrderDate, TipDoc, NumBoletos, FolioIni, FolioFin FROM Details_ClubBKingo WHERE Associateid = $associateid");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }
}
