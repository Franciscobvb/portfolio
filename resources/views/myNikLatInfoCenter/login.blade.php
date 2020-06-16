<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>My NIKKEN Latinoamérica | Centro de información</title>
        <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
        <link href="{{ asset('fproh/maincss/myNikLatInfoCenter/myNikLatInfoCenter.css') }}" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="{{ asset('fproh/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/css/users/login-2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="login">
        <form class="form-login" method="POST" action="myNikLatInfoCenter">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-12 text-center mb-4">
                    <img alt="logo" src="fpro/img/min-logo-nikken-white.png" width="30%">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-inputEmail">
                                <i class="flaticon-user-7"></i>
                            </span>
                        </div>
                        <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Usuario" aria-describedby="inputEmail" required >
                    </div>
                    <label for="inputPassword" class="sr-only">Contraseña</label>                
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-inputPassword">
                                <i class="flaticon-key-2"></i>
                            </span>
                        </div>
                        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" aria-describedby="inputPassword" required >
                    </div>
                    <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Acceder</button>
                </div>
            </div>
        </form>   
        <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('fproh/mainjs/myNikLatInfoCenter/myNikLatInfoCenter.js') }}"></script>
    </body>
</html>