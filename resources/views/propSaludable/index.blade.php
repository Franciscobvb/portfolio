@extends('propSaludable.layout')

@section('tittleSite')
    Finanzas Saludables
@endsection

@section('css')
    <link href="{{ asset('fproh/css/pages/helpdesk.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('fproh/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/modals/component.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/ui-kit/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('tittlePage')
    Finanzas Saludables
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
                                    <form id="addNewEventFrm" action="../finszsalsave" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="row">
                                                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" files="true">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="input-group input-group-sm mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                    Código:
                                                                </span>
                                                            </div>
                                                            <input required type="text" id="abiCode" name="abiCode" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->Associateid, ' ') }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="input-group input-group-sm mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                    Nombre:
                                                                </span>
                                                            </div>
                                                            <input required type="text" id="abiName" name="abiName" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->AssociateName, ' ') }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="input-group input-group-sm mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                    Rango:
                                                                </span>
                                                            </div>
                                                            <input required type="text" id="abiRank" name="abiRank" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->Rango, ' ') }}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="input-group input-group-sm mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                    Fecha Evento:
                                                                </span>
                                                            </div>
                                                            <input required type="date" id="eventDate" name="eventDate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6">
                                                        <div class="input-group input-group-sm mb-4">
                                                            <div class="input-group-prepend">
                                                                <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                                    Nombre Evento:
                                                                </span>
                                                            </div>
                                                            <input required type="text" id="eventName" autocomplete="off" name="eventName" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Ingresa Un nombre para tu evento">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="input-group input-group-sm mb-2">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                            <div class="border-dashed text-center">Añade una imagen a tu evento</div>
                                                        </div>
                                                        <input required type="file" id="eventPicture" name="eventPicture" class="dropify" data-height="80" data-allowed-file-extensions="heic tif tiff jpg gif png svg eps odg wmf cdr bmp raw bmp eps ai ico webp psd"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center text-black">
                                                <button type="button" id="saveButton" class="btn btn-gradient-warning btn-rounded mb-4 mr-2 main-button text-black" onclick='addNewEventFrm()'>
                                                    Guardar Evento
                                                    <span class="flaticon-package main-icon-save"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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
                        <h4>Tus Eventos registrados</h4><input type="hidden" value='{{ $associateid }}' id="associateid">
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="genealogias" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="text-center">
                                    Nombre del Evento
                                </th>
                                <th class="text-center">
                                    Fecha del Evento
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg showEventPic-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Evento:&nbsp;</h5>
                            <h5 class="modal-title" id="myLargeModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <img width="80%" id="eventPic">
                            <div class="modal-footer text-center" hidden>
                                <button type="button" class="btn btn-dark btn-rounded mt-3 mb-3" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal-xl editEvent-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modificar evento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="resetUpdateFrm()">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <form id="updateEventFrm" action="../finzsSalUpdateEvent" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="row">
                                            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}" files="true">
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                            Código:
                                                        </span>
                                                    </div>
                                                    <input required type="text" id="abiCodeUpdate" name="abiCodeUpdate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->Associateid, ' ') }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                            Nombre:
                                                        </span>
                                                    </div>
                                                    <input required type="text" id="abiNameUpdate" name="abiNameUpdate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->AssociateName, ' ') }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                            Rango:
                                                        </span>
                                                    </div>
                                                    <input required type="text" id="abiRankUpdate" name="abiRankUpdate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{ trim($abiInfo[0]->Rango, ' ') }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                            Fecha Evento:
                                                        </span>
                                                    </div>
                                                    <input required type="date" id="eventDateUpdate" name="eventDateUpdate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text main-span" id="inputGroup-sizing-sm">
                                                            Nombre Evento:
                                                        </span>
                                                    </div>
                                                    <input required type="text" id="eventNameUpdate" autocomplete="off" name="eventNameUpdate" class="form-control-rounded-right form-control main-input" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="">
                                                </div>
                                            </div>
                                            <div class="col-xl-3"></div>
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 layout-spacing">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                    <div class="border-dashed text-center">Imagen Actual</div>
                                                </div>
                                                <img width="80%" id="eventEditPic">
                                                <input type="hidden" id="picEventLast" name="picEventLast">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="row">
                                            <div class="input-group input-group-sm mb-2 pr-4">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                    <div class="border-dashed text-center">Añade una nueva imagen a tu evento (opcional)</div>
                                                </div>
                                                <input required type="file" id="eventPictureUpdate" name="eventPictureUpdate" class="dropify" data-height="300" data-allowed-file-extensions="heic tif tiff jpg gif png svg eps odg wmf cdr bmp raw bmp eps ai ico webp psd"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center text-black">
                                        <button type="button" id="updateButton" class="btn btn-gradient-warning btn-rounded mb-4 mr-2 main-button text-black" onclick='updateEventSubmit()'>
                                            Guardar Evento
                                            <span class="flaticon-package main-icon-save"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/js/ui-kit/ui-tooltip-popovers.js') }}"></script>
    <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fproh/mainjs/finszsaludables/finszsaludables.js') }}"></script>
    <script src="{{ asset('fproh/plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/modalEffects.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
            $('#eventPictureUpdate').val('');
            $('.bs-tooltip').tooltip();
            geteventsfzssal();
        });
        @if(Session::has('notice'))
            swal({
                title: 'Evento Añadido!',
                text: "{{ Session::get('notice') }}",
                type: 'success',
                padding: '2em'
            })
        @endif

        @if(Session::has('duplicate'))
            swal({
                title: 'Evento duplicado!',
                text: "{{ Session::get('duplicate') }}",
                type: 'error',
                padding: '2em'
            })
        @endif

        var textAlert = "";

        @if($estatus == 4 && $abiInfo[0]->Pais == 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante las 4 semanas de Abril (1 al 30 de Abril) en Botella deportiva PiMag";
        @elseif($estatus == 4 && $abiInfo[0]->Pais != 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante las 4 semanas de Abril (1 al 30 de Abril) en Sistema de aire KenkoAir Purifier";
        @endif

        @if($estatus == 3 && $abiInfo[0]->Pais == 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante el mes de Abril en Botella deportiva PiMag";
        @elseif($estatus == 3 && $abiInfo[0]->Pais != 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante el mes de Abril en Sistema de aire KenkoAir Purifier";
        @endif

        @if($estatus == 2 && $abiInfo[0]->Pais == 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante la 2da y 3er semana de Abril en Botella deportiva PiMag";
        @elseif($estatus == 2 && $abiInfo[0]->Pais != 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante la 2da y 3er semana de Abril en Sistema de aire KenkoAir Purifier";
        @endif

        @if($estatus == 1 && $abiInfo[0]->Pais == 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante la 2da semana de Abril en Botella deportiva PiMag";
        @elseif($estatus == 1 && $abiInfo[0]->Pais != 'CHL')
            textAlert = "Te has hecho acreedor de un descuento durante la 2da semanas de Abril en Sistema de aire KenkoAir Purifier";
        @endif

        @if($estatus != 0)
            swal({
                title: 'FELICIDADES!',
                text: textAlert,
                imageUrl: 'https://cdn2.iconfinder.com/data/icons/award-and-reward/128/Golden-badges-star-award-winner-512.png',
                imageWidth: 250,
                imageHeight: 200,
                animation: false,
                padding: '2em',
            })
            sendMailPromo(abiName);
        @endif
    </script>
    
@endsection