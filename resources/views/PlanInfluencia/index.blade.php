@extends('PlanInfluencia.layouth')

@section('logo-header')
    <div class="jumbotron text-center" style="border-bottom:4px solid #FF8C00;">
        <img src="{{ asset('fpro/img/NCINF/minilogo.png') }}" class="img-responsive" width="50%">
    </div>
    <blockquote class="blockquote-reverse fuente" style="font-size: 15px;">
        <p><b>Última actualización: {{ date("d/m/Y H:i", strtotime($update)) }} </b></p>
    </blockquote>
@endsection

@section('Kinmaster')
    <div class="containerKinmaster text-center"  id="Kinmaster" style="display:none;" hidden>
        <img src="{{ asset('fpro/img/NCINF/sensei.png') }}" style="height: 300px !important; ">
        <br><br>
        <h3 style="text-align: center"> Ya eres un Sensei en Plan de Influencia, </h3>
        <h3 style="text-align: center"> Lograste el bono Kintai en menos de un mes. </h3>
        <h3 style="text-align: center">Sigue jugando y multiplica tu ganancia.</h3>
   </div>
@endsection

@section('Aviso')
    @if($day >= 1 && $day <= 10)
        <div class="alert alert-info">
            <a href="javascript:void(0)" class="alert-link fuente" style="text-align: center; font-size: 16px;">Estamos iniciando el Plan de Influencia 3.0. Considera que en el cambio de rango pueden existir modificaciones</a>
        </div>
    @elseif($day >= 15 && $day <= 19)
        <div class="alert alert-warning" style="text-align: center">
            <a href="javascript:void(0)" class="alert-link"><i class="fas fa-exclamation-circle"></i> Se realizaron actualizaciones de rango</a>
        </div>
    @endif
@endsection

@section('Total')
    <div class="container text-center">
        <h3 style="color: #000;">{{ $nombreAbi ?? ' ' }}</h3>
        <h3>Ganancia Total: <label class="amount">{{ $simboloPrecio }}{{ $Total }}</label> </h3>
        <h4 style="color: #000;">MOSTRANDO PERIODO: JUNIO</h4>
        <button type="button" id="Genealogy" name="detail" class="btn btn-deep-orange waves-effect waves-light">Jugadores de mi grupo personal</button> 
    </div>
@endsection

