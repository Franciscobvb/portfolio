@extends('propSaludable.layout')

@section('tittleSite')
    Finanzas Saludables
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/bootstrap-select/bootstrap-select.min.css') }}">
    <link href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/modals/component.css') }}" rel="stylesheet" type="text/css" />
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
                        <h4>
                            Tu genealogia:
                            <select class="selectpicker mt-3" onchange="getReport(this.value)" id="type">
                                <option value="1">Grupo Personal</option>
                                <option value="2">Organizacional</option>
                            </select>
                            <input type="hidden" value='{{ $associateid }}' id="associateid">
                        </h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="statusPers" class="table table-striped table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Lvl</th>
                                <th class="text-center"><p class="main-th-space">Nombre</p></th>
                                <th class="text-center">Id</th>
                                <th class="text-center">Rango</th>
                                <th class="text-center">País</th>
                                <th class="text-center">VP Marzo</th>
                                <th class="text-center"># Incorporaciones</th>
                                <th class="text-center">Evento</th>
                                <th class="text-center">Estatus VP</th>
                                <th class="text-center">Estatus Incoporaciones</th>
                                <th class="text-center">Estatus Eventos</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('fproh/mainjs/finszsaludables/finszsaludables.js') }}"></script>
    <script>
        getReport();
    </script>
@endsection