<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="{{ asset('fpro/assets/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('fpro/plugins/charts/c3charts/c3.min.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('fpro/maincss/ncinf/ncinf.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
        <title>Influencia 3.0</title>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.1.0/dist/confetti.browser.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="{{ asset('fpro/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <header class="" id="home" hidden>
            <div class="container-fluid">
                <div class="flex-container">
                    <div class="flex-slide home" data-toggle="modal" href='#modal-kin-ya'>
                        <div class="flex-title flex-title-home"><img src="{{ asset('fpro/img/NCINF/king-ya.png') }}" alt=""></div>
                    </div>
                    <div class="flex-slide contact" data-toggle="modal" href='#modal-kin-tai' >
                        <div class="flex-title"><img src="{{ asset('fpro/img/NCINF/king-tai.png') }}" alt=""></div>
                    </div>
                    <div class="flex-slide work" data-toggle="modal" href='#modal-kin-master' >
                        <div class="flex-title"><img src="{{ asset('fpro/img/NCINF/king-master.png') }}" class="img-responsive" alt=""></div>
                    </div>
                </div>
            </div>
        </header>

        @yield('logo-header')  
        @yield('Kinmaster')
        @yield('Aviso')
        @yield('Total')
        @yield('Content')
        @yield('Update')
        @yield('Boton')
        @yield('javascript')

        <footer>
            <p class="copyright">© 2020 Nikken Latinoamérica. Todos los derechos reservados.</p>
        </footer>
    </body>
    <script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('fpro/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fpro/mainjs/ncinf/ncinf.js') }}"></script>
</html>