@section('Content')
    @php $count = 0; @endphp
    @foreach($data as $Section)
        @php $count++; @endphp
        @if ($count != 2)
            <div class="container" id="D1">
                <div class="row">
                    <div class="col-sm-3">
                        <h3 style="text-align: center" class="titulo"></h3>
                        <img src="{{ asset($Section['titulo']) }}" class="titulo">
                    </div>
                    <div class="col-sm-4">
                        <div id="{{ $Section['chart'] }}"></div>
                        <p class="percent" id="percent">{{ $Section['percent'] }}%</p>      
                    </div>
                    <div class="col-sm-5">
                        <h3>Tus ganancias actuales:</h3> 
                        <p class="amount" id="amount">{{ $Section['simboloPrecio'] }}{{ $Section['amount'] }}</p>
                        <p class="simulator">{{ $Section['simulator'] }}</p>
                        <button type="button hidden" id="{{ $Section['id'] }}" name="detail" class="{{ $Section['detail'] }}">Detalles</button> 
                    </div>
                </div>
            </div>
        @else
            <input type="hidden" value="{{ $associateid }}" id="associateid">
            <input type="hidden" value="{{ $kintaiFinal }}" id="kintaiWinner">
            <input type="hidden" value="{{ $simboloPrecio }}{{ $PriceKintai }}" id="amountWinn">
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
                        <p class="amount" id="amount">{{ $Section['simboloPrecio'] }} <span id="infBono"></span></p>
                        <p class="simulator">¡No te detengas! Sigue ganando, entre más unidades compres, más ganas.</p>
                        <button type="button hidden" id="detailsInfluencia" name="detail" class="btn peach-gradient btn-lg waves-effect waves-light br-50 btn-influencia">Detalles</button> 
                    </div>
                </div>
            </div>
        @endif
    @endforeach
 
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
                    <p class="simulator">HAS GANADO {{ $simboloPrecio }}{{ $PriceKintai }}</p>
                    <p><strong>Reconocemos tu esfuerzo.</strong></p>
                    <p><strong>Aún puedes obtener más ganancias.</strong></p>
                </div>
                <div class="modal-footer flex-center">
                    <a type="button" class="btn btn-light-green waves-effect" data-dismiss="modal" id="continue" onclick="reset()">Continuar</a>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('Boton')
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
                        @foreach($queryKinyaDetail as $item)
                            <tr>
                                <td scope="row">{{ $item->Associateid }}</td>
                                <td scope="row">{{ $item->Nombre }}</td>
                                <td scope="row">{{ $item->OrderNum }}</td>
                                @if($item->TipDoc == "OV")
                                <td scope="row">ORDEN DE VENTA</td>
                                @elseif($item->TipDoc == "NC")
                                <td scope="row">NOTA DE CREDITO</td>
                                @endif
                                <td scope="row">  {{ date("d-m-Y", strtotime($item->OrderDate)) }}</td>
                                <td scope="row">{{ $item->Itemcode }}</td>
                                <td scope="row">{{ $item->Descripcion }}</td>
                                <td scope="row">{{ $item->Qty }}</td>
                                <td scope="row">{{ number_format($item->Bonificacion,2) }}</td>  
                                <td scope="row">{{ number_format($item->TotalBonificacion,2) }}</td>          
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
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
                            <th><strong>{{ $simboloPrecio }}{{ $PriceKinya }}</strong></th>
                        </tr>            
                        @if($quantity < 3)
                            <div class="alert alert-warning" role="alert" style="text-align: center;">
                                "ANIMATE A COMPRAR 3 ARTICULOS PARA VER REFLEJADA TU INFORMACIÓN DE BONIFICACIONES"
                            </div>
                        @endif
                    </tfoot>
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
                    <h4 class="heading simulator" id="myModalLabel" style="font-size: 30px ">Detalles <img src="{{ asset('../img/kinyaplus_white.png') }}" style="height: 50px; width: 150px;"></h4>
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
                            @foreach($queryKinyaLV1Detail as $iteml1)
                                <tr>
                                    <td scope="row">{{ $iteml1->Associateid }}</td> 
                                    <td scope="row">{{ $iteml1->Nombre }}</td>
                                    <td scope="row">{{ $iteml1->pata }}</td>
                                    <td scope="row">{{ $iteml1->level }}</td>
                                    <td scope="row">{{ $iteml1->OrderNum }}</td>
                                    @if($iteml1->TipDoc == "OV")
                                        <td scope="row">ORDEN DE VENTA</td>
                                    @elseif($iteml1->TipDoc == "NC")
                                        <td scope="row">NOTA DE CREDITO</td>
                                    @endif
                                    <td scope="row">  {{ date("d-m-Y", strtotime($iteml1->OrderDate)) }}</td>
                                    <td scope="row">{{ $iteml1->Itemcode }}</td>
                                    <td scope="row">{{ $iteml1->Descripcion }}</td>
                                    <td scope="row">{{ $iteml1->Qty }}</td>
                                    <td scope="row">{{ number_format($iteml1->Bonificacion,2) }}</td>  
                                    <td scope="row">{{ number_format($iteml1->TotalBonificacion,2) }}</td>          
                                </tr>
                            @endforeach 
                            @if($PriceKinyaPlus == 0)
                                <div class="alert alert-warning" role="alert" style="text-align: center;">
                                    "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINYA+"
                                </div>
                            @endif
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
                            @foreach($queryKinyaLV2Detail as $iteml2)
                                <tr>
                                    <td scope="row">{{ $iteml2->Associateid }}</td>
                                    <td scope="row">{{ $iteml2->Nombre }}</td>
                                    <td scope="row">{{ $iteml2->pata }}</td>
                                    <td scope="row">{{ $iteml2->level }}</td>
                                    <td scope="row">{{ $iteml2->OrderNum }}</td>
                                    @if($iteml2->TipDoc == "OV")
                                        <td scope="row">ORDEN DE VENTA</td>
                                    @elseif($iteml2->TipDoc == "NC")
                                        <td scope="row">NOTA DE CREDITO</td>
                                    @endif
                                    <td scope="row">  {{ date("d-m-Y", strtotime($iteml2->OrderDate)) }}</td>
                                    <td scope="row">{{ $iteml2->Itemcode }}</td>
                                    <td scope="row">{{ $iteml2->Descripcion }}</td>
                                    <td scope="row">{{ $iteml2->Qty }}</td>
                                    <td scope="row">{{ number_format($iteml2->Bonificacion,2) }}</td>  
                                    <td scope="row">{{ number_format($iteml2->TotalBonificacion,2) }}</td>          
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <label style="color: #000"><strong>Total: {{ $simboloPrecio }}{{ $PriceKinyaPlus }} </strong></label> <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
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
                            @foreach($queryKintai as $itemKintai)
                                <tr>
                                    <td scope="row">{{ $itemKintai->Associateid }}</td>
                                    <td scope="row">{{ $itemKintai->Nombre }}</td>
                                    <td scope="row">{{ $itemKintai->pata }}</td>
                                    <td scope="row">{{ $itemKintai->level }}</td>
                                    <td scope="row">{{ $itemKintai->OrderNum }}</td>
                                    @if($itemKintai->TipDoc == "OV")
                                        <td scope="row">ORDEN DE VENTA</td>
                                    @elseif($itemKintai->TipDoc == "NC")
                                        <td scope="row">NOTA DE CREDITO</td>
                                    @endif
                                    <td scope="row">  {{ date("d-m-Y", strtotime($itemKintai->OrderDate)) }}</td>
                                    <td scope="row">{{ $itemKintai->Itemcode }}</td>
                                    <td scope="row">{{ $itemKintai->Descripcion }}</td>
                                    <td scope="row">{{ $itemKintai->Qty }}</td>         
                                </tr>
                            @endforeach 
                            @if($queryKintai == [])
                                <div class="alert alert-warning" role="alert" style="text-align: center;">
                                    "LA INFORMACIÓN SE MOSTRARÁ UNA VEZ ACREDITADO EL KINTAI"
                                </div>
                            @endif
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
                            @foreach($queryGenealogy as $itemgenealogy)
                                <tr>
                                    <th scope="row">{{ $itemgenealogy->sponsorid }}</th>
                                    <th scope="row">{{ $itemgenealogy->associateid }}</th>
                                    <th scope="row">{{ $itemgenealogy->Name }}</th>
                                    <th scope="row">{{ $itemgenealogy->level }}</th>
                                    <th scope="row" style="text-align: center;">{{ $itemgenealogy->QTY }}</th>
                                    <th scope="row">{{ $itemgenealogy->e_mail }}</th>
                                </tr>
                            @endforeach 
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
@endsection

@section('Update')
    <div class="notas fuente" style="font-size: 16px;"> 
        <h4 style="text-align: center;"><strong>NOTAS IMPORTANTES</strong></h4>
        <br>
        <p>* Recuerda que los cambios de rango se ven reflejados el día 15 de cada mes y afectan tu grupo personal para los resultados del plan de Influencia 3.0.</p>
        <p>** Recuerda que hay personas que no son frontales y pueden variar tus ganancias.</p> 
        <p>*** Esta plataforma actualiza los rangos el día 15 de cada mes. </p> 
    </div>

    <div id="chat">
        <div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="¿Necesitas ayuda? Ve nuestro tutorial" data-toggle="modal" data-target=".mdl-tutorial">
            <i class="far fa-question-circle"></i>
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
                                <source src="http://services.nikken.com.mx/fpro/img/NCINF/controlador_2.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
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
@endsection