@extends('regactivinf.layout')

@section('tittleSite')
    Actividad Influencer
@endsection

@section('tittlePage')
    <!--Plan Influencer-->
@endsection

@section('bg')
    @php
        $paisCompleto = [ "COL" => "Colombia", "GTM" => "Guatemala", "PER" => "Perú", "SLV" => "El Salvador", "ECU" => "Ecuador", "PAN" => "Panamá", "LAT" => "México", "CRI" => "Costa Rica", "CHL" => "Chile"];
        $banderas = ["COL" => "colombia.png", "GTM" => "guatemala.png", "PER" => "peru.png", "SLV" => "salvador.png", "ECU" => "ecuador.png", "PAN" => "panama.png", "LAT" => "mexico.png", "CRI" => "costarica.png", "CHL" => "chile.png"];
        $bandera = $banderas[$abiInfo[0]->Pais];
        $pais = $paisCompleto[$abiInfo[0]->Pais];
    @endphp
    <div class="blur-bg"></div>
@endsection

@section('nav')
    <div class="topbar-nav header navbar fixed-top nav-header-pers-menu" role="banner">
        <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
        <nav id="topbar">
            <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                <li class="menu" hidden>
                    <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                        <div>
                            <i class="flaticon-user-11"></i>
                            <span>Mi Actividad</span>
                        </div>
                    </a>
                </li>

                <li class="menu" hidden>
                    <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                        <div>
                            <i class="flaticon-users"></i>
                            <span>Actividad de mi grupo</span>
                        </div>
                    </a>
                </li>

                <li class="menu" hidden>
                    <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false" >
                        <div>
                            <i class="flaticon-note-2"></i>
                            <span>Fidelización</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                        <div>
                            <i class="flaticon-stats"></i>
                            <span>Plan de Influencia</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

@section('content')

@if ($getVP[0]->VP < 100)
    <div class="alert alert-warning  br-50 mb-4 personal-shadow text-center text-black" role="alert">
        <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
        <strong>ATENCIÓN!</strong> Tu VP es <b>{{ number_format($getVP[0]->VP) }}</b>, el cual no suficiente para ganar estas bonificaciones, consigue 100 puntos de VP y no te pierdas estos beneficios.
    </div>
@endif


<div class="row layout-spacing">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-xl-0 mb-4">
        <div class="widget-content-area total-coins br-4 card personal-shadow">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <center>
                        <img alt="image-widget" src="{{ asset('fproh/img/regactivinf/PDI_logo.png') }}" class="img-fluid logo m-auto">
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
        <div class="widget-content-area data-widgets br-4 card personal-shadow">
            <div class="widget t-sales-widget">
                <div class="media">
                    <div class="icon ml-2">
                        <i class="flaticon-line-chart"></i>
                    </div>
                    <div class="media-body text-right">
                        <p class="widget-text mb-0">Rango:</p>
                        <p class="widget-numeric-value">{{ $abiInfo[0]->Rango ?? "PLATA" }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
        <div class="widget-content-area data-widgets br-4 card personal-shadow">
            <div class="widget t-order-widget">
                <div class="media">
                    <div class="icon ml-2">
                        <i class="flaticon-user-group"></i>
                    </div>
                    <div class="media-body text-right">
                        <p class="widget-text mb-0">Unidades</p>
                        <p class="widget-numeric-value"><span id="totalUnidades"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
        <div class="widget-content-area data-widgets br-4 card personal-shadow">
            <div class="widget t-customer-widget">
                <div class="media">
                    <div class="icon ml-2">
                        <i class="flaticon-user-11"></i>
                    </div>
                    <div class="media-body text-right">
                        <p class="widget-text mb-0">Bonificacion</p>
                        <span class="widget-numeric-value" id="totalBonificacion"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>Tus registros</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="genealogia" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Associateid</th>
                                <th>Num. Orden</th>
                                <th>Fecha orden</th>
                                <th>periodo</th>
                                <th>Kit Influencer</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Bono por unidad</th>
                                <th>País</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total_bono = 0;
                                $totalUnidades = 0;
                            @endphp
                            @if (!empty($unaUnidad))
                                @foreach ($unaUnidad as $row)
                                    <tr>
                                        <td>{{ $row->Associateid }}</td>
                                        <td>{{ $row->Ordernum }}</td>
                                        <td>{{ $row->Fecha_Orden }}</td>
                                        <td>{{ $row->Periodo }}</td>
                                        <td>{{ trim($row->Kit_Influencer, " ") }}</td>
                                        <td>{{ $row->Descripcion }}</td>
                                        <td>{{ $row->Qty_Item }}</td>
                                        <td>
                                            {{ number_format($row->Bono_Una_Unidad) }}
                                            @php $total_bono = $total_bono + $row->Bono_Una_Unidad @endphp
                                        </td>
                                        <td>{{ $row->owner_country }}</td>
                                    </tr>
                                @endforeach
                            @elseif(!empty($dosUnidades))
                                @foreach ($dosUnidades as $row)
                                    <tr>
                                        <td>{{ $row->Associateid }}</td>
                                        <td>{{ $row->Ordernum }}</td>
                                        <td>{{ $row->Orderdate }}</td>
                                        <td>{{ $row->Periodo }}</td>
                                        <td>{{ trim($row->itemcode, " ") }}</td>
                                        <td>{{ $row->Descripcion }}</td>
                                        <td>{{ $row->Qty_Item }}</td>
                                        <td>
                                            {{ number_format($row->Bono_Dos_Unidades) }}
                                            @php $total_bono = $total_bono + $row->Bono_Dos_Unidades @endphp
                                        </td>
                                        <td>{{ $row->owner_country }}</td>
                                    </tr>
                                @endforeach
                            @elseif(!empty($tresUnidades))
                                @foreach ($tresUnidades as $row)
                                    <tr>
                                        <td>{{ $row->Associateid }}</td>
                                        <td>{{ $row->Ordernum }}</td>
                                        <td>{{ $row->Orderdate }}</td>
                                        <td>{{ $row->Periodo }}</td>
                                        <td>{{ trim($row->itemcode, " ") }}</td>
                                        <td>{{ $row->Descripcion }}</td>
                                        <td>
                                            {{ $row->Qty_Item }}
                                            @php $totalUnidades = $totalUnidades + $row->Qty_Item; @endphp
                                        </td>
                                        <td>
                                            {{ number_format($row->Bono_Tres_Unidades_o_Mas, 2) }}
                                            @php number_format($total_bono = $total_bono + $row->Bono_Tres_Unidades_o_Mas) @endphp
                                        </td>
                                        <td class="text-center">
                                            <img src="{{ asset('fpro/img/flags/' . $banderas[$row->owner_country]) }}" width="20px">
                                            <br>
                                            {{ $paisCompleto[$row->owner_country] }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/mainjs/regactivinf/regactivinf.js') }}"></script>
    <script>
        $('#totalBonificacion').text(parseFloat({{ $total_bono, 2 }}).toLocaleString(window.document.documentElement.lang));
        $('#totalUnidades').text({{ $totalUnidades }});
    </script>
@endsection