<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
        <style type="text/css">
            .logo{
            height: 100px;
            width: 800px;
            }
            .title{
            text-align: center;
            font-size: 30px;
            font-weight:bold;
            }
            .info{
            font-size: 16px; 
            font-weight:bold;
            }
            .logokin{
            height: 75px; 
            width: 200px;
            /*margin-top: 50px;*/
            }
            .amount {
            font-weight:bold;
            font-size: 50px;
            color: #D64000;
            margin: 0 20 ; 
            text-align:right;
            }
            .amounttable {
            font-weight:bold;
            font-size: 20px;
            color: #D64000;
            margin: 20 50 20 50;
            text-align:right;
            }
            .center{
            text-align: center;
            }
            .text{
            text-align: justify;
            font-size: 16px;
            }
            table{
            width: 100%;
            font-size: 10px;
            }
            .gray{
            background: #D8D8D8 !important;
            }
            .white{
            background: white !important;
            }
            .fuente{
            font-family: 'Roboto', sans-serif;
            font-size: 12px !important;
            }
            .nota {
            font-weight:bold;
            font-size: 68px;
            margin: 0 20 ; 
            text-align:right;
            }
        </style>
        <title>Estado de Cuenta NikkenChallenge</title>
    </head>
    <body>
        @if($Total != 0)
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('fpro/img/NCINF/NIKKEN-Challenge.jpg') }}" style="height: 90px; width: 700px;">
                </div>
            </div>
            <div class="row" >
                <div class="col-12">
                    <h1 class="title">ESTADO DE CUENTA</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12">          
                    <label style="text-align: center "><strong><?php echo $CountryName  ?></strong></label>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label class="info"><?php echo $abi ." - " . $name?></label><br>
                    <label class="info">PERIODO: <?php echo $mes ." ". $year  ?></label>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row col-lg-12">
                <table  style="width: 100%;" >
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-lg-6" style="text-align: left">
                                    <img src="{{ asset('fpro/img/NCINF/Kin-Ya!.jpg') }}"   style="height: 130px;  width: 350px; ">
                                </div>
                            </td>
                            <td>
                                <div class="col-lg-6" >
                                    <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo $PriceKinya ?></p>
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row col-lg-12">
                <table  style="width: 100%;" >
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-lg-6" style="text-align: left">
                                    <img src="{{ asset('fpro/img/NCINF/minilogo.jpg') }}" style="height: 105px;  width: 360px; ">
                                </div>
                            </td>
                            <td>
                                <div class="col-lg-6 " >
                                    <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo number_format($bonoInfTotal, 2) ?></p>
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row col-lg-12">
                <table  style="width: 100%;" >
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-lg-6" style="text-align: left">
                                    <img src="{{ asset('fpro/img/NCINF/Kin-Tai.jpg') }}" style="height: 130px;  width: 350px; ">
                                </div>
                            </td>
                            <td>
                                <div class="col-lg-6 "  >
                                    <p class="amount" style="text-align:right;">{{ $simboloPrecio }}<?php echo $PriceKintai ?></p>
                                    <br>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-12 "  style="border-top: 8px solid #FF8C00; text-align: right;">
                    <p class="amount" style="text-align:center;">{{ $simboloPrecio }}<?php echo $Total ?></p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <br>
                    <p class="text">Este estado de cuenta, contiene las operaciones y ganancias <u><strong>sin el descuento de impuestos.</strong></u> El Estado de Cuenta de Bonificaciones, contiene el monto total de ganancias por Plan de Influencia 3.0 y la información de impuestos.</p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <header>
                <table>
                    <tbody>
                        <tr>
                            <th>
                                <img src="{{ asset('fpro/img/NCINF/NIKKEN-Challenge.jpg') }}" style="height: 90px; width: 700px;">
                            </th>
                        </tr>
                    </tbody>
                </table>
            </header>
            <h1 class="title">ESTADO DE CUENTA</h1>
            <br>
            <div class="row col-lg-12">
                <table  style="width: 100%; border-top:4px dotted #FF8C00;">
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-lg-6" >
                                    <br>
                                    <img src="{{ asset('fpro/img/NCINF/Kin-Ya!.jpg') }}" class="logokin">
                                </div>
                            </td>
                            <td>
                                <div class="col-lg-6 " >
                                    <p class="amounttable" style="text-align: right"> {{ $simboloPrecio }}<?php echo $PriceKinya ?></p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="fuente">
                        <thead>
                            <tr style="background: rgb(253, 180, 92) !important;">
                                <th>Asesor</th>
                                <th>Nombre</th>
                                <th>Orden</th>
                                <th>Fecha</th>
                                <th>Item</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Bonificación</th>
                                <th>Total Bonificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($queryKinyaDetail as $item)
                                @if($i%2==0)
                                    <tr class="gray">
                                @else
                                    <tr class="white">
                                @endif
                                    <td scope="row">{{ $item->Associateid }}</td>
                                    <td scope="row">{{ $item->Nombre }}</td>
                                    <td scope="row">{{ $item->OrderNum }}</td>
                                    <td scope="row">  {{ date("d-m-Y", strtotime($item->OrderDate)) }}</td>
                                    <td scope="row" style="text-align: center">{{ $item->Itemcode }}</td>
                                    <td scope="row">{{ $item->Descripcion }}</td>
                                    <td scope="row" style="text-align: center">{{ $item->Qty }}</td>
                                    <td scope="row">{{ $simboloPrecio }} {{ number_format($item->Bonificacion,2) }}</td>
                                    <td scope="row">{{ $simboloPrecio }} {{ number_format($item->TotalBonificacion,2) }}</td>
                                </tr>
                            {{$i = $i + 1}}
                            @endforeach 
                            <tr class="total">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th style="font-size: 16px !important;">Total</th>
                                <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo $PriceKinya ?></th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>

            @if ($bonoInfTotal != 0)
                <div class="row col-lg-12" >
                    <table  style="width: 100%; border-top:4px dotted #FF8C00;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-lg-8" >
                                        <br>
                                        <img src="{{ asset('fpro/img/NCINF/minilogo.jpg') }}" class="logokin">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-lg-4" >
                                        <p class="amounttable">{{ $simboloPrecio }}<?php echo number_format($bonoInfTotal, 2) ?></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="fuente">
                            <thead>
                                <tr style="background-image: linear-gradient(135deg, #20b3e2 0%, #494691 100%) !important;">
                                    <th>Asesor</th>
                                    <th>Nombre</th>
                                    <th>Orden</th>
                                    <th>Fecha</th>
                                    <th>Item</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Bonificación</th>
                                    <th>Total Bonificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach($tabDetallesInfluencia as $item)
                                    @if($i%2==0)
                                        <tr class="gray">
                                    @else
                                        <tr class="white">
                                    @endif
                                        <td scope="row">{{ $item->Associateid }}</td>
                                        <td scope="row">{{ $item->apfirstname }}</td>
                                        <td scope="row">{{ $item->Ordernum }}</td>
                                        <td scope="row">  {{ date("d-m-Y", strtotime($item->Orderdate)) }}</td>
                                        <td scope="row" style="text-align: center">{{ $item->itemcode }}</td>
                                        <td scope="row">{{ $item->Descripcion }}</td>
                                        <td scope="row" style="text-align: center">{{ $item->Qty_Item }}</td>
                                        <td scope="row">{{ $simboloPrecio }} {{ number_format($item->Bono_Tres_Unidades_o_Mas,2) }}</td>
                                        <td scope="row">{{ $simboloPrecio }} {{ number_format($item->Bono_Tres_Unidades_o_Mas,2) }}</td>
                                    </tr>
                                {{$i = $i + 1}}
                                @endforeach 
                                <tr class="total">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th style="font-size: 16px !important;">Total</th>
                                    <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo number_format($bonoInfTotal, 2) ?></th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            @endif

            @if ($PriceKintai != 0)
                <div class="row col-lg-12">
                    <table  style="width: 100%; border-top:4px dotted #FF8C00;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-lg-6" >
                                        <br>
                                        <img src="{{ asset('fpro/img/NCINF/Kin-Tai.jpg') }}" class="logokin">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-lg-6 " >
                                        <p class="amounttable">{{ $simboloPrecio }}<?php echo $PriceKintai ?></p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="fuente">
                            <thead>
                                <tr style="background: rgb(70, 132, 191) !important;">
                                    <th>Asesor</th>
                                    <th>Nombre</th>
                                    <th>Orden</th>
                                    <th>Fecha</th>
                                    <th>Item</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Bonificación</th>
                                    <th>Total Bonificación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $ik = 1; ?>
                                <!-- Mostrando registros-->
                                @foreach($queryKintai as $itemKintai)
                                @if($ik%2==0)
                                <tr class="gray">
                                    @else
                                <tr class="white">
                                    @endif
                                    <td scope="row">{{ $itemKintai->Associateid }}</td>
                                    <!-- <td scope="row">000001</td> -->
                                    <td scope="row">{{ $itemKintai->Nombre }}</td>
                                    <!-- <td scope="row">NIKKEN</td> -->
                                    <td scope="row">{{ $itemKintai->OrderNum }}</td>
                                    <td scope="row">  {{ date("d-m-Y", strtotime($itemKintai->OrderDate)) }}</td>
                                    <td scope="row" style="text-align: center">{{ $itemKintai->Itemcode }}</td>
                                    <td scope="row">{{ $itemKintai->Descripcion }}</td>
                                    <td scope="row" style="text-align: center">{{ $itemKintai->Qty }}</td>
                                    <td scope="row">{{ $simboloPrecio }} {{ number_format($itemKintai->Bonificacion,2) }}</td>
                                    <td scope="row">{{ $simboloPrecio }} {{ number_format($itemKintai->TotalBonificacion,2) }}</td>
                                </tr>
                                {{$ik = $ik + 1}}
                                @endforeach  
                                <tr class="total">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <th style="font-size: 16px !important;">Total</th>
                                    <th style="font-size: 16px !important;  color: #D64000 !important; ">{{ $simboloPrecio }}<?php echo $PriceKintai ?></th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-11">
                    <br>
                    <p class="center"><strong>¡FELICIDADES! POR TUS LOGROS DE ESTE MES</strong></p>
                    <br>
                    @if ($PriceKintai == 0)
                    <p class="text">Si hubieras completado el Kintai hubieras ganado: <strong>{{ $simboloPrecio }}<?php echo $PriceKintaiCountry ?></strong>  </p>
                    @endif
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('fpro/img/NCINF/NIKKEN-Challenge.jpg') }}" style="height: 90px; width: 700px;">
                </div>
            </div>
            <div class="row" >
                <div class="col-12">
                    <h1 class="title">ESTADO DE CUENTA</h1>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 "  style="border-top: 8px solid #FF8C00; text-align: right;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="nota" style="text-align:center ">"ANÍMATE A INICIAR NIKKEN CHALLENGE "</p>
                    <br>
                    <br>
                    <p class="amount" style="text-align:center;">¡COMIENZA EL RETO YA!</p>
                </div>
            </div>
        @endif 
    </body>
</html>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
