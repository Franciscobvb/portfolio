<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Nikken</title>
        <link rel="icon" type="image/x-icon" href="assets/icon.png"/>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/jquery-ui.css') }}">
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .blur-bg{
                width: 100%;
                height: 100%;
                position: absolute;
                filter: blur(3px);
                -webkit-filter: blur(3px);
                background: #1b1c25 url("fpro/img/dark-forest2.jpg") no-repeat fixed;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="blur-bg"></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="logo">
                    <img alt="logo" src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" class="theme-logo" width="150px">
                </div>
                <div class="title m-b-md">
                    Sitio en mantenimiento.
                </div>
                <div class="links" style="color: white !important">
                    <a href="javascript:void(0)" style="color: white !important">Sentimos las molestias ocasionadas.</a>
                </div>
            </div>
        </div>
    </body>
</html>
