<html>
    <head>
        <style>
            @page {
                margin: 0cm 0cm;
            }

            @font-face {
                font-family: "Comfortaa";
                src: url("../fpro/fonts/comfortaa/Comfortaa-Regular.ttf");
            }

            body {
                margin-top: 2cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }

            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 3.15cm;
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
            
            main{
                margin-top: 120px;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            .parrafo1{
                padding: 0 10% 0 10%;
                font-size: 10px;
                text-align: justify;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            .row {
                padding-left: 15%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
                width: 80% !important;
                max-width: 80% !important;
            }


            .ml-4{
                margin-left: 14px;
            }

            .br-4 {
                border-radius: 4px !important;
            }
            .widget-content-area {
                position: relative;
                background-color: #fff;
                border-bottom-left-radius: 6px;
                border-bottom-right-radius: 6px;
            }
            .text-center {
                text-align: center !important;
            }

            .btn-rounded {
                -webkit-border-radius: 1.875rem !important;
                -moz-border-radius: 1.875rem !important;
                -ms-border-radius: 1.875rem !important;
                -o-border-radius: 1.875rem !important;
                border-radius: 1.875rem !important;
            }
            .btn-outline-primary {
                border: 1px solid #1a73e9 !important;
                color: #1a73e9 !important;
                background-color: transparent;
                box-shadow: none;
            }
            .btn, .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ColVis_MasterButton, .fc-state-default {
                padding: 0.4375rem 1.25rem;
                text-shadow: none;
                font-size: 14px;
                color: #3b3f5c;
                font-weight: normal;
                white-space: normal;
                word-wrap: break-word;
                transition: .2s ease-out;
                touch-action: manipulation;
                cursor: pointer;
                background-color: #e9ecef;
                box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1);
                will-change: opacity, transform;
                transition: all 0.3s ease-out;
                -webkit-transition: all 0.3s ease-out;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="{{ asset('fproh/img/influencia30/cabezal-DocRecurso1.png') }}" width="100%">
        </header>

        <footer>
            <img src="{{ asset('fproh/img/influencia30/pie-DocRecurso 3.png') }}" width="100%">
        </footer>

        <main>
            <center>
                <h1 class="">{{ $nombre ?? "NIKKEN" }}</h1>
            </center>
            <h3 class=" parrafo1">
                Estas cerca de pagar o invertir en {{ $deseo ?? 'tu carro'}}, esto lo puedes hacer cuando {{ $nkits ?? '3' }} personas disfruten de la experiencia del {{ $producto ?? 'Waterfall' }} y lo compartan con otros, así podrás tener  el beneficio de {{ $moneda ?? '$'}}{{ $bono ?? '4,730.00' }}.
                <br>
                <br>
                Te enviamos tu simulación del plan de influencia compártelo y disfruta del estilo de vida que deseas.
            </h3>
            <table style="border: 0; width: 100%; padding-left: 2%;">
                <tbody>
                    <tr>
                        <td>
                            @if (!empty($kitInfluencia1))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card dribbble br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen1) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 1: {{ $nombreJugador1 ?? 'Guapalupe' }}</h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;">
                                                1 Kit de {{ $tipo1 }}: {{ $kitInfluencia1 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo1 ?? '5024 '}}
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono1 ?? '600.00' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            @if (!empty($kitInfluencia2))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card twitter br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen2) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 2: {{ $nombreJugador2 ?? 'Juan' }} </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;">
                                                1 Kit de {{ $tipo2 }}: {{ $kitInfluencia2 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo2 ?? '5024 '}} 
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono2 ?? '600.00' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            @if (!empty($kitInfluencia3))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card dribbble br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen3) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 3: {{ $nombreJugador3 ?? 'Laura' }} </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> 
                                                1 Kit de {{ $tipo3 }}: {{ $kitInfluencia3 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo3 ?? '5024 '}} 
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono3 ?? '600.00' }} </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="border: 0; width: 100%; padding-left: 2%;">
                <tbody>
                    <tr>
                        <td>
                            @if (!empty($kitInfluencia4))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card dribbble br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen4) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 4: {{ $nombreJugador4 ?? 'Guapalupe' }}</h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;">
                                                1 Kit de {{ $tipo4 }}: {{ $kitInfluencia4 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo4 ?? '5024 '}}
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono4 ?? '600.00' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            @if (!empty($kitInfluencia5))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card twitter br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen5) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 5: {{ $nombreJugador5 ?? 'Juan' }} </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;">
                                                1 Kit de {{ $tipo5 }}: {{ $kitInfluencia5 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo5 ?? '5024 '}} 
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono5 ?? '600.00' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            @if (!empty($kitInfluencia6))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card dribbble br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen3) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 6: {{ $nombreJugador6 ?? 'Laura' }} </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> 
                                                1 Kit de {{ $tipo6 }}: {{ $kitInfluencia6 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo6 ?? '5024 '}} 
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono6 ?? '600.00' }} </h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="border: 0; width: 100%; padding-left: 2%;">
                <tbody>
                    <tr>
                        <td>
                            
                        </td>
                        <td>
                            @if (!empty($kitInfluencia7))
                                <div class="col-xl-4 ml-4">
                                    <div class="widget-content-area social-likes text-center p-0 br-4">
                                        <div class="card twitter br-4">
                                            <div class="icon">
                                                <img src="{{ asset('fproh/img/influencia30/producto/' . $imagen7) }}" width="100px">
                                            </div>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Invitado 7: {{ $nombreJugador7 ?? 'Juan' }} </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;">
                                                1 Kit de {{ $tipo7 }}: {{ $kitInfluencia7 ?? 'Waterfall' }} <br>
                                                Cód. {{ $codigo7 ?? '5024 '}} 
                                            </h5>
                                            <h5 style="margin-bottom: 4px;margin-top: 4px;"> Bono de {{ $moneda ?? '$' }}{{ $bono7 ?? '600.00' }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
            <center>
                <h1>Tu ingreso total es de {{ $moneda ?? '$' }}{{ $bono ?? '4,730.00'}}</h1>
            </center>
        </main>
    </body>
</html>