<input type='hidden' id='contador' value='1'><!doctype html>
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

            <div class="jumbotron text-center" style="border-bottom:4px solid #FF8C00;">
        <img src="{{ asset('fpro/img/NCINF/minilogo.png') }}" class="img-responsive" width="50%">
    </div>
    <blockquote class="blockquote-reverse fuente" style="font-size: 15px;">
        <p><b>Última actualización: 05/06/2020 19:05 </b></p>
    </blockquote>
  
            <div class="containerKinmaster text-center"  id="Kinmaster" style="display:none;" hidden>
        <img src="{{ asset('fpro/img/NCINF/sensei.png') }}" style="height: 300px !important; ">
        <br><br>
        <h3 style="text-align: center"> Ya eres un Sensei en Plan de Influencia, </h3>
        <h3 style="text-align: center"> Lograste el bono Kintai en menos de un mes. </h3>
        <h3 style="text-align: center">Sigue jugando y multiplica tu ganancia.</h3>
   </div>
                    <div class="alert alert-warning" style="text-align: center">
            <a href="javascript:void(0)" class="alert-link"><i class="fas fa-exclamation-circle"></i> Se realizaron actualizaciones de rango</a>
        </div>
                <div class="container text-center">
        <h3 style="color: #000;">BLANCO ORTIZ  PAULA                               </h3>
        <h3>Ganancia Total: <label class="amount">$0.00</label> </h3>
        <h4 style="color: #000;">MOSTRANDO PERIODO: MAYO</h4>
        <button type="button" id="Genealogy" name="detail" class="btn btn-deep-orange waves-effect waves-light">Jugadores de mi grupo personal</button> 
    </div>
                                            <div class="container" id="D1">
                <div class="row">
                    <div class="col-sm-3">
                        <h3 style="text-align: center" class="titulo"></h3>
                        <img src="{{ asset('fpro/img/NCINF/logo_kinya.png') }}" class="titulo">
                    </div>
                    <div class="col-sm-4">
                        <div id="NikkenChallengeChart_Kinya_3_0"></div>
                        <p class="percent" id="percent">0%</p>      
                    </div>
                    <div class="col-sm-5">
                        <h3>Tus ganancias actuales:</h3> 
                        <p class="amount" id="amount">$0</p>
                        <p class="simulator">Puedes ver ganancias comprando 3 artículos o  más. ¡No te quedes fuera!.</p>
                        <button type="button hidden" id="DetailKinya" name="detail" class="btn peach-gradient btn-lg waves-effect waves-light br-50">Detalles</button> 
                    </div>
                </div>
            </div>
                                        <input type="hidden" value="9845903" id="associateid">
            <input type="hidden" value="0" id="kintaiWinner">
            <input type="hidden" value="$0" id="amountWinn">
            <div class="container" id="D1">
                <div class="row">
                    <div class="col-sm-3">
                        <h3 style="text-align: center" class="titulo"></h3>
                        <img src="{{ asset('fpro/img/NCINF/minilogo.png') }}" class="titulo-influencia" width="100%">
                    </div>
                    <div class="col-sm-4">
                        <div id="NikkenChallengeChart_influencia"></div>
                        <p class="percent" id="percent">Artículos por Kit de Influencia: <span id="piezasInfluencia"></span></p>      
                    </div>
                    <div class="col-sm-5">
                        <h3>Tus ganancias por influencia:</h3> 
                        <p class="amount" id="amount">$ <span id="infBono"></span></p>
                        <p class="simulator">¡No te detengas! Sigue ganando, entre más unidades compres, más ganas.</p>
                        <button type="button hidden" id="detailsInfluencia" name="detail" class="btn peach-gradient btn-lg waves-effect waves-light br-50 btn-influencia">Detalles</button> 
                    </div>
                </div>
            </div>
                                        <div class="container" id="D1">
                <div class="row">
                    <div class="col-sm-3">
                        <h3 style="text-align: center" class="titulo"></h3>
                        <img src="{{ asset('fpro/img/NCINF/logo_kintai.png') }}" class="titulo">
                    </div>
                    <div class="col-sm-4">
                        <div id="NikkenChallengeChart_Kintai_3_0"></div>
                        <p class="percent" id="percent">0%</p>      
                    </div>
                    <div class="col-sm-5">
                        <h3>Tus ganancias actuales:</h3> 
                        <p class="amount" id="amount">$0</p>
                        <p class="simulator">¡Anima a tu red! No pierdas la oportunidad de ganar.</p>
                        <button type="button hidden" id="DetailKintai" name="detail" class="btn aqua-gradient btn-lg waves-effect waves-light br-50">Detalles</button> 
                    </div>
                </div>
            </div>
             
    <!--MODAL GANADOR-->
    <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height: auto;">
        <div class="modal-dialog modal-notify modal-success" role="document" style="height: auto;">
            <div class="modal-content text-center" style="height: auto;">
                <div class="modal-header d-flex justify-content-center" >
                    <p class="heading simulator">¡FELICIDADES HAS COMPLETADO EL KINTAI!</p>
                </div>
                <div class="modal-body">
                    <i class="fas fa-trophy fa-4x animated rotateIn mb-4"></i>
                    <p class="simulator">¡Has vencido en el Reto!</p>
                    <p class="simulator">HAS GANADO $0</p>
                    <p><strong>Reconocemos tu esfuerzo.</strong></p>
                    <p><strong>Aún puedes obtener más ganancias.</strong></p>
                </div>
                <div class="modal-footer flex-center">
                    <a type="button" class="btn btn-light-green waves-effect" data-dismiss="modal" id="continue" onclick="reset()">Continuar</a>
                </div>
            </div>
        </div>
    </div>

        <div class="alert alert-warning" style="text-align: center">
            <a href="javascript:void(0)" class="alert-link"><i class="fas fa-wallet"></i> Estados de Cuenta</a>
        </div>
        <div class="row">
            <div class="col-sm-2 col-md-4"></div>
            <div class="col-sm-8 col-md-4">
                <div class="form-group">
                    <label for="period">Mes de consulta</label>
                    @php
                        $meses = [
                            1 => 'Enero',
                            2 =>'Febrero',
                            3 =>'Marzo',
                            4 =>'Abril',
                            5 =>'Mayo',
                            6 =>'Junio',
                            7 =>'Julio',
                            8 =>'Agosto',
                            9 =>'Septiembre',
                            10 =>'Octubre',
                            11 =>'Noviembre',
                            12 =>'Diciembre'
                        ];
                    @endphp
                    <select class="form-control" id="period" onchange="getEdoCta(this.value)">
                        <option value="-" selected disabled>Selecciona...</option>
                        <option value="{{ $meses[intval(Date('m')) - 1] }}">{{ $meses[intval(Date('m')) - 1] . ' ' . Date('Y') }}</option>
                        <option value="{{ $meses[intval(Date('m')) - 2] }}">{{ $meses[intval(Date('m')) - 2] . ' ' . Date('Y') }}</option>
                        <option value="{{ $meses[intval(Date('m')) - 3] }}">{{ $meses[intval(Date('m')) - 3] . ' ' . Date('Y') }}</option>
                        <option value="{{ $meses[intval(Date('m')) - 4] }}">{{ $meses[intval(Date('m')) - 4] . ' ' . Date('Y') }}</option>
                        <option value="{{ $meses[intval(Date('m')) - 5] }}">{{ $meses[intval(Date('m')) - 5] . ' ' . Date('Y') }}</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="notas fuente" style="font-size: 16px;"> 
        <h4 style="text-align: center;"><strong>NOTAS IMPORTANTES</strong></h4>
        <br>
        <p>* Recuerda que los cambios de rango se ven reflejados el día 15 de cada mes y afectan tu grupo personal para los resultados del plan de Influencia 3.0.</p>
        <p>** Recuerda que hay personas que no son frontales y pueden variar tus ganancias.</p> 
        <p>*** Esta plataforma actualiza los rangos el día 15 de cada mes. </p> 
    </div>

    
    <div class="modal fade" id="modalTable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning modal-xl" role="document">
            <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px ">Detalles <img src="{{ asset('fpro/img/ncinf/kinya_white.png') }}" style="height: 50px; width: 150px;"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="overflow: auto" >
                <table class="table table-hover" id="tabDetailKinya">
                    <thead>
                        <tr>
                            <th>Cód. Asesor</th>
                            <th>Nombre</th>
                            <th># de Documento</th>
                            <th>Documento</th>
                            <th width="100px">Fecha</th>
                            <th>Item</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Bonificación</th>
                            <th>Total Bonificación</th>
                        </tr>
                    </thead>
                    <tbody>
                         
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th><strong> Total:</strong></th>
                            <th><strong>$0</strong></th>
                        </tr>            
                                                    <div class="alert alert-warning" role="alert" style="text-align: center;">
                                "ANIMATE A COMPRAR 3 ARTICULOS PARA VER REFLEJADA TU INFORMACIÓN DE BONIFICACIONES"
                            </div>
                                            </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning br-50" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- BOTON DETALLE (KINYA+)-->
    <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success modal-xl" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px ">Detalles <img src="{{ asset('fpro/img/ncinf/kinyaplus_white.png') }}" style="height: 50px; width: 150px;"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: auto">
                    <br>
                    <label style="color: #D64000"><strong>KINYA+ NIVEL 1</strong></label>
                    <table class="table table-hover" >
                        <thead>
                            <tr style="color: #000">
                                <th>Cód. Asesor</th> 
                                <th>Nombre</th>
                                <th>Línea</th>
                                <th>Nivel</th>
                                <th># de Documento</th>
                                <th>Documento</th>
                                <th width="100px">Fecha</th>
                                <th>Item</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Bonificación</th>
                                <th>Total Bonificación</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                                                            <div class="alert alert-warning" role="alert" style="text-align: center;">
                                    "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINYA+"
                                </div>
                                                    </tbody>
                    </table>
                    <br>
                    <label style="color: #D64000"><strong>KINYA+ NIVEL 2</strong></label>
                    <table class="table table-hover" >
                        <thead>
                            <tr style="color: #000">
                                <th>Cód. Asesor</th>
                                <th>Nombre</th>
                                <th>Línea</th>
                                <th>Nivel</th>
                                <th># de Documento</th>
                                <th>Documento</th>
                                <th width="100px">Fecha</th>
                                <th>Item</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Bonificación</th>
                                <th>Total Bonificación</th>
                            </tr>
                        </thead>
                        <tbody>
                                                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <label style="color: #000"><strong>Total: $0 </strong></label> <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalKintai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info modal-xl" role="document" >
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center" >
                    <h4 class="heading simulator" id="myModalLabel" style="font-size: 32px ">Detalles<img src="{{ asset('fpro/img/ncinf/kintai_white.png') }}" style="height: 50px; width: 150px; "></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: auto">
                    <table class="table table-hover" id="detailKintai">
                        <thead>
                            <tr>
                                <th>Cód. Asesor</th>
                                <th>Nombre</th>
                                <th>Línea</th>
                                <th>Nivel</th>
                                <th># de Documento</th>
                                <th>Documento</th>
                                <th width="100px">Fecha</th>
                                <th>Item</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                                                            <div class="alert alert-warning" role="alert" style="text-align: center;">
                                    "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINTAI"
                                </div>
                                                    </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info br-50" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalInfluencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-info modal-xl" role="document" >
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center headerModalInfluencia">
                    <h4 class="heading simulator" id="myModalLabel" style="font-size: 32px ">Detalles<img src="{{ asset('fpro/img/ncinf/minilogo.png') }}" style="width: 150px; "></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: auto">
                    <table class="table table-hover" id="tabInfluenciaDetail">
                        <thead>
                            <tr>
                                <th>Cód. Asesor</th>
                                <th>Nombre</th>
                                <th>Número de Orden</th>
                                <th>Fecha de Orden</th>
                                <th>Kit de Influencer</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Bono por unidad / paquete</th>
                                <th>Pais</th>
                            </tr>
                        </thead>
                        <tbody id="bodyTabInfluencia">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn br-50 btn-influencia" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTON Genealogy -->
    <div class="modal fade" id="modalGenealogy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-notify modal-danger modal-lg" role="document" >
            <div class="modal-content" >
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="heading simulator" id="myModalLabel">JUGADORES DE MI GRUPO PERSONAL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: auto">
                    <table class="table table-hover" id="jugadoresRed">
                        <thead>
                            <tr>
                                <th style="color: #000">Patrocinador</th>
                                <th style="color: #000">Cód. Asesor</th>
                                <th style="color: #000">Nombre</th>
                                <th style="color: #000">Nivel </th>
                                <th style="color: #000">Cantidad</th>
                                <th style="color: #000">Correo</th>
                            </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <th scope="row">9845903</th>
                                    <th scope="row">17751503</th>
                                    <th scope="row">MOLINA DIEZ DE BONILLA GABRIELA                   </th>
                                    <th scope="row">1</th>
                                    <th scope="row" style="text-align: center;">2</th>
                                    <th scope="row">gabymoli@hotmail.com                                                                                </th>
                                </tr>
                                                            <tr>
                                    <th scope="row">25988503</th>
                                    <th scope="row">27523103</th>
                                    <th scope="row">LULE RAMíREZ PATRICIA                             </th>
                                    <th scope="row">4</th>
                                    <th scope="row" style="text-align: center;">1</th>
                                    <th scope="row">patty_lule2007@hotmail.com                                                                          </th>
                                </tr>
                             
                            <div class="alert alert-warning" role="alert" style="text-align: center;" hidden>
                                "HAZ TÚ KINYA PARA VER A TUS JUGADORES QUE HAN ADQUIRIDO 1 Ó 2 ARTICULOS."
                            </div>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger br-50" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js'></script>

    <!--GRAFICAS TEMPLATE-->
    <script src="{{ asset('fpro/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fpro/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/blockui/jquery.blockUI.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/charts/d3charts/d3.v3.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/charts/c3charts/c3-chart-script.js') }}"></script>
    <!--END GRAFICAS TEMPLATE-->
    <script>
        function stopVideo(){
            $('video')[0].pause();
        }
    </script>

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