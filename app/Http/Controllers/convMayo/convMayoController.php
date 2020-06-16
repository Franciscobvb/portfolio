<?php

namespace App\Http\Controllers\convMayo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DB;

date_default_timezone_set('America/Mexico_City');

class convMayoController extends Controller{
    public function index(Request $request){
        $associateid = $request->associateid;
        if(!is_numeric($associateid)){
            $associateid = base64_decode($associateid);
        }
        $conexion5 = \DB::connection('sqlsrv5');
            $abiInfo = $conexion5->table('EstrategiaMayo')
                ->select('AssociateName', 'Rango', 'Pais', 'VP_Mes', 'VP_Pimag', 'VGP_Mes', 'VGP_Pimag', 'VGPAcumulado3', 'VO', 'VO_LDP', 'VO_LDPyS', 'AvanceR')
                ->where('Associateid', $associateid)
                ->get();

            if(sizeof($abiInfo) <= 0){
                $abiInfo = $conexion5->table('Puntos2020')
                    ->select('AssociateName', 'Rango', 'Pais')
                    ->where('Associateid', $associateid)
                    ->get();
            }
            $lastUpdate = $conexion5->select("SELECT TOP 1 Last_Update FROM Historico_Ejecucion WHERE Programa = 'Estrategia_Mayo' ORDER BY Last_Update DESC;");
            $boletos = $conexion5->select("SELECT COUNT(*) as bloletos FROM Red_MayoEstrategia ($associateid) WHERE AvanceR <> 'NO';");
        \DB::disconnect('sqlsrv5');
        
        $conexionNC = \DB::connection('sqlsrv2');
            $puntosProd = $conexionNC->table('NC_Sug_VC_Puntos')
            ->select('itemName','u_Puntos')
            ->where('Country', $abiInfo[0]->Pais)
            ->get();
        \DB::disconnect('sqlsrv2');


        $lastUpdate = explode(' ', $lastUpdate[0]->Last_Update);
        $lastUpdate = explode('.', $lastUpdate[1]);
        $lastUpdate = $lastUpdate[0];
        $boletos = $boletos[0]->bloletos;
        return view('convMayo.index', compact('associateid', 'abiInfo', 'lastUpdate', 'boletos', 'puntosProd'));
    }

