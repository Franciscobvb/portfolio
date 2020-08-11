<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>Back Office My Nikken</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="{{ asset('fpro/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/users/login-2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/components/animation/css/animate.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/ui-kit/custom-notification.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('fpro/js/ui-kit/notification/tympanus/snap.svg-min.js') }}"></script>
        <link href="{{ asset('fpro/css/ui-kit/notification/flat.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/ui-kit/notification/notify.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/modals/component.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/ui-kit/custom-modal.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/css/ui-kit/custom-tooltips_and_popovers.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('fpro/maincss/backOffice/backOffice.css') }}">
    </head>
    <body class="login">
        <div class="blur-bg"></div>
        <form class="form-login" id="form-login">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <img alt="logo" src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" width="30%" class="theme-logo">
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <label for="user" class="sr-only">User</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-user">
                                <span class="flaticon-user-11"></span>
                            </span>
                        </div>
                        <input type="text" id="inputEmail" class="form-control" placeholder="Email" aria-describedby="inputEmail" autocomplete="off">
                    </div>
                    <label for="inputPassword" class="sr-only">Password</label>                
                    <div class="input-group mb-4" id="passGroup">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-inputPassword">
                                <span class="flaticon-key-3"></span>
                            </span>
                        </div>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" aria-describedby="inputPassword">
                    </div>
                    <div class="input-group text-center">
                        <button type="button" class="btn mb-4 pb-2 pt-2 pl- pr-2 rounded-circle login-btn">
                            &nbsp;<span class="flaticon-arrow-next"></span>&nbsp;
                        </button>
                    </div>
                    <div class="forgot-pass text-center">
                        <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1" onclick="showOverlay()">Olvidé mi contraseña</a>
                    </div>
                </div>
                <div class="col-md-12" hidden>
                    <div class="login-text text-center">
                        <p class="mt-3 text-white">New Here? <a href="user_register_2.html" class="">Register </a> a new user !</p>
                    </div>
                </div>
            </div>
        </form>
        <div class="md-overlay" onclick="hideOverlay()"></div>
        <div class="md-modal md-effect-1" id="modal-1">
            <div class="md-content br-50">
                <h3 class="pt-4 tittle-modal">Recuperar cuenta</h3>
                <div class="content-modal">
                    <p class="mb-4">This is a modal window. You can do the following things with it:</p>
                    <ul>
                        <li class="mb-2"><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
                        <li class="mb-2"><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
                        <li class="mb-2"><strong>Close:</strong> click on the button below to close the modal.</li>
                    </ul>
                    <button type="button" class="btn rounded-circle recuperar mb-3 pb-2 pt-2 bs-tooltip">
                        <span class="ti-check"></span>
                    </button>
                    <button type="button" class="btn br-50 md-close mb-3 pb-2 pt-2" onclick="hideOverlay()">
                        <span class="flaticon-circle-cross"></span> Cancelar
                    </button>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fpro/js/ui-kit/notification/notify.js') }}"></script>
    <script src="{{ asset('fpro/js/ui-kit/notification/tympanus/classie.js') }}"></script>
    <script src="{{ asset('fpro/mainjs/backOffice/main.js') }}"></script>
    <script src="{{ asset('fpro/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fpro/js/modal/modalEffects.js') }}"></script>
    <script src="{{ asset('fpro/js/ui-kit/ui-tooltip-popovers.js') }}"></script>
</html>