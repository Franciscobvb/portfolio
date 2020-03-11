<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NIKKEN | @yield('tittleSite') </title>
    <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fproh/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/plugins.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('fproh/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/custom_dt_html5.css') }}">

    <link rel="stylesheet" href="{{ asset('fproh/maincss/regactivinf/regactivinf.css') }}">
</head>
<body class="default-sidebar">
    @yield('bg')
    <header class="tabMobileView header navbar fixed-top d-lg-none nav-header-pers">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2 ml-2">
                    <a href="javascript:void(0);" class="nav-link sidebarCollapse d-inline-block" data-placement="bottom">
                        <i class="flaticon-menu-line-2"></i>
                    </a>
                </div>
                <a class="nav-link user d-inline-block float-right mr-2" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{ asset('fproh/img/regactivinf/user.png') }}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">{{ $username ?? "Nikken Latam" }}</h6>
                            <p class="mb-0">{{ $pais . ' | ' . $lastname ?? "Registro Actividad" }}</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </header>

    <header class="desktop-nav header navbar fixed-top nav-header-pers">
        <div class="nav-logo mr-3 ml-4 d-lg-inline-block d-none">
            <a class=""> <img src="{{ asset('fpro/img/min-logo-nikken-white.png') }}" class="img-fluid" alt="logo"></a>
        </div>

        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-3 d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h4 class="text-white mt-2">NIKKEN</h4>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-lg-auto">
            <li class="nav-item dropdown user-profile-dropdown mr-5  d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link user" aria-haspopup="true" aria-expanded="false">
                    <div class="media">
                        <img src="{{ asset('fproh/img/regactivinf/user.png') }}" class="img-fluid mr-2" alt="admin-profile">
                        <div class="media-body align-self-center">
                            <h6 class="mb-1">{{ $username ?? "Nikken Latam" }}</h6>
                            <p class="mb-0">{{ $pais . ' | ' . $lastname }}</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </header>

    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        @yield('nav')
        
        <div id="content" class="main-content ">
            <div class="container mt-5 pt-3">
                <div class="page-header">
                    <div class="page-title text-black">
                        <h5>@yield('tittlePage')</h5>
                    </div>
                </div>

                @yield('content')

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
                                <source src="{{ asset('fproh/img/regactivinf/tutorial.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section theme-footer">
        <div class="footer-section-1  sidebar-theme">
        </div>
        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a href="javascript:void(0)">NIKKEN Latinoamerica </a></p>
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
    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fproh/js/app.js') }}"></script>
    <script src="{{ asset('fproh/js/custom.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('fproh/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });

        function stopVideo(){
            $('video')[0].pause();
        }
    </script>
    @yield('scripts')
</html>