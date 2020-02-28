<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="http://services.nikken.com.mx/fproh/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="http://services.nikken.com.mx/fproh/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="http://services.nikken.com.mx/fproh/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="http://services.nikken.com.mx/fproh/plugins/table/datatable/custom_dt_html5.css">

    <link rel="stylesheet" href="{{ asset('fproh/maincss/volumehistory/volumehistory.css') }}">
</head>
<body class="default-sidebar">
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="topbar-nav header navbar fixed-top nav-header-pers-menu" role="banner">
            <div id="dismiss" class="d-lg-none text-right"><i class="flaticon-cancel-12 mr-3"></i></div>
            <nav id="topbar">
                <ul class="list-unstyled menu-categories d-lg-flex justify-content-lg-around mb-0" id="topAccordion">
                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                            <div>
                                <span>Home</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                            <div>
                                <span>My Business</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false" >
                            <div>
                                <span>Ordering</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                            <div>
                                <span>Information Center</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="false">
                            <div>
                                <span>Recognition</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="content" class="main-content ">
            <div class="container mt-5 pt-3">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
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
                                </p>
                                <div class="table-responsive mb-4">
                                    <table id="volumeGenealogy" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th>{{ __('auth.thPeriod') }}</th>
                                                <th>{{ __('auth.thName') }}</th>
                                                <th>PPV</th>
                                                <th>PGPV</th>
                                                <th>{{ __('auth.thRetailPGPV') }}</th>
                                                <th>OPV</th>
                                                <th>OPV-OPL</th>
                                                <th>OPV-OP-SL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 2; $i++)
                                                <tr class="text-center">
                                                    <td>202001</td>
                                                    <td>Rapp, Herb Martin</td>
                                                    <td>567.40</td>
                                                    <td>4388.43</td>
                                                    <td>769.00</td>
                                                    <td>1077096.46</td>
                                                    <td>115394.46</td>
                                                    <td>10890.81</td>
                                                </tr>
                                            @endfor
                                            <tr  class="text-blue text-center">
                                                <td colspan="2" class="text-left"><b>{{ __('auth.tdTotals') }}</b></td>
                                                <td hidden></td>
                                                <td><b>567.40</b></td>
                                                <td><b>4388.43</b></td>
                                                <td><b>769.00</b></td>
                                                <td><b>1077096.46</b></td>
                                                <td><b>115394.46</b></td>
                                                <td><b>10890.81</b></td>
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
</body>
<script src="http://services.nikken.com.mx/fproh/js/libs/jquery-3.1.1.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/bootstrap/js/popper.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/bootstrap/js/bootstrap.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/js/app.js"></script>
<script src="http://services.nikken.com.mx/fproh/js/custom.js"></script>
<script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/datatables.js"></script>
<script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/jszip.min.js"></script>    
<script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="http://services.nikken.com.mx/fproh/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<input type="hidden" name="lang" id="lang" value="{{ $lang }}">
<script src="{{ asset('fproh/mainjs/volumehistory/volumehistory.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
</html>