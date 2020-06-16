@extends('preInscInfluencer.layout')

@section('tittlePage')
    <!--Plan Influencer-->
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
<div class="row mt-5" id="cancel-row">
    <div class="form-group col-md-1"></div>
    <div class="col-xl-10 col-lg-10 col-sm-12 layout-spacing mt-5">
        <div class="statbox widget box box-shadow card">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-2">
                        <img src="{{ asset('fpro/img/logo-black.png') }}" width="25%">
                        <h2 class="text-black">Select your Language / Selecciona el idioma</h2>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row justify-content-center mt-5">
                    <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <a href="preInscInfForm/en">
                            <img src="{{ asset('fpro/img/preInscInfluencer/en.png') }}" class="img_country rounded bs-toolti" data-toggle="tooltip" data-placement="left" title="" data-original-title="ENGLISH">
                        </a>
                        <br>
                        <label for="full-name" class="text-center"> <b>ENGLISH</b></label>   
                    </div>
                    <div class="form-group col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <a href="preInscInfForm/esp">
                            <img src="{{ asset('fpro/img/preInscInfluencer/es.png') }}" class="img_country rounded bs-toolti" data-toggle="tooltip" data-placement="left" title="" data-original-title="ESPAÑOL">
                        </a>
                        <br>
                        <label for="inputEmail" class="text-center"><b>ESPAÑOL</b></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/mainjs/preInscInfluencer/preInscInfluencer.js') }}"></script>
@endsection