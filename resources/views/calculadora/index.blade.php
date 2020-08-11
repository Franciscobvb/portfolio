<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NIKKEN | Calculadora de Influencia 3.0 </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('fpro/img/favicon.ico') }}"/>
    <link rel='stylesheet' type='text/css'href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/plugins.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/default-dashboard/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/sweetalerts/sweetalert.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modules/modules-card.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modules/modules-widgets.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/modals/component.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/css/ui-kit/custom-tooltips_and_popovers.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/maincss/calculadora/calculadora.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fproh/plugins/table/datatable/custom_dt_html5.css') }}">
</head>
<body class="default-sidebar">
    <header class="tabMobileView header navbar fixed-top d-lg-none nav-header-pers">
        <ul class="navbar-nav flex-row ml-lg-auto w-100">
            <li class="nav-item dropdown user-profile-dropdown w-100 text-center">
                <div class="nav-toggle d-inline-block float-left mt-2 ml-2">
                    <a href="javascript:void(0);" class="nav-link  d-inline-block" data-placement="bottom">
                        <img src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" class="img-fluid" alt="logo">
                    </a>
                </div>
            </li>
        </ul>
    </header>

    <header class="desktop-nav header navbar fixed-top nav-header-pers">
        <div class="nav-logo mr-3 ml-4 d-lg-inline-block d-none">
            <a class=""> <img src="{{ asset('fpro/img/min-logo-nikken-black.png') }}" class="img-fluid" alt="logo"></a>
        </div>

        <ul class="navbar-nav flex-row mr-auto">
            <li class="nav-item dropdown language-dropdown mr-3 d-lg-inline-block d-none">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h4 class="text-white mt-2">NIKKEN</h4>
                </a>
            </li>
        </ul>
    </header>

    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="blur-bg"></div>
        <div id="content" class="main-content mt-4">
            <div class="container mt-5 pt-3 influencia30">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing text-center">
                        <img src="{{ asset('fproh/img/influencia30/influencia_logo2.png') }}" class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                        <h3 class="text-white">Sólo un paso más y habrás terminado:</h3>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center mt-5">
                                        <h1 class="text-purpple" id="nombreUser">Francisco Melchor</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area ">
                                <div class="row" id="stepsBody">
                                    <div id="calculadoraInf" class="row pl-4 pr-4 text-black">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing text-black text-center mb-5">
                                            <div class="input-group mb-4 col-xl-3 col-lg-6 col-md-7 m-auto mb-2">
                                                <div class="input-group-prepend">
                                                    <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                        <img id="iconLVL0" class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px">
                                                        Rango
                                                    </span>
                                                </div>
                                                <select id="rangoPadre" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconLVL0'), this.value)">
                                                    <option value="DIR" selected>Directo</option>
                                                    <option value="EXE">Ejecutivo</option>
                                                    <option value="PLA">Plata</option>
                                                    <option value="ORO">Oro</option>
                                                    <option value="PLO">Platino</option>
                                                    <option value="DIA">Diamante</option>
                                                    <option value="DRL">Diamante Real</option>
                                                </select>
                                            </div>
                                            <h4 class="mt-2">De las personas que tu conoces, ¿Quienes crees les gustaría tener este producto?</h4>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo1 text-center">
                                            <form id="nodo1">
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo1" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo1">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo1" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo1'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo1">
                                                    <label class="custom-control-label" for="influencerNodo1">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode1" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode1">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode1')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left" id="bonoInfluenciaNodo1">0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left" id="bonoRetailNodo1">0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo1">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo1">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo1">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo1">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo3 text-center">
                                            <form id="nodo3">
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo3" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo3">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo3" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo3'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo3">
                                                    <label class="custom-control-label" for="influencerNodo3">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode3" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode3">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode3')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoInfluenciaNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoRetailNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo3">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo5 text-center">
                                            <form id="nodo5">
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo5" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo5">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo5" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo5'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo5">
                                                    <label class="custom-control-label" for="influencerNodo5">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode5" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode5">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode5')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoInfluenciaNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoRetailNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo5">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo2 text-center">
                                            <form id="nodo2">
                                                <hr>
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo2" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo2">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo2" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo2'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo2">
                                                    <label class="custom-control-label" for="influencerNodo2">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode2" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode2">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode2')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoInfluenciaNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoRetailNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo2">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo4 text-center">
                                            <form id="nodo4">
                                                <hr>
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="nombreNodo4" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo4">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo4" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo4'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo4">
                                                    <label class="custom-control-label" for="influencerNodo4">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode4" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode4">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode4')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoInfluenciaNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoRetailNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo4">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 layout-spacing nodo6 text-center">
                                            <form id="nodo6">
                                                <hr>
                                                <input type="text" class="form-control-rounded form-control inputText-control mb-3" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="NombreNodo6" placeholder="Ingresa un nombre">
                                                <div class="input-group mb-4 col-xl-10 col-lg-10 col-md-10 m-auto">
                                                    <div class="input-group-prepend">
                                                        <span class="form-control-rounded-left input-group-text" id="basic-addon1" style="border: 3px solid #bb9150;padding: 0 5px 0 5px;border-right-color: transparent;background-color: transparent">
                                                            <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px" id="iconNodo6">
                                                            Rango
                                                        </span>
                                                    </div>
                                                    <select id="rangoNodo6" class="form-control slect-control form-control-rounded-right" style="border: 3px solid #bb9150;border-left-color: transparent;" onchange="changeIcon($('#iconNodo6'), this.value)">
                                                        <option value="cliente">Cliente</option>
                                                        <option value="Influencer">Influencer</option>
                                                        <option value="DIR" selected>Directo</option>
                                                        <option value="EXE">Ejecutivo</option>
                                                        <option value="PLA">Plata</option>
                                                        <option value="ORO">Oro</option>
                                                        <option value="PLO">Platino</option>
                                                        <option value="DIA">Diamante</option>
                                                        <option value="DRL">Diamante Real</option>
                                                    </select>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-primary mt-2">
                                                    <input type="checkbox" class="custom-control-input todochkbox" id="influencerNodo6">
                                                    <label class="custom-control-label" for="influencerNodo6">Nuevo Influencer</label>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-7 col-7 mb-1">Producto</div>
                                                    <div class="col-md-5 col-5 mb-1">Cant.</div>
                                                    <div class="col-xl-7 col-lg-7 col-md-7 col-7">
                                                        <input id="prodNode6" type="text" placeholder="agrega un producto" class="form-control-rounded form-control" required readonly>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-5 text-right">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control-rounded-left form-control text-right" placeholder="0" id="pzsProdNode6">
                                                            <div class="input-group-append">
                                                                <span class="form-control-rounded-right input-group-text">pzas.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-outline-success btn-rounded mb-4 mr-2 mt-3 col-12" type="button" data-toggle="modal" data-target="#modalProductos" onclick="getNodeRef('#prodNode6')">
                                                    <span class="flaticon-add-circle-outline"></span>
                                                    Agregar otro producto
                                                </button>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Plan de Influencia 3.0:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoInfluenciaNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Retail:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoRetailNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Reembolso:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoReembolsoNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Bonificación por grupo 15%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoPorGrupoNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Liderazgo X%:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoLiderNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">
                                                                    Total de bonificaciones:
                                                                </td>
                                                                <td class="text-right">
                                                                    <span id="moneda">$</span>
                                                                </td>
                                                                <td class="text-left">
                                                                    <span id="bonoTotalNodo6">0.00</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-10 col-sm-12 col-12 layout-spacing text-center m-auto">
                                            <div class="table-responsive bonificacionTab">
                                                <table class="table table-bordered table-striped table-checkable table-highlight-head ">
                                                    <thead>
                                                        <tr>
                                                            <td></td>
                                                            <td>Directo</td>
                                                            <td>Ejecutivo</td>
                                                            <td>Plata en adelante</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">
                                                                Plan de Influencia 3.0:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Retail:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Reembolso X%:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Beneficios de grupo X%:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Liderazgo X%:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">
                                                                Total de ingresos:
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="moneda">$</span> 0.00
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12 text-center mt-4">
                                            <button class="btn btn-gradient-success btn-rounded mb-4 mr-2" type="button" onclick="regresarapaso5()">
                                                Regresar
                                            </button>
                                            <button class="btn btn-gradient-warning btn-rounded mb-4 mr-2" type="button" onclick="getBonos()">
                                                Calcular
                                            </button>
                                            <button class="btn btn-gradient-primary btn-rounded mb-4 mr-2" type="reset" onclick="limpiarSimulacion()">
                                                Limpiar
                                            </button>
                                            <button class="btn btn-gradient-success  btn-rounded mb-4" type="button" id="goFinalStep" onclick="final()">
                                                Continuar
                                            </button>
                                        </div>
                                        <div class="col-md-12 text-right pr-4">
                                            <span class="opcional pull-left" style="font-size: 15px !important;">* Beneficio basado en Plan de Influencia 3.0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="chat">
                    <div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="¿Necesitas ayuda? Ve nuestro tutorial" data-toggle="modal" data-target=".mdl-tutorial">
                        <i class="flaticon-question"></i>
                    </div>
                    <div class="modal fade bd-example-modal-lg mdl-tutorial" style="z-index: 1061 !important" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" onclick="stopVideo()">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="myExtraLargeModalLabel"></h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="py-3 text-center">
                                        <video controls="true" class="embed-responsive-item" width="100%">
                                            <!--<source src="{{ asset('fproh/img/influencia30/simulador_4.mp4') }}" type="video/mp4" />-->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade bd-example-modal-xl" id="modalRangos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                                            <h2 class="text-black"><b>Selecciona el rango</b></h2>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-primary btn-rounded mr-2 mt-3 col-12" type="button">
                                                CLIENTE
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/influencer.png') }}" width="20px">
                                                NUEVO INFLUENCER
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-secondary btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIR.png') }}" width="20px">
                                                RANGO DIRECTO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoEjecutivo btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/EXE.png') }}" width="20px">
                                                RANGO EJECUTIVO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-dark btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/PLA.png') }}" width="20px">
                                                RANGO PLATA
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-warning btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/ORO.png') }}" width="20px">
                                                RANGO ORO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoPlatino btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/PLO.png') }}" width="20px">
                                                RANGO PLATINO
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoDiamante btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DIA.png') }}" width="20px">
                                                RANGO DIAMANTE
                                            </button>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 text-center">
                                            <button data-dismiss="modal" class="btn btn-outline-success rangoDiamanteReal btn-rounded mr-2 mt-3 col-12" type="button">
                                                <img class="mr-2 ml-2" src="{{ asset('fproh/img/calculadora/DRL.png') }}" width="20px">
                                                RANGO DIAMANTE REAL
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade bd-example-modal-xl" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" style="background-image: url() !important;">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="padding: 2em; display: flex; border-radius: 25px !important;">
                                <div class="swal2-content">
                                    <div class="row" style="justify-content: space-evenly">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                                            <h2 class="text-black"><b>Selecciona una marca o producto</b></h2>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Ligth.png') }}" width="100%" data-product="kenko_light" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Sleep.png') }}" width="100%" data-product="kenko_sleep" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-Kenko-Air.png') }}" width="100%" data-product="kenko_air" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/Logo-pimag.png') }}" width="100%" data-product="pimag" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-4 text-center">
                                            <img src="{{ asset('fproh/img/calculadora/kenzen2.png') }}" width="100%" data-product="kenzen" onclick="getProducts(this)">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-4 text-center">
                                            <div class="table-responsive mb-4">
                                                <table id="catProd" class="table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th class="hiden">actions</th>
                                                            <th class="hiden">Código</th>
                                                            <th class="hiden">Producto</th>
                                                            <th class="hiden"></th>
                                                            <th class="hiden">Precio</th>
                                                        </tr>
                                                    </thead>
                                                </table>
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

    <footer class="footer-section theme-footer">
        <div class="footer-section-1  sidebar-theme">
        </div>
        <div class="footer-section-2 container-fluid">
            <div class="row">
                <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                    
                </div>
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">&#xA9; {{ Date('Y') }} <a href="javascript:void(0)">NIKKEN Latinoamerica </a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
    <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('fproh/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('fproh/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('fproh/js/app.js') }}"></script>
    <script src="{{ asset('fproh/js/custom.js') }}"></script>
    <script src="{{ asset('fproh/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/classie.js') }}"></script>
    <script src="{{ asset('fproh/js/modal/modalEffects.js') }}"></script>
    <script src="{{ asset('fproh/js/ui-kit/ui-tooltip-popovers.js') }}"></script>
    <script src="{{ asset('fproh/plugins/table/datatable/datatables.js') }}"></script>

    <script src="{{ asset('fproh/mainjs/calculadora/calculadora.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            initCalc();
        });
    </script>
</html>