@extends('propSaludable.layout')

@section('tittleSite')
    Finanzas Saludables
@endsection

@section('css')
    <link href="{{ asset('fproh/css/pages/helpdesk.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fproh/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/modals/component.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/ui-kit/custom-modal.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('tittlePage')
    Finanzas Saludables
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
@php $Pais = $abiInfo[0]->Pais ?? "LAT" @endphp

<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card personal-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        @php
                            setlocale(LC_TIME, 'es_ES');
                            $dia = Date('d');
                            $mes = Date('m');
                            $meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
                            $mes = DateTime::createFromFormat('!m', $mes);
                            $mes = strftime("%B", $mes->getTimestamp());
                            $mesnum = Date('m');
                            $mesnum = str_replace('0', '', $mesnum);
                        @endphp
                        <h4>Fecha de actualizacion: {{ $dia }} de {{ $meses[$mesnum] }} a las <span id="hora"></span> hora México.</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-10 col-md-12">
                        <div class="statbox widget box box-shadow">
                            <div class="table-responsive ">
                                <table id="statusPers" class="table table-striped table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th >Requisitos</th>
                                            <th class="text-center">Estatus</th>
                                            <th class="text-center">Falta por cumplir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                100 puntos de Volumen Personal
                                            </td>
                                            <td class="text-center">
                                                @php $statusVP = $status[0]->VP ?? 0; @endphp
                                                {{ number_format($statusVP) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($statusVP < 100)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Falta(n) {{ 100 - $statusVP }}
                                                    </span>
                                                @else
                                                    <span class=" shadow-none badge badge-success badge-pill">
                                                        Cumple
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 incorporaciones frontales de Influencer
                                            </td>
                                            <td class="text-center">
                                                @php $statusInfluencers = $status[0]->Incorp_Influencers ?? 0; @endphp
                                                {{ number_format($statusInfluencers) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($statusInfluencers < 2)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Falta(n) {{ 2 - $statusInfluencers ?? 0 }}
                                                    </span>
                                                @else
                                                    <span class=" shadow-none badge badge-success badge-pill">
                                                        Cumple
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mínimo un evento registrado
                                            </td>
                                            <td class="text-center">
                                                @php $statusNoEventos = $noEventos[0]->NoEventos ?? 0; @endphp
                                                {{ number_format($statusNoEventos) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($statusNoEventos < 1)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Falta(n) {{ 1 - $statusNoEventos}}
                                                    </span>
                                                @else
                                                    <span class=" shadow-none badge badge-success badge-pill">
                                                        Cumple
                                                    </span>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-3 col-md-12"></div>
                    @if ($statusVP >= 100 && $statusInfluencers >= 2 && $statusNoEventos >= 1)
                        <div class="col-lg-6 col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="alert alert-info br-50 mb-4 personal-shadow text-center text-black" role="alert">
                                    @if ($Pais == 'CHL')
                                        <strong>Felicidades!</strong> Cumpliste y puedes redimir el CupónBottle con el 30% de descuento.
                                    @else
                                        <strong>Felicidades!</strong> Cumpliste y puedes redimir el CupónAir con el 30% de descuento.
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-4 col-lg-6 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card personal-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4 hidden>Detalles de la promoción:</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <a href="javascript:void(0)">
                    @if ($Pais == 'CHL')
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile1.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl1">
                    @else
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio1.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl1">
                    @endif
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card personal-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4 hidden>Términos y condiciones</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <a href="javascript:void(0)">
                    @if ($Pais == 'CHL')
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile2.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl2">
                    @else
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio2.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl2">
                    @endif
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card personal-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4 hidden>Términos y condiciones</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <a href="javascript:void(0)">
                    @if ($Pais == 'CHL')
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile3.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl3">
                    @else
                        <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio3.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl3">
                    @endif
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($Pais == 'CHL')
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile1.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl1">
                @else
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio1.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl1">
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($Pais == 'CHL')
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile2.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl2">
                @else
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio2.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl2">
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-xl3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($Pais == 'CHL')
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitioChile3.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl3">
                @else
                    <img src="{{ asset('fproh/img/finszsaludables/InfografiasMicroSitio3.png') }}" width="100%" data-toggle="modal" data-target=".bd-example-modal-xl3">
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/mainjs/finszsaludables/finszsaludables.js') }}"></script>
    <script src="{{ asset('fproh/plugins/dropify/dropify.min.js') }}"></script>
    <script>
        $('.dropify').dropify();
        setHora();
    </script>
@endsection