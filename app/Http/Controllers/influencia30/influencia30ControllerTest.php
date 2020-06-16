<?php

namespace App\Http\Controllers\influencia30;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class influencia30ControllerTest extends Controller{
    public function influencia30(Request $request){
        $associateid = $request->associateid;
        return view('influencia30.test', compact('associateid'));
    }

    public function simInfGetIntervals(Request $request){
        $pais = $request->pais;
        if($pais == 'CHL'){
            $pais = 'CHI';
        }
        $conexion = \DB::connection('sqlsrv2');
            $intervalos = $conexion->table('Intervalos_Influencer')
            ->select('Intervalo', 'Producto', 'Cantidad', 'ValorIngreso', 'Pais')
            ->where('pais', '=' ,$pais)
            ->get();
        \DB::disconnect('sqlsrv2');
        return $intervalos;
    }

    function simInfGmetBonos(Request $request){
        $kits = ["-" => 0, "PiMag Pi Water" => 1, "PiMag Waterfall" => 2, 'PiMag Aqua Pour D.' => 6, 'PiMag Optimizer' => 5, 'PiMag Wf + Op' => 4, 'PiMag Pw + OP' => 3];

        $pais = $request->pais;
        if($pais == 'MEX'){
            $pais = 'LAT';
        }

        $linea1KitSel = $request->linea1KitSel;
        $linea2KitSel = $request->linea2KitSel;
        $linea3KitSel = $request->linea3KitSel;
        $linea4KitSel = $request->linea4KitSel;
        $linea5KitSel = $request->linea5KitSel;
        $linea6KitSel = $request->linea6KitSel;
        $linea7KitSel = $request->linea7KitSel;

        $piw1 = 0; $piw2 = 0; $piw3 = 0; $piw4 = 0; $piw5 = 0; $piw6 = 0; $piw7 = 0;
        $ap1 = 0; $ap2 = 0; $ap3 = 0; $ap4 = 0; $ap5 = 0; $ap6 = 0; $ap7 = 0;
        $wf1 = 0; $wf2 = 0; $wf3 = 0; $wf4 = 0; $wf5 = 0; $wf6 = 0; $wf7 = 0;
        $op1 = 0; $op2 = 0; $op3 = 0; $op4 = 0; $op5 = 0; $op6 = 0; $op7 = 0;

        $tipo1 = $request->tipo1;
        if($tipo1 != 0){
            $tipo1 = $kits[(empty($linea1KitSel)) ? '-' : $linea1KitSel];
        }

        $tipo2 = $request->tipo2;
        if($tipo2 != 0){
            $tipo2 = $kits[(empty($linea2KitSel)) ? '-' : $linea2KitSel];
        }

        $tipo3 = $request->tipo3;
        if($tipo3 != 0){
            $tipo3 = $kits[(empty($linea3KitSel)) ? '-' : $linea3KitSel];
        }

        $tipo4 = $request->tipo4;
        if($tipo4 != 0){
            $tipo4 = $kits[(empty($linea4KitSel)) ? '-' : $linea4KitSel];
        }

        $tipo5 = $request->tipo5;
        if($tipo5 != 0){
            $tipo5 = $kits[(empty($linea5KitSel)) ? '-' : $linea5KitSel];
        }

        $tipo6 = $request->tipo6;
        if($tipo6 != 0){
            $tipo6 = $kits[(empty($linea6KitSel)) ? '-' : $linea6KitSel];
        }

        $tipo7 = $request->tipo7;
        if($tipo7 != 0){
            $tipo7 = $kits[(empty($linea7KitSel)) ? '-' : $linea7KitSel];
        }

        if($linea1KitSel == 'PiMag Pi Water'){
            $piw1 = 1;
        }
        else if($linea1KitSel == 'PiMag Waterfall'){
            $wf1 = 1;
        }
        else if($linea1KitSel == 'PiMag Aqua Pour D.'){
            $ap1 = 1;
        }
        else if($linea1KitSel == 'PiMag Optimizer'){
            $op1 = 1;
        }
        else if($linea1KitSel == 'PiMag Wf + Op'){
            $wf1 = 1;
            $op1 = 1;
        }
        else if($linea1KitSel == 'PiMag Pw + OP'){
            $piw1 = 1;
            $op1 = 1;
        }

        if($linea2KitSel == 'PiMag Pi Water'){
            $piw2 = 1;
        }
        else if($linea2KitSel == 'PiMag Waterfall'){
            $wf2 = 1;
        }
        else if($linea2KitSel == 'PiMag Aqua Pour D.'){
            $ap2 = 1;
        }
        else if($linea2KitSel == 'PiMag Optimizer'){
            $op2 = 1;
        }
        else if($linea2KitSel == 'PiMag Wf + Op'){
            $wf2 = 1;
            $op2 = 1;
        }
        else if($linea2KitSel == 'PiMag Pw + OP'){
            $piw2 = 1;
            $op2 = 1;
        }

        if($linea3KitSel == 'PiMag Pi Water'){
            $piw3 = 1;
        }
        else if($linea3KitSel == 'PiMag Waterfall'){
            $wf3 = 1;
        }
        else if($linea3KitSel == 'PiMag Aqua Pour D.'){
            $ap3 = 1;
        }
        else if($linea3KitSel == 'PiMag Optimizer'){
            $op3 = 1;
        }
        else if($linea3KitSel == 'PiMag Wf + Op'){
            $wf3 = 1;
            $op3 = 1;
        }
        else if($linea3KitSel == 'PiMag Pw + OP'){
            $piw3 = 1;
            $op3 = 1;
        }

        if($linea4KitSel == 'PiMag Pi Water'){
            $piw4 = 1;
        }
        else if($linea4KitSel == 'PiMag Waterfall'){
            $wf4 = 1;
        }
        else if($linea4KitSel == 'PiMag Aqua Pour D.'){
            $ap4 = 1;
        }
        else if($linea4KitSel == 'PiMag Optimizer'){
            $op4 = 1;
        }
        else if($linea4KitSel == 'PiMag Wf + Op'){
            $wf4 = 1;
            $op4 = 1;
        }
        else if($linea4KitSel == 'PiMag Pw + OP'){
            $piw4 = 1;
            $op4 = 1;
        }

        if($linea5KitSel == 'PiMag Pi Water'){
            $piw5 = 1;
        }
        else if($linea5KitSel == 'PiMag Waterfall'){
            $wf5 = 1;
        }
        else if($linea5KitSel == 'PiMag Aqua Pour D.'){
            $ap5 = 1;
        }
        else if($linea5KitSel == 'PiMag Optimizer'){
            $op5 = 1;
        }
        else if($linea5KitSel == 'PiMag Wf + Op'){
            $wf5 = 1;
            $op5 = 1;
        }
        else if($linea5KitSel == 'PiMag Pw + OP'){
            $piw5 = 1;
            $op5 = 1;
        }

        if($linea6KitSel == 'PiMag Pi Water'){
            $piw6 = 1;
        }
        else if($linea6KitSel == 'PiMag Waterfall'){
            $wf6 = 1;
        }
        else if($linea6KitSel == 'PiMag Aqua Pour D.'){
            $ap6 = 1;
        }
        else if($linea6KitSel == 'PiMag Optimizer'){
            $op6 = 1;
        }
        else if($linea6KitSel == 'PiMag Wf + Op'){
            $wf6 = 1;
            $op6 = 1;
        }
        else if($linea6KitSel == 'PiMag Pw + OP'){
            $piw6 = 1;
            $op6 = 1;
        }

        if($linea7KitSel == 'PiMag Pi Water'){
            $piw7 = 1;
        }
        else if($linea7KitSel == 'PiMag Waterfall'){
            $wf7 = 1;
        }
        else if($linea7KitSel == 'PiMag Aqua Pour D.'){
            $ap7 = 1;
        }
        else if($linea7KitSel == 'PiMag Optimizer'){
            $op7 = 1;
        }
        else if($linea7KitSel == 'PiMag Wf + Op'){
            $wf7 = 1;
            $op7 = 1;
        }
        else if($linea7KitSel == 'PiMag Pw + OP'){
            $piw7 = 1;
            $op7 = 1;
        }

        $conexion = \DB::connection('sqlsrv2');
            $bonos = $conexion->select("EXEC [SP_SimuladorPlanInfluencia_TEST] 
            '0=0;1=$piw1;2=$piw2;3=$piw3;4=$piw4;5=$piw5;6=$piw6;7=$piw7',--pw
            '0=0;1=$ap1;2=$ap2;3=$ap3;4=$ap4;5=$ap5;6=$ap6;7=$ap7',--ap
            '0=0;1=$wf1;2=$wf2;3=$wf3;4=$wf4;5=$wf5;6=$wf6;7=$wf7', --wf
            '0=0;1=$op1;2=$op2;3=$op3;4=$op4;5=$op5;6=$op6;7=$op7',--op
            '0=$pais;1=$pais;2=$pais;3=$pais;4=$pais;5=$pais;6=$pais;7=$pais',--para el pais solo se necesita el 0 y que los demas se llene con este mismo pais
            '0=0;1=1;2=1;3=1;4=1;5=1;6=1;7=1',--rango todos default 1
            '0=0;1=$tipo1;2=$tipo2;3=$tipo3;4=$tipo4;5=$tipo5;6=$tipo6;7=$tipo7'-- kit
            ");
        \DB::disconnect('sqlsrv2');
        return $bonos;
    }

    public function simInfPdfView(Request $request){
        $kits = ["-" => '0', "PiMag Pi Water" => '5023', "PiMag Waterfall" => '5024', 'PiMag Aqua Pour D.' => '5028', 'PiMag Optimizer' => '5027', 'PiMag Wf - Op' => '5026', 'PiMag Pw - OP' => '5025'];
        $imagenes = ["-" => '0.png', "PiMag Pi Water" => 'piwatter-min.png', "PiMag Waterfall" => 'waterfall-min.png', 'PiMag Aqua Pour D.' => 'aquapour-min.png', 'PiMag Optimizer' => 'optimizer-min.png', 'PiMag Wf - Op' => 'waterfall-optimizer-min.png', 'PiMag Pw - OP' => 'piwatter+optimizer-min.png'];

        $medio = $request->medio;
        $nombre = $request->nombre;
        $nombreJugador1 = $request->nombreJugador1;
        $nombreJugador2 = $request->nombreJugador2;
        $nombreJugador3 = $request->nombreJugador3;
        $nombreJugador4 = $request->nombreJugador4;
        $nombreJugador5 = $request->nombreJugador5;
        $nombreJugador6 = $request->nombreJugador6;
        $nombreJugador7 = $request->nombreJugador7;
        $moneda = $request->moneda;
        $bono = $request->bono;
        $bono1 = $request->bono1;
        $bono2 = $request->bono2;
        $bono3 = $request->bono3;
        $bono4 = $request->bono4;
        $bono5 = $request->bono5;
        $bono6 = $request->bono6;
        $bono7 = $request->bono7;
        $kitInfluencia1 = $request->kitInfluencia1;
        $kitInfluencia2 = $request->kitInfluencia2;
        $kitInfluencia3 = $request->kitInfluencia3;
        $kitInfluencia4 = $request->kitInfluencia4;
        $kitInfluencia5 = $request->kitInfluencia5;
        $kitInfluencia6 = $request->kitInfluencia6;
        $kitInfluencia7 = $request->kitInfluencia7;
        $codigo1 = $kits[(empty($kitInfluencia1)) ? '-' : $kitInfluencia1];
        $codigo2 = $kits[(empty($kitInfluencia2)) ? '-' : $kitInfluencia2];
        $codigo3 = $kits[(empty($kitInfluencia3)) ? '-' : $kitInfluencia3];
        $codigo4 = $kits[(empty($kitInfluencia4)) ? '-' : $kitInfluencia4];
        $codigo5 = $kits[(empty($kitInfluencia5)) ? '-' : $kitInfluencia5];
        $codigo6 = $kits[(empty($kitInfluencia6)) ? '-' : $kitInfluencia6];
        $codigo7 = $kits[(empty($kitInfluencia7)) ? '-' : $kitInfluencia7];
        $imagen1 = $imagenes[(empty($kitInfluencia1)) ? '-' : $kitInfluencia1];
        $imagen2 = $imagenes[(empty($kitInfluencia2)) ? '-' : $kitInfluencia2];
        $imagen3 = $imagenes[(empty($kitInfluencia3)) ? '-' : $kitInfluencia3];
        $imagen4 = $imagenes[(empty($kitInfluencia4)) ? '-' : $kitInfluencia4];
        $imagen5 = $imagenes[(empty($kitInfluencia5)) ? '-' : $kitInfluencia5];
        $imagen6 = $imagenes[(empty($kitInfluencia6)) ? '-' : $kitInfluencia6];
        $imagen7 = $imagenes[(empty($kitInfluencia7)) ? '-' : $kitInfluencia7];
        $deseo = $request->deseo;
        $tipo1 = ($request->tipo1 == 1) ? 'Influencia' : 'Venta';
        $tipo2 = ($request->tipo2 == 1) ? 'Influencia' : 'Venta';
        $tipo3 = ($request->tipo3 == 1) ? 'Influencia' : 'Venta';
        $tipo4 = ($request->tipo4 == 1) ? 'Influencia' : 'Venta';
        $tipo5 = ($request->tipo5 == 1) ? 'Influencia' : 'Venta';
        $tipo6 = ($request->tipo6 == 1) ? 'Influencia' : 'Venta';
        $tipo7 = ($request->tipo7 == 1) ? 'Influencia' : 'Venta';

        $pdf = \PDF::loadView('influencia30.pdftest', compact('nombre', 'nombreJugador1', 'nombreJugador2', 'nombreJugador3', 'nombreJugador4', 'nombreJugador5', 'nombreJugador6', 'nombreJugador7', 'moneda', 'bono', 'bono1', 'bono2', 'bono3', 'bono4', 'bono5', 'bono6', 'bono7', 'kitInfluencia1', 'kitInfluencia2', 'kitInfluencia3', 'kitInfluencia4', 'kitInfluencia5', 'kitInfluencia6', 'kitInfluencia7', 'codigo1', 'codigo2', 'codigo3', 'codigo4', 'codigo5', 'codigo6', 'codigo7', 'imagen1', 'imagen2', 'imagen3', 'imagen4', 'imagen5', 'imagen6', 'imagen7', 'deseo', 'tipo1', 'tipo2', 'tipo3', 'tipo4', 'tipo5', 'tipo6', 'tipo7'));

        if($medio == 'correo' && $request->email != ''){
            $data = array(
                'nombre' => "$nombre",
            );
    
            try{
                Mail::send('influencia30.mails.email', $data, function($message)use($pdf, $nombre, $request) {
                    $message->from('servicio.mex@nikkenlatam.com', 'Influencia 3.0');
                    $message->to($request->email)->subject('Influencia 3.0')->attachData($pdf->output(), "simulación_" . $nombre . ".pdf");
                });
            }catch(JWTException $exception){
                $this->serverstatuscode = "0";
                $this->serverstatusdes = $exception->getMessage();
            }
            if (Mail::failures()) {
                 $this->statusdesc  =   "Error sending mail";
                 $this->statuscode  =   "0";
    
            }else{
    
               $this->statusdesc  =   "Message sent Succesfully";
               $this->statuscode  =   "1";
            }
            return "1";
        }
        else{
            return $pdf->download('Plan de Influencia 3.0.pdf');
        }
    }
}
