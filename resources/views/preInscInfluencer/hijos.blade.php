@extends('preInscInfluencer.layout')

@section('styles')
    <link href="{{ asset('fpro/css/ui-kit/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fpro/plugins/table/datatable/custom_dt_zero_config.css') }}">
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing ">
        <div class="statbox widget box box-shadow card">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                        <img src="{{ asset('fpro/img/logo-black.png') }}" width="20%">
                        <a href="javascript:void(0)" class="btn btn-gradient-warning btn-rounded pull-right" onclick="salir()">Cerrar sesión</a>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <input type="hidden" id="language" name="language" value="{{ $language }}">
                <h2 class="text-center text-black">Bonificaciones</h2>
                <div class="row">
                    <div class="col-xl-2 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6"></div>
                    <div class="col-xl-4 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area data-widgets br-4 card personal-shadow">
                            <div class="widget t-customer-widget">
                                <div class="media">
                                    <div class="icon ml-1">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Obtenidas:</p>
                                        <p class="widget-numeric-value"><span id="bonObtenido"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mb-xl-0 col-lg-6 mb-4 col-md-6 col-sm-6">
                        <div class="widget-content-area data-widgets br-4 card personal-shadow">
                            <div class="widget t-sales-widget">
                                <div class="media">
                                    <div class="icon ml-1">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Por obtener:</p>
                                        <p class="widget-numeric-value"><span id="bonEspera"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive mb-4">
                    <br>
                    <table id="zero-config-down" class="table table-striped table-hover table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nivel</th>
                                <th>Código</th>
                                <th><p style="width: 150px">{{ __('lang.tabName') }}</p></th>
                                <th>Tipo</th>
                                <th>País</th>
                                <th>{{ __('lang.tabMail') }}</th>
                                <th>{{ __('lang.tabCelpone') }}</th>
                                <th>Item</th>
                                <th>Kit influencer</th>
                                <th>Bono</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $num = 1;
                                $data = 0;
                                $obtenido = 0;
                                $porobtener = 0;
                            @endphp
                            @foreach ($response as $row)
                                @php
                                    $curAssocInfo = explode(';', $statusGen);
                                    $assocStatus = explode('-', $curAssocInfo[$data]);

                                    $enable = false;
                                    $text = "";
                                    $target = "";
                                    $class = "";
                                    $val = "";
                                    $patRestoGenealogia = 0;

                                    $test = "";

                                    if($assocStatus[4] == 1 && $assocStatus[1] == 0){
                                        $text = 'Finalizar pago';
                                        $href = "http://signup.nikkenlatam.com/incorporation/checkoutre?email=" . $row->E_Mail . "&item=5006&amount=1/profile/ch/$language";
                                        $target = "target='_new'";
                                        $class = "btn btn-info btn-rounded";
                                    }
                                    else{
                                        if($row->associateid == $associateid){
                                            if($assocStatus[3] == 'otro'){
                                                if($assocStatus[1] == 1){
                                                    $patRestoGenealogia = 1;
                                                    $text = "Inscripción finalizada";
                                                    $href = "javascript:void(0)";
                                                    $target = "";
                                                    $class = "btn btn-gradient-warning btn-rounded";
                                                    $obtenido = $obtenido + $row->Bonus;
                                                }
                                                else{
                                                    $text = "Finalizar inscripción";
                                                    $href = "http://signup.nikkenlatam.com/preinscripcion/retomar/" . base64_encode($row->E_Mail) . "/profile/ch/$language";
                                                    $target = "target='_new'";
                                                    $class = "btn btn-gradient-warning btn-rounded";
                                                    $porobtener = $porobtener + $row->Bonus;
                                                }
                                            }
                                            else{
                                                if($assocStatus[3] == 'CHL'){
                                                    if($patStatus == 1){
                                                        if($assocStatus[1] == 1){
                                                            $patRestoGenealogia = 1;
                                                            $text = "Inscripción finalizada";
                                                            $href = "javascript:void(0)";
                                                            $target = "";
                                                            $class = "btn btn-gradient-info btn-rounded";
                                                            $obtenido = $obtenido + $row->Bonus;
                                                        }
                                                        else{
                                                            $text = "Finalizar inscripción";
                                                            $href = "http://signup.nikkenlatam.com/preinscripcion/retomar/" . base64_encode($row->E_Mail) . "/profile/ch/$language";
                                                            $target = "target='_new'";
                                                            $class = "btn btn-gradient-warning btn-rounded";
                                                            $porobtener = $porobtener + $row->Bonus;
                                                        }
                                                    }
                                                    else{
                                                        $text = "Patrocinador no inscrito";
                                                        $href = "javascript:void(0)";
                                                        $target = "";
                                                        $class = "btn btn-gradient-info btn-rounded";
                                                        $porobtener = $porobtener + $row->Bonus;
                                                    }
                                                }
                                            }
                                        }
                                        else{
                                            $patRegistred = explode('-', $curAssocInfo[0]);
                                            if($patRegistred[1] == 1){
                                                if($assocStatus[1] == 1){
                                                    $href = "javascript:void(0)";
                                                    $text = "Inscripción finalizada";
                                                    $target = "";
                                                    $class = "btn btn-gradient-info btn-rounded";
                                                    $obtenido = $obtenido + $row->Bonus;
                                                }
                                                else{
                                                    $href = "javascript:void(0)";
                                                    $text = "No ha finalizado la inscripción";
                                                    $target = "";
                                                    $class = "btn btn-gradient-info btn-rounded";
                                                    $porobtener = $porobtener + $row->Bonus;
                                                }
                                            }
                                            else{
                                                $href = "javascript:void(0)";
                                                $text = "Patrocinador no inscrito";
                                                $target = "";
                                                $class = "btn btn-gradient-info btn-rounded";
                                                $porobtener = $porobtener + $row->Bonus;
                                            }
                                        }
                                    }
                                @endphp
                                <tr>
                                    <td>{{ $num }}</td>
                                    <td>{{ $row->nivel }}</td>
                                    <td>{{ $row->associateid }}</td>
                                    <td>{{ $row->ApFirstName }}</td>
                                    <td>{{ __('lang.tabdistributor') }}</td>
                                    <td>{{ $row->Pais }}</td>
                                    <td>{{ $row->E_Mail }}</td>
                                    <td>{{ $row->Phone1 }}</td>
                                    <td>{{ $row->Itemkit }}</td>
                                    <td>{{ $row->Descripcion }}</td>
                                    <td>{{ number_format($row->Bonus, 2) }}</td>
                                    <td class="text-center">
                                        <p style="width: 200px">
                                            <a type='button' class='{{ $class }}' href='{{ $href }}' {{ $target }} >
                                                {{ $text }}
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                                @php
                                    $num++;
                                    $data++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="obtenido" value="{{ number_format($obtenido, 2) }}" disabled>