    public function coMyGetGen(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $genealogy = $conexion5->select("EXEC Gen_EstrategiaMayo $associateid;");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $genealogy,
        ];
        return $data;
    }

    public function coMyGetGenPla(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $genealogy = $conexion5->select("SELECT * FROM Red_MayoEstrategia ($associateid);");
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $genealogy,
        ];
        return $data;
    }

    public function reporteInterno(){
        $fileName='Renuevate y Avanza de Rango - Reporte Interno';
        $queryGenealogy = DB::connection('sqlsrv5')->table('EstrategiaMayo')
        ->select('Associateid', 'AssociateName', 'Rango', 'Email', 'Pais', 'VGPAcumulado3', 'VP_Mes', 'VGP_Pimag', 'VO_LDP', 'VO_LDPyS', 'AvanceR')
        ->get();

        \DB::disconnect('sqlsrv5');

		//Exportamos consulta en formato xls
        \Excel::create($fileName, function($excel) use ($queryGenealogy) {
            $excel->sheet('listado', function($sheet) use ($queryGenealogy) {
                $sheet->setHeight(7, 25);
                
                // Especificamos los encabezados del documento
                $sheet->cell('A1', function($cell){
                    $cell->setValue('Código');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('B1', function($cell){
                    $cell->setValue('Nombre');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('C1', function($cell){
                    $cell->setValue('Rango Actual');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('D1', function($cell){
                    $cell->setValue('Email');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('E1', function($cell){
                    $cell->setValue('País');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                });

                $sheet->cell('F1', function($cell){
                    $cell->setValue('VGP (Marzo a Mayo)');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas 
                    $cell->setBackground('#92d048');
                });

                $sheet->cell('G1', function($cell){
                    $cell->setValue('VP por mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ade3f4');
                });

                $sheet->cell('H1', function($cell){
                    $cell->setValue('VGP Sistemas de Agua Mayo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ade3f4');
                });

                $sheet->cell('I1', function($cell){
                    $cell->setValue('VO-LDP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ade3f4');
                });

                $sheet->cell('J1', function($cell){
                    $cell->setValue('VO-LDPyS');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#ade3f4');
                });

                $sheet->cell('K1', function($cell){
                    $cell->setValue('VP por mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#5bc0de');
                });

                $sheet->cell('L1', function($cell){
                    $cell->setValue('VGP Sistemas de Agua Mayo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#5bc0de');
                });

                $sheet->cell('M1', function($cell){
                    $cell->setValue('VO-LDP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#5bc0de');
                });

                $sheet->cell('N1', function($cell){
                    $cell->setValue('VO-LDPyS');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#5bc0de');
                });

                $sheet->cell('O1', function($cell){
                    $cell->setValue('Avance de Rango');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#f78d80');
                });

                $sheet->cell('P1', function($cell){
                    $cell->setValue('VP por mes');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#1e5792');
                });

                $sheet->cell('Q1', function($cell){
                    $cell->setValue('VGP Sistemas de Agua Mayo');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#1e5792');
                });

                $sheet->cell('R1', function($cell){
                    $cell->setValue('VO-LDP');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#1e5792');
                });

                $sheet->cell('S1', function($cell){
                    $cell->setValue('VO-LDPyS');
                    $cell->setAlignment('center'); //Centramos contenido
                    $cell->setFontWeight('bold'); //Negritas
                    $cell->setBackground('#1e5792');
                });

                // Mostramos los registros
                foreach ($queryGenealogy as $idx => $itemgenealogy){
                    $idx = ($idx  + 2);
                    $sheet->cell('A'.$idx, function($cell) use ($itemgenealogy) {
                    $cell->setValue($itemgenealogy->Associateid);
                    });

                    $sheet->cell('B'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(trim($itemgenealogy->AssociateName, ' '));
                    });

                    $sheet->cell('C'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->Rango);
                    });

                    $sheet->cell('D'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(trim($itemgenealogy->Email, ' '));
                    });

                    $sheet->cell('E'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->Pais);
                    });

                    $sheet->cell('F'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->VGPAcumulado3);
                    });

                    $sheet->cell('G'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->VP_Mes);
                    });

                    $sheet->cell('H'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->VGP_Pimag);
                    });

                    $sheet->cell('I'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->VO_LDP);
                    });

                    $sheet->cell('J'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue($itemgenealogy->VO_LDPyS);
                    });

                    $VP_Mes = "";
                    if($itemgenealogy->VP_Mes >= 100){ $VP_Mes = 'Cumple'; } else{ $VP_Mes = 'Falta: '. (100 - $itemgenealogy->VP_Mes); }
                    $sheet->cell('K'.$idx, function($cell) use ($itemgenealogy, $VP_Mes) {
                        $cell->setValue($VP_Mes);
                    });

                    $VGP_Pimag = "";
                    if($itemgenealogy->VGP_Pimag >= 3000){ $VGP_Pimag = 'Cumple'; } else{ $VGP_Pimag = 'Falta: '. number_format(3000 - $itemgenealogy->VGP_Pimag); }
                    $sheet->cell('L'.$idx, function($cell) use ($itemgenealogy, $VGP_Pimag) {
                        $cell->setValue($VGP_Pimag);
                    });

                    $VO_LDP = "";
                    if($itemgenealogy->VO_LDP >= 1000){ $VO_LDP = 'Cumple'; } else{ $VO_LDP = 'Falta: '. number_format(1000 - $itemgenealogy->VO_LDP); }
                    $sheet->cell('M'.$idx, function($cell) use ($itemgenealogy, $VO_LDP) {
                        $cell->setValue($VO_LDP);
                    });

                    $VO_LDPyS = "";
                    if($itemgenealogy->VO_LDPyS >= 500){ $VO_LDPyS = 'Cumple'; } else{ $VO_LDPyS = 'Falta: '. (500 - $itemgenealogy->VO_LDPyS); }
                    $sheet->cell('N'.$idx, function($cell) use ($itemgenealogy, $VO_LDPyS) {
                        $cell->setValue($VO_LDPyS);
                    });

                    $avance = "";
                    $avance = str_replace(' ', '', $itemgenealogy->AvanceR);
                    if($avance == 'NO'){ $avance = 'NO'; } else{ $avance = 'SI'; }
                    $sheet->cell('O'.$idx, function($cell) use ($itemgenealogy, $avance) {
                        $cell->setValue($avance);
                    });

                    $sheet->cell('P'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(100);
                    });

                    $sheet->cell('Q'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(number_format(3000));
                    });

                    $sheet->cell('R'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(number_format(1000));
                    });

                    $sheet->cell('S'.$idx, function($cell) use ($itemgenealogy) {
                        $cell->setValue(500);
                    });
                }
            });
        })->export('xls');
    }

    public function reporteInternoData(){
        $conexion5 = \DB::connection('sqlsrv5');
            $genealogy = $conexion5->table("EstrategiaMayo")
            ->select('Associateid', 'AssociateName', 'Rango', 'Email', 'Pais', 'VGPAcumulado3', 'VP_Mes', 'VGP_Pimag', 'VO_LDP', 'VO_LDPyS', 'AvanceR')
            ->take(10)
            ->get();
        \DB::disconnect('sqlsrv5');
        $data = [
            'data' => $genealogy,
        ];
        return $data;
    }
}