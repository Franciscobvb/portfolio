<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>NIKKEN | Finanzas Saludables</title>
        <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="http://services.nikken.com.mx/fproh/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="http://services.nikken.com.mx/fproh/css/plugins.css" rel="stylesheet" type="text/css" />

        <link href="http://services.nikken.com.mx/fproh/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/custom_dt_html5.css">
        <link rel="stylesheet" href="http://services.nikken.com.mx/fproh/maincss/finszsaludables/finszsaludables.css">
            <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/bootstrap-select/bootstrap-select.min.css">
        <link href="http://services.nikken.com.mx/fproh/css/ui-kit/custom-tooltips_and_popovers.css" rel="stylesheet" type="text/css" />
        <link href="http://services.nikken.com.mx/fproh/css/modals/component.css" rel="stylesheet" type="text/css" />
        <link href="http://services.nikken.com.mx/fproh/css/ui-kit/custom-modal.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="default-sidebar">
        <div class="blur-bg"></div>
        <header class="tabMobileView header navbar fixed-top d-lg-none main-header">
            <ul class="navbar-nav flex-row ml-lg-auto w-100">
                <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                    <div class="nav-toggle d-inline-block float-left mt-2 ml-2">
                        <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block" data-placement="bottom">
                            <i class="flaticon-menu-line-2"></i>
                        </a>
                    </div>
                    <a class="nav-link user d-inline-block float-right mr-2" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="http://services.nikken.com.mx/fproh/img/regactivinf/user.png" class="img-fluid mr-2" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6 class="mb-1">Nikkena Latam</h6>
                                <p class="mb-0">Marketing</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </header>

        <header class="desktop-nav header navbar fixed-top main-header">
            <div class="nav-logo mr-3 ml-4 d-lg-inline-block d-none">
                <a class=""> <img src="http://services.nikken.com.mx/fpro/img/min-logo-nikken-white.png" class="img-fluid" alt="logo"></a>
            </div>

            <ul class="navbar-nav flex-row mr-auto">
                <li class="nav-item dropdown language-dropdown mr-3 d-lg-inline-block d-none">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h4 class="text-white mt-2"> Finanzas Saludables</h4>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ml-lg-auto">
                <li class="nav-item dropdown user-profile-dropdown mr-5  d-lg-inline-block d-none">
                    <a href="javascript:void(0);" class="nav-link user" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="http://services.nikken.com.mx/fproh/img/regactivinf/user.png" class="img-fluid mr-2" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6 class="mb-1">Nikkena Latam</h6>
                                <p class="mb-0">Marketing</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </header>

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <div class="topbar-nav header navbar fixed-top" role="banner" hidden>
            <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
            <nav id="topbar">
                <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                    <li class="menu">
                        <a href="../finzssaludable/MTg3MDg0MDM=">
                            <div>
                                <i class="flaticon-calendar-1"></i>
                                <span>Mis Eventos</span>
                            </div>
                        </a>
                    </li>
    
                    <li class="menu">
                        <a href="../finzssalstatuspers/MTg3MDg0MDM=">
                            <div>
                                <i class="flaticon-user-9"></i>
                                <span>Estatus personal</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="../finzssalsrepo/MTg3MDg0MDM=">
                            <div>
                                <i class="flaticon-users"></i>
                                <span>Seguimiento</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div id="content" class="main-content ">
            <div class="container ">
                <div class="page-header">
                    <div class="page-title text-black">
                        <h5>Finanzas Saludables Reporte Interno</h5>
                    </div>
                </div>

                <div class="alert alert-warning  br-50 mb-4 personal-shadow text-center text-black" role="alert">
                    <strong>ATENCIÓN!</strong> Al Exportar a excel toma unos segundos ya que son poco mas de 47 mil registros</b>.
                </div>

                <div class="row" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="statbox widget box box-shadow card personal-shadow">
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="reporteMkt" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center"><p class="main-th-space">Nombre</p></th>
                                                <th class="text-center">Rango</th>
                                                <th class="text-center">País</th>
                                                <th class="text-center">VP {{ Date('M') }}</th>
                                                <th class="text-center"># Incorporaciones</th>
                                                <th class="text-center">Evento</th>
                                                <th class="text-center">Estatus VP</th>
                                                <th class="text-center">Estatus Incoporaciones</th>
                                                <th class="text-center">Estatus Eventos</th>
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

    <footer class="footer-section theme-footer main-footer">
        <div class="footer-section-1  sidebar-theme">
        </div>
        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; 2020 <a href="javascript:void(0)">NIKKEN Latinoamerica </a> &nbsp;&nbsp;&nbsp;v. 1.0</p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
    <script src="http://services.nikken.com.mx/fproh/js/libs/jquery-3.1.1.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/bootstrap/js/popper.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/js/app.js"></script>
    <script src="http://services.nikken.com.mx/fproh/js/custom.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/datatables.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
        <script src="http://services.nikken.com.mx/fproh/plugins/dropify/dropify.min.js"></script>
    <script src="http://services.nikken.com.mx/fproh/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script>
        n =  new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();

        var table = $('#reporteMkt').DataTable( {
            destroy: true,
            ajax: "/finzsSalMktRepoData",
            columns: [
                {
                    data: 'Associateid',
                },
                {
                    data: 'AssociateName',
                },
                {
                    data: 'Rango',
                },
                {
                    data: 'Pais',
                },
                {
                    data: null,
                    "render": function (data, type, row) {
                        return parseFloat(row.VP).toFixed()
                    }
                },
                {
                    data: 'Incorp_Influencers',
                },
                {
                    data: 'NoEventos',
                },
                {
                    data: null,
                    className: 'text-center',
                    "render": function (data, type, row) {
                        if(row.VP >= 100){
                            return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                        }
                        else{
                            var falta = 100-row.VP;
                            return '<span class=" shadow-none badge badge-danger badge-pill">Falta(n) ' + falta + '</span>';
                        }
                    }
                },
                {
                    data: null,
                    className: 'text-center',
                    "render": function (data, type, row) {
                        if(row.Incorp_Influencers >= 2){
                            return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                        }
                        else{
                            var falta = 2-row.Incorp_Influencers;
                            return '<span class=" shadow-none badge badge-danger badge-pill">Falta(n) ' + falta + '</span>';
                        }
                    }
                },
                {
                    data: null,
                    className: 'text-center',
                    "render": function (data, type, row) {
                        if(row.NoEventos >= 1){
                            return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                        }
                        else{
                            var falta = 1-row.NoEventos;
                            return '<span class=" shadow-none badge badge-danger badge-pill">Falta(n) ' + falta + '</span>';
                        }
                    }
                },
            ],
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [{ 
                    extend: 'csv', 
                    className: 'btn btn-default btn-rounded btn-sm mb-4 btn-gradient-warning',
                    text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
					title: 'Finanzas Saludables | Fecha ' + d + "-" + m + "-" + y,
					customize: function( xlsx ) {
						var sheet = xlsx.xl.worksheets['sheet1.xml'];
						$('row c[r^="B"]', sheet).attr( 's', '2' );
					}
                }]
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
            },
            "bLengthChange": false,
            "iDisplayLength": 10,
            "processing": true,
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159411215-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-159411215-1');
    </script>
</html>