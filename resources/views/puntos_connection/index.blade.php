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
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/maincss/puntos_connection/puntos_connection.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.carousel.min.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/sliders/owlCarousel/css/owl.theme.default.min.css') }}"/>

		<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/charts/chartist/chartist.css') }}"/>
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/modules/modules-widgets.css') }}">
	</head>
	<body>
		<div id="navHeadWrapper" class="navHeaderWrapper header-image">
			<div class="">
				<nav class="navbar navbar-expand-lg bg-faded header-nav">
					<div class="container">
						<div class="col-xl-4 col-lg-3 col-6 mx-auto ">
							<img src="http://portfolio.test/fpro/img/logo-black.png" width="70%">
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
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl">
										Mis estatus
									</a>
									<a class="btn btn-classic btn-primary btnModal br-50 col-md-8 mb-2 pt-2 pb-2 confetti-button" href="javascript:void(0)" role="button" data-toggle="modal" data-target=".bd-rank-modal-xl" hidden>
										Ranking
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
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5">
			<div class="container mt-5" style="background-color: #ffffffdb; border-radius: 25px;">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2" data-aos="fade-up" data-aos-duration="1000">PREMIOS</h2>
					</div>
					<div class="col-md-4 text-justify mt-5">
						<h4 class="section-title mb-2">Participa y obten la posibilidad de obtener estos beneficios, mientras mas vendes, mas ganas.</h4>
					</div>
					<div class="col-md-4 mb-5">
						<div class="table-responsive">
							<table id="FoliosTab" class="table table-striped table-bordered table-hover text-center" >
								<thead>
									<tr class="text-center ranktabheadder">
										<th colspan="3">AGOSTO</th>
									</tr>
									<tr class="text-center ranktabheadder">
										<th>Semana</th>
										<th>Desde</th>
										<th>Hasta</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>15</td>
										<td>21</td>
									</tr>
									<tr>
										<td>2</td>
										<td>22</td>
										<td>28</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="table-responsive">
							<table id="FoliosTab" class="table table-striped table-bordered table-hover text-center" >
								<thead>
									<tr class="text-center ranktabheadder">
										<th colspan="3">SEPTIEMBRE</th>
									</tr>
									<tr class="text-center ranktabheadder">
										<th>Semana</th>
										<th>Desde</th>
										<th>Hasta</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>3</td>
										<td>29</td>
										<td>04</td>
									</tr>
									<tr>
										<td>4</td>
										<td>05</td>
										<td>11</td>
									</tr>
									<tr>
										<td>5</td>
										<td>12</td>
										<td>18</td>
									</tr>
									<tr>
										<td>6</td>
										<td>19</td>
										<td>25</td>
									</tr>
									<tr>
										<td>7</td>
										<td>26</td>
										<td>30</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-xl-12 mt-3 text-center">
						<hr>
						<button class="btn btn-rounded miembros"  data-aos="fade-up" data-aos-duration="2000">
							Obnten estos increibles descuentos en repuestos
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
							<div class="col-lg-12 mainModalBody" style="z-index: 2">
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
										@if ($getWinners[0]->Estatus ?? 0 != 1 || $getWinners[0]->Estatus ?? 0 != 8)
											<span class="flaticon-danger-line mb-3 statusprs" style="font-size: 20px;"></span> <span class="statusprs">Recuerda que puedes obtener mas semanas de descuento.</span>
										@endif
									</div>
									<div class="col-lg-12 text-center mb-2">
										<hr class="statusprs">
										<button class="btn btn-rounded miembros statusprs">
											Semanas de descuento obtenidas: 3, del 29 de Agosto al 29 de Septiembre
										</button>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3">
										<div class="card">
											<div class="card-body">
												<p class=""><span class="post-meta-info">VP </span><i class="flaticon-chart-2 float-right" style="font-size: 35px;"></i></p>
												<h5 class="card-title mb-1">
													{{ number_format($abiInfo[0]->VP ?? '0') }}
													@if ($abiInfo[0]->VP ?? 0 >= 100)
														<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i></span>
													@endif
												</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3">
										<div class="card">
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
													@if ($abiInfo[0]->KinYa >= 1)
														<span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i></span>
													@endif
												</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 site-content-inner mt-3">
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

		<div class="modal fade bd-rank-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-body" style="">
						<div class="row ">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top: 0;z-index: 1;">
								<path fill="#0099ff" fill-opacity="0.3" d="M0,64L34.3,58.7C68.6,53,137,43,206,42.7C274.3,43,343,53,411,85.3C480,117,549,171,617,192C685.7,213,754,203,823,213.3C891.4,224,960,256,1029,261.3C1097.1,267,1166,245,1234,240C1302.9,235,1371,245,1406,250.7L1440,256L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
							</svg>
							<div class="col-md-12" style="z-index: 2">
								<button type="button" class="close mainCloseButton" data-dismiss="modal" aria-label="Close">
									<span class="flaticon-close-fill" aria-hidden="true" style="color: black;"></span>
								</button>
							</div>
							<div class="col-md-12" style="z-index: 2">
								<h2 class="text-center mainTitle">
									Ranking
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody" style="z-index: 2">
								<div class="row">
									<div class="col-lg-12 pb-4">
										<div class="col-lg-12 pb-4">
											<h6>Fecha de actualizacion: 26 de Junio a las 14:02:13 hora México.</h6>
										</div>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<img src="http://portfolio.test/fpro/img/flags/mexico.png" width="40px">
										<h2>BLANCO ORTIZ  PAULA</h2>
									</div>
									<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="container">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner mb-5 table-responsive" style="background-color: #ffffffe3">
													<table id="rankingTab" class="table table-striped table-bordered table-hover text-center" >
														<thead>
															<tr class="text-center ranktabheadder">
																<th>Posición</th>
																<th>Nombre</th>
																<th>Rango</th>
																<th>País</th>
																<th>VGP Acumulado</th>
																<th>Meses calificados rango de pago</th>
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
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute;bottom: 0;z-index: 1;">
								<path fill="#0099ff" fill-opacity="0.3" d="M0,64L34.3,58.7C68.6,53,137,43,206,42.7C274.3,43,343,53,411,85.3C480,117,549,171,617,192C685.7,213,754,203,823,213.3C891.4,224,960,256,1029,261.3C1097.1,267,1166,245,1234,240C1302.9,235,1371,245,1406,250.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
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