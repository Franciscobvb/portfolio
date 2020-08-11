<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Viajeros premium</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_zero_config.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_html5.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/ui-kit/custom-sweetalert.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/aos.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/ViajerosPro/viajerospro.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}"/>
	</head>
	<body>
		<div id="navHeadWrapper" class="navHeaderWrapper header-image">
			<div class="">
				<nav class="navbar navbar-expand-lg bg-faded header-nav">
					<div class="container">
						<div class="col-xl-4 col-lg-3 col-6 mx-auto ">
							<img src="{{ asset('fpro/img/logo-black.png') }}" width="70%">
						</div>

						<div class="col-6 text-right d-lg-none d-block">
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon flaticon-left-menu"></span>
							</button>
						</div>

						<div class="col-xl-8 col-lg-9">
							<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
								<ul class="navbar-nav text-center mt-lg-0 mt-5">
									<li class="nav-item active">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#navHeadWrapper">Inicio</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios">Premios</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper">Términos y Condiciones</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
			
			<div id="headerWrapper" class="container headerContent">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-sm-12 col-12 text-center m-md-auto">
							<img src="{{ asset('fpro/img/ViajerosPro/vProLogo.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									@php
										$flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png'];
										$meses = ['202001' => 'Enero', '202002' => 'Febrero', '202003' => 'Marzo', '202004' => 'Abril', '202005' => 'Mayo', '202006' => 'Junio', '202007' => 'Julio', '202008' => 'Agosto', '202009' => 'Septiembre', '202010' => 'Octubre', '202011' => 'Noviembre', '202012' => 'Diciembre'];
										$rangosCompletos = ['PLO' => 'PLATINO', 'DIA' => 'DIAMANTE', 'DRL' => 'DIAMANTE REAL', 'EXE' => "EJECUTIVO"];
										$periodo = $abiInfo[0]->Periodo ?? date('Ym');
									@endphp
									<h4>
										<span class="align-self-center">{{ trim($abiInfo[0]->AssociateName ?? 'Nikken', ' ') }}</span>
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
									</h4>
									@php
										date_default_timezone_set('America/Mexico_City');
										$dia = Date('d');
										$mes = Date('m');
										$meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
										$mes = DateTime::createFromFormat('!m', $mes);
										$mes = strftime("%B", $mes->getTimestamp());
										$mesnum = Date('m');
										$mesnum = str_replace('0', '', $mesnum);
									@endphp
									<div class="col-lg-12">
										<h6><b>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '00:00:00' }} hora México.</b></h6>
									</div>
									<h5>Estatus Anual</h5>
									<input type="hidden" id="associateid" readonly value="{{ $associateid }}">
								</div>
								<div class="resumen row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Rango Actual: {{ $rangosCompletos[trim($abiInfo[0]->Rango ?? 'EXE', ' ')] }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="VGP Acumulado: {{ number_format($abiInfo[0]->VGPacumulado ?? 0) }}">
										<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4 ">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Meses calificados rango de pago: {{ $abiInfo[0]->NumRangoPagoCumplido ?? 12}}">
										<button class="btn btnicon"><i class="flaticon-calendar-22"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="KinYa! personal acumulado: {{ $totalsKinya[0]->totalKinya ?? 0}}">
										<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="KinYa! frontales acumulados: {{ $totalsKinya[0]->totalKinyalvl ?? 0 }}">
										<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly id="noRanking" value="# ranking: No participa">
										<input type="hidden" class="form-control br-30 w-100" readonly id="rankLenght" value="{{ $rankLenght }}">
										<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
										<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Participa por: No participa" id="opcionParttxt">
										<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
									</div>
								</div>
								<div class="resumenTab row">
									<div class="table-responsive">
										<table class="table table-highlight-head mb-4">
											<tbody>
												<tr>
													<td>Rango Actual: {{ $rangosCompletos[trim($abiInfo[0]->Rango ?? 'DRL', ' ')] }}</td>
												</tr>
												<tr>
													<td>VGP Acumulado: {{ number_format($abiInfo[0]->VGPacumulado ?? 0) }}</td>
												</tr>
												<tr>
													<td>Meses calificados rango de pago: {{ $abiInfo[0]->NumRangoPagoCumplido ?? 12}}</td>
												</tr>
												<tr>
													<td>KinYa! personal acumulado: {{ $totalsKinya[0]->totalKinya ?? 0}}</td>
												</tr>
												<tr>
													<td>KinYa! frontales acumulados: {{ $totalsKinya[0]->totalKinyalvl ?? 0 }}</td>
												</tr>
												<tr>
													<td><span id="noRankinglbl"># ranking: No participa</span></td>
												</tr>
												<tr>
													<td><span id="opcionPartLabel">Participa por: No participa</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl">
										Mis puntos
									</a>
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-rank-modal-xl">
										Ranking
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="height: 150px; overflow: hidden;">
			<svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 40%; width: 100%;">
				  <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z" style="stroke: none;fill: #d886f8;"></path>
			</svg>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffff; border-radius: 25px;">
				<div id="whyusWrapper" class="row">
					<div class="col-md-12 text-center">
						<h2 class="section-title mb-2">REQUISITOS </h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
						<img src="{{ asset('fpro/img/ViajerosPro/ViajeroPremium-2020.06.03.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5">
			<div class="container mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2">PREMIOS</h2>
					</div>
					<div class="col-xl-6 col-md-16 col-sm-12 col-12 text-center mt-4 m-md-auto">
						<h3>
							NIKKEN te trae un viaje espectacular por Rusia Imperial de 9 días y 8 noches.
						</h3>
					</div>
					<div class="col-md-6 text-center mt-5">
						<img src="{{ asset('fpro/img/ViajerosPro/premios.png') }}" width="99%">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4 divPremios pt-4">
						<h5 class="mb-5"><b><i class="flaticon-earth-globe"></i> Tiquete redondo desde tu país de origen (Ciudad principal).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-airplane"></i> Seguro de viajero durante las fechas del viaje.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-building"></i> Alojamiento en acomodación doble (8 noches) en hoteles categoría 4 estrellas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-non-veg"></i> Desayunos en los hoteles seleccionados (8 desayunos).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-cutlery-1"></i> Cenas (8 cenas) incluye cena especial de Bienvenida y Cierre.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-cutlery-1"></i> Almuerzos / Comida (4 almuerzos).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-map"></i> Guías locales en español para los tours.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita el Hermitage con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita la Fortaleza de San Pedro y San Pablo con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita nocturna de Moscú.</b></h5>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4 divPremios pt-4">
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita el Kremlin de Moscú con entradas (con catedrales).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-luggage"></i> Excursión a Troiste Sergueiev con entradas.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Visita a la Catedral de San Isaac.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-stopwatch-1"></i> Tren Alta Velocidad de San Petersburgo a Moscú (incluido).</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-location"></i> Excursión a Petrodvorets.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-building-1"></i> Visita del Palacio Yusupov.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-fill-car"></i> Traslados del Aeropuerto - Hotel - Aeropuerto.</b></h5>
						<h5 class="mb-5"><b><i class="flaticon-car"></i> Traslados terrestres para los tours.</b></h5>
					</div>
				</div>
			</div>
		</div>

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.95;">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mb-5 mt-5">TÉRMINOS Y CONDICIONES</h2>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p class="">Los gastos que no esten estempecificados, deberán ser asumidos por el ganador. </p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-money"></i>
						<p class="">Los gastos generados por trámite de visas, pasaportes y documentos en general, serán asumidos por el ganador.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center">
						<i class="flaticon-up-chart"></i>
						<p class="">El premio solo puede cederse a influecers de rango Platino o mayor.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper" class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="position-relative">
							<div class="arrow text-center">
								<span class="flaticon-double-arrow-up"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y')}} Viajeros Premium <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<div id="chat">
			<div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="Conoce" data-toggle="modal" data-target=".mdl-tutorial">
				<i class="flaticon-youtube-play-button-line"></i>
			</div>
			<div class="modal fade bd-example-modal-lg mdl-tutorial" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" onclick="stopVideo()">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="myExtraLargeModalLabel"></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="py-3 text-center">
								<video controls="true" class="embed-responsive-item" width="100%">
									<source src="https://services.nikken.com.mx/fpro/img/ViajerosPro/vPro.mp4" type="video/mp4" />
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modales -->
		<div class="modal fade bd-estatusper-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12">
								<h2 class="text-center mainTitle">
									Mis puntos
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody">
								<div class="row">
									<div class="col-lg-12 pb-4">
										@php
											date_default_timezone_set('America/Mexico_City');
											$dia = Date('d');
											$mes = Date('m');
											$meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
											$mes = DateTime::createFromFormat('!m', $mes);
											$mes = strftime("%B", $mes->getTimestamp());
											$mesnum = Date('m');
											$mesnum = str_replace('0', '', $mesnum);
										@endphp
										<div class="col-lg-12 pb-4">
											<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '00:00:00' }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2>{{ trim($abiInfo[0]->AssociateName ?? 'Nikken', ' ') }}</h2>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="container">
											<div class="row m-auto">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
													<table id="mainPts" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Código</th>
																<th><p style="width: 200px"></p>Nombre</th>
																<th>Mes</th>
																<th>VP Mes</th>
																<th>VGP Mes</th>
																<th>VGP Acumulado</th>
																<th>Rango actual</th>
																<th>Rango de pago</th>
																<th>KinYa! personal</th>
																<th>KinYa! frontal</th>
																<th>Califica Rango de Pago</th>
															</tr>
															<tfoot>
																<tr>
																	<td colspan="8"></td>
																	<td>
																		Total: {{ $totalsKinya[0]->totalKinya }}
																		@if ($totalsKinya[0]->totalKinya >= 6)
																			<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>
																		@else
																			<span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>
																		@endif
																	</td>
																	<td>
																		Total: {{ $totalsKinya[0]->totalKinyalvl }}
																		@if ($totalsKinya[0]->totalKinyalvl >= 3)
																			<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>
																		@else
																			<span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>
																		@endif
																	</td>
																	<td></td>
																</tr>
															</tfoot>
														</thead>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-rank-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<div class="col-md-12">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12">
								<h2 class="text-center mainTitle">
									Ranking
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody">
								<div class="row">
									<div class="col-lg-12 pb-4">
										@php
											date_default_timezone_set('America/Mexico_City');
											$dia = Date('d');
											$mes = Date('m');
											$meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
											$mes = DateTime::createFromFormat('!m', $mes);
											$mes = strftime("%B", $mes->getTimestamp());
											$mesnum = Date('m');
											$mesnum = str_replace('0', '', $mesnum);
										@endphp
										<div class="col-lg-12 pb-4">
											<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2>{{ trim($abiInfo[0]->AssociateName ?? 'Nikken', ' ') }}</h2>
									</div>
									<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="container">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner mb-5 table-responsive">
													<table id="rankingTab" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Posición</th>
																<th>Nombre</th>
																<th>Rango</th>
																<th>País</th>
																<th>VGP Acumulado</th>
																<th>
																	@php
																		$periodos = ['202001'=>'Enero', '202002'=>'Febrero', '202003'=>'Marzo', '202004'=>'Abril', '202005'=>'Mayo', '202006'=>'Junio', '202007'=>'Julio', '202008'=>'Agosto', '202009'=>'Septiembre', '202010'=>'Octubre', '202011'=>'Noviembre', '202012'=>'Diciembre'];
																		if(Date('d') >= 14){
																			$period = Date('Ym') - 1;
																		}
																		else{
																			$period = Date('Ym') - 2;
																		}
																	@endphp
																	Meses calificados rango de pago <br> (Enero - {{ $periodos[$period] }})
																</th>
																<th># KinYa! Personales</th>
																<th># KinYa! Frontales</th>
																<th>Participa por:</th>
															</tr>
														</thead>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
	<script src="{{ asset('fpro/js/aos.js') }}"></script>
	<script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/mainjs/ViajerosPro/viajerospro.js') }}"></script>
	@if (trim($abiInfo[0]->Rango ?? 'PLA', ' ') != 'PLO' && trim($abiInfo[0]->Rango ?? 'PLA', ' ') != 'DIA' && trim($abiInfo[0]->Rango ?? 'PLA', ' ') != 'DRL')
		<script>
			swal({
				title: 'Recuerda que solo puedes participar si eres rango Platino o Superior.',
				text: "",
				type: 'info',
				padding: '2em',
				showCancelButton: false,
				showConfirmButton: false,
				allowEscapeKey: false,
        		allowOutsideClick: false,
			});
		</script>
	@endif
</html>