<input type="hidden" id="porobtener" value="{{ number_format($porobtener, 2) }}" disabled>

@endsection

@section('scripts')
    <script src="{{ asset('fproh/mainjs/preInscInfluencer/preInscInfluencer.js') }}"></script>
    <script src="{{ asset('fpro/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ asset('fpro/plugins/bootstrap-wizard/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
    <script src="{{ asset('fpro/plugins/table/datatable/datatables.js') }}"></script>

    <script>
        $(function() {
            var language = $('#language').val();
            if(language == 'spa'){
                $('#zero-config-down').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
                    },
                    dom: 'Bfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb--7 mr-3', text:"<span class='flaticon-file'></span> {{ __('lang.labelExportExcel') }}",}
                    ]
                });

                $('#zero-config-up').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
                    },
                    dom: 'Bfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb--7 mr-3', text:"<span class='flaticon-file'></span> {{ __('lang.labelExportExcel') }}",}
                    ]
                });
            }
            else{
                $('#zero-config-down').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb--7 mr-3', text:"<span class='flaticon-file'></span> {{ __('lang.labelExportExcel') }}",}
                    ]
                });
                $('#zero-config-up').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb--7 mr-3', text:"<span class='flaticon-file'></span> {{ __('lang.labelExportExcel') }}",}
                    ]
                });
            }
            $('#vgpFinalTxt').text($('#vpFinalLabel').text());
        });

        function salir(){
            window.history.back();
        }

        function showEmail(row){
            alert(row);
        }

        $("#bonObtenido").text('$ ' + $("#obtenido").val());
        $("#bonEspera").text('$ ' + $("#porobtener").val());
    </script>
@endsection