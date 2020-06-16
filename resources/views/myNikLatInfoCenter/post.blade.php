<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>My NIKKEN Latinoamérica | Centro de información </title>
        <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="{{ asset('fproh/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fproh/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('fproh/maincss/myNikLatInfoCenter/myNikLatInfoCenter.css') }}">
        <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-color: #fff !important">
        {!! $post[0]->Descripcion ?? '' !!}
    </body>
    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fproh/js/app.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fproh/js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
</html>