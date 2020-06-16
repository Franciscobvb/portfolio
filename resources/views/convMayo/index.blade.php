<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | RENUÉVATE Y AVANZA DE RANGO</title>
		<link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/flaticon/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('fpro/css/pages/landing-page/style.css') }}">

		<link rel="stylesheet" href="{{ asset('fpro/maincss/convMayo/convMayo.css') }}">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		
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
										<a id="navlink" class="nav-link js-scroll-trigger" href="#whyusWrapper">Bases</a>
									</li>
									<li class="nav-item">
										<a id="navlink" class="nav-link js-scroll-trigger" href="#servicesWrapper">Términos y Condiciones</a>
									</li>
								</ul>
								<form class="form-inline justify-content-lg-start justify-content-center mt-lg-0 mt-5">
									<a class="btn ml-xl-4" href="../fpro/img/convMayo/preguntas.pdf" target="_new">Preguntas frecuentes</a>
							  	</form>
							</div>
						</div>
					</div>
				</nav>
			</div>

			<div id="headerWrapper" class="container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12  order-1 text-center">
							<div class="row mt-5">
								<div class="col-lg-12 text-center">
									<img src="{{ asset('fpro/img/convMayo/logoRenuevate.png') }}" width="100%" data-aos="fade-up">
								</div>
								<div class="col-lg-12 text-center">
									<a href="javascript:void(0)" data-aos="fade-down" class="btn btn-conv btn-rounded col-md-3 col-sm-6 pt-3 pb-3 pl-5 pr-5 mt-3 mb-5" role="button" data-toggle="modal" data-target=".bd-estatusper-modal-xl" style="width: 100%">
										@php
											$rango = $abiInfo[0]->Rango ?? '';
											$pais = trim($abiInfo[0]->Pais);
										@endphp
										@if ($rango == 'DIR' || $rango == 'EXE')
											Estatus Personal
										@else
											Estatus de mi red
										@endif
									</a>
								</div>
								<div class="col-lg-12 text-center mt-1 mb-5">
									<h3 class="text-black">
										NIKKEN te dará un bono de 3000 puntos que te ayudarán a ascender al rango Plata al cierre del 31 de mayo y veras reflejado el ascenso el 15 de Junio. 
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container scroll-offset">
			<div id="whyusWrapper" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-5">
				<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.75;">
					<div id="ourThoughtsWrapper" class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner">
							<h2 class="section-title mt-5">BASES</h2>
							<h3 class=" webelive mb-5">Para Directos y Ejecutivos</h3>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 site-image-inner  align-self-center order-1  mb-5">
							<img src="{{ asset('fpro/img/convMayo/header-img-6.png') }}" class="img-fluid">
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner align-self-center order-2  mb-5" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<h3 class="webelive text-justify">
								Si en el mes de mayo realizas 3,000 puntos  de VGP con productos de la línea PiMag  participantes, NIKKEN te dará un bono de 3000 puntos de apoyo que te ayudarán a ascender a Plata para el mes de Junio.
							</h3>
						</div>			
						<div class="col-xl-6 col-lg-6 col-md-6 site-content-inner align-self-center order-md-3 order-4 mt-5" data-aos="zoom-out-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<h4 class="mainTextWarning">Beneficio para el Patrocinador:</h4>
							<h3 class="webelive text-justify">
								Por cada plata que logres en frontales de tu grupo personal con esta estrategia, recibirás un boleto para la rifa de un sistema de agua PiMag del tamaño que tu decidas.
							</h3>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 site-image-inner text-right align-self-center order-md-4 order-3 mt-5" data-aos="zoom-out-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
							<img src="{{ asset('fpro/img/convMayo/header-img-4.png') }}" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="servicesWrapper" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="container" style="background-color: white; border-radius: 25px; opacity: 0.75;">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 text-center site-header-inner mb-5 mt-5">
						<h2 class="section-title mb-5 mt-5">TÉRMINOS Y CONDICIONES</h2>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-money"></i>
						<p class="mb-4 mt-5">El pago de bonificaciones del plan de compensación no se modifica.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500">
						<i class="flaticon-up-chart"></i>
						<p class="mb-4 mt-5">Los puntos no se tendrán en cuenta para los retos y programas especiales (el ascenso si aplica para el formador del Reto Ser Pro).</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-note-like"></i>
						<p class="mb-4 mt-5">El bono solo aplica con 3,000 puntos el resto de los requisitos deberá ser cumplido.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-computer-1"></i>
						<p class="mb-4 mt-5">Los puntos no se reflejarán en el sistema.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500">
						<i class="flaticon-stats"></i>
						<p class="mb-4 mt-5">Los puntos no ayudan en los retos y programas especiales (Si aplica para el Reto Ser Pro de la línea de patrocinio).</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-cup"></i>
						<p class="mb-4 mt-5">El avance de rango se reflejará el día 15 de junio.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2000">
						<i class="flaticon-user-group-2"></i>
						<p class="mb-4 mt-5">Si aplica compresión.</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="2500">
						<i class="flaticon-calendar-22"></i>
						<p class="mb-4 mt-5">El breakaway se realizará a partir del mes de junio que avanza de rango</p>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-user-group-1"></i>
						<p class="mb-4 mt-5">El mes de gracia del rebase funcionará normalmente.</p>
					</div>
					
					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center"></div>

					<div class="col-xl-4 col-lg-4 col-md-4 site-content-inner text-center" data-aos="fade-up" data-aos-duration="3000">
						<i class="flaticon-danger-2"></i>
						<p class="mb-4 mt-5">Los 3.000 del bono no tendrán VC no sumaran para su línea de patrocinio.</p>
					</div>
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
								<p class="mt-md-0 mt-4 mb-0">© 2020 Renuevate y Avanza de Rango - <a href="https://nikkenlatam.com/oficina-virtual/mexico/">NIKKEN Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>

		<div id="chat">
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
									<source src="http://services.nikken.com.mx/fpro/img/convMayo/TUTORIAL_RENUEVATE.mp4" type="video/mp4" />
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modals -->
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
									<input type="hidden" id="associateid" disabled value="{{ $associateid }}">
									<input type="hidden" id="rango" disabled value="{{ $rango }}">
									<input type="hidden" id="AvanceR" disabled value="{{ $abiInfo[0]->AvanceR ?? 'NO' }}">
									Estatus personal
								</h2>
							</div>
							<div class="col-lg-12 mainModalBody">
								<div class="row">
									@php
										date_default_timezone_set('America/Mexico_City');
										$dia = Date('d');
										$mes = Date('m');
										$meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
										$mes = DateTime::createFromFormat('!m', $mes);
										$mes = strftime("%B", $mes->getTimestamp());
										$mesnum = Date('m');
										$mesnum = str_replace('0', '', $mesnum);
									@endphp
									<div class="col-lg-12 pb-4">
										<h6>Periodo de volumen: <b>Mayo 2020.</b></h6>
										<h6>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate }} hora México.</h6>
									</div>
									<div class="col-lg-12 text-center mb-2">
										@php $flag = ['PER' => 'peru.png', 'LAT' => 'mexico.png', 'COL' => 'colombia.png', 'CHL' => 'chile.png', 'ECU' => 'ecuador.png', 'PAN' => 'panama.png', 'SLV' => 'salvador.png', 'GTM' => 'guatemala.png', 'CRI' => 'costarica.png']; @endphp
										<img src="{{ asset('fpro/img/flags/' . $flag[$pais]) }}" width="40px">
										<h2>{{ $abiInfo[0]->AssociateName ?? '' }}</h2>
									</div>
									<div class="col-lg-12 text-center mb-2">
										<center>
											<h2 class="mainTittle">Tus boletos acumulados hasta el momento: <span id="boletosAc">{{ $boletos }}</span></h2>
										</center>
									</div>
									@if ($rango  == 'DIR' || $rango == 'EXE')
										<div class="col-lg-6 text-center">
											<h5>Requisitos para avance rango plata</h5>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
												<div class="table-responsive">
													<table class="table mb-4">
														<thead>
															<tr>
																<th>Requisito</th>
																<th class="">Puntos necesarios</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>VP por mes</td>
																<td class="">
																	<span class="badge badge-warning badge-pill">100</span>
																</td>
															</tr>
															<tr>
																<td>VGP en sistemas de agua en el mes mayo</td>
																<td class="">
																	<span class="badge badge badge-warning badge-pill">3,000</span>
																</td>
															</tr>
															<tr>
																<td>VO-LDP</td>
																<td class="">
																	<span class="badge badge-warning badge-pill">1,000</span>
																</td>
															</tr>
															<tr>
																<td>VO-LDPYS</td>
																<td class="">
																	<span class="badge badge-warning badge-pill">500</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="col-lg-6 text-center">
											<h5>Tus puntos</h5>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4">
												<div class="table-responsive">
													<table class="table mb-4">
														<thead>
															<tr>
																<th>Requisito</th>
																<th class="">Tus <br> puntos </th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>VP por mes</td>
																<td>
																	@if ($abiInfo[0]->VP_Mes < 100)
																		@php
																			$text = "No cumple";
																			$icon = "flaticon-close";
																			$badge = "badge-danger";
																		@endphp
																	@else
																		@php
																			$text = "Cumple";
																			$icon = "flaticon-single-circle-tick";
																			$badge = "badge-success";
																		@endphp
																	@endif
																	<span class="badge {{ $badge }} badge-pill"> {{ number_format($abiInfo[0]->VP_Mes) }} <span class="{{ $icon }}"></span> {{ $text }} </span>
																</td>
															</tr>
															<tr>
																<td style="width: 334.2px;">VGP en sistemas de agua en el mes mayo</td>
																<td>
																	@if ($abiInfo[0]->VGP_Pimag < 3000)
																		@php
																			$text = "No cumple";
																			$icon = "flaticon-close";
																			$badge = "badge-danger";
																		@endphp
																	@else
																		@php
																			$text = "Cumple";
																			$icon = "flaticon-single-circle-tick";
																			$badge = "badge-success";
																		@endphp
																	@endif
																	<span class="badge {{ $badge }} badge-pill"> {{ number_format($abiInfo[0]->VGP_Pimag) }} <span class="{{ $icon }}"></span> {{ $text }} </span>
																</td>
															</tr>
															<tr>
																<td>VO-LDP</td>
																<td>
																	@if ($abiInfo[0]->VO_LDP < 1000)
																		@php
																			$text = "No cumple";
																			$icon = "flaticon-close";
																			$badge = "badge-danger";
																		@endphp
																	@else
																		@php
																			$text = "Cumple";
																			$icon = "flaticon-single-circle-tick";
																			$badge = "badge-success";
																		@endphp
																	@endif
																	<span class="badge {{ $badge }} badge-pill"> {{ number_format($abiInfo[0]->VO_LDP) }} <span class="{{ $icon }}"></span> {{ $text }} </span>
																</td>
															</tr>
															<tr>
																<td>VO-LDPYS</td>
																<td>
																	@if ($abiInfo[0]->VO_LDPyS < 500)
																		@php
																			$text = "No cumple";
																			$icon = "flaticon-close";
																			$badge = "badge-danger";
																		@endphp
																	@else
																		@php
																			$text = "Cumple";
																			$icon = "flaticon-single-circle-tick";
																			$badge = "badge-success";
																		@endphp
																	@endif
																	<span class="badge {{ $badge }} badge-pill"> {{ number_format($abiInfo[0]->VO_LDPyS ) }} <span class="{{ $icon }}"></span> {{ $text }} </span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									@endif
								</div>
							</div>
							@if ($rango == 'DIR' || $rango == 'EXE')
								<div class="col-lg-12 text-center">
									<h3 class="text-center">Productos participantes</h3>
									<div class="table-responsive">
										<table class="table mb-4">
											<thead>
												<tr>
													<th>
														Producto:
													</th>
													<th>
														PI WATER
													</th>
													<th>
														PI WATER COMPLETO
													</th>
													<th>
														WATERFALL
													</th>
													<th>
														WATERFALL COMPLETO
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<b>Puntos: </b>
													</td>
													<td>
														<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
															{{ number_format($puntosProd[0]->u_Puntos) }}
														</span>
													</td>
													<td>
														<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
															{{ number_format($puntosProd[10]->u_Puntos) }}
														</span>
													</td>
													<td>
														<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
															{{ number_format($puntosProd[1]->u_Puntos) }}
														</span>
													</td>
													<td>
														<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
															{{ number_format($puntosProd[11]->u_Puntos) }}
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<table class="table mb-4">
											<thead>
												<tr>
													<th>
														Producto:
													</th>
													<th>
														AQUA POUR
													</th>
													<th>
														AQUA POUR COMPLETO
													</th>
													<th>
														@if ($pais == "PER" || $pais == "LAT" || $pais == "COL" || $pais == "CHL" || $pais == "ECU" || $pais == "PAN" || $pais == "CRI")
															OPTIMIZER
														@endif
													</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<b>Puntos: </b>
													</td>
													<td>
														<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
															{{ number_format($puntosProd[2]->u_Puntos) }}
														</span>
													</td>
													<td>
														@if ($pais == "PER" || $pais == "LAT" || $pais == "COL" || $pais == "CHL" || $pais == "ECU" || $pais == "PAN" || $pais == "CRI")
															<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
																{{ number_format($puntosProd[12]->u_Puntos ?? 0) }}
															</span>
														@else
															<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
																{{ number_format($puntosProd[11]->u_Puntos ?? 0) }}
															</span>
														@endif
													</td>
													<td>
														@if ($pais == "PER" || $pais == "LAT" || $pais == "COL" || $pais == "CHL" || $pais == "ECU" || $pais == "PAN" || $pais == "CRI")
															<span class="badge badge-success badge-pill pl-4 pr-4 pt-2 pb-2">
																{{ number_format($puntosProd[3]->u_Puntos) }}
															</span>
														@endif
													</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							@endif

							<div class="col-md-12 mt-5">
								<div class="col-md-12 text-center" >
									@if ($rango == 'DIR' || $rango == 'EXE')
										<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" id="btn1" onclick="showGenealogy()">
											Mis puntos grupo personal
										</a>
									@endif
									<a href="javascript:void(0)" class="btn btn-conv btn-rounded pt-3 pb-3 pl-5 pr-5 mt-3" role="button" id="btn2" onclick="showGenealogyGP()">
										Estatus de mi red
									</a>
								</div>
								<div class="col-md-12 mt-5" id="genealogiaPersonalVP">
									<h2 class="text-center">Puntos de sistemas de agua en mi grupo personal. </h2>
									<div class="row">
										<div class="col-md-12 mt-3">
											<div class="table-responsive mb-4">
												<table id="puntosVPTB" class="table table-striped table-bordered table-hover text-center" >
													<thead>
														<tr class="text-center">
															<th>Código de asesor</th>
															<th><p style="width: 150px;">Nombre</p></th>
															<th>Rango</th>
															<th>País</th>
															<th>Número de orden</th>
															<th>Fecha de orden</th>
															<th><p style="width: 150px;">Tipo de Orden</p></th>
															<th>Código de producto</th>
															<th><p style="width: 150px;">Producto</p></th>
															<th>Cantidad</th>
															<th>Puntos</th>
														</tr>
													</thead>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-12 mt-5" id="genealogiaPersonal">
								<h2 class="text-center">Mis frontales de grupo personal. </h2>
								<div class="row">
									<div class="col-md-12 mt-3">
										<div class="table-responsive mb-4">
											<table id="PersonalGroup" class="table table-striped table-bordered table-hover text-center" >
												<thead>
													<tr class="text-center">
														<th>Código</th>
														<th><p style="width: 150px;">Nombre</p></th>
														<th>Rango</th>
														<th>País</th>
														<th>VP del mes</th>
														<th>VGP del mes</th>
														<th>VGP productos PiMag</th>
														<th>VO LDP</th>
														<th>VO LDPyS</th>
														<th>Avance de rango</th>
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
	</body>
	<script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('fpro/js/pages/landing-page/script.js') }}"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
	<script src="{{ asset('fpro/js/modal/classie.js') }}"></script>
	<script src="{{ asset('fpro/js/modal/modalEffects.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
	<script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
	<script src="{{ asset('fpro/mainjs/convMayo/convMayo.js') }}"></script>
	
	<script>
		AOS.init();
		function stopVideo(){
            $('video')[0].pause();
        }
	</script>
</html>