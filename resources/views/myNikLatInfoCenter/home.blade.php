@extends('myNikLatInfoCenter.layout')

@section('tittlePage')
    <!--Plan Influencer-->
@endsection

@section('styles')
    <link href="{{ asset('fproh/plugins/editors/tinymce/stylesheet.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('bg')
    <div class="blur-bg"></div>
@endsection

@section('content')
<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Agregar o editar contenido al centro de información de My Nikken Latinoamérica</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-lg-12">
                        <textarea id="infoCenterConent">

                        </textarea>
                    </div>
                    <div class="col-lg-12 mt-3 text-center">
                        <button class="btn btn-gradient-success btn-rounded mb-4 mr-2" onclick="getPostSave()">Guardar publicación</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('fproh/plugins/editors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/editors/tinymce/editor_tinymce.js') }}"></script>
    <script src="{{ asset('fproh/mainjs/myNikLatInfoCenter/myNikLatInfoCenter.js') }}"></script>
@endsection