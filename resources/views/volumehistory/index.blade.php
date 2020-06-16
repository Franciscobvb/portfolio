<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('fproh/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/plugins.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('fproh/css/default-dashboard/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/datatables.css') }}">

    <link rel="stylesheet" href="{{ asset('fproh/maincss/volumehistory/volumehistory.css') }}">
</head>
<body class="default-sidebar" style="">
    <div class="statbox widget box box-shadow card">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-black ml-2 mt-2">
                        <b>
                            <span id="yearVo">2020</span> {{ __('auth.tittle') }}
                        </b>
                    </h3>
                </div>                 
            </div>
        </div>
        <div class="widget-content widget-content-area text-center text-black">
            <p>{{ __('auth.notification') }}</p>
            <p class="text-left">
                {{ __('auth.lblAssociateId') }} <b>{{ $associateid }}</b> | {{ __('auth.lblYear') }}: 
                @php
                    $lastYear = Date('Y');
                    $lastYear = $lastYear - 1;
                @endphp
                @if ($lastYear >= 2020)
                    <input type="radio" checked="false" name="year" id="last" value="{{ $lastYear }}" data-year="{{ $lastYear }}" onclick="getReport(this.id)"> <label for="last">{{ $lastYear }}</label> &nbsp; - &nbsp;
                @endif
                <input type="radio" checked="true" name="year" id="current" value="{{ Date('Y') }}" data-year="{{ Date('Y') }}" onclick="getReport(this.id)"> <label for="current">{{ Date('Y') }}</label>
                <input type="hidden" id="totalText" value="{{ __('auth.tdTotals') }}">
                <input type="hidden" id="associateid" value="{{ $associateid }}">
            </p>
            <div class="table-responsive mb-4">
                <table id="volumeGenealogy" class="table table-striped table-bordered table-hover" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="text-black">{{ __('auth.thPeriod') }}</th>
                            <th class="text-black">{{ __('auth.thName') }}</th>
                            <th class="text-black">PPV</th>
                            <th class="text-black">PGPV</th>
                            <th class="text-black">{{ __('auth.thRetailPGPV') }}</th>
                            <th class="text-black">OPV</th>
                            <th class="text-black">OPV-OPL</th>
                            <th class="text-black">OPV-OP-SL</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <td class="text-left">
                                <b><span id="totalLavel"></span></b>
                            </td>
                            <th class="text-black"></th>
                            <td>
                                <b><span id="PPV"></span></b>
                            </td>
                            <td>
                                <b><span id="PGPV"></span></b>
                            </td>
                            <td>
                                <b><span id="RETAIL_PGPV"></span></b>
                            </td>
                            <td>
                                <b><span id="OPV"></span></b>
                            </td>
                            <td>
                                <b><span id="OPV_OPL"></span></b>
                            </td>
                            <td>
                                <b><span id="OPV_OP_SL"></span></b>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('fproh/js/app.js') }}"></script>
<script src="{{ asset('fproh/js/custom.js') }}"></script>
<script src="{{ asset('fproh/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('fproh/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>
<input type="hidden" name="lang" id="lang" value="{{ $lang }}">
<script src="{{ asset('fproh/mainjs/volumehistory/volumehistory.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</html>