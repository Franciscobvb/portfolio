<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Genealogia radial</title>
        <link type="text/css" href="{{ asset('assets/css/base.css') }}" rel="stylesheet" />
        <link type="text/css" href="{{ asset('assets/css/RGraph.css') }}" rel="stylesheet" />
        <script language="javascript" type="text/javascript" src="{{ asset('assets/js/jit.js') }}"></script>
        <script language="javascript" type="text/javascript" src="{{ asset('assets/js/example1.js') }}"></script>
        <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    </head>
    <body onload="getDataGenPers();">
        <input type="text" value="{{ $associateid }}" name="associateid" id="associateid">
        <input type="text" value="{{ $abiinfo[0]->AssociateName }}" name="abiname" id="abiname">
        <center>
            <h3 id="title">Genealogia Radial</h3>
        </center>
        <div id="container">
            <div id="center-container">
                <div id="infovis"></div>    
            </div>

            <div id="right-container" >
            <div id="inner-details"></div>
        </div>
        <div id="log"></div>
    </body>
</html>