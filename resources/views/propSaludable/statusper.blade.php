@extends('propSaludable.layout')

@section('tittleSite')
    Nikken | Propocito Saludable
@endsection

@section('css')
    <link href="{{ asset('fproh/css/pages/helpdesk.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fproh/plugins/dropify/dropify.min.css') }}">
@endsection

@section('tittlePage')
    Finanzas Saludables
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
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
                    <div class="col-lg-4 col-md-12 layout-spacing text-center">
                        <img src="http://services.nikken.com.mx/retos/img/ser_por.png" width="50%">
                    </div>
                    <div class="col-lg-8 col-md-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="table-responsive mb-4">
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
                                                {{ number_format($status[0]->VP) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($status[0]->VP < 100)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Faltan {{ 100 - $status[0]->VP }}
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
                                                {{ number_format($status[0]->Incorp_Influencers) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($status[0]->Incorp_Influencers < 2)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Faltan {{ 2 - $status[0]->Incorp_Influencers }}
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
                                                {{ number_format($noEventos[0]->NoEventos) }}
                                            </td>
                                            <td class="text-center">
                                                @if ($noEventos[0]->NoEventos < 1)
                                                    <span class="shadow-none badge badge-danger badge-pill">
                                                        Faltan {{ 1 - $noEventos[0]->NoEventos }}
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
                </div>
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