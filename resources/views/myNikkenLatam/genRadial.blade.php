<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Genealogia radial</title>
        <link type="text/css" href="{{ asset('assets/css/base.css') }}" rel="stylesheet" />
        <link type="text/css" href="{{ asset('assets/css/RGraph.css') }}" rel="stylesheet" />
        <script language="javascript" type="text/javascript" src="{{ asset('assets/js/jit.js') }}"></script>
        <script language="javascript" type="text/javascript" src="{{ asset('assets/js/example1.js') }}"></script>
        <script src="{{ asset('fproh/js/libs/jquery-3.1.1.min.js') }}"></script>
    </head>
    <body onload="getDataGenPers()">
        <input type="text" value="{{ $associateid }}" name="associateid" id="associateid">
        <input type="text" value="{{ $abiinfo[0]->AssociateName }}" name="abiname" id="abiname">
        <center>
            <h3 id="title">Genealogia Radial</h3>
        </center>
        <div id="container">
          <div id="left-container">
            <div class="text">
              <div id="countryBlock" class="leftRailBlock">
                <div class="contentBlock2" id="filterTree">
                  <div class="row">
                    <div class="noPanel">
                      <div class="label">Filtro de Árbol:</div>
                      <div class="space"></div>
                      <div class="areaform">
                        <select onchange="treeView.onChangeNode();" name="scope">
                          <option value="1">Árbol completo</option><option value="2" selected="">Grupo personal</option><option value="3">Líderes solamente</option><option value="5">Club de Bienestar</option>                </select>
                      </div>
                    </div>
                  </div>
                  <div class="row hide">
                    <div class="noPanel">
                      <div class="label">Tipo de Árbol:</div>
                      <div class="space"></div>
                      <div class="areaform">
                        <select onchange="onChangeNode();" name="treetype" id="treetype">
                                            <option value="1">Patrocinador</option>
                                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="noPanel">
                      <div class="label">Filtro de Actividad:</div>
                      <div class="space"></div>
                      <div class="areaform">
                        <select onchange="treeView.onChangeNode();" name="active" id="active">
                          <option value="1">Activos</option>
                          <option value="0">Todos</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="noPanel">
                      <div class="label">Nivel de profundidad:</div>
                      <div class="space"></div>
                      <div class="areaform">
                        <select onchange="treeView.onChangeNode();" name="depth" id="depth">
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4" selected="">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option>                </select>
                      </div>
                    </div>
                  </div>
                  <div class="contentBlock2" id="msg">
                    <div class="row">
                      <div class="noPanel">
                        <div class="msgrad" style="color: #3f9135;">
                          <p>Este árbol muestra 4 Niveles de profundidad para que sea más sencillo su uso.</p>
                          <p>Para poder ver más niveles de su Genealogía por favor dé clic en el ícono del asesor de bienestar de su red que desee consultar.</p>
                          <p>Para regresar al inicio dé clic en su nombre.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="id-list"></div>
            <div style="text-align:center;"></div>
          </div>

          <div id="center-container">
            <div id="infovis"></div>
          </div>

          <div id="right-container" >
            <div id="inner-details"></div>
          </div>
          <div id="log"></div>
        </div>
    </body>
</html>