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
										<a id="navlink" class="nav-link js-scroll-trigger" href="#historialPuntos">Mis puntos</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper">Ranking</a>
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
			
			<div id="headerWrapper" class="container headerContent">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
					<div class="row">
						<div class="col-lg-6 col-md-8 col-sm-12 col-12 text-center m-md-auto">
							<img src="{{ asset('fpro/img/ViajerosPro/vProLogo.png') }}" width="80%">
						</div>

						<div class="col-lg-6 col-md-12 col-sm-12 col-12 text-center current">
							<div class="row ml-1 mr-1 container-fluid pb-4">
								<div class="blur-bg"></div>
								<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
									<h4>{{ trim($abiInfo[0]->AssociateName, ' ') }}</h4>
									<input type="hidden" id="associateid" readonly value="{{ $associateid }}">
									@php
										$meses = ['202001' => 'Enero', '202002' => 'Febrero', '202003' => 'Marzo', '202004' => 'Abril', '202005' => 'Mayo', '202006' => 'Junio', '202007' => 'Julio', '202008' => 'Agosto', '202009' => 'Septiembre', '202010' => 'Octubre', '202011' => 'Noviembre', '202012' => 'Diciembre'];
										$periodo = $abiInfo[0]->Periodo ?? date('Ym');
									@endphp
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="VGP Acumulado: {{ number_format($abiInfo[0]->VGPacumulado ?? 0) }}">
									<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4 ">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="Mes: {{ $meses[$periodo] }}">
									<button class="btn btnicon"><i class="flaticon-calendar-22"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="VP: {{ number_format($abiInfo[0]->VP ?? 0) }}">
									<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="VGP: {{ number_format($abiInfo[0]->VGP ?? 0) }}">
									<button class="btn btnicon"><i class="flaticon-calculator"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" id="rangoActual" readonly value="Rango: {{ $abiInfo[0]->Rango ?? 0 }}">
									<button class="btn btnicon"><i class="flaticon-chart-2"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="KinYa! personal: {{ number_format($abiInfo[0]->kinya ?? 0) }}">
									<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 site-content-inner align-self-center mr-auto mt-4">
									<input type="text" class="form-control br-30 w-100 puntajeInput" readonly value="KinYa!+ 1erNivel: {{ number_format($abiInfo[0]->kinya ?? 0) }}">
									<button class="btn btnicon"><i class="flaticon-avatar"></i></button>
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
			<div class="container">
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

		<div id="historialPuntos" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="container">
				<div class="row m-auto">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mt-5">MIS PUNTOS</h2>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-5 table-responsive">
						<table id="mainPts" class="table table-striped table-bordered table-hover text-center" >
							<thead>
								<tr class="text-center ranktabheadder">
									<th>Código</th>
									<th><p style="width: 200px"></p> Nombre</th>
									<th>Mes</th>
									<th>VP Mes</th>
									<th>VGP Mes</th>
									<th>VGP Acumulado</th>
									<th>Rango actual</th>
									<th>Rango de pago</th>
									<th>KinYa! personal</th>
									<th>KinYa!+ 1erNivel</th>
									<th>Cumple mes</th>
								</tr>
								<tfoot>
									<tr>
										<td colspan="8"></td>
										<td>
											Total: {{ $totalsKinya[0]->totalKinya }}
											@if ($totalsKinya[0]->totalKinya >= 1)
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

		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mt-5">
						<h2 class="section-title mt-5">RANKING</h2>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner mb-5 table-responsive">
						<table id="rankingTab" class="table table-striped table-bordered table-hover text-center" >
							<thead>
								<tr class="text-center ranktabheadder">
									<th>Posición</th>
									<th>Nombre</th>
									<th>Rango</th>
									<th>País</th>
									<th>VGP Acumulado</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="scroll-offset navHeaderWrapper mt-5 mb-5">
			<div class="container mt-5">
				<div id="premios" class="row requisitos mt-5">
					<div class="col-md-12 text-center mt-5">
						<h2 class="section-title mb-2">PREMIOS</h2>
					</div>
					<div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
						<h3>
							<img src="http://convocatoria.test/convassets/img/logotipo.png" width="20%">
							Te trae un viaje espectacular por Rusia Imperial / 9 días y 8 noches.
						</h3>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4">
						<h5 class="mb-5"><i class="flaticon-earth-globe"></i> Tiquete redondo desde tu país de origen (Ciudad Principal).</h5>
						<h5 class="mb-5"><i class="flaticon-airplane"></i> Seguro de viaje durante las fechas del viaje.</h5>
						<h5 class="mb-5"><i class="flaticon-building"></i> Alojamiento en acomodación doble (8 noches) en hoteles categoria 4 estrellas.</h5>
						<h5 class="mb-5"><i class="flaticon-non-veg"></i> Desayunos en los hoteles seleccionados (8 Desayunos).</h5>
						<h5 class="mb-5"><i class="flaticon-cutlery-1"></i> Cenas (8 cenas) incluye cena especial de Bienvenida y Cierre.</h5>
						<h5 class="mb-5"><i class="flaticon-cutlery-1"></i> Almuerzos / Comida (4 Almuerzos).</h5>
						<h5 class="mb-5"><i class="flaticon-map"></i> Guías locales en español para los tours.</h5>
						<h5 class="mb-5"><i class="flaticon-location"></i> Visita al El Ermitage con entradas.</h5>
						<h5 class="mb-5"><i class="flaticon-location"></i> Visita de la Fortaleza de Pedro y Pablo con entradas.</h5>
						<h5 class="mb-5"><i class="flaticon-location"></i> Visita nocturna de Moscú.</h5>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 site-content-inner mt-4">
						<h5 class="mb-5"><i class="flaticon-location"></i> Visita de El Kremlim con entradas (con catedrales).</h5>
						<h5 class="mb-5"><i class="flaticon-luggage"></i> Excursión a Troiste Sergueiev con entradas.</h5>
						<h5 class="mb-5"><i class="flaticon-location"></i> Visita a la Catedral de San Isaac.</h5>
						<h5 class="mb-5"><i class="flaticon-stopwatch-1"></i> Tren Alta Velocidad San Petersburgo/Moscú incluido.</h5>
						<h5 class="mb-5"><i class="flaticon-location"></i> Excursión a Petrodvorets.</h5>
						<h5 class="mb-5"><i class="flaticon-building-1"></i> Visita del Palacio Yusupov.</h5>
						<h5 class="mb-5"><i class="flaticon-fill-car"></i> Traslados del Aeropuerto - Hotel - Aeropuerto.</h5>
						<h5 class="mb-5"><i class="flaticon-car"></i> Traslados terrestres para los tours.</h5>
					</div>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper" class="">
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
								<p class="mt-md-0 mt-4 mb-0">© 2019 Convocatoria New York <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
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
	@if (trim($abiInfo[0]->Rango, ' ') != 'PLO' && trim($abiInfo[0]->Rango, ' ') != 'DIA' && trim($abiInfo[0]->Rango, ' ') != 'DRL')
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