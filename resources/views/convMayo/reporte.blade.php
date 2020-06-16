<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>NIKKEN | RENUEVATE Y AVANZA DE RANGO - REPORTE STAF</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('fpro/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fpro/plugins/table/datatable/datatables.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fpro/plugins/table/datatable/custom_dt_zero_config.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('fpro/plugins/table/datatable/custom_dt_html5.css')}}">
		<style>
			body{
				background-image: url('../fpro/img/convMayo/v412-kul-13-fluidshape-min.png');
				background-size: cover;
				background-attachment: fixed;
			}

			.btnExcel{
				background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                border: none;
                font-size: 14px;
                padding: 9px 18px;
                transition: 0.3s;
            }

            .btnExcel:hover{
                background-image: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            }

			.dataTables_filter input{
				border: 1px solid #805dca;
			}

			.dataTables_processing{
                width: 50%;
                border: 0;
                z-index: 10;
                margin-top: 50px;
                left: 25%;
                background: linear-gradient(90deg, rgba(51,20,69,1) 0%, rgba(222,2,90,1) 100%);
                color:white;
                position: absolute;
            }
		</style>
	</head>
	<body>
		<div id="navHeadWrapper" class="navHeaderWrapper header-image">
			<div class="">
				<nav class="navbar navbar-expand-lg bg-faded header-nav">
					<div class="container">
						<div class="col-xl-4 col-lg-3 col-6 mx-auto ">
							<img src="{{asset('fpro/img/logo-black.png')}}" width="70%">
						</div>

						<div class="col-6 text-right d-lg-none d-block">
							<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon flaticon-left-menu"></span>
							</button>
                        </div>
                        
                        <div class="col-xl-8 col-lg-9">
							<div class="collapse navbar-collapse justify-content-end" id="nav-content">   
								
							</div>
						</div>
					</div>
				</nav>
            </div>
            
            <div class="alert alert-warning  br-50 mb-4" role="alert">
                <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
                <strong>Atención!</strong> El reporte puede demorar un poco, teniendo en cuenta que son poco as de 37 mil registros. 
            </div>
            
			<div id="headerWrapper" class="" style="max-width: 95%; margin: auto">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 bg-white mb-5" style="border-radius: 15px;">
					<div class="table-responsive mb-4 mt-5">
                        <br><br>
                        <table id="reporteConvocatoria" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr class="">
                                    <th>Código</th>
                                    <th><p style="width: 150px;">Nombre</p></th>
                                    <th>Rango Actual</th>
                                    <th>Correo</th>
                                    <th>País</th>
                                    <th>VGP (Marzo a Mayo)</th>
                                    <th>VP por mes</th>
                                    <th><p style="width: 250px;">VGP en sistemas de agua en el mes mayo</p></th>
                                    <th>VO-LDP</th>
                                    <th>VO-LDPYS</th>
                                    <th>VP por mes</th> <!---->
                                    <th><p style="width: 250px;">VGP en sistemas de agua en el mes mayo</p></th>
                                    <th>VO-LDP</th>
                                    <th>VO-LDPYS</th>
                                    <th>Avanza de Rango?</th>
                                    <th>VP por mes</th> <!---->
                                    <th><p style="width: 250px;">VGP en sistemas de agua en el mes mayo</p></th>
                                    <th>VO-LDP</th>
                                    <th>VO-LDPYS</th>
                                </tr>
                            </thead>
                        </table>
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
								<p class="mt-md-0 mt-4 mb-0">© 2020 Renuevate y Avance de Rango <a href="https://nikkenlatam.com/oficina-virtual/mexico/">Nikken Latinoamérica</a>.</p>
							</div>
							<div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center"></div>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</body>
	<script src="{{asset('fpro/js/libs/jquery-3.1.1.min.js')}}"></script>
	<script src="{{asset('fpro/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('fpro/js/modal/classie.js')}}"></script>
	<script src="{{asset('fpro/plugins/table/datatable/datatables.js')}}"></script>
	<script src="{{asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('fpro/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
	<script src="{{asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{asset('fpro/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script src="https://cdn.datatables.net/scroller/2.0.2/css/scroller.dataTables.min.css"></script>

	<script>
        function number_format(number, decimals, dec_point, thousands_point) {
            if (number == null || !isFinite(number)) {
                throw new TypeError("number is not valid");
            }
            if (!decimals) {
                var len = number.toString().split('.').length;
                decimals = len > 1 ? 0 : 0;
            }
            if (!dec_point) {
                dec_point = '.';
            }
            if (!thousands_point) {
                thousands_point = ',';
            }
            number = parseFloat(number).toFixed(decimals);
            number = number.replace(".", dec_point);
            var splitNum = number.split(dec_point);
            splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
            number = splitNum.join(dec_point);
            return number;
        }

        $('#reporteConvocatoria').DataTable();

        var data = [];
        for ( var i=0 ; i<50000 ; i++ ) {
            data.push( [ i, i, i, i, i, i, i, i, i, i, i, i, i, i, i, i, i, i, i ] );
        }

        $('#reporteConvocatoria').DataTable( {
            destroy:        true,
            data:           data,
            deferRender:    true,
            scrollY:        200,
            scrollCollapse: true,
            scroller:       true,
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { 
						extend: 'excel', 
						className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
						text:" Exportar a Excel",
					},
                ]
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );

		/*$('#reporteConvocatoria').DataTable({
			destroy: true,
			ajax: "/convMayoRepoGetData",
            processing: true,
			columns: [
				{ data: 'Associateid', className: 'text-center' },
				{ data: 'AssociateName', className: 'text-center' },
				{ data: 'Rango', className: 'text-center' },
				{ data: 'Email', className: 'text-center' },
				{ data: 'Pais', className: 'text-center' },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return number_format(row.VGPAcumulado3);
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return number_format(row.VP_Mes);
                    }
                },
				{ 
                    data: 'VGP_Pimag',
                    className: 'text-center',
                    render: function(data, type, row){
                        return number_format(row.VGP_Pimag);
                    }
                },
                { 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return number_format(row.VO_LDP);
                    }
                },
                { 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return number_format(row.VO_LDPyS);
                    }
                },
                //=============================================== lo que falta por cumplir
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        if(row.VP_Mes >= 100){
                            return 'cumple';
                        }
                        else{
                            if(parseInt(row.VP_Mes) > 0){
                                var falta = parseInt(100) - parseInt(row.VP_Mes);
                                return falta;
                            }
                            else{
                                return 100;
                            }
                        }
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        if(row.VGP_Pimag >= 3000){
                            return 'cumple';
                        }
                        else{
                            if(parseInt(row.VGP_Pimag) > 0){
                                var falta = parseInt(3000) - parseInt(row.VGP_Pimag);
                                return falta;
                            }
                            else{
                                return '3,000';
                            }
                        }
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        if(row.VO_LDP >= 3000){
                            return 'cumple';
                        }
                        else{
                            if(parseInt(row.VO_LDP) > 0){
                                var falta = parseInt(3000) - parseInt(row.VO_LDP);
                                return falta;
                            }
                            else{
                                return '3,000';
                            }
                        }
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        if(row.VO_LDPyS >= 500){
                            return 'cumple';
                        }
                        else{
                            if(parseInt(row.VO_LDPyS) > 0){
                                var falta = parseInt(500) - parseInt(row.VO_LDPyS);
                                return falta;
                            }
                            else{
                                return '3,000';
                            }
                        }
                    }
                },
                //======================== AvanceR
                {
                    data: 'AvanceR',
                    className: 'text-center',
                    render: function(data, type, row){
                        if(row.AvanceR.trim() != 'NO'){
                            return "Avanzo a PLATA";
                        }
                        else{
                            return row.AvanceR;
                        }
                    }
                },
                //===============================================
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return '100';
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return '3,000';
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return '1,000';
                    }
                },
				{ 
                    data: null,
                    className: 'text-center',
                    render: function(data, type, row){
                        return '500';
                    }
                },
			],
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { 
						extend: 'excel', 
						className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
						text:" Exportar a Excel",
					},
                ]
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
                "paginate": {
                    "previous": "<i class='flaticon-arrow-left-1'></i>",
                    "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        });*/
    </script>

</html>