<?php

namespace App\Http\Controllers\puntos_connection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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
            ->select('AssociateName', 'Pais', 'Rango', 'Periodo', 'VP', 'VGP', 'Incorp_Influencers', 'KinYa', 'FechaInicio', 'FechaFin')
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
            ->where('Programa', '=', 'Estrategia_Repuestos')
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

    public function pmkReport(Request $request){
        $fileName='PuntosConnection - Reporte Interno';
        $conexion = DB::connection('sqlsrv5');
            $queryReport = $conexion->select("SELECT DISTINCT a.Associateid, a.AssociateName,a.AssociateType,a.Pais,a.Rango,b.Email,a.VP,a.Incorp_Influencers,a.KinYa, b.Estatus,b.FechaInicio,b.FechaFin
            FROM PuntosConnection a WITH(nolock)
            INNER JOIN WinPuntosConnection b WITH(nolock) ON (a.Associateid=b.Associateid)
            UNION 
            SELECT DISTINCT a.Associateid, a.AssociateName,a.AssociateType,a.Pais,a.Rango,a.Email,0,0,0,b.Estatus,b.FechaInicio,b.FechaFin
            FROM Puntos2020 a WITH(nolock)
            INNER JOIN WinPuntosConnection b WITH(nolock) ON (a.Associateid=b.Associateid)
            WHERE a.periodo = 202008 AND b.associateid NOT IN(SELECT DISTINCT associateid FROM PuntosConnection) 
            ORDER BY a.associateid
            ");
        \DB::disconnect('sqlsrv5');

        //return $queryReport;

        //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryReport) {
            $excel->sheet('PuntosConnection', function($sheet) use ($queryReport) {
                //$sheet->setHeight(7, 25);
                
                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('Código');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('Nombre asociado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('Tipo asociado');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('Correo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('VP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('Influencers');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I1', function($cell){
                    $cell->setValue('KinYa!');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J1', function($cell){
                    $cell->setValue('Semanas descuento');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K1', function($cell){
                    $cell->setValue('Fecha de inicio');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L1', function($cell){
                    $cell->setValue('Fecha fin');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($queryReport as $idx => $row){
                    $idx = ($idx  + 2);
                    $sheet->cell('A'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->AssociateName);
                    });

                    $tipo = "";
                    $row->AssociateType == 100 ? $tipo = "Asesor B." : $tipo = "Club B.";
                    $sheet->cell('C'.$idx, function($cell) use ($tipo) {
                        $cell->setValue($tipo);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Pais);
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Rango);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Email);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->VP);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->Incorp_Influencers);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->KinYa);
                    });

                    $semanas = "";
                    if($row->Estatus == 1){
                        $semanas = '7 semanas de descuento (nuevo Influencer)';
                    }
                    else if($row->Estatus == 8 && $row->AssociateType == 100){
                        $semanas = 'Todas las semanas de descuento';
                    }
                    else if($row->Estatus == 8 && $row->AssociateType != 100){
                        $semanas = 'X';
                    }
                    else{
                        $semanas = $row->Estatus . ' semanas de descuento';
                    }
                    $sheet->cell('J'.$idx, function($cell) use ($semanas) {
                        $cell->setValue($semanas);
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaInicio);
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($row) {
                        $cell->setValue($row->FechaFin);
                    });
                }
            });
        })->export('csv');
    }

    public function ptsConnectGenealogy(Request $request){
        $associateid = $request->associateid;
        
        $conexion = DB::connection('sqlsrv5');
            $gen = $conexion->select("EXEC Gen_PuntosConnection $associateid;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $gen,
        ];
        return $data;
    }

    public function mantenimiento(){
        return view('mantenimiento');
    }
}
