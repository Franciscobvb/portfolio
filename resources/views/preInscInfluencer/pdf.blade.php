<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>NIKKEN Chile</title>
        <style>
            body{
                font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;;
            }
            h1{
                text-align: center;
                text-transform: uppercase;
            }
            .contenido{
                width: 90%;
                
                padding: 1rem 1rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem
                rgba(0, 123, 255, 0.25);
                margin: auto;
            }
            #primero{
                background-color: #ccc;
            }
            #segundo{
                color:#44a359;
            }
            #tercero{
                text-decoration:line-through;
            }

            .col-md-4{
                width: 49%;
                padding-left: 1px;
                float: left;
            }

            .col-md-4-1{
                width: 49%;
                padding-right: 1px;
                float: right;
            }

            .after-box {
                clear: left;
            }

            .blur-bg {
                width: 100%;
                height: 100%;
                position: fixed;
                /* filter: blur(5px); */
                /* -webkit-filter: blur(5px); */
                background: #1b1c25 url('http://services.nikken.com.mx/fproh/img/regactivinf/bg.jpg') no-repeat fixed;
                /* background: #1b1c25 url('https://nikkenlatam.com/interno/panel-marketing/assets/images/general/bg-pattern.jpg') fixed; */
                background-size: contain;
                z-index: -2;
            }
        </style>
    </head>
    <body>
        <div class="blur-bg"></div>
        <center>
            <img src="{{ asset('fpro/img/logo-black.png') }}" width="25%">
        </center>
        <h1 style="color: black; padding-top: 0;">NIKKEN Latinoamérica</h1>
        <hr>
        <div class="contenido">
            <div class="col-md-4">
                <label>
                    <b>{{ __('lang.label') }}</b>
                </label>
                <br>
                @foreach ($sponsor as $data)
                    @php
                        $sponsor = $data->associateid . " - " . $data->associateName;
                    @endphp
                @endforeach
                @foreach ($datainserted as $row)
                    @php
                        $associateId = $row->AssociateId;
                        $name = $row->ApFirstName;
                        $Phone1 = $row->Phone1;
                        $Phone2 = $row->Phone2;
                        $E_Mail = $row->E_Mail;
                    @endphp
                @endforeach
                <label>
                    <b><label id="sponsorCode">{{ $sponsor }}</label></b>
                </label>
                <br><br><br>
                <label>
                    <b>{{ __('lang.labelAsBi')}}</b>
                </label>
                <br><br>
                <label>
                    {{ __('lang.labelCode')}}<b> <label id="newadvisorCode">{{ $associateId }}</label></b>
                </label>
                <br><br>
                <label>
                    {{ __('lang.labelName')}}<b> <label id="newadvisorName">{{ $name }}</label></b>
                </label>
                <br><br>
                <label>
                    {{ __('lang.labelCelPhone')}}<b> <label id="newadvisorPhone">{{ $Phone1 }}</label></b>
                </label>
                <br><br>
                <label>
                    {{ __('lang.labelTel')}}<b> <label id="newadvisorPhone2">{{ $Phone2 }}</label></b>
                </label>
                <br><br>
                <label>
                    {{ __('lang.labelEmail')}}<b> <label id="newadvisorEmail">{{ $E_Mail }}</label></b>
                </label>
            </div>
            <div class="col-md-4-1">
                <img alt="logo" src="{{ asset('fproh/img/preInscInfluencer/planInfC.png') }}" width="100%">
            </div>
            <section class="after-box"></section>
        </div>
    </body>
</html>

