<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | PiMag Connection</title>
		<link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">

		<link rel="stylesheet" href="{{ asset('fpro/maincss/kingo/kingo.css') }}">
		<link href="{{ asset('fpro/css/aos.css') }}" rel="stylesheet">
		
		<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>
		<link href="{{ asset('fpro/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />

		<link href="{{ asset('fpro/css/modals/component.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/css/ui-kit/custom-modal.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/css/ui-kit/helper_class.css') }}" rel="stylesheet" type="text/css" />

		<link href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
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
										<a id="navlink" class="nav-link js-scroll-trigger" href="#statusPer">Estatus personal</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Requisitos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#premios">Premios</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>

			<div id="headerWrapper" class="container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12  order-1 text-center">
							<div class="row pb-5">
								<div class="col-lg-6 text-center" data-aos="fade-down" data-aos-duration="2000">
									<img src="{{ asset('fpro/img/kingo/1.png') }}" width="100%" data-aos="fade-up" class="mt-5">
								</div>
								<div class="col-lg-6 text-center text-black" data-aos="fade-up" data-aos-duration="2000">
									<img src="{{ asset('fpro/img/kingo/minilogo.png') }}" width="85%" class="mb-3">
									<h6>El Plan de Influencia te trae PiMag Connection te da la posibilidad de participar por bonos en productos y en efectivo en el mes de Junio, entonces prepárate por que empiezan pequeños retos que te acercaran a generar un ingreso muy interesante.</h6>
									<hr class="mt-5">
									<a href="#statusPer" class="btn btn-rounded mb-4 btnEstatus js-scroll-trigger" id="btnStatusPer">Estatus personal</a>
								</div>
								<div class="col-lg-12">
									<a class="btn btn-classic btn-primary btnPregFrec mt-2 br-50" href="{{ asset('fpro/img/kingo/preguntas_frecuentes.pdf') }}" target="_new">
										<i class="flaticon-pdf mr-1"></i>
										Preguntas frecuentes
									</a>
									<a class="btn btn-classic btn-primary btnTerminos mt-2" href="{{ asset('fpro/img/kingo/terminos_y_condiciones.pdf') }}" target="_new">
										<i class="flaticon-pdf mr-1"></i>
										Términos y Condiciones
									</a>
								</div>
								<div class="col-lg-12 text-center mt-5 pb-5 mb-5">
									<a href="#statusPer" id="downScrollLink" class="downScrollLink">
										<span class="flaticon-dobble-down-arrow downScroll"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container scroll-offset">
			<div id="statusPer" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
				<div class="container" id="whyusWrapperContainer" style="background-color: white; border-radius: 25px; opacity: 0.95;">
					<div id="" class="row text-center">
						<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner">
							<h2 class="text-center mainTitle">
								<input type="hidden" id="associateid" disabled value="{{ $associateid ?? '10000103' }}">
								<input type="hidden" id="rango" disabled value="{{ $abiInfo[0]->Rango ?? 'DIR' }}">
								@php $flag = ['PER' => 'peru.png', 'MEX' => 'mexico.png', 'LAT' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png']; @endphp
								Estatus personal
							</h2>
						</div>
						<div class="col-lg-12 pb-4 text-left">
							@php
								date_default_timezone_set('America/Mexico_City');
								$dia = Date('d');
								$mes = Date('m');
								$meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
								$mes = DateTime::createFromFormat('!m', $mes);
								$mes = strftime("%B", $mes->getTimestamp());
								$mesnum = Date('m');
								$mesnum = str_replace('0', '', $mesnum);
								
								$pais = $abiInfo[0]->Pais ?? "LAT";
							@endphp
							<h6>Periodo de volumen: <b>Junio 2020.</b></h6>
							<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '' }} hora México.</h6>
							@if ($pais == 'CHL')
								<h5>PUNTOS TRIPLES: 1 al 10 de Junio</h5>
								<h5>PUNTOS DOBLES: 11 al 18 de Junio</h5>
							@endif
						</div>
						<div class="col-lg-12 text-center mb-2">
							<img src="{{ asset('fpro/img/flags/' . $flag[$abiInfo[0]->Pais ?? 'LAT']) }}" width="40px">
							<h2>{{ trim($abiInfo[0]->AssociateName ?? 'Nikken México') }}</h2>
						</div>
						<div class="col-lg-12 text-center mb-2">
							<center>
								<h2 class="mainTittle">Tus boletos acumulados hasta el momento: {{ $abiInfo[0]->TotalBoletos ?? '0' }}</h2>
							</center>
						</div>
						<div class="col-lg-12 text-center">
							<h3 class="text-center">Tus Ordenes</h3>
							<div class="table-responsive mb-4">
								<table id="detalleOrdenes" class="table table-striped table-bordered table-hover text-center" >
									<thead>
										<tr class="text-center detailtabheadder">
											<th>Código de asesor</th>
											<th><p style="width: 150px;">Nombre</p></th>
											<th>País</th>
											<th>Número de orden</th>
											<th>Fecha de orden</th>
											<th>Cantidad</th>
											<th>Total de boletos</th>
											<th>Folio inicio</th>
											<th>Folio final</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container scroll-offset mt-3">
			<div id="whyusWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="container" id="whyusWrapperContainer" style="background-color: white; border-radius: 25px; opacity: 0.95;">
					<div id="ourThoughtsWrapper" class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner">
							<h2 class="section-title mt-5">REQUISITOS</h2>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner text-center align-self-center order-4 mt-5" data-aos="fade-down" data-aos-duration="2000">
							<hr>
							<button class="btn btn-rounded miembros">
								Premiaremos a los Miembros de la Comunidad
							</button>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 ml-3 mr-3 mt-4 order-4 text-justify" data-aos="fade-up" data-aos-duration="2000">
							<h5 class="webelive">
								<li>Por cada pedido que hagan durante el mes de junio participan por 10 bonos de $300 USD en productos NIKKEN a precio sugerido (COL y MEX 5, ECU, PER y CH 3, CENTROAMÉRICA 2).</li>
							</h5>
						</div>
					</div>
				</div>
				<div id="premios"></div>
			</div>
		</div>

		<div class="container scroll-offset mb-5">
			<div id="ourThoughtsWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
				<div class="container" id="" style="background-color: white; border-radius: 25px; opacity: 0.95;">
					<div id="" class="row text-center">
						<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner">
							<h2 class="section-title mt-5">PREMIOS</h2>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center mt-5" data-aos="fade-up" data-aos-duration="2000">
							<img src="{{ asset('fpro/img/kingo/premios.png') }}" width="65%">
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center" data-aos="fade-down" data-aos-duration="2000">
							<h3 class="webelive">
								Participa en una rifa por bonos en producto NIKKEN en el Kickoff de los Directores de Julio en los siguientes grupos (numeración por segmento de la rifa)
							</h3>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-image-inner align-self-center">
							<table class="table table-responsive table-highlight-head tableBonos" style="border-radius: 20px" data-aos="fade-up" data-aos-duration="2000">
								<thead>
									<tr>
										<th style="padding: 15px !important;">
											<button class="btn btn-bonos btn-rounded" style="width: 100%;">MÉXICO Y COLOMBIA</button>
										</th>
										<th style="padding: 15px !important;">
											<button class="btn btn-bonos btn-rounded" style="width: 100%;">CHILE, ECUADOR Y PERÚ</button>
										</th>
										<th style="padding: 15px !important;">
											<button class="btn btn-bonos btn-rounded" style="width: 100%;">CENTROAMÉRICA</button>
										</th>
									</tr>
								</thead>
								<tbody class="text-left">
									<tr style="margin-top: 15px;">
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop bonoBottom">
												5 bonos de $300 USD en productos NIKKEN a precio de sugerido.
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop bonoBottom">
												3 bonos de $300 USD en productos NIKKEN a precio de sugerido.
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop bonoBottom">
												2 bonos de $300 USD en productos NIKKEN a precio de sugerido. <br> &nbsp;
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="position-relative">
							<div class="arrow text-center" >
								<span class="flaticon-double-arrow-up"></span>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
								<p class="mt-md-0 mt-4 mb-0">© {{ Date('Y')}} PiMag Connection - <a href="https://nikkenlatam.com/oficina-virtual/mexico/">NIKKEN Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<div id="chat" hidden>
			<div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="¿Necesitas ayuda? Ve nuestro tutorial" data-toggle="modal" data-target=".mdl-tutorial">
				<i class="flaticon-question"></i>
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
									<!--<source src="http://services.nikken.com.mx/fpro/img/convMayo/TUTORIAL_RENUEVATE.mp4" type="video/mp4" />-->
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modals -->
	</body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="{{ asset('fpro/js/aos.js') }}"></script>
	<script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/js/modal/classie.js') }}"></script>
	<script src="{{ asset('fpro/js/modal/modalEffects.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>

	<script src="{{ asset('fpro/mainjs/kingo/kingo.js') }}"></script>
	
	<script>
		AOS.init();
		function stopVideo(){
            $('video')[0].pause();
        }
	</script>
</html>