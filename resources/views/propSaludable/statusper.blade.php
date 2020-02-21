@extends('propSaludable.layout')

@section('tittleSite')
    Nikken | Propocito Saludable
@endsection

@section('css')
    <link href="{{ asset('fproh/css/pages/helpdesk.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fproh/plugins/dropify/dropify.min.css') }}">
@endsection

@section('tittlePage')
    Propocito Saludable
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
                        <h4>Ultima Actulizacion: 20-02-2020 17:00 pm</h4>
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
                                <table id="genealogias" class="table table-striped table-bordered table-hover" style="width:100%">
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
                                                100
                                            </td>
                                            <td class="text-center">
                                                <span class=" shadow-none badge badge-danger badge-pill">
                                                    Faltan 20
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 incorporaciones frontales de Influencer
                                            </td>
                                            <td class="text-center">
                                                1
                                            </td>
                                            <td class="text-center">
                                                <span class=" shadow-none badge badge-danger badge-pill">
                                                    Faltan 1
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mínimo un evento registrado 
                                            </td>
                                            <td class="text-center">
                                                0
                                            </td>
                                            <td class="text-center">
                                                <span class=" shadow-none badge badge-danger badge-pill">
                                                    Faltan 1
                                                </span>
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
    <script src="{{ asset('fproh/mainjs/regactivinf/regactivinf.js') }}"></script>
    <script src="{{ asset('fproh/plugins/dropify/dropify.min.js') }}"></script>
    <script>
        $('.dropify').dropify();
    </script>
@endsection