@extends('propSaludable.layout')

@section('tittleSite')
    Nikken | Finanas Saludables
@endsection

@section('css')
    <link href="{{ asset('fproh/css/pages/helpdesk.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fproh/plugins/dropify/dropify.min.css') }}">
@endsection

@section('tittlePage')
    Finanas Saludables
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center layout-spacing">
        <img src="{{ asset('fproh/img/finszsaludables/logo.png') }}" width="75%" >
    </div>
</div>

<div class="hd-tab-section">
    <div class="row">
        <div class="col-md-12">
            <div class="tab-content " id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-statistics" role="tabpanel" aria-labelledby="pills-statistics-tab">
                    <div class="accordion " id="hd-statistics">
                        <div class="card personal-shadow">
                            <div class="card-header" id="hd-statistics-1">
                                <div class="mb-0">
                                    <div class="" data-toggle="collapse" data-target="#collapse-hd-statistics-1" aria-expanded="false" aria-controls="collapse-hd-statistics-1">
                                        <h5>Añadir evento nuevo</h5>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse-hd-statistics-1" class="collapse show" aria-labelledby="hd-statistics-1" data-parent="#hd-statistics">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="row">
                                                {{ csrf_field() }}
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-group input-group-sm mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                Código:
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-group input-group-sm mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                Nombre:
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-group input-group-sm mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                Rango:
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-group input-group-sm mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                Nombre Evento:
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="input-group input-group-sm mb-4">
                                                        <div class="input-group-prepend">
                                                            <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                Fecha Evento:
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="input-group input-group-sm mb-2">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                        <div class="border-dashed text-center">Añade una imagen a tu evento</div>
                                                    </div>
                                                    <input type="file" class="dropify" data-height="80" data-allowed-file-extensions="tif jpg gif png"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center text-black">
                                            <button class="btn btn-gradient-warning btn-rounded mb-4 mr-2 main-button text-black">
                                                Guardar Evento
                                                <span class="flaticon-package main-icon-save"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
        <div class="statbox widget box box-shadow card personal-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>Tus Eventos registrados</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="statusPers" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nombre del Evento</th>
                                <th class="text-center">Fecha del Evento</th>
                                <th class="text-center">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i < 5; $i++)
                                <tr>
                                    <td class="text-center">{{ $i }}</td>
                                    <td class="text-center">Tiger Nixon</td>
                                    <td class="text-center">2011/04/25</td>
                                    <td class="text-center">
                                        <div class="d-flex">
                                            <div class="usr-img-frame rounded-circle align-center">
                                                <img alt="admin-profile" class="img-fluid rounded-circle" src="{{ asset('fproh/img/regactivinf/user.png') }}">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
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
    </script>
@endsection