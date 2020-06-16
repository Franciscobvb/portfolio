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

			<div id="headerWrapper" class="container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12  order-1 text-center">
							<div class="row mt-5 pt-5 mb-5 pb-5">
								<div class="col-lg-6 text-center" data-aos="fade-down" data-aos-duration="2000">
									<img src="{{ asset('fpro/img/kingo/1.png') }}" width="100%" data-aos="fade-up" class="mt-5">
								</div>
								<div class="col-lg-6 text-center text-black" data-aos="fade-up" data-aos-duration="2000">
									<img src="{{ asset('fpro/img/kingo/minilogo.png') }}" width="85%" class="mb-3">
									<h6>El Plan de Influencia te trae PiMag Connection te da la posibilidad de participar por bonos en productos y en efectivo en el mes de Junio, entonces prepárate por que empiezan pequeños retos que te acercaran a generar un ingreso muy interesante.</h6>
									<hr class="mt-5">
									<button class="btn btn-rounded mb-4 mr-2 btnEstatus confetti-button">Estatus personal</button>
									<button class="btn btn-rounded mb-4 mr-2 btnranking confetti-button">Ranking</button>
									<hr class="mt-2">
									<button class="btn btn-rounded mb-4 mr-2 btnEstatus confetti-button btnPregFrec">Mis boletos por c/100 VP</button>
								</div>
								<div class="col-lg-12" data-aos="fade-down" data-aos-duration="3000">
									<a class="btn btn-classic btn-primary mr-2 btnPregFrec" href="{{ asset('fpro/img/kingo/preguntas_frecuentes.pdf') }}" target="_new">
										<i class="flaticon-pdf mr-1"></i>
										Preguntas frecuentes
									</a>
									<a class="btn btn-classic btn-primary btnTerminos" href="{{ asset('fpro/img/kingo/terminos_y_condiciones.pdf') }}" target="_new">
										<i class="flaticon-pdf mt-2"></i>
										Términos y Condiciones
									</a>
								</div>
								<div class="col-lg-12 text-center mt-5 pt-5">
									<a href="#whyusWrapper" id="downScrollLink" class="downScrollLink">
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
			<div id="whyusWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
				<div class="container" id="whyusWrapperContainer" style="background-color: white; border-radius: 25px; opacity: 0.95;">
					<div id="ourThoughtsWrapper" class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner">
							<h2 class="section-title mt-5">REQUISITOS</h2>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner align-self-center order-md-1 order-1 mt-5" data-aos="fade-up" data-aos-duration="2000">
							<h4 class="mainTextWarning">Influencer</h4>
							<h3 class="webelive text-justify">
								Por cada nuevo Influencer que patrocines con Kit de Influencia obtienes boletos así:
							</h3>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 site-image-inner text-right align-self-center order-md-2 order-2 mt-5" data-aos="fade-up" data-aos-duration="2000">
							<table class="table table-bordered table-hover table-highlight-head mb-4" style="border-radius: 20px;">
								<thead>
									<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #02466a 100%);color: #fff;">
										<th>KIT DE INFLUENCIA</th>
										<th># DE BOLETOS</th>
									</tr>
								</thead>
								<tbody>
									<tr style="background-color: #43b2b5;">
										<td>PIWATER</td>
										<td>5</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td>WATERFALL</td>
										<td>10</td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td>PIWATER Y OPTIMIZER</td>
										<td>15</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td>WATERFALL Y OPTIMIZER</td>
										<td>20</td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td>OPTIMIZER</td>
										<td>10</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td>AQUAPOUR</td>
										<td>10</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center order-3" data-aos="fade-down" data-aos-duration="2000">
							<h4 class="mainTextWarning">Sistemas de agua PiMag</h4>
							<h3 class="webelive text-justify">
								Por cada sistema que haga parte de tu Venta Personal se asignaran boletos así:
							</h3>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-image-inner align-self-center order-4">
							<table class="table table-bordered table-responsive table-hover table-checkable table-highlight-head table2" style="border-radius: 20px" data-aos="fade-up" data-aos-duration="2000">
								<thead class="text-center">
									<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%); color: #fff;">
										<th>SISTEMAS DE AGUA</th>
										<th colspan="2"># DE BOLETOS POR KIT DE INFLUENCIA </th>
										<th># DE BOLETOS EN VP</th>
										<th># DE BOLETOS POR MIEMBROS</th>
										<th># DE BOLETOS EN ARMA TU ENTORNO</th>
									</tr>
									<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%);color: #fff; font-size: 8.5px">
										<th>¿A QUIEN SE LE DA EL BOLETO?</th>
										<th>PATROCINADOR</th>
										<th>INFLUENCER</th>
										<th>INFLUENCER</th>
										<th>INFLUENCER</th>
										<th>INFLUENCER</th>
									</tr>
								</thead>
								<tbody class="text-white text-center">
									<tr style="background-color: #43b2b5;">
										<td class="text-left">PIWATER</td>
										<td>5</td>
										<td>3</td>
										<td>3</td>
										<td>4</td>
										<td>2</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td class="text-left">PIWATER COMPLETO</td>
										<td></td>
										<td></td>
										<td>4</td>
										<td>5</td>
										<td>3</td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td class="text-left">WATERFALL</td>
										<td>10</td>
										<td>6</td>
										<td>6</td>
										<td>8</td>
										<td>4</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td class="text-left">WATERFALL COMPLETO</td>
										<td></td>
										<td></td>
										<td>7</td>
										<td>10</td>
										<td>5</td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td class="text-left">AQUA POUR DELUXE</td>
										<td>10</td>
										<td>6</td>
										<td>6</td>
										<td>8</td>
										<td>4</td>
									</tr>-
									<tr style="background-color: #01a1a5;">
										<td class="text-left">AQUA POUR D COMPLETO</td>
										<td></td>
										<td></td>
										<td>7</td>
										<td>10</td>
										<td>5</td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td class="text-left">OPTIMIZER</td>
										<td>10</td>
										<td>6</td>
										<td>6</td>
										<td>8</td>
										<td>4</td>
									</tr>
									<tr style="background-color: #01a1a5;">
										<td class="text-left">PI WATER Y OPTIMIZER</td>
										<td>15</td>
										<td>9</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr style="background-color: #43b2b5;">
										<td class="text-left">WATERFALL Y OPTIMIZER</td>
										<td>20</td>
										<td>12</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
								<tfoot>
									<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%);color: #fff;">
										<th colspan="6">Otros productos: Por cada 100 VP = 1 boleto</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center order-4" data-aos="fade-down" data-aos-duration="2000">
							<h3 class="webelive text-center">
								Por cada 100 VP en compras productos de otras líneas también tendrás posibilidades de obtener 1 boleto.
							</h3>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 ml-3 mr-3 mt-4 order-4 text-justify" data-aos="fade-up" data-aos-duration="2000">
							<h5 class="webelive">
								<li>Acumula el máximo de boletos.</li>
							</h5>
							<h5 class="webelive">
								<li>Si cumples requisitos en la semana del 1 al 8 de junio tendrás el triple de boletos.</li>
							</h5>
							<h5 class="webelive">
								<li>Si cumples requisitos en la semana del 9 al 15 de junio tendrás el doble de boletos.</li>
							</h5>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner text-center align-self-center order-4 mt-5" data-aos="fade-down" data-aos-duration="2000">
							<hr>
							<button class="btn btn-rounded miembros">
								También premiaremos a los Miembros de la Comunidad
							</button>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 ml-3 mr-3 mt-4 order-4 text-justify" data-aos="fade-up" data-aos-duration="2000">
							<h5 class="webelive">
								<li>Por cada pedido que hagan durante el mes de junio participan por 10 bonos de US$300 en productos NIKKEN a precio sugerido (COL y MEX 5, ECU, PER y CH 3, CENTROAMÉRICA 2).</li>
							</h5>
						</div>
					</div>
				</div>
				<div id="premios"></div>
			</div>
		</div>

		<div class="container scroll-offset">
			<div id="" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
				<div class="container" id="" style="background-color: white; border-radius: 25px; opacity: 0.95;">
					<div id="ourThoughtsWrapper" class="row text-center">
						<div class="col-xl-12 col-lg-12 col-md-12 site-header-inner">
							<h2 class="section-title mt-5">PREMIOS</h2>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center mt-5" data-aos="fade-up" data-aos-duration="2000">
							<img src="{{ asset('fpro/img/kingo/premios.png') }}" width="65%">
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center" data-aos="fade-down" data-aos-duration="2000">
							<h3 class="webelive">
								Participa en una rifa por bonos en producto y en efectivo en el Kickoff de los Directores de Julio en los siguientes grupos (numeración por segmento de la rifa)
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
											<div class="col-xl-12 bonoTop">
												3 bonos en efectivo de $5,000, $1,500 y $1,000 USD
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop">
												3 bonos en efectivo de $3,500, $1,000 y $500 USD
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop">
												3 bonos en efectivo de $3,000, $800 y $300 USD
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												3 bonos de $1,000 USD para productos NIKKEN
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												1 bono de $1,000 USD para productos NIKKEN
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												1 bono de $1,000 USD para productos NIKKEN
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoBottom">
												5 bonos de $500 USD para productos NIKKEN
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoBottom">
												3 bonos de $500 USD para productos NIKKEN
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoBottom">
												2 bonos de $500 USD para productos NIKKEN
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 site-content-inner align-self-center" data-aos="fade-down">
							<h4 class="mainTextWarning mb-5 mt-4">
								Adicional los primeros 30 lugares con más boletos de Latinoamérica ganaran un bono de $500 usd en moneda local para redimir en productos NIKKEN a precio mayoreo.
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="servicesWrapper" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.95;">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mb-5 mt-5">TÉRMINOS Y CONDICIONES</h2>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-money"></i>
						<p class="">Estrategia valida de 1 al 30 de junio.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500">
						<i class="flaticon-up-chart"></i>
						<p class="">Estrategia dirigida a todos los Influencer de todos los rangos.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-note-like"></i>
						<p class="">Se asignaran los boletos de acuerdo a las compras y kit de influencers de la escala determinada en las tablas de equivalencias.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-computer-1"></i>
						<p class="">Aplican compras e inscritos en los 9 países de la unidad de mercado NIKKEN Latinoamérica.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500">
						<i class="flaticon-stats"></i>
						<p class="">Los boletos y el ranking podrán ser consultados en el micrositio designado en la oficina virtual.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-cup"></i>
						<p class="">El ranking será público hasta el 30 de junio a las 9.00 p.m.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-user-group-2"></i>
						<p class="">Si existe por alguna circunstancia cambio de patrocinio o cambio de facturación aplicara el boleto al Influencer que hizo la compra o la incorporación inicialmente.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500" id="premios">
						<i class="flaticon-calendar-22"></i>
						<p class="">No aplican las incorporaciones de Influencer realizadas con el kit 5006.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-user-group-1"></i>
						<p class="">Aplican compras de miembros de la comunidad, arma tu entorno y paquetes completos.</p>
					</div>

					<div class="col-md-12 text-center" data-aos="fade-up" data-aos-duration="3000">
						<h3 class="section-title">
							Los premios en efectivo y de producto son redimibles en moneda local con la tasa de cambio definida a continuación:
						</h3>
						<div class="col-xl-6 col-lg-6 col-md-6 site-image-inner text-right align-self-center order-md-2 order-2 m-auto" data-aos="fade-up" data-aos-duration="2000">
							<table class="table table-highlight-head tableBonos" style="border-radius: 20px" data-aos="fade-up" data-aos-duration="2000">
								<thead>
									<tr>
										<th style="padding: 15px !important;">
											<button class="btn btn-bonos btn-rounded" style="width: 100%;">PAÍS</button>
										</th>
										<th style="padding: 15px !important;">
											<button class="btn btn-bonos btn-rounded" style="width: 100%;">TIPO DE CAMBIO</button>
										</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr style="margin-top: 15px;">
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop">
												MEX
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoTop">
												$ 20
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												COL
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												$ 3,700
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddleodd">
												PER
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddleodd">
												S/ 3.4
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												CHL
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddle">
												$ 800
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddleodd">
												CRI
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoMiddleodd">
												₡ 570
											</div>
										</td>
									</tr>
									<tr>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoBottom" style="background-color: #f6f7f7 !important">
												GTM
											</div>
										</td>
										<td style="padding-left: 15px !important;padding-right: 15px !important;">
											<div class="col-xl-12 bonoBottom" style="background-color: #f6f7f7 !important">
												Q 7.7
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4" data-aos="fade-up" data-aos-duration="3000">
						<tbody>
							<tr>
								<td>Para los premios redimibles en producto tendrás hasta septiembre 2020 para redimir el premio en productos, exclusivamente en valor exacto del producto.</td>
							</tr>
							<tr>
								<td>Para el pago del bono en efectivo aplican impuestos correspondientes al pago de las bonificaciones adicionales del país.</td>
							</tr>
							<tr>
								<td>NIKKEN se reserva el derecho de descalificar o excluir a los participantes cuya conducta demuestre estar manipulando la operación de la mecánica.</td>
							</tr>
							<tr>
								<td>NIKKEN Latinoamérica y cada una de sus representaciones (México, Colombia, Costa Rica, Ecuador, Guatemala, Panamá, Perú y El Salvador), se reservan el derecho de interpretación de esta estrategia, así como el ajuste y revisión de los premios.</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="miniFooterWrapper" class="">
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
		<div class="modal fade bd-estatusper-modal-xl" id="status" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
									<input type="hidden" id="associateid" disabled value="{{ $associateid ?? '10000103' }}">
									<input type="hidden" id="rango" disabled value="{{ $abiInfo[0]->Rango ?? 'DIR' }}">
									@php $flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png']; @endphp
									Estatus personal
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
										<h2>{{ trim($abiInfo[0]->associateName ?? 'Nikken México') }}</h2>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<center>
											<h2 class="mainTittle">Tus boletos acumulados hasta el momento: {{ $abiInfo[0]->TotalBoletos ?? '0' }}</h2>
										</center>
									</div>
									<div class="col-lg-12 text-center">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
												<h5>Tus puntos</h5>
												<div class="table-responsive">
													<table class="table mb-4">
														<thead>
															<tr>
																<th></th>
																<th>Puntos</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>VP por mes</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->VP_Mes ?? '0') }}</span>
																</td>
															</tr>
															<tr>
																<td>VP en sistemas PiMag</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->VP_Pimag ?? '0') }}</span>
																</td>
															</tr>
															<tr>
																<td>VP en productos de otras líneas</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->VPTotalMenosPimag ?? '0') }}</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
												<h5>Tus boletos</h5>
												<div class="table-responsive">
													<table class="table mb-4">
														<thead>
															<tr>
																<th></th>
																<th># boletos </th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Boletos por kit de Influencia</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->BoletoxKit ?? '0') }}</span>
																</td>
															</tr>
															<tr>
																<td>Boletos por venta personal</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->BoletoxVP ?? '0') }}</span>
																</td>
															</tr>	
															<tr>
																<td>Boletos por cada Club de Bienestar</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->BoletoxClub ?? '0') }}</span>
																</td>
															</tr>	
															<tr>
																<td>Boletos por "Arma tu entorno"</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->BoletoxEntorno ?? '0') }}</span>
																</td>
															</tr>
															<tr>
																<td>Boletos por C/100 VP en productos de otras líneas</td>
																<td>
																	<span class="badge badge-success badge-pill"> {{ number_format($abiInfo[0]->Boletox100VP ?? '0') }}</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-center">
								<h3 class="text-center">Detalles de tus boletos</h3>
								<div class="table-responsive mb-4">
									<table id="boletosDetalle" class="table table-striped table-bordered table-hover text-center" >
										<thead>
											<tr class="text-center detailtabheadder">
												<th>Código de asesor</th>
												<th><p style="width: 150px;">Nombre</p></th>
												<th>País</th>
												<th>Número de orden</th>
												<th>Fecha de orden</th>
												<th><p style="width: 150px;">Tipo de Orden</p></th>
												<th>Código de producto</th>
												<th><p style="width: 150px;">Producto</p></th>
												<th>Cantidad</th>
												<th>Total de boletos</th>
												<th>Tipo de boleto</th>
												<th>Folio inicio</th>
												<th>Folio final</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
								<h3 class="text-center">
									Puedes ganar:
								</h3>
								<table class="table table-bordered table-responsive table-hover table-highlight-head" style="border-radius: 20px">
									<thead class="text-center">
										<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%); color: #fff;">
											<th>SISTEMAS DE AGUA</th>
											<th colspan="2"># DE BOLETOS POR KIT DE INFLUENCIA </th>
											<th># DE BOLETOS EN VP</th>
											<th># DE BOLETOS POR MIEMBROS</th>
											<th># DE BOLETOS EN ARMA TU ENTORNO</th>
										</tr>
										<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%);color: #fff; font-size: 8.5px">
											<th>¿A QUIEN SE LE DA EL BOLETO?</th>
											<th>PATROCINADOR</th>
											<th>INFLUENCER</th>
											<th>INFLUENCER</th>
											<th>INFLUENCER</th>
											<th>INFLUENCER</th>
										</tr>
									</thead>
									<tbody class="text-white text-center">
										<tr style="background-color: #43b2b5;">
											<td class="text-left">PIWATER</td>
											<td>5</td>
											<td>3</td>
											<td>3</td>
											<td>4</td>
											<td>2</td>
										</tr>
										<tr style="background-color: #01a1a5;">
											<td class="text-left">PIWATER COMPLETO</td>
											<td></td>
											<td></td>
											<td>4</td>
											<td>5</td>
											<td>3</td>
										</tr>
										<tr style="background-color: #43b2b5;">
											<td class="text-left">WATERFALL</td>
											<td>10</td>
											<td>6</td>
											<td>6</td>
											<td>8</td>
											<td>4</td>
										</tr>
										<tr style="background-color: #01a1a5;">
											<td class="text-left">WATERFALL COMPLETO</td>
											<td></td>
											<td></td>
											<td>7</td>
											<td>10</td>
											<td>5</td>
										</tr>
										<tr style="background-color: #43b2b5;">
											<td class="text-left">AQUA POUR DELUXE</td>
											<td>10</td>
											<td>6</td>
											<td>6</td>
											<td>8</td>
											<td>4</td>
										</tr>-
										<tr style="background-color: #01a1a5;">
											<td class="text-left">AQUA POUR D COMPLETO</td>
											<td></td>
											<td></td>
											<td>7</td>
											<td>10</td>
											<td>5</td>
										</tr>
										<tr style="background-color: #43b2b5;">
											<td class="text-left">OPTIMIZER</td>
											<td>10</td>
											<td>6</td>
											<td>6</td>
											<td>8</td>
											<td>4</td>
										</tr>
										<tr style="background-color: #01a1a5;">
											<td class="text-left">PI WATER Y OPTIMIZER</td>
											<td>15</td>
											<td>9</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
										<tr style="background-color: #43b2b5;">
											<td class="text-left">WATERFALL Y OPTIMIZER</td>
											<td>20</td>
											<td>12</td>
											<td></td>
											<td></td>
											<td></td>
										</tr>
									</tbody>
									<tfoot>
										<tr style="background-image: linear-gradient(to right, #54c8e2 0%, #03466a 100%);color: #fff;">
											<th colspan="6">Otros productos: Por cada 100 VP = 1 boleto</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade bd-estatusper-modal-xl" id="ranking" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
									<input type="hidden" id="associateid" disabled value="10613303">
									<input type="hidden" id="rango" disabled value="EXE">
									<input type="hidden" id="AvanceR" disabled value="NO   ">
									Ranking de participantes
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody">
								<div class="row">
									<div class="col-lg-12 pb-4">
										<h6>Periodo de volumen: <b>Junio 2020.</b></h6>
										<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '' }} hora México.</h6>
									</div>
									<div class="col-md-12">
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-12">
													<div class="table-responsive mb-4">
														<table id="rankingTab" class="table table-striped table-bordered table-hover text-center" >
															<thead>
																<tr class="text-center ranktabheadder">
																	<th>Posición</th>
																	<th><p style="width: 150px;">Nombre</p></th>
																	<th>Rango</th>
																	<th>País</th>
																	<th>Número de boletos</th>
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
		</div>

		<div class="modal fade bd-estatusper-modal-xl" id="folioBoletos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
									Mis boletos por c/100 VP en productos de otras lineas
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody">
								<div class="row">
									<div class="col-lg-12 pb-4">
										<h6>Periodo de volumen: <b>Junio 2020.</b></h6>
										<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate ?? '' }} hora México.</h6>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<h3 class="text-black">{{ trim($abiInfo[0]->associateName ?? 'Nikken México') }}</h3>
									</div>
									@if (sizeof($detalleBoletos) <= 0)
										<div class="col-lg-12 text-center mb-2">
											<h2 class="text-warning text-center">No has obtenido boletos por c/100 VP en productos de otras lineas</h2>
										</div>
									@else
										@for ($i = 0; $i < sizeof($detalleBoletos); $i++)
											<div class="col-md-4">
												<div class="row">
													<div class="col-lg-12 text-center mb-2">
														@if ($detalleBoletos[$i]->semana == 1)
															<h5 class="text-black">Corte 1ra semana</h5>
															<h5>
																VP productos de otras lineas: {{ number_format($detalleBoletos[0]->Puntos ?? 0) }} <br>
																# de boletos: {{ number_format($detalleBoletos[0]->TotalBoletos ?? 0) }}
															</h5>
														@elseif($detalleBoletos[$i]->semana == 2)
															<h5 class="text-black">Corte 2da semana</h5>
															<h5>
																VP productos de otras lineas: {{ number_format($detalleBoletos[1]->Puntos ?? 0) }} <br>
																# de boletos: {{ number_format($detalleBoletos[1]->TotalBoletos ?? 0) }}
															</h5>
														@elseif($detalleBoletos[$i]->semana == 3)
															<h5 class="text-black">Corte 3ra y 4ta semana</h5>
															<h5>
																VP productos de otras lineas: {{ number_format($detalleBoletos[2]->Puntos ?? 0) }} <br>
																# de boletos: {{ number_format($detalleBoletos[2]->TotalBoletos ?? 0) }}
															</h5>
														@endif
													</div>
													<div class="col-md-12">
														<div class="table-responsive mb-4">
															<table id="FoliosTab" class="table table-striped table-bordered table-hover text-center" >
																<thead>
																	<tr class="text-center ranktabheadder">
																		<th colspan="2">Folios</th>
																	</tr>
																	<tr class="text-center ranktabheadder">
																		<th>Folio inicial</th>
																		<th>Folio final</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td>{{ $detalleBoletos[$i]->FolioIni }}</td>
																		<td>{{ $detalleBoletos[$i]->FolioFin }}</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										@endfor
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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