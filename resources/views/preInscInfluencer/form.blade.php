@extends('preInscInfluencer.layout')

@section('styles')
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fpro/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/css/ui-kit/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('fproh/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
<div class="row" id="cancel-row">
    <div class="form-group col-md-1"></div>
    <div class="col-xl-10 col-lg-10 col-sm-12 layout-spacing ">
        <div class="statbox widget box box-shadow card">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                        <img src="{{ asset('fpro/img/logo-black.png') }}" width="20%">
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div id="simple-2" class="rounded-pills">
                    <div class="row">
                        <div class="col-12">
                            <div class="crumbs breadcrumbs-style-2 text-center">
                                <ul class="breadcrumb">
                                    <li class="mb-2">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('fproh/img/preInscInfluencer/planInfC.png') }}" width="25px">
                                        </a>
                                    </li>
                                    <li class="active mb-2" id="step_1">
                                        <a href="javascript:void(0)">
                                            Pre-registro
                                        </a>
                                    </li>
                                    <li class="mb-2" id="step_2">
                                        <a href="javascript:void(0)">
                                            Finalizar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr class="main-hr">

                    <div class="alert alert-info br-50 mb-4" role="alert">
                        <strong>{{ __('lang.alert') }}</strong>
                    </div>

                    <div class="alert alert-info br-50 mb-4" role="alert">
                        <strong>{{ __('lang.rquired') }}</strong>
                    </div>

                    <div class="row">
                        <div class="colsm-12 col-md-12 col-lg-12 col-xl-12 text-center mb-4">
                            <button type="button" class="btn btn-gradient-primary btn-rounded pb-2 pt-2 main-width" id="returnIncorporation" onclick="returnIncorporation()">
                                Retomar pre-inscripción
                                <span class="flaticon-edit-4"></span>
                            </button>
                            @if (!empty($associateid))
                                <a href="../../preInscInfSponsorGen/{{ $lang }}/{{ $associateid }}" target="_new" class="btn btn-gradient-primary btn-rounded pb-2 pt-2 main-width">
                                    ver mi genealogia
                                    <span class="flaticon-view"></span>
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent-1">
                        <div class="tab-pane fade show active" id="step_1_frm">
                            <form id="formProfile" border="none" method="get">
                                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                                <div class="col-md-12 tooltip-section">
                                    <div class="row">
                                        <div class="colsm-12 col-md-6 col-lg-6 col-xl-6">
                                            <div class="row text-black">
                                                <div class="form-goup col-md-12">
                                                    <label for="slctPais"><span style="color: red !important;">*</span> <b>{{ __('lang.labelCountry') }}</b></label>
                                                    <select class="form-control-rounded form-control" id="slctPais" name="slctPais" onchange="getPaisElemnts(this.value)">
                                                        <option value="" selected disabled>Seleccione...</option>
														<option value="ECU">Ecuador</option>
														<option value="PAN">Panamá</option>
														<option value="PER">Perú</option>
                                                    </select>
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="name"><span style="color: red !important;">*</span> <b>{{ __('lang.name') }}</b></label>
                                                    <input autocomplete="off" type="text" class="form-control-rounded form-control" id="name" name="name" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="firstName"><span style="color: red !important;">*</span> <b>{{ __('lang.firstName') }}</b></label>
                                                    <input autocomplete="off" type="text" id="firstName" name="firstName" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="secondName"><span style="color: red !important;">*</span> <b>{{ __('lang.secondName') }}</b></label>
                                                    <input autocomplete="off" type="text" id="secondName" name="secondName" class="form-control form-control-rounded" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="birthDate"><span style="color: red !important;">*</span> <b>{{ __('lang.birthDate') }}</b></label>
                                                    <input autocomplete="off" type="date" id="birthDate" name="birthDate" class="form-control form-control-rounded">
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="celPhone"><span style="color: red !important;">*</span> <b>{{ __('lang.celPhone') }}</b></label>
                                                    <input autocomplete="off" type="text" id="celPhone" name="celPhone" class="form-control form-control-rounded" maxlength="10" >
                                                </div>
                                                <div class="form-goup col-md-12 mt-1">
                                                    <label for="phone"><span style="color: red !important;"></span> <b>{{ __('lang.phone') }}</b></label>
                                                    <input autocomplete="off" type="text" id="phone" name="phone" class="form-control form-control-rounded" maxlength="10" >
                                                </div>
                                                <div class="form-goup col-md-12">
                                                    <label for="slctGender"><span style="color: red !important;">*</span> <b>Genero: </b></label>
                                                    <select class="form-control-rounded form-control" id="slctGender" name="slctGender">
                                                        <option value="" selected disabled>Seleccione...</option>
                                                        <option value="M">Masculino</option>
														<option value="F">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-black">
                                            <div class="form-goup col-md-12">
                                                <label for="slctItemKit"><span style="color: red !important;">*</span> <b>Kit de Inicio</b></label>
                                                <select class="form-control-rounded form-control" id="slctItemKit" name="slctItemKit">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                    <option value="5023">5023 KIT INFLUENCER PI WATER</option>
                                                    <option value="5024">5024 KIT INFLUENCER WATERFALL	</option>
                                                    <option value="5025">5025 KIT INFLUENCER PAQUETE PI WATER + OPTIMIZER </option>
                                                    <option value="5026">5026 KIT INFLUENCER PAQUETE WATERFALL + OPTIMIZER </option>
                                                    <option value="5027">5027 KIT INFLUENCER OPTIMIZER	</option>
                                                </select>
                                            </div>
                                            @if (empty($associateid))
                                                <div class="form-goup col-md-12 mt-3">
                                                    <label>{{ __('lang.warning')}}</label>
                                                </div>
                                                <div class="form-goup col-md-12">
                                                    <label>{{ __('lang.warning2')}}</label>
                                                </div>
                                            @endif
                                            <div class="form-goup col-md-12">
                                                <input type="hidden" id="sponsorId" name="sponsorId" class="form-control" readonly="" value="">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1">
                                                <label for="superSearch">
                                                    <span style="color: red !important;">*</span>
                                                    @if (empty($associateid))
                                                        <b>{{ __('lang.searchName') }}</b>
                                                    @else
                                                        <b>Patrocinador: </b>
                                                    @endif
                                                </label>
                                                @if (empty($associateid) || $associateid == 0)
                                                    @php $readonly = "" @endphp
                                                @else
                                                    @php $readonly = "readonly" @endphp
                                                @endif
                                                <input class="form-control form-control-rounded" {{ $readonly }} name="superSearch" id="superSearch" onkeyup="loadSponsors()" onchange="validaVacio()" onfocus="hidealeatorio()" onblur="validaVacio()" value="{{ $val }}">
                                                <div id="respuesta"></div>
                                            </div>
                                            <div class="form-goup col-md-12 mt-1">
                                                <label for="email"><span style="color: red !important;">*</span> <b>{{ __('lang.email') }}</b></label>
                                                <input autocomplete="off" type="email" id="email" name="email" class="form-control form-control-rounded" onchange="validateMail()">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1">
                                                <label for="confEmail"><span style="color: red !important;">*</span> <b>{{ __('lang.conEmail') }}</b></label>
                                                <input autocomplete="off" type="email" id="confEmail" name="confEmail" class="form-control form-control-rounded" onchange="validateMailEqual()">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1">
                                                <label for="slctTipDoc"><span style="color: red !important;">*</span> <b>Tipo de documento:</b></label>
                                                <select class="form-control-rounded form-control" id="slctTipDoc" name="slctTipDoc">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="form-goup col-md-12 mt-1">
                                                <label for="numDocto"><span style="color: red !important;">*</span> <b>Numero de documento:</b></label>
                                                <input autocomplete="off" type="text" class="form-control-rounded form-control" id="numDocto" name="numDocto" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divCiudad">
                                                <label for="slctCiudad"><span style="color: red !important;">*</span> <b>Ciudad: </b></label>
                                                <select class="form-control basic" id="slctCiudad" name="slctCiudad">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divInpProvincia">
                                                <label for="inpProv"><span style="color: red !important;">*</span> <b>Provincia:</b></label>
                                                <input autocomplete="off" type="text" id="inpProv" name="inpProv" class="form-control form-control-rounded" onchange="validateMailEqual()">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divDeptoPer">
                                                <label for="slctDepto"><span style="color: red !important;">*</span> <b>Departamento: </b></label>
                                                <select class="form-control basic" id="slctDepto" name="slctDepto">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divProvPer">
                                                <label for="slctProv"><span style="color: red !important;">*</span> <b>Provincia: </b></label>
                                                <select class="form-control basic" id="slctProv" name="slctProv">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divInpCiudad">
                                                <label for="inpCiudad"><span style="color: red !important;">*</span> <b>Ciudad:</b></label>
                                                <input autocomplete="off" type="text" id="inpCiudad" name="inpCiudad" class="form-control form-control-rounded" onchange="validateMailEqual()">
                                            </div>
                                            <div class="form-goup col-md-12 mt-1" id="divDistPer">
                                                <label for="slctDist"><span style="color: red !important;">*</span> <b>Distrito: </b></label>
                                                <select class="form-control basic" id="slctDist" name="slctDist">
                                                    <option value="" selected disabled>Seleccione...</option>
                                                </select>
                                            </div>
                                            <div class="form-goup col-md-12" id="sponsorRandoomLabel" hidden>
                                                <br><br>
                                                <label hidden>{{ __('lang.label') }}</label><br>
                                                <label id="sponsorLabel" hidden></label>
                                            </div>
                                            <div class="form-goup col-md-12" id="sponsorRandoom__" hidden>
                                                <div class="row">
                                                    <div class="form-group col-2 text-center">
                                                        <label for="withoutSponsor" class="switch s-icons s-outline s-outline-dark">
                                                            <input type="checkbox" name="withoutSponsor" id="withoutSponsor" value="withoutSponsor">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group col-10">
                                                        <b><label>{{ __('lang.labelWithOutSponsor') }}</label></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-goup col-md-12 mt-1 text-black">
                                            <label for="dirRecidencia"><span style="color: red !important;">*</span> <b>Direccion de Residencia</b></label>
                                            <input autocomplete="off" type="text" class="form-control-rounded form-control" id="dirRecidencia" name="dirRecidencia" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();">
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 mt-4 mb-4">
                                            <div class="widget-content widget-content-area text-center h-100 br-4">
                                                <div id="total-booking" class="widget-card text-black">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="coTitular" class="switch s-icons s-outline s-outline-info" style="margin-left: 20px !important;">
                                                                <input type="checkbox" name="coTitular" id="coTitular" onclick="addCoTitlar()">
                                                                <span class="slider round"></span>
                                                            </label><br>
                                                            <label>Deseo incorporarme con un cotitular. (opcional)</label>
                                                        </div>

                                                        <div class="row text-justify" id="cotitularData">
                                                            <div class="form-goup col-md-4 mt-1">
                                                                <label for="nameCoTitular"><b>{{ __('lang.name') }}</b></label>
                                                                <input autocomplete="off" type="text" class="form-control-rounded form-control" id="nameCoTitular" name="nameCoTitular" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                            </div>
                                                            <div class="form-goup col-md-4 mt-1">
                                                                <label for="firstNameCoTitular"><b>{{ __('lang.firstName') }}</b></label>
                                                                <input autocomplete="off" type="text" id="firstNameCoTitular" name="firstNameCoTitular" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                            </div>
                                                            <div class="form-goup col-md-4 mt-1">
                                                                <label for="secondNameCoTitular"><b>{{ __('lang.secondName') }}</b></label>
                                                                <input autocomplete="off" type="text" id="secondNameCoTitular" name="secondNameCoTitular" class="form-control form-control-rounded" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                                            </div>

                                                            <div class="form-goup col-md-6 mt-1">
                                                                <label for="slctTipDocCoTitular"><b>Tipo de documento:</b></label>
                                                                <select class="form-control-rounded form-control" id="slctTipDocCoTitular" name="slctTipDocCoTitular">
                                                                    <option value="" selected disabled>Seleccione...</option>
                                                                </select>
                                                            </div>
    
                                                            <div class="form-goup col-md-6 mt-1">
                                                                <label for="numDoctoCoTitular"><b>Numero de documento:</b></label>
                                                                <input autocomplete="off" type="text" class="form-control-rounded form-control" id="numDoctoCoTitular" name="numDoctoCoTitular" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="alert-info br-50 pt-4 alert-dismissible fade show col-md-12 text-center mt-3" role="alert" style="color: #fff; background-color: #A2DADA !important;border-color: #A2DADA !important;">
                                            <strong>
                                                <div class="custom-control custom-checkbox mr-3">
                                                    <label for="chk2" class="switch s-icons s-outline s-outline-info" style="margin-left: 20px !important;">
                                                        <input type="checkbox" name="chk2" id="chk2">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <br>
                                                    <label class="text-black">{{ __('lang.permissions') }}</label>
                                                </div>
                                            </strong> 
                                        </div>

                                        <div class="text-center form-group col-md-12">
                                            <input type="hidden" id="alertDuplicateMail" value="{{ __('lang.alertDuplicateMail') }}" readonly>
                                            <input type="hidden" id="alertMailsMatchError" value="{{ __('lang.alertMailsMatchError') }}" readonly>
                                            <input type="hidden" id="alertRegistrationOk" value="{{ __('lang.alertRegistrationOk') }}" readonly>
                                            <input type="hidden" id="alertHeigtAge" value="{{ __('lang.alertHeigtAge') }}" readonly>
                                            <input type="hidden" id="alertAgeInvalid" value="{{ __('lang.alertAgeInvalid') }}" readonly>
                                            <input type="hidden" id="rquired" value="{{ __('lang.rquired') }}" readonly>
                                            <input type="hidden" id="texteEnd" value="{{ __('lang.texteEnd') }}" readonly>
                                            <input type="hidden" id="loginError" value="{{ __('lang.loginError') }}" readonly>
                                            <input type="hidden" id="alertSponsorId" value="{{ __('lang.alertSponsorId') }}" readonly>
                                            <input type="hidden" id="alertMailInvalid" value="{{ __('lang.alertMailInvalid') }}" readonly>
                                            <input type="hidden" id="language" value="{{ $lang }}" readonly>
                                            <label id="cargando" name="cargando" style="display: none"> {{ __('lang.labelLoad') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                                                <button type="button" class="btn btn-gradient-warning btn-rounded pb-2 pt-2 main-width" id="btnProfile">
                                                    {{ __('lang.next') }}
                                                    <span class="flaticon-send"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent-2">
                        <div class="tab-pane fade show active" id="step_2_frm">
                            <form id="formConfirmation" border="none" style="display: none">
                                <div class="col-md-12 tooltip-section">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                <b>{{ __('lang.label') }}</b>
                                            </label>
                                            <br>
                                            <label>
                                                <b><label id="sponsorCode"></label></b>
                                            </label>
                                            <br><br>
                                            <label>
                                                <b>{{ __('lang.labelAsBi')}}</b>
                                            </label>
                                            <br>
                                            <label>
                                                <b>{{ __('lang.labelCode')}} <label id="newadvisorCode"></label></b>
                                            </label>
                                            <br>
                                            <label>
                                                <b>{{ __('lang.labelName')}} <label id="newadvisorName"></label></b>
                                            </label>
                                            <br>
                                            <label>
                                                <b>{{ __('lang.labelCelPhone')}} <label id="newadvisorPhone"></label></b>
                                            </label>
                                            <br>
                                            <label>
                                                <b>{{ __('lang.labelTel')}} <label id="newadvisorPhone2"></label></b>
                                            </label>
                                            <br>
                                            <label>
                                                <b>{{ __('lang.labelEmail')}} <label id="newadvisorEmail"></label></b>
                                            </label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-goup col-md-12">
                                                <a href="javascript:void(0)" onclick="getPdf()">
                                                    <h4><img src="{{asset('fpro/img/pdf.png')}}" width="8%"> {{ __('lang.labelDownloadPDF')}}</h4>
                                                </a>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="alert alert-dismissible fade show col-md-12 text-center" role="alert" style="color: #fff; background-color: #A2DADA !important;border-color: #A2DADA !important; display: none" id="permissions">
                                            <strong>
                                                <div class="custom-control custom-checkbox mr-3">
                                                    <label for="chk2" class="switch s-icons s-outline s-outline-info" style="margin-left: 20px !important;">
                                                        <input type="checkbox" name="chk2" id="chk2">
                                                        <span class="slider round"></span>
                                                    </label>
                                                    <br>
                                                    <label>{{ __('lang.direct_deposit_agreement') }}</label>
                                                </div>
                                            </strong> 
                                        </div>
                                        <div style="text-align: right !important;" class=" form-group col-md-12">
                                            <!--<button type="button" class="btn btn-info" id="btnProfile"><label id="botonProccess">{{ __('lang.next') }}</label></button>-->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent-log">
                        <div class="tab-pane fade show active" id="step_3_log">
                            <form id="formLogin" border="none" method="POST">
                                <div class="col-md-12 login-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <br>
                                            <div class="alert alert-info col-md-12 text-justify br-50" role="alert" id="profileAltert">
                                                {{ __('lang.loginAlert') }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-goup col-md-12">
                                                <label for="userName"><span style="color: red !important;">*</span> <b>{{ __('lang.loginNameLabel') }}</b></label>
                                                <input type="text" id="userName" name="userName" class="form-control-rounded form-control">
                                            </div>
                                            <div class="form-goup col-md-12">
                                                <label for="userPass"><span style="color: red !important;">*</span> <b>{{ __('lang.loginPassLabel') }}</b></label>
                                                <input type="password" id="userPass" name="userPass" class="form-control-rounded form-control">
                                            </div>
                                            <div class="form-goup col-md-12">
                                                <br>
                                                <button type="button" class="btn btn-rounded btn-maingradient-color" id="loginButton" onclick="login()">{{ __('lang.loginButton') }}</button>
                                                <button type="button" class="btn btn-rounded btn-maingradient-color" onclick="rescuePass()">{{ __('lang.btnForgotPass') }}</button>
                                            </div> 
                                        </div>
                                        <div class="col-md-6" id="forgotAcountForm">
                                            <div class="form-goup col-md-12">
                                                <label for="forgotAcountMail"><span style="color: red !important;">*</span> <b>{{ __('lang.labelFmail') }}</b></label>
                                                <input type="text" id="forgotAcountMail" name="forgotAcountMail" class="form-control-rounded form-control">
                                            </div>
                                            <div class="form-goup col-md-12">
                                                <br>
                                                <button type="button" class="btn btn-rounded btn-maingradient-color" onclick="submitRecoverPass()" id="recoverPassBTN">{{ __('lang.btnRecoverPass') }}</button>
                                                <input type="hidden" id="alertAcountError" name="alertAcountError" class="form-control" value="{{ __('lang.alertAcountError') }}">
                                                <input type="hidden" id="alertAcountRecovered" name="alertAcountRecovered" class="form-control" value="{{ __('lang.alertAcountRecovered') }}">
                                                <label id="msgvalidating"><b>{{ __('lang.lavelFpassMessage') }}...</b></label>
                                            </div>
                                        </div>
                                        <hr><br><br>
                                        <div class="alert alert-info col-md-12 text-justify mt-3 br-50" role="alert" id="profileAltert" hidden>
                                            {{ __('lang.labelRegister1') }}
                                            <a href="http://signup.nikkenlatam.com/">
                                                {{ __('lang.labelRegister2') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modals -->
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="returnIncForm">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Retomar pre-Inscripción</h5>
                </div>
                <div class="modal-body">
                    <form id="retIncForm">
                        <div class="row">
                            <div class="colsm-12 col-md-6 col-lg-6 col-xl-6 text-black">
                                <div class="form-goup col-md-12">
                                    <label for="slctPaisReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.labelCountry') }}</b></label>
                                    <select class="form-control-rounded form-control" id="slctPaisReturn" name="slctPaisReturn" onchange="getPaisElemntsReurn(this.value)">
                                        <option value="LAT">México</option>
                                        <option value="ECU">Ecuador</option>
                                        <option value="PAN">Panamá</option>
                                        <option value="PER">Perú</option>
                                    </select>
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="nameReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.name') }}</b></label>
                                    <input autocomplete="off" type="text" class="form-control-rounded form-control" id="nameReturn" name="nameReturn" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="firstNameReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.firstName') }}</b></label>
                                    <input autocomplete="off" type="text" id="firstNameReturn" name="firstNameReturn" class="form-control-rounded form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="secondNameReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.secondName') }}</b></label>
                                    <input autocomplete="off" type="text" id="secondNameReturn" name="secondNameReturn" class="form-control form-control-rounded" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onkeydown="this.value = this.value.toUpperCase();" onchange="this.value = this.value.toUpperCase();" onkeypress="return onlyLetters(event)">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="celPhoneReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.celPhone') }}</b></label>
                                    <input autocomplete="off" type="text" id="celPhoneReturn" name="celPhoneReturn" onKeypress="if (event.keyCode 57) event.returnValue = false;" class="form-control form-control-rounded" maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-6 text-black">
                                <div class="form-goup col-md-12">
                                    <label for="slctItemKitReturn"><span style="color: red !important;">*</span> <b>Kit de Inicio</b></label>
                                    <select class="form-control-rounded form-control" id="slctItemKitReturn" name="slctItemKitReturn">
                                        <option value="5023">5023 KIT INFLUENCER PI WATER</option>
                                        <option value="5024">5024 KIT INFLUENCER WATERFALL	</option>
                                        <option value="5025">5025 KIT INFLUENCER PAQUETE PI WATER + OPTIMIZER </option>
                                        <option value="5026">5026 KIT INFLUENCER PAQUETE WATERFALL + OPTIMIZER	</option>
                                        <option value="5026">5027 KIT INFLUENCER OPTIMIZER	</option>
                                    </select>
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="sponsorReturn">
                                        <span style="color: red !important;">*</span>
                                        <b>Patrocinador: </b>
                                    </label>
                                    <input class="form-control form-control-rounded" readonly name="sponsorReturn" id="sponsorReturn" onkeyup="loadSponsors()" onchange="validaVacio()" onfocus="hidealeatorio()" onblur="validaVacio()" value="{{ $val }}">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="associateidAssigned"><span style="color: red !important;">*</span> <b>Código asignado:</b></label>
                                    <input autocomplete="off" type="email" id="associateidAssigned" readonly name="associateidAssigned" class="form-control form-control-rounded" onchange="validateMailEqual()">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="emailReturn"><span style="color: red !important;">*</span> <b>{{ __('lang.email') }}</b></label>
                                    <input autocomplete="off" type="email" id="emailReturn" name="emailReturn" class="form-control form-control-rounded" onchange="validateMail()">
                                </div>
                                <div class="form-goup col-md-12 mt-1">
                                    <label for="phoneReturn"><span style="color: red !important;"></span> <b>{{ __('lang.phone') }}</b></label>
                                    <input autocomplete="off" type="text" id="phoneReturn" name="phoneReturn" class="form-control form-control-rounded" maxlength="10">
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4">
                                <div role="alert" class="alert alert-gradient-inf br-50 mb-4">
                                    <strong>Al confirmar, se te volveran a enviar las credenciales de acceso al correo que ingresaste en este formulario.</strong>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-4 mb-3">
                                <button type="button" class="btn btn-gradient-warning btn-rounded pb-2 pt-2 main-width" id="updatePreReg" onclick="updatePreInsc()">
                                    Confirmar
                                    <span class="flaticon-send"></span>
                                </button>
                                <button type="button" class="btn btn-gradient-warning btn-rounded pb-2 pt-2 main-width" onclick="cancelupdatePreReg()">
                                    Cancelar
                                    <span class="flaticon-close-fill"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('fpro/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
    <script src="{{ asset('fpro/plugins/bootstrap-wizard/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fpro/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/modalEffects.js') }}"></script>
    <script src="{{ asset('fproh/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('fproh/mainjs/preInscInfluencer/preInscInfluencer.js') }}"></script>
@endsection