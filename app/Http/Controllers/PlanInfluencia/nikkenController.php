<?php

namespace App\Http\Controllers\PlanInfluencia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use DB;
use App\Note;
use Redirect;
use PDF;
use \yidas\phpSpreadsheet\Helper;

date_default_timezone_set('America/Mexico_City');

class nikkenController extends Controller{
 	public function nikkenChallenge(Request $request,$abi){
		$contador= 1;
		$contadorPata1=0;
		$contadorPata2=0;
		$hoy = getdate();
		$day=$hoy['mday'];
		$month=$hoy['month'];
		if(Date('d') >= 16){
			$period = Date('Ym');
		}
		else{
			$period = Date('Ym') - 1;
		}
		$exponente='';
		$abi = $abi;
		if(!is_numeric($abi)){
            $abi = base64_decode($abi);
        }

		$kintaiFinal = 0;

		$queryGenealogy = DB::connection('sqlsrv2')->table('Jugadores_Mi_Red')
			->join('Conteo_NKChallenge', 'Jugadores_Mi_Red.associateid', '=', 'Conteo_NKChallenge.associateid')
			->select('Jugadores_Mi_Red.sponsorid','Jugadores_Mi_Red.associateid','Jugadores_Mi_Red.level','Jugadores_Mi_Red.Name','Jugadores_Mi_Red.Owner','Jugadores_Mi_Red.e_mail','Conteo_NKChallenge.QTY')
			->where('Conteo_NKChallenge.QTY', '<' ,'3')
			->where('Jugadores_Mi_Red.Periodo','=', $period)
			->where('Jugadores_Mi_Red.Owner','=', $abi)
			->take(5)
			->get();
			
		$items=DB::connection('sqlsrv2')->table('Detail_NKCHallenge')
			->select(DB::raw('SUM(Qty) as qty'))
			->where('Associateid','=', $abi)
			->where('Period','=', $period)
		    ->first(); 
            
		$quantity = $items->qty;

		$conexion=DB::connection('sqlsrv2');

		$queryDateUpdate=$conexion->table('Last_Update_NikkenChallenge')
			->first(); 
		
		$update = $queryDateUpdate->Last_Update;

		if (!$quantity){
			$quantity = 0;
			$queryKinyaDetail= [];
			$queryKinyaLV1Detail= [];
			$queryKinyaLV2Detail= [];
			$queryKintai= [];
			$PriceKinya = 0;	
			$PriceKintai = 0;
			$Total=0;
			$Total2 = 0;
			$PriceKinyaPlus= 0;
			$PriceKintaiCountry= 0;
			$exponente='';
			$simboloPrecio='$';
		}
		else {
			$conexion=DB::connection('sqlsrv2');

			if ($quantity >= 3) {
				$Kinya = $conexion->table('Final_Result_NKChallenge')
					->select('Price_D1','Price_GP','Price_Nl','Kintai','Pais','Total_Amount', 'Kintai')
					->where('Associateid','=', $abi)
					->where('period','=', $period)
					->first();

				$PriceKinya = number_format($Kinya->Price_D1,2);	
				$PriceKinyaPlusFirst = $Kinya->Price_GP;
				$PriceKinyaPlusSecond = $Kinya->Price_Nl;
				$PriceKintai = number_format($Kinya->Kintai,2);
				$PriceKintaiExponent = $Kinya->Kintai;
				$Country=$Kinya->Pais;

				$kintaiFinal = number_format($Kinya->Kintai);

				if ($Country== 'CRI') {
					$simboloPrecio='₡';
				}
				else if($Country== 'PER'){
					$simboloPrecio='S/.';
				}
				else if($Country== 'GTM'){
					$simboloPrecio='Q ';
				}
				else if($Country== 'ECU'){
					$simboloPrecio='USD ';
				}
				else if($Country== 'PAN'){
					$simboloPrecio='USD ';
				}
				else {
					$simboloPrecio='$';
				}

				$Total=number_format($Kinya->Total_Amount,2);
				$Total2=$Kinya->Total_Amount;
				$PriceKinyaPlus= number_format($PriceKinyaPlusFirst + $PriceKinyaPlusSecond,2);
			}
			else {
				$Kinya = $conexion->table('Detail_NKCHallenge')
					->select('Pais')
					->where('Associateid','=', $abi)
					->where('Period','=', $period)
					->first();

				$PriceKinya = 0;	
				$PriceKintai = 0;
				$Country=$Kinya->Pais;
				$Total=0;
				$Total2=0;
				$PriceKinyaPlus= 0;

				if ($Country== 'CRI') {
					$simboloPrecio='₡';
				}
				else if($Country== 'PER'){
					$simboloPrecio='S/.';
				}
				else if($Country== 'GTM'){
					$simboloPrecio='Q ';
				}
				else if($Country== 'ECU'){
					$simboloPrecio='USD ';
				}
				else if($Country== 'PAN'){
					$simboloPrecio='USD ';
				}
				else{
					$simboloPrecio='$';
				}
			}

			//QUERY PRECIO KINTAI POR PAIS
			$queryPKCountry = $conexion->table('ItemNikkenChallenge')
				->distinct('Kintai')
				->where('Country','=', $Country)
				->first();

			$PriceKintaiCountry = number_format($queryPKCountry->Kintai,2);
			$PriceKintaiCountryExponent = $queryPKCountry->Kintai;
		
			if ($quantity >= 3) {
				if ($PriceKintaiExponent == $PriceKintaiCountryExponent) {
					$exponente = 2;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 2) {
					$exponente = 3;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 3) {
					$exponente = 4;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 4) {
					$exponente = 5;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 5) {
					$exponente = 6;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 6) {
					$exponente = 7;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 7) {
					$exponente = 8;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 8) {
					$exponente = 9;
				}
				elseif ($PriceKintaiExponent == $PriceKintaiCountryExponent * 9) {
					$exponente = 10;
				}
			}

			//QUERY MINIMO DE CANTIDAD GANADA
			$queryKintai = $conexion->table('ItemNikkenChallenge')
				->select('Kinya')
				->where('ItemCode','=', '13651a')
				->where('Country','=', $Country)
				->first();

			$PriceKintaiPIW = $queryKintai->Kinya;
			$PriceKintaiPIW=number_format($PriceKintaiPIW * 3,2);

			//QUERY DATOS DETALLE KINYA
			$queryKinyaDetail = $conexion->table('EdoCta_NikkenChallenge_KinYa')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				//->where('TipDoc','=', 'OV')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->take(5)
				->get();

			//QUERY DATOS DETALLE KINYA+ LV1
			$queryKinyaLV1Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
				->join('Pata_NikkenChallenge', function ($join) {
					$join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
				})
				->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period)
				->take(5)
				->get(); 

			//QUERY DATOS DETALLE KINYA+ LV2
			$queryKinyaLV2Detail = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
				->join('Pata_NikkenChallenge', function ($join) {
					$join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
				})
				->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
				->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
				->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
				->take(5)
				->get();

			//QUERY DATOS DETALLE KINTAI
			if($PriceKintai == 0){
				$postSubtitle = $conexion->table('EdoCta_NikkenChallenge_KinYaL1')
					->join('Pata_NikkenChallenge', function ($join) {
						$join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL1.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL1.owner');
					})
					->select('EdoCta_NikkenChallenge_KinYaL1.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
					->where('EdoCta_NikkenChallenge_KinYaL1.Owner','=', $abi)
					->where('EdoCta_NikkenChallenge_KinYaL1.Periodo','=', $period)
					->take(5);

				$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinYaL2')
					->join('Pata_NikkenChallenge', function ($join) {
						$join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinYaL2.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinYaL2.owner');
					})
					->select('EdoCta_NikkenChallenge_KinYaL2.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
					->where('EdoCta_NikkenChallenge_KinYaL2.Owner','=', $abi)
					->where('EdoCta_NikkenChallenge_KinYaL2.Periodo','=', $period)
					->union($postSubtitle)
					->take(5)
					->get();
			}
			else {
				$queryKintai = $conexion->table('EdoCta_NikkenChallenge_KinTai')
					->join('Pata_NikkenChallenge', function ($join) {
						$join->on('Pata_NikkenChallenge.associateid', '=', 'EdoCta_NikkenChallenge_KinTai.associateid')->on('Pata_NikkenChallenge.owner', '=', 'EdoCta_NikkenChallenge_KinTai.owner');
					})
					->select('EdoCta_NikkenChallenge_KinTai.*','Pata_NikkenChallenge.level', 'Pata_NikkenChallenge.pata')
					->where('EdoCta_NikkenChallenge_KinTai.Owner','=', $abi)
					->where('EdoCta_NikkenChallenge_KinTai.Periodo','=', $period)
					->take(5)
					->get();
			}

			//Ejecuta  para determinar si abi se encuentra 2 veces en NIVEL 1
			$queryKinyaPlusPataLevel1 = $conexion->table('Nivel1_NikkenChallenge')
				->select(DB::raw('COUNT(pata) as pata'))
				->where('owner','=', $abi)
				->where('periodo','=', $period)
				->first();
				$contadorPata1 = $queryKinyaPlusPataLevel1->pata;

			//Ejecuta  para determinar si abi se encuentra 2 veces en NIVEL 2
			$queryKinyaPlusPataLevel2 = $conexion->table('Nivel2_NikkenChallenge')
			   ->select(DB::raw('COUNT(pata) as pata'))
				->where('owner','=', $abi)
				->where('periodo','=', $period)
				->first();
			
			$contadorPata2 = $queryKinyaPlusPataLevel2->pata;
	    }
       	\DB::disconnect('sqlsrv2');
       
		//TODO validar que existan registros
		$titleKinya = 'fpro/img/NCINF/logo_kinya.png';
		$titleKinyaplus = 'fpro/img/NCINF/logo_kinyaplus.png';
		$titleKintai = 'fpro/img/NCINF/logo_kintai.png';

		//Condiciones que enviaran las variables correspondientes a index.blade, envia por escenarios (Kinya(1,2,3),Kinya+(1,2),Kintai)
		if ($quantity == 0) {
			$percentKinya= '0';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver ganancias comprando 3 artículos o  más. ¡No te quedes fuera!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar.';
			$chartKinya='NikkenChallengeChart_Kinya_3_0';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		}
		elseif ($quantity == 1) {
			$percentKinya= '34';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver mayores ganancias comprando 3 artículos o  más. ¡No te quedes fuera! Puedes ganar '.$simboloPrecio.$PriceKintaiPIW.' o más!!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_1';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		}
		elseif ($quantity == 2) {
			$percentKinya= '67';
			$amountKinya= '0';
			$simulatorKinya= 'Puedes ver mayores ganancias comprando 3 artículos o  más. ¡No te quedes fuera! Puedes ganar '.$simboloPrecio.$PriceKintaiPIW.' o más!!.';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_2';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		}
		elseif ($quantity >= 3) {
			$percentKinya= '100';
			$amountKinya= $PriceKinya;
			$simulatorKinya= '¡No te detengas! Sigue ganando, entre más unidades compres, más ganas.';
			$percentGP= '0';			
			$amountGP= '0';
			$simulatorGP= 'Tu grupo personal te ayuda a ganar. ¡Ganamos todos si todos participamos!.';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
			$chartKinya='NikkenChallengeChart_Kinya_3_3';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
			
			//Condicion evalua primer escenario Kinya+(1 persona cumplio con la compra de 3 articulos)
			if ($PriceKinyaPlusFirst > '0') { 
				$percentGP= '50';
				$amountGP= $PriceKinyaPlus;
				$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos y tú puedes ganar hasta '.$simboloPrecio.$PriceKintaiPIW.'.';
				$percentKintai= '0';
				$amountKintai= '0';
				$simulatorKintai= '¡Anima a tu red! No pierdas la oportunidad de ganar hasta '.$simboloPrecio.$PriceKintaiCountry.'!.';
				$chartGP='NikkenChallengeChart_KinyaPlus_2_1';
				$chartKintai='NikkenChallengeChart_Kintai_3_0';
			} 
				
			//Condicion evalua segundo escenario Kinya+ y primer escenario de Kintai(1 línea cumplio con la compra de 3 articulos)
			if ($PriceKinyaPlusSecond > '0') { 
				$percentGP= '100';
				$amountGP= $PriceKinyaPlus;
				$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos y tú puedes ganar hasta '.$simboloPrecio.$PriceKintaiPIW.'.';
				$percentKintai= '34';
				$amountKintai= '0';
				$simulatorKintai= 'Tienes una línea que ha logrado "KinYa+", si logras que otras dos líneas lo hagan, podrás obtener una ganancia de '.$simboloPrecio.$PriceKintaiCountry.'.';
				$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
				$chartKintai='NikkenChallengeChart_Kintai_3_1';
			} 

			//Condicion evalua segundo escenario Kintai(2 líneas cumplieron con la compra de 3 articulos)
			if ($contadorPata1==2  && $contadorPata2==2) {
				$percentGP= '100';
				$amountGP= $PriceKinyaPlus;
				$simulatorGP= '¡No te detengas! Por cada nueva compra, ¡Tu ganancia incrementa!';
				$percentKintai= '67';
				$amountKintai= '0';
				$simulatorKintai= 'Tienes dos líneas que han logrado "KinYa+", si logras que otra línea lo haga, podrás obtener una ganancia de '.$simboloPrecio.$PriceKintaiCountry.'.';
				$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
				$chartKintai='NikkenChallengeChart_Kintai_3_2';
			}
 
			//Condicion evalua tercer escenario Kintai(3 líneas cumplieron con la compra de 3 articulos) GANADOR KINTAI
			if ($PriceKintai > '0') { 
				$percentGP= '100';
				$amountGP= $PriceKinyaPlus;
				$simulatorGP= '¡Las compras de tu red te dan ganancias! Invita a alguien más a comprar 3 o más productos.';
				$percentKintai= '100';
				$amountKintai= $PriceKintai;
				$simulatorKintai= '¡Has vencido en el NIKKEN Challenge! Aún puedes obtener más ganancias si continúas trabajando. Haz otro KinTai y gana hasta '.$simboloPrecio.$PriceKintaiCountry.'.';
				$chartGP='NikkenChallengeChart_KinyaPlus_2_2';
				$chartKintai='NikkenChallengeChart_Kintai_3_3';	
				$contador=$contador + 1;
				echo "<input type='hidden' id='winner' value='1'>";
			}
		}
		else {
			$percentKinya= '0';
			$amountKinya= '0';
			$simulatorKinya= '';
			$percentGP= '0';
			$amountGP= '0';
			$simulatorGP= '';
			$percentKintai= '0';
			$amountKintai= '0';
			$simulatorKintai= '';
			$chartKinya='NikkenChallengeChart_Kinya_3_0';
			$chartGP='NikkenChallengeChart_KinyaPlus_2_0';
			$chartKintai='NikkenChallengeChart_Kintai_3_0';
		}

		echo "<input type='hidden' id='contador' value='$contador'>";

		$conexion = \DB::connection('sqlsrv2');
			$contPiezasBono = $conexion->select("SELECT top 5 Total_Amount FROM Influencer_Bonus WHERE Influencer = $abi;");
		\DB::disconnect('sqlsrv2');

		$conexion = \DB::connection('sqlsrv5');
			$abiName = $conexion->select("SELECT top 5 Pais, AssociateName FROM Puntos2020 where Associateid = $abi and Periodo = $period;");
		\DB::disconnect('sqlsrv5');	
		if(sizeof($abiName) > 0){
			$nombreAbi = $abiName[0]->AssociateName;
			$Country = $abiName[0]->Pais;
		}
		else{
			$nombreAbi = '';
			$Country = '';
		}

		if ($Country== 'CRI') {
			$simboloPrecio='₡';
		}
		else if($Country== 'PER'){
			$simboloPrecio='S/.';
		}
		else if($Country== 'GTM'){
			$simboloPrecio='Q ';
		}
		else if($Country== 'ECU'){
			$simboloPrecio='USD ';
		}
		else if($Country== 'PAN'){
			$simboloPrecio='USD ';
		}
		else {
			$simboloPrecio='$';
		}

		if(sizeof($contPiezasBono) > 0){
			$bonoInfluencia = $contPiezasBono[0]->Total_Amount + $Total2;
		}
		else{
			$bonoInfluencia = 0 + $Total2;
		}
		$bonoInfluencia = number_format($bonoInfluencia, 2);
		$Total = $bonoInfluencia;

		$data['Section1'] = ['titulo' => $titleKinya, 'quantity'=>$quantity, 'percent' => $percentKinya, 'amount' => $amountKinya, 'simulator' => $simulatorKinya, 'chart' => $chartKinya, 'detail' => "btn peach-gradient btn-lg waves-effect waves-light br-50",'id' => "DetailKinya",'click' => "DetailKinya()",'exponente'=> '','simboloPrecio' => $simboloPrecio];
		$data['Section2'] = ['titulo' => $titleKinyaplus, 'quantity'=>'', 'percent' => $percentGP, 'amount' => $amountGP, 'simulator' => $simulatorGP, 'chart' => $chartGP, 'detail' => "btn btn-light-green btn-lg waves-effect waves-light",'id' => "DetailKinyaPlus",'click' => "DetailKinyaPlus()",'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio ];
		$data['Section3'] = ['titulo' => $titleKintai, 'quantity'=>'', 'percent' => $percentKintai, 'amount' => $amountKintai, 'simulator' => $simulatorKintai, 'chart' => $chartKintai, 'detail' => "btn aqua-gradient btn-lg waves-effect waves-light br-50",'id' => "DetailKintai",'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio ];


		return view('PlanInfluencia.index',['nombreAbi' => $nombreAbi, 'data'=>$data,'queryKinyaDetail' => $queryKinyaDetail, 'queryKinyaLV1Detail' => $queryKinyaLV1Detail, 'queryKinyaLV2Detail' => $queryKinyaLV2Detail, 'queryKintai' => $queryKintai, 'queryGenealogy' => $queryGenealogy, 'Total'=> $Total, 'day'=> $day,'PriceKintaiCountry'=> $PriceKintaiCountry,'PriceKintai'=> $PriceKintai,'PriceKinyaPlus'=>$PriceKinyaPlus, 'PriceKinya'=>$PriceKinya,'quantity'=> $quantity, 'update'=> $update, 'abi' => $abi,'exponente'=> $exponente, 'simboloPrecio' => $simboloPrecio, 'associateid' => $abi, 'kintaiFinal' => $kintaiFinal]);
	}

	public function testEdoCuenta(){
		return view('PlanInfluencia.test');
	}

	public function nikkenChallengeUrl(){
		ini_set('max_execution_time', 300); 
	 	$conexion=DB::connection('sqlsrvInconcert');
	 	$abiurl = $conexion->table('DistributorMasterData')
			->select('NumeroAbi')
			->get();

		foreach ($abiurl as $item){
            $conexion->table('DistributorMasterData')
            ->where('NumeroAbi', $item->NumeroAbi)
            ->where('NikkenChallenge', '')
            ->update(['NikkenChallenge' => "https://services.nikken.com.mx/nikkenChallenge/".base64_encode($item->NumeroAbi)]);
		} 
		\DB::disconnect('sqlsrvInconcert');
	}

	public function printPDF(Request $request){
		$meses = [
			'Enero' 	=> '01',
			'Febrero'	=> '02',
			'Marzo' 	=> '03',
			'Abril' 	=> '04',
			'Mayo' 		=> '05',
			'Junio' 	=> '06',
			'Julio' 	=> '07',
			'Agosto' 	=> '08',
			'Septiembre'=> '09',
			'Octubre'  	=> '10',
			'Noviembre' => '11',
			'Diciembre' => '12',
		];

		$abi = $request->associateid;
		$period = Date('Y') . $meses[$request->periodo];
		
		$conexion=DB::connection('sqlsrv2');
		$quantity = 0;
		$queryKinyaDetail= [];
		$tabDetallesInfluencia = [];
		$queryKintai= [];
		$PriceKinya = 0;	
		$PriceKintai = 0;
		$Total=0;
		$PriceKinyaPlus= 0;
		$PriceKintaiCountry= 0;
		$year = substr($period,0,4);   
		$mes = intval(substr($period, 4,6));

		if ($mes == '01') {
			$mes='ENERO';
		}
		elseif($mes == '02') {
			$mes='FEBRERO';
		}
		elseif ($mes == '03') {
			$mes='MARZO';
		}
		elseif ($mes == '04') {
			$mes='ABRIL';
		}
		elseif ($mes == '05') {
			$mes='MAYO';
		}
		elseif ($mes == '06') {
			$mes='JUNIO';
		}
		elseif ($mes == '07') {
			$mes='JULIO';
		}
		elseif ($mes == '08') {
			$mes='AGOSTO';
		} 
		elseif ($mes == '09') {
			$mes='SEPTIEMBRE';
		}
		elseif ($mes == '10') {
			$mes='OCTUBRE';
		}
		elseif ($mes == '11') {
			$mes='NOVIEMBRE';
		}
		elseif ($mes == '12') {
			$mes='DICIEMBRE';
		} 

		$Datos = $conexion->table('Historico_Result_NKChallenge')
			->select('Price_D1','Price_GP','Price_Nl','Kintai','Pais','Total_Amount')
			->where('Associateid','=', $abi)
			->where('period','=', $period)
			->first();

		if (!$Datos) {
			$quantity = 0;
			$queryKinyaDetail= [];
			$queryKintai= [];
			$tabDetallesInfluencia = [];
			$PriceKinya = 0;	
			$PriceKintai = 0;
			$Total=0;
			$PriceKinyaPlus= 0;
			$PriceKintaiCountry= 0;
			$abi='12634003';
			$period = '201903';
			$year = substr($period,0,4);   
			$mes = intval(substr($period, 4,6));
			$Country="";
			$CountryName="";
			$name="";
			$simboloPrecio="";
			$bonoInfTotal = 0;
		}
		else{
			$PriceKinya = number_format($Datos->Price_D1,2);	
			$PriceKinyaPlusFirst = $Datos->Price_GP;
			$PriceKinyaPlusSecond = $Datos->Price_Nl;
			$PriceKintai = number_format($Datos->Kintai,2);
			$Country=$Datos->Pais;
			$Total=$Datos->Total_Amount;
			$PriceKinyaPlus= number_format($PriceKinyaPlusFirst + $PriceKinyaPlusSecond,2);

			switch ($Country){
				case 'COL': 
					$CountryName='COLOMBIA';
					$simboloPrecio='$';
					break;
			
				case 'CRI': 
					$CountryName='COSTA RICA';
					$simboloPrecio='₡';
					break;
			
				case 'ECU': 
					$CountryName='ECUADOR';
					$simboloPrecio='$';
				   break;
			
				case 'GTM': 
					$CountryName='GUATEMALA';
					$simboloPrecio='Q';
					break;
			
				case 'LAT': 
					$CountryName='MÉXICO';
					$simboloPrecio='$';
					break;
			
				case 'PAN': 
					$CountryName='PANAMÁ';
					$simboloPrecio='$';
					break;
			
				case 'PER': 
					 $CountryName='PERÚ';
					 $simboloPrecio='S/.';
					break;
				 case 'SLV': 
					$CountryName='SALVADOR';
					$simboloPrecio='$';
					break;	
				  case 'CHL': 
					$CountryName='CHILE';
					$simboloPrecio='$';
					break;				
				default:
					  $CountryName=' ';
					break;
			}

			//QUERY DATOS DETALLE KINYA
			$queryKinyaDetail = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY DATOS DETALLE KINTAI
			$queryKintai = $conexion->table('Historico_EdoCta_NikkenChallenge_KinTai')
				->select('Associateid','Nombre','OrderNum','TipDoc','Itemcode','Descripcion','Qty','Bonificacion','TotalBonificacion','Pais','Periodo','OrderDate')
				->where('Owner','=', $abi)
				->where('Periodo','=', $period)
				->get();

			//QUERY PRECIO KINTAI POR PAIS
			$queryPKCountry = $conexion->table('ItemNikkenChallenge')
				->distinct('Kintai')
				->where('Country','=', $Country)
				->first();

			$PriceKintaiCountry = number_format($queryPKCountry->Kintai,2);

			//NOMBRE DE ASESOR
			$queryName = $conexion->table('Historico_EdoCta_NikkenChallenge_KinYa')
				->select('Nombre')
				->where('Associateid','=', $abi)
				->where('Periodo','=', $period)
				->first();
			$name = $queryName->Nombre;

			// Obtener el total del bono por influencia
			$bonoTotalInfluencia = $conexion->table('Historico_Influencer_Bonus')
				->select('Total_Amount')
				->where('Influencer','=', $abi)
				->where('Periodo','=', $period)
				->get();
				
			if(sizeof($bonoTotalInfluencia) <= 0){
				$bonoInfTotal = 0;
			}
			else{
				$bonoInfTotal = $bonoTotalInfluencia[0]->Total_Amount;
			}
			
			$Total = number_format($Total + $bonoInfTotal, 2);

			$conexion = \DB::connection('sqlsrv2');
				$tabDetallesInfluencia = $conexion->select("SELECT b.AssociateName AS apfirstname, a.Associateid AS Associateid, a.Ordernum AS Ordernum, a.Fecha_Orden AS Orderdate, a.Periodo AS Periodo, a.Kit_Influencer AS itemcode, a.Descripcion AS Descripcion, a.Qty_Item AS Qty_Item, a.Bono_Una_Unidad AS Bono_Tres_Unidades_o_Mas, a.Owner_Influencer AS Owner_Influencer, a.owner_country AS owner_country 
															FROM Historico_Influencer_UNA a
															INNER JOIN [RETOS_ESPECIALES].[dbo].[puntos2020] b ON(a.Associateid = b.Associateid)
															WHERE Owner_Influencer = $abi  AND a.Periodo = $period
															GROUP BY b.AssociateName, a.Associateid, a.Ordernum, a.Fecha_Orden, a.Periodo, a.Kit_Influencer, a.Descripcion,a.Qty_Item,a.Bono_Una_Unidad,a.Owner_Influencer,a.owner_country;");
				if(sizeof($tabDetallesInfluencia) <= 0){
					$tabDetallesInfluencia = $conexion->select("SELECT b.AssociateName AS apfirstname, a.Associateid AS Associateid, a.Ordernum AS Ordernum, a.Orderdate AS Orderdate, a.Periodo AS Periodo, a.itemcode AS itemcode, a.Descripcion AS Descripcion, a.Qty_Item AS Qty_Item, a.Bono_Dos_Unidades AS Bono_Tres_Unidades_o_Mas, a.Owner_Influencer AS Owner_Influencer, a.owner_country AS owner_country
																FROM Historico_Influencer_DOS a
																INNER JOIN [RETOS_ESPECIALES].[dbo].[puntos2020] b ON(a.Associateid = b.Associateid)
																WHERE Owner_Influencer = $abi  AND a.Periodo = $period
																GROUP BY b.AssociateName,a.Associateid, a.Ordernum, a.Orderdate, a.Periodo, a.itemcode, a.Descripcion,a.Qty_Item,a.Bono_Dos_Unidades,a.Owner_Influencer,a.owner_country");
					if(sizeof($tabDetallesInfluencia) <= 0){
						$tabDetallesInfluencia = $conexion->select("SELECT  b.AssociateName AS apfirstname, a.Associateid,a.Ordernum,a.Orderdate,a.Periodo,a.itemcode,a.Descripcion,a.Qty_Item,a.Bono_Tres_Unidades_o_Mas,a.Owner_Influencer, a.owner_country
																	FROM Historico_Influencer_TRESoMAS a
																	INNER JOIN [RETOS_ESPECIALES].[dbo].[puntos2020] b on(a.Associateid = b.Associateid)
																	WHERE Owner_Influencer = $abi AND a.Periodo = $period
																	GROUP BY b.AssociateName,a.Associateid, a.Ordernum, a.Orderdate, a.Periodo, a.itemcode, a.Descripcion,a.Qty_Item,a.Bono_Tres_Unidades_o_Mas,a.Owner_Influencer,a.owner_country;");
					}
				}
			\DB::disconnect('sqlsrv2');
		}

		$pdf = \PDF::loadView('PlanInfluencia.portada', [
			'year' => $year,
			'mes' => $mes,	
			'abi' => $abi,
			'PriceKinya' => $PriceKinya,
			'PriceKintai' => $PriceKintai,
			'queryKinyaDetail' => $queryKinyaDetail,
			'queryKintai' => $queryKintai,
			'Total'=> $Total,
			'Country'=> $Country,
			'CountryName'=> $CountryName,
			'PriceKintaiCountry' => $PriceKintaiCountry,
			'name' => $name,
			'simboloPrecio' => $simboloPrecio,
			'bonoInfTotal' => $bonoInfTotal,
			'tabDetallesInfluencia' => $tabDetallesInfluencia,
		]);

		return $pdf->stream();
	}

	// PLAN DE INFLUENCIA
	public function getInfoInfluencia(Request $request){
		$associateid = $request->associateid;
		if(Date('d') >= 16){
			$periodo = Date('Ym');
		}
		else{
			$periodo = Date('Ym') - 1;
		}
		$conexion = \DB::connection('sqlsrv2');
			$contPiezasBono = $conexion->select("SELECT Total_Amount, No_Unidades FROM Influencer_Bonus WHERE Influencer = $associateid;");
			$Detalle = $conexion->select("SELECT Qty_Item, Descripcion FROM Influencer_UNA WHERE Owner_Influencer = $associateid;");
			if(sizeof($Detalle) <= 0){
				$Detalle = $conexion->select("SELECT Qty_Item, Descripcion FROM Influencer_DOS WHERE Owner_Influencer = $associateid;");
				if(sizeof($Detalle) <= 0){
					$Detalle = $conexion->select("SELECT Qty_Item, Descripcion FROM Influencer_TRESoMAS WHERE Owner_Influencer = $associateid;");
				}
			}
			$tabDetalles = $conexion->select("SELECT b.apfirstname ,b.apfirstname as apfirstname, a.Associateid as Associateid, a.Ordernum as Ordernum, a.Fecha_Orden as Orderdate, a.Periodo as Periodo, a.Kit_Influencer as itemcode, a.Descripcion as Descripcion, a.Qty_Item as Qty_Item, a.Bono_Una_Unidad as Bono_Tres_Unidades_o_Mas, a.Owner_Influencer as Owner_Influencer, a.owner_country as owner_country FROM Influencer_UNA a 
											INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                            WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
            if(sizeof($tabDetalles) <= 0){
                $tabDetalles = $conexion->select("SELECT b.apfirstname,b.apfirstname as apfirstname, a.Associateid as Associateid, a.Ordernum as Ordernum, a.Orderdate as Orderdate, a.Periodo as Periodo, a.itemcode as itemcode, a.Descripcion as Descripcion, a.Qty_Item as Qty_Item, a.Bono_Dos_Unidades as Bono_Tres_Unidades_o_Mas, a.Owner_Influencer as Owner_Influencer, a.owner_country as owner_country FROM Influencer_DOS a
												  INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                  WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                if(sizeof($tabDetalles) <= 0){
                    $tabDetalles = $conexion->select("SELECT b.apfirstname,a.* FROM Influencer_TRESoMAS a
                                                       INNER JOIN [170].[SBOREPORT].[dbo].[Associates1] b ON a.Associateid=B.associateid collate SQL_Latin1_General_CP850_CI_AS
                                                       WHERE Owner_Influencer = $associateid  AND Periodo = $periodo;");
                }
            }
		\DB::disconnect('sqlsrv2');
		$response['contPiezasBono'] = $contPiezasBono;
		$response['Detalle'] = $Detalle;
		$response['tabDetalles'] = $tabDetalles;
		return $response;
	}
}