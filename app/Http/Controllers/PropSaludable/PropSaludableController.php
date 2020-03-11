<?php

namespace App\Http\Controllers\PropSaludable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropSaludableController extends Controller{
    //Declaramos las configuraciones de amazon s3
    const S3_SLIDERS_FOLDER = 'finanzas_saludables';
    const S3_OPTIONS = ['disk' => 's3', 'visibility' => 'public'];

    public function index(Request $request){
        $associateid = base64_decode($request->associateid);
        //$associateid = $request->associateid;
        $estatus = 0;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiInfo = $conexion5->select("SELECT * FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
            $eventos = $conexion5->select("SELECT * FROM Registro_Eventos WHERE Associateid = $associateid;");
            $getWinner = $conexion5->select("SELECT Estatus from WinProposito WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        if(sizeof($getWinner) > 0){
            $estatus = $getWinner[0]->Estatus;
        }
        else{
            $estatus = 0;
        }
        return view('PropSaludable.index', compact('associateid', 'abiInfo', 'estatus'));
    }

    public function finzsSalStatusPers(Request $request){
        $associateid = base64_decode($request->associateid);
        //$associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiInfo = $conexion5->select("SELECT * FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
            $status = $conexion5->select("SELECT * FROM Proposito_Saludable WHERE Associateid = $associateid AND Periodo = $periodo;");
            $noEventos = $conexion5->select("SELECT COUNT(*) AS NoEventos FROM Registro_Eventos WHERE Associateid = $associateid;");
        \DB::disconnect('sqlsrv5');
        return view('PropSaludable.statusper', compact('associateid', 'status', 'noEventos', 'abiInfo'));
    }

    public function finzsSalRepo(Request $request){
        $associateid = base64_decode($request->associateid);
        //$associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $abiInfo = $conexion5->select("SELECT * FROM Puntos2020 WHERE Associateid = $associateid AND Periodo = $periodo;");
        \DB::disconnect('sqlsrv5');
        return view('PropSaludable.reporte', compact('associateid', 'genealogy', 'abiInfo'));
    }

    public function getReportFzsSal(Request $request){
        $associateid = $request->associateid;
        $type = $request->type;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $genealogy = $conexion5->select("EXEC Gen_PropositoSaludable $associateid, $type;");
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $genealogy,
        ];
        return \Response::json($data);
    }

    public function getEventsFzsSal(Request $request){
        $associateid = $request->associateid;
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $eventos = $conexion5->select("SELECT * FROM Registro_Eventos WHERE Associateid = $associateid;");
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $eventos,
        ];
        return \Response::json($data);
    }

    public function finszSalSave(Request $request){
        $rangos = ["DIR" => 1, "EXE" => 3, "PLA" => 5, "ORO" => 6, "PLO" => 7, "DIA" => 8, "DRL" => 9];

        $abiCode = $request->abiCode;
        $abiName = $request->abiName;
        $abiRank = $rangos[$request->abiRank];
        $eventName = $request->eventName;
        $eventDate = $request->eventDate;

        $conexion5 = \DB::connection('sqlsrv5');

        $response = $conexion5->select("SELECT Associateid, EventName FROM Registro_Eventos WHERE Associateid = $abiCode AND EventName = '$eventName';");
        \DB::disconnect('sqlsrv5');

        if(sizeof($response) <= 0){
            if ($request->has('eventPicture') && $request->eventPicture) {
                
                $path = $request->file('eventPicture')->store(
                    PropSaludableController::S3_SLIDERS_FOLDER,
                    PropSaludableController::S3_OPTIONS
                );
    
                $full_path = Storage::disk('s3')->url($path);
            }
            
            $response = $conexion5->insert("INSERT INTO Registro_Eventos(Associateid, AssociateName, Rango, EventName, EventImage, EventDate) VALUES ($abiCode, '$abiName', '$abiRank', '$eventName', '$full_path', '$eventDate')");
            \DB::disconnect('sqlsrv5');
            
            return \Redirect::to('finzssaludable/'.$abiCode)->with('notice', 'Evento registrado correctamente.');
        }
        else{
            return \Redirect::to('finzssaludable/'.$abiCode)->with('duplicate', 'El evento ya existe registrado.');
        }
    }

    public function finzsSalDelEvent(Request $request){
        $abiCode = $request->abiCode;
        $ref = $request->ref;
        $conexion5 = \DB::connection('sqlsrv5');
        $response = $conexion5->delete("DELETE FROM Registro_Eventos WHERE Associateid = $abiCode AND EventImage = '$ref';");
        \DB::disconnect('sqlsrv5');
        return $response;
    }

    public function finzsSalUpdateEvent(Request $request){
        $abiCode = $request->abiCodeUpdate;
        $eventName = $request->eventNameUpdate;
        $eventDate = $request->eventDateUpdate;
        $picEventLast = $request->picEventLast;
        $imgPath = "";

        if ($request->has('eventPictureUpdate') && $request->eventPictureUpdate) {
            $path = $request->file('eventPictureUpdate')->store(
                PropSaludableController::S3_SLIDERS_FOLDER,
                PropSaludableController::S3_OPTIONS
            );
            $full_path = Storage::disk('s3')->url($path);
            $imgPath = $full_path;
        }

        (empty($imgPath)) ? $imgPath = $picEventLast : null;

        $conexion5 = \DB::connection('sqlsrv5');
        $response = $conexion5->update("UPDATE Registro_Eventos
                                        SET EventName = '$eventName',
                                            EventDate = '$eventDate',
                                            EventImage = '$imgPath'
                                        WHERE Associateid = $abiCode AND EventImage = '$picEventLast'");
        \DB::disconnect('sqlsrv5');
        
        return \Redirect::to('finzssaludable/'.$abiCode)->with('notice', 'Evento actualizado correctamente.');
    }

    public function finzsSalMktRepo(){
        return view('PropSaludable.finzsSalMktRepo', compact('response'));
    }

    public function finzsSalMktRepoData(Request $request){
        $conexion5 = \DB::connection('sqlsrv5');
            $periodo = Date('Ym');
            $response = $conexion5->select("SELECT Associateid, AssociateName, Rango, Pais, VP, Incorp_Influencers, NoEventos FROM Proposito_Saludable");
        \DB::disconnect('sqlsrv5');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }
}
