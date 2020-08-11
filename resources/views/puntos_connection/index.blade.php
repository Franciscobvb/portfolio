<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | Puntos Connection</title>
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

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.carousel.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.theme.default.min.css') }}"/>

		<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/charts/chartist/chartist.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/modules/modules-widgets.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/puntos_connection/puntos_connection.css') }}">
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
							<img src="{{ asset('fpro/img/puntos_connection/logo.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									<img src="{{ asset('fpro/img/kingo/minilogo.png') }}" width="85%" class="mb-3">
									<p>El Plan de Influencia te trae PUNTOS Connection te da la posibilidad de participar por descuentos en repuestos, entonces prepárate por que empiezan pequeños retos que te acercaran a ganar increibles descuentos en los meses de Agosto y Septiembre.</p>
									<h4>
										@php $flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'MEX' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png']; @endphp
										<span class="align-self-center">{{ trim($abiInfo[0]->AssociateName ?? 'NIKKEN', ' ') }}</span>
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
									</h4>
									<input type="hidden" id="associateid" readonly value="{{ $associateid ?? 0 }}">
									<input type="hidden" id="status" readonly value="{{ $getWinners[0]->Estatus ?? 0 }}">
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl">
										Mi estatus
									</a>
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusred-modal-xl">
										Ganadores de mi red
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="requisitos scroll-offset navHeaderWrapper mt-5">
			<div class="container" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="whyusWrapper" class="row" style="justify-content: space-evenly">
					<div class="col-md-12 text-center">
						<h2 class="section-title mb-2" data-aos="fade-up" data-aos-duration="2000">REQUISITOS</h2>
					</div>
					@php
						$paisAbi = $abiInfo[0]->Pais ?? 'LAT';
					@endphp
					@if ($paisAbi == 'PAN' || $paisAbi == 'CRI' || $paisAbi == 'GTM' || $paisAbi == 'SLV')
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="2000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">5 SEMANAS</span></p>
									<h5 class="card-title mb-1">100 DE VP</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="3000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">6 SEMANAS</span></p>
									<h5 class="card-title mb-1">1 KIT DE INFLUENCIA</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="2000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">7 SEMANAS</span></p>
									<h5 class="card-title mb-1">LOGRO 1 KinYa!</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="1000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">4 SEMANAS</span></p>
									<h5 class="card-title mb-1">UNA COMPRA SIN IMPORTAR PUNTOS</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-12 text-center mt-4">
							<img src="{{ asset('fpro/img/puntos_connection/banner.jpg') }}" width="80%">
						</div>
					@else
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="1000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">3 SEMANAS</span></p>
									<h5 class="card-title mb-1">VP DE 100</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="2000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">4 SEMANAS</span></p>
									<h5 class="card-title mb-1">1 KIT DE INFLUENCIA</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="3000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">5 SEMANAS</span></p>
									<h5 class="card-title mb-1">2 KIT DE INFLUENCIA</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="2000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">6 SEMANAS</span></p>
									<h5 class="card-title mb-1">LOGRO KinYa!</h5>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3" data-aos="fade-up" data-aos-duration="3000">
							<div class="card">
								<div class="card-body">
									<p class=""><span class="post-meta-info">7 SEMANAS</span></p>
									<h5 class="card-title mb-1">3 KIT DE INFLUENCIA</h5>
								</div>
							</div>
						</div>
					@endif
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5">
			<div class="container mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2" data-aos="fade-up" data-aos-duration="1000">PREMIOS</h2>
					</div>
					<div class="col-xl-12 text-center">
						<span class="badge badge-pill badge-success pill_vp100">VP 100</span>
						<span class="badge badge-pill badge-success pill_1kitInf">1 KIT DE INFLUENCIA</span>
						<span class="badge badge-pill badge-success pill_2kitInf">2 KIT DE INFLUENCIA</span>
						<span class="badge badge-pill badge-success pill_1KinYa">1 KINYA</span>
						<span class="badge badge-pill badge-success pill_3kitInf">3 KIT DE INFLUENCIA</span>
					</div>
					<div class="col-xl-12 mt-3 text-center mb-3">
						<div class="table-responsive">
							<table class="premiosTab table table-striped table-bordered text-center">
								<thead>
									<tr class="text-center ranktabheadder">
										<td colspan="4"></td>
										<td colspan="5">Puntos Connection</td>
									</tr>
									<tr class="text-center ranktabheadder">
										<td>Mes de Beneficio</td>
										<td>Semana</td>
										<td>Desde</td>
										<td>Hasta</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
										<td>6</td>
										<td>7</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>AGOSTO</td>
										<td>1</td>
										<td>15 Ago.</td>
										<td>21 Ago.</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td></td>
										<td>2</td>
										<td>22 Ago.</td>
										<td>28 Ago.</td>
										<td></td>
										<td class="_1kitInf"></td>
										<td class="_2kitInf"></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td>SEPTIEMBRE</td>
										<td>3</td>
										<td>29 Ago.</td>
										<td>4 Sep.</td>
										<td class="vp100"></td>
										<td class="_1kitInf"></td>
										<td class="_2kitInf"></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td></td>
										<td>4</td>
										<td>5 Sep.</td>
										<td>11 Sep.</td>
										<td class="vp100"></td>
										<td class="_1kitInf"></td>
										<td class="_2kitInf"></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td></td>
										<td>5</td>
										<td>12 Sep.</td>
										<td>18 Sep.</td>
										<td class="vp100"></td>
										<td class="_1kitInf"></td>
										<td class="_2kitInf"></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td></td>
										<td>6</td>
										<td>19 Sep.</td>
										<td>25 Sep.</td>
										<td></td>
										<td></td>
										<td class="_2kitInf"></td>
										<td class="_1KinYa"></td>
										<td class="_3kitInf"></td>
									</tr>
									<tr>
										<td></td>
										<td>7</td>
										<td>26 Sep.</td>
										<td>30 Sep.</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="_3kitInf"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xl-12 mt-3 text-center">
						<hr>
						<button class="btn btn-rounded miembros"  data-aos="fade-up" data-aos-duration="2000">
							Obtén estos increíbles descuentos en repuestos
						</button>
						<div class="partnersSlider owl-carousel owl-theme">
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/2Y4A9777-3.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/2Y4A9782-2.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/13844.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/13844-1.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/Anillo-13581-I.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/filtro-pared1.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/filtros.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/filtrosCeramica.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/Microesponja1.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/Microesponjas-WF.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/Microesponjas-WF1.png') }}" class="img-fluid">
							</div>
							<div class="slide-item">
								<img src="{{ asset('fpro/img/puntos_connection/regaderaMano1.png') }}" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
			<div class="container" style="background-color: #ffffffdb; border-radius: 25px;">
				<div class="row">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2" data-aos="fade-up" data-aos-duration="1000">TÉRMINOS Y CONDICIONES</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 ">
						<embed src="{{ asset('fpro/img/puntos_connection/terminos_y_condiciones.pdf#view=fitV') }}" class="mt-5" type="application/pdf" width="100%" height="800px" />
						<!--<img src="{{ asset('fpro/img/puntos_connection/terminos-y-condiciones.png') }}" width="95%">-->
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
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y') }} Puntos Connection <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<div id="chat" hidden>
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
									<!--<source src="http://services.nikken.com.mx/fpro/img/ViajerosPro/vPro.mp4" type="video/mp4" />-->
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
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:rgb(119, 0, 255);stop-opacity:1" />
										<stop offset="100%" style="stop-color:#58508b;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad1)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Mis puntos
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="row" style="justify-content: space-evenly">
									<div class="col-lg-12 pb-4">
										<div class="col-lg-12 pb-4">
											@php
												date_default_timezone_set('America/Mexico_City');
												$dia = Date('d');
												$mes = Date('m');
												$mes = DateTime::createFromFormat('!m', $mes);
												$mes = strftime("%B", $mes->getTimestamp());
												$mesnum = Date('m');
												$mesnum = str_replace('0', '', $mesnum);
												$pais = $abiInfo[0]->Pais ?? "LAT";
											@endphp
											<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '' }} hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
										<h2 class="mb-3">{{ trim($abiInfo[0]->AssociateName ?? 'NIKKEN', ' ') }}</h2>
										<input type="hidden" id="dateIni" value="{{ $abiInfo[0]->FechaInicio ?? '' }}">
										<input type="hidden" id="dateFin" value="{{ $abiInfo[0]->FechaFin ?? '' }}">
										@php
											$estatus = intval($getWinners[0]->Estatus ?? 0);
											$alerta = '';
											$msg = "Aun no has obtenido semanas de descuento en repuestos";

											$fechaInicio = $abiInfo[0]->FechaInicio ?? '0000-00-00';
											$fechaFin = $abiInfo[0]->FechaFin ?? '0000-00-00';
											$meses = ['00' => '00', '08' => 'Agosto', '09' => 'Septiembre'];
											if($fechaInicio == '0' && $fechaFin == '0'){
												$fechaInicio = '0000-00-00';
												$fechaFin = '0000-00-00';
											}
											$fechaInicio = explode('-', $fechaInicio);
											$fechaFin = explode('-', $fechaFin);
										@endphp
										@if ($estatus == 8 || $estatus == 1)
											@php
												$alerta = '';
												$msg = 'Has ganado el descuento en repuestos a apartir del ' . $fechaInicio[2] . ' de ' . $meses[$fechaInicio[1]] . ' y hasta el dia ' . $fechaFin[2] . ' de ' . $meses[$fechaFin[1]];
											@endphp
										@endif
										@if ($estatus == 7)
											@php
												$alerta = '';
												$msg = 'Semanas de descuento obtenidas: 7, del ' . $fechaInicio[2] . ' de ' . $meses[$fechaInicio[1]] . ' al ' . $fechaFin[2] . ' de ' . $meses[$fechaFin[1]];
											@endphp
										@endif
										@if ($estatus == 6 || $estatus == 5 || $estatus == 4 || $estatus == 3)
											@php
												$msg = 'Semanas de descuento obtenidas: ' . $estatus . ', del ' . $fechaInicio[2] . ' de ' . $meses[$fechaInicio[1]] . ' al ' . $fechaFin[2] . ' de ' . $meses[$fechaFin[1]];
											@endphp
										@endif
										@if (intval($estatus) == 3 || intval($estatus) == 4 || intval($estatus) == 5 || intval($estatus) == 6)
											<span class="flaticon-danger-line mb-3 statusprs" style="font-size: 20px;"></span> <span class="statusprs">Recuerda que puedes obtener mas semanas de descuento.</span>
										@endif
									</div>
									<div class="col-lg-12 text-center mb-2">
										<hr class="statusprs">
										<button class="btn btn-rounded miembros statusprs">
											{{ $msg }}
										</button>
									</div>
									@if ($paisAbi != 'PAN' || $paisAbi != 'CRI' || $paisAbi != 'GTM' || $paisAbi != 'SLV')
										<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner mt-3 text-center">
											<span class="flaticon-danger-line mb-3 statusprs" style="font-size: 20px;"></span>
											<span class="statusprs">* Requisito mínimo de 100 VP</span>
										</div>
									@endif
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3">
										<div class="card">
											<div class="card-body">
												<p class=""><span class="post-meta-info">VP </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
												<h5 class="card-title mb-1">
													{{ number_format($abiInfo[0]->VP ?? '0') }}
													@if (intval($abiInfo[0]->VP ?? 0) >= 100)
														<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i></span>
													@endif
												</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3 text-center">
										<div class="card text-left">
											<div class="card-body">
												<p class=""><span class="post-meta-info">Kits de Influencia </span><i class="flaticon-cart-bag float-right" style="font-size: 35px;"></i></p>
												<h5 class="card-title mb-1">
													{{ $abiInfo[0]->Incorp_Influencers ?? '0' }}
													@if ($abiInfo[0]->Incorp_Influencers?? 0 >= 1)
														<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i></span>
													@endif
												</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3">
										<div class="card">
											<div class="card-body">
												<p class=""><span class="post-meta-info">KinYa!</span> <i class="flaticon-users float-right" style="font-size: 35px;"></i></p>
												<h5 class="card-title mb-1">
													{{ $abiInfo[0]->KinYa ?? '0' }} 
													@if ($abiInfo[0]->KinYa ?? 0 >= 1)
														<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i></span>
													@endif
												</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3 mb-5" hidden>
										<div class="card">
											<div class="card-body">
												<p class=""><span class="post-meta-info">VGP</span> <i class="flaticon-bitcoin-chart float-right" style="font-size: 35px;"></i></p>
												<h5 class="card-title mb-1">{{ number_format($abiInfo[0]->VGP ?? '0') }}</h5>
											</div>
										</div>
									</div>
									<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4" hidden>
										<div class="container">
											<div class="row m-auto">
												<div class="col-lg-12 col-md-12 col-sm-12 col-12 table-responsive" style="background-color: #ffffffe6; padding-right: 0 !important; padding-left: 0 !important;">
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
																		Total: 6
																		<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>
																	</td>
																	<td>
																		Total: 18
																		<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>
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
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute;bottom: 0;z-index: 1;">
								<defs>
									<linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#58508b;stop-opacity:1" />
										<stop offset="100%" style="stop-color:rgb(119, 0, 255);stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad2)" fill-opacity="0.5" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-estatusred-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;transform: rotate(180deg);">
								<defs>
									<linearGradient id="grad3" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:rgb(119, 0, 255);stop-opacity:1" />
										<stop offset="100%" style="stop-color:#58508b;stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad3)" fill-opacity="0.3" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Ganadores de mi red
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody mb-5" style="z-index: 2">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
									<table id="genealogy" class="table table-striped table-bordered table-hover text-center" >
										<thead>
											<tr class="text-center ranktabheadder">
												<th>Código</th>
												<th><p style="width: 200px"></p>Nombre</th>
												<th>Tipo Asociado</th>
												<th>Nivel</th>
												<th>País</th>
												<th>Rango</th>
												<th>VP</th>
												<th>Numero Influencers</th>
												<th>KinYa!</th>
												<th>Semanas obtenidas</th>
												<th>Correo</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute;bottom: 0;z-index: 1;">
								<defs>
									<linearGradient id="grad4" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#58508b;stop-opacity:1" />
										<stop offset="100%" style="stop-color:rgb(119, 0, 255);stop-opacity:1" />
									</linearGradient>
								</defs>
								<path fill="url(#grad4)" fill-opacity="0.5" d="M0,0L60,26.7C120,53,240,107,360,122.7C480,139,600,117,720,144C840,171,960,245,1080,277.3C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/sliders/owlCarousel/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
	<script src="{{ asset('fpro/js/aos.js') }}"></script>
	<script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/mainjs/puntos_connection/puntos_connection.js') }}"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171601618-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-171601618-1');
	</script>

</html>