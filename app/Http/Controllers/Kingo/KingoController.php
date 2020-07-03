<?php

namespace App\Http\Controllers\Kingo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;

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
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $ranking = $conexion5->select("SELECT associateid,AssociateName AS NombreMiembro,Pais,sum(TotalBoletos) AS TotalBoletos
            FROM EstrategiaKingo 
            WHERE associateType <> 100 AND TotalBoletos > 0 AND sponsorid = $associateid
            GROUP BY Associateid,AssociateName,Pais ORDER BY TotalBoletos DESC");
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
            $ranking = $conexion5->select("SELECT Associateid, AssociateName, Pais, Ordernum, OrderDate, TipDoc, TotalBoletos, FolioIni, FolioFin FROM Details_ClubBKingo WHERE Associateid = $associateid");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $ranking,
        ];
        return $data;
    }

    public function pconnecReportePMK(Request $request){
        $fileName='PiMagConnection - Reporte Interno';
        $queryReport = DB::connection('sqlsrv5')->table('EstrategiaKingo')
        ->select('associateid', 'Sponsorid', 'AssociateType', 'AssociateName', 'Rango', 'Pais', 'VP_Mes', 'VP_Pimag', 'VPTotalMenosPimag AS VP_Productos_DeOtras_Lineas', 'BoletoxKit', 'BoletoxVP AS Boleto_VentaPersonal', 'BoletoxClub', 'BoletoxEntorno', 'Boletox100VP AS Boletos_100VP_OtrasLineas', 'TotalBoletos', 'Period')
        ->where('TotalBoletos', '>', 0)
        ->orderby('TotalBoletos', 'DESC')
        ->get();
        \DB::disconnect('sqlsrv5');

        //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryReport) {
            $excel->sheet('PiMagConnection', function($sheet) use ($queryReport) {
                $sheet->setHeight(7, 25);
                
                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('Codigo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('Codigo de patrocinador');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('Tipo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('Pais');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('VP por mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('VP Sistemas de Agua');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('I1', function($cell){
                    $cell->setValue('VP Otras lineas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('J1', function($cell){
                    $cell->setValue('Boletos kit Influencia');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('K1', function($cell){
                    $cell->setValue('Boletos venta personal');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('L1', function($cell){
                    $cell->setValue('Boletos por Club');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('M1', function($cell){
                    $cell->setValue('Boletos Arma tu Entorno');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('N1', function($cell){
                    $cell->setValue('Boletos 100 VP Otras lineas');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('O1', function($cell){
                    $cell->setValue('Total boletos');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('P1', function($cell){
                    $cell->setValue('Periodo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($queryReport as $idx => $itemgenealogy){
                    $idx = ($idx  + 2);
                    $sheet->cell('A'.$idx, function($cell) use ($itemgenealogy) {
                    $cell->setValue($itemgenealogy->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(trim($itemgenealogy->Sponsorid, ' '));
                    });

                    $tipo = "";
                    $itemgenealogy->AssociateType == 100 ? $tipo = "Asesor B." : $tipo = "Club B.";
                    $sheet->cell('C'.$idx, function($cell) use ($itemgenealogy, $tipo) {
                        $cell->setValue($tipo);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(trim($itemgenealogy->AssociateName, ' '));
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->Rango);
                        $cell->setValue('-');
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->Pais);
                        $cell->setValue('-');
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->VP_Mes);
                        $cell->setValue('-');
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->VP_Pimag);
                        $cell->setValue('-');
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->VP_Productos_DeOtras_Lineas);
                        $cell->setValue('-');
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->BoletoxKit);
                        $cell->setValue('-');
                    });

                    $sheet->cell('K'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->Boleto_VentaPersonal);
                        $cell->setValue('-');
                    });

                    $sheet->cell('L'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->BoletoxClub);
                        $cell->setValue('-');
                    });

                    $sheet->cell('M'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->BoletoxEntorno);
                        $cell->setValue('-');
                    });

                    $sheet->cell('N'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->Boletos_100VP_OtrasLineas);
                        $cell->setValue('-');
                    });

                    $sheet->cell('O'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->TotalBoletos);
                        $cell->setValue('-');
                    });

                    $sheet->cell('P'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->Period);
                    });
                }
            });
        })->export('csv');
    }

    public function pconnecReportePMKBoletos(Request $request){
        $fileName='PiMagConnection Boletos - Reporte Interno';
        $conexion = DB::connection('sqlsrv5');

        $queryReport = $conexion->select("SELECT associateid,TotalBoletos,FolioIni,FolioFin FROM [dbo].[Boletox100VP_Kingo] WHERE TotalBoletos>0
            UNION ALL
            SELECT Associateid2,TotalBoletos,FolioIni,FolioFin FROM [dbo].[Details_Kingo] WHERE TotalBoletos>0
            UNION ALL
            SELECT Associateid2,TotalPatro,FolioIniPatro,FolioFinPatro FROM [dbo].[Details_Kingo] WHERE TotalPatro>0
            UNION ALL
            SELECT Associateid,TotalBoletos, FolioIni, FolioFin FROM Details_ClubBKingo");
        \DB::disconnect('sqlsrv5');

        //return $queryReport;

        //Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryReport) {
            $excel->sheet('PiMagConnection', function($sheet) use ($queryReport) {
                //$sheet->setHeight(7, 25);
                
                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('Código');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('Total de Boletos');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('Folio Inicio');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('Folio Fin');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                // Mostramos los registros
                foreach ($queryReport as $idx => $itemgenealogy){
                    $idx = ($idx  + 2);
                    //->select('associateid', 'TotalBoletos', 'FolioIni', 'FolioFin')
                    $sheet->cell('A'.$idx, function($cell) use ($itemgenealogy) {
                    $cell->setValue($itemgenealogy->associateid);
                    });
                    
                    $sheet->cell('B'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->TotalBoletos);
                        $cell->setValue('-');
                        $cell->setAlignment('center'); //Centramos contenido
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->FolioIni);
                        $cell->setValue('-');
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($itemgenealogy) {
                        //$cell->setValue($itemgenealogy->FolioFin);
                        $cell->setValue('-');
                    });
                }
            });
        })->export('xls');
    }
}
