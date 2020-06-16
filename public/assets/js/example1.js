var labelType, useGradients, nativeTextSupport, animate;

(function() {
  var ua = navigator.userAgent,
      iStuff = ua.match(/iPhone/i) || ua.match(/iPad/i),
      typeOfCanvas = typeof HTMLCanvasElement,
      nativeCanvasSupport = (typeOfCanvas == 'object' || typeOfCanvas == 'function'),
      textSupport = nativeCanvasSupport 
        && (typeof document.createElement('canvas').getContext('2d').fillText == 'function');
  //I'm setting this based on the fact that ExCanvas provides text support for IE
  //and that as of today iPhone/iPad current text support is lame
  labelType = (!nativeCanvasSupport || (textSupport && !iStuff))? 'Native' : 'HTML';
  nativeTextSupport = labelType == 'Native';
  useGradients = nativeCanvasSupport;
  animate = !(iStuff || !nativeCanvasSupport);
})();

var Log = {
  elem: false,
  write: function(text){
    if (!this.elem) 
      this.elem = document.getElementById('log');
    this.elem.innerHTML = text;
    this.elem.style.left = (500 - this.elem.offsetWidth / 2) + 'px';
  }
};


function init(){
    var json = {
        "id": "474503",
        "name": "SOLTERO CURIEL, JOSE ARTURO",
        "children": [
          {
            "id": "26862103",
            "name": "CARDENAS RODRIGUEZ, MARIA DE LA LUZ",
            "children": [],
            "data": {
              "relation": "26862103 - CARDENAS RODRIGUEZ, MARIA DE LA LUZ <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "10825003",
            "name": "GUZMAN RODRIGUEZ  LORENA ELIZABETH",
            "children": [],
            "data": {
              "relation": "10825003 - GUZMAN RODRIGUEZ  LORENA ELIZABETH <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "18013603",
            "name": "GONZALEZ TORRES  MARIA CONSUELO",
            "children": [],
            "data": {
              "relation": "18013603 - GONZALEZ TORRES  MARIA CONSUELO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "18015103",
            "name": "DE LA GARZA ADLER ROSSANA",
            "children": [],
            "data": {
              "relation": "18015103 - DE LA GARZA ADLER ROSSANA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "18926303",
            "name": "GODINEZ KONISHI GUADALUPE DEL SOCORRO",
            "children": [],
            "data": {
              "relation": "18926303 - GODINEZ KONISHI GUADALUPE DEL SOCORRO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "18948703",
            "name": "PAREDES FERNANDEZ BALBINA",
            "children": [],
            "data": {
              "relation": "18948703 - PAREDES FERNANDEZ BALBINA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "22157703",
            "name": "HERNANDEZ MANZANILLA, PAULINA",
            "children": [],
            "data": {
              "relation": "22157703 - HERNANDEZ MANZANILLA, PAULINA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "11154303",
            "name": "PAREDES FERNANDEZ  AMALIA",
            "children": [],
            "data": {
              "relation": "11154303 - PAREDES FERNANDEZ  AMALIA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "18129303",
            "name": "OJINAGA OTERO CLAUDIA",
            "children": [],
            "data": {
              "relation": "18129303 - OJINAGA OTERO CLAUDIA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "24165503",
            "name": "FERNANDEZ CARRASCO MARIA XIMENA EDURNE",
            "children": [],
            "data": {
              "relation": "24165503 - FERNANDEZ CARRASCO MARIA XIMENA EDURNE <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "23891903",
            "name": "LEAL DIAZ ANA MARIA",
            "children": [],
            "data": {
              "relation": "23891903 - LEAL DIAZ ANA MARIA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "26371303",
            "name": "SANCHEZ PEREZ MARIA DEL CARMEN",
            "children": [],
            "data": {
              "relation": "26371303 - SANCHEZ PEREZ MARIA DEL CARMEN <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "22552703",
            "name": "HIJAR GODINEZ EDUARDO BENJAMIN",
            "children": [],
            "data": {
              "relation": "22552703 - HIJAR GODINEZ EDUARDO BENJAMIN <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "22629703",
            "name": "INSTITUTO MATER AC",
            "children": [],
            "data": {
              "relation": "22629703 - INSTITUTO MATER AC <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "22650303",
            "name": "CORE APPS SC",
            "children": [],
            "data": {
              "relation": "22650303 - CORE APPS SC <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "26660503",
            "name": "POINSOT LILIA BEATRIZ",
            "children": [],
            "data": {
              "relation": "26660503 - POINSOT LILIA BEATRIZ <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "26509503",
            "name": "CANTU LEAL ARACELY",
            "children": [],
            "data": {
              "relation": "26509503 - CANTU LEAL ARACELY <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "24054903",
            "name": "ESCAMILLA RUIZ, ANA LAURA",
            "children": [],
            "data": {
              "relation": "24054903 - ESCAMILLA RUIZ, ANA LAURA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "24124703",
            "name": "GONZALEZ OSCAR",
            "children": [],
            "data": {
              "relation": "24124703 - GONZALEZ OSCAR <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "14411203",
            "name": "LAMAS GONZALEZ  MARCELO JAVIER",
            "children": [],
            "data": {
              "relation": "14411203 - LAMAS GONZALEZ  MARCELO JAVIER <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "21630903",
            "name": "PAOLA ROSETTE PRIETO",
            "children": [],
            "data": {
              "relation": "21630903 - PAOLA ROSETTE PRIETO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "12591303",
            "name": "GOMEZ MORALES, ROSA MARIA GUADALUPE",
            "children": [],
            "data": {
              "relation": "12591303 - GOMEZ MORALES, ROSA MARIA GUADALUPE <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "9008203",
            "name": "AYALA RODRIGUEZ  JULISSA",
            "children": [],
            "data": {
              "relation": "9008203 - AYALA RODRIGUEZ  JULISSA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "12175203",
            "name": "RODRIGUEZ MARROQUIN  ELIZABETH",
            "children": [],
            "data": {
              "relation": "12175203 - RODRIGUEZ MARROQUIN  ELIZABETH <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "14569003",
            "name": "LOPEZ SOSA  VIRGINIA",
            "children": [],
            "data": {
              "relation": "14569003 - LOPEZ SOSA  VIRGINIA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "19946903",
            "name": "SOLIS LONGORIA JAIME ALBERTO",
            "children": [],
            "data": {
              "relation": "19946903 - SOLIS LONGORIA JAIME ALBERTO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "19958303",
            "name": "MEJIA JIMENEZ MARIA LUISA",
            "children": [],
            "data": {
              "relation": "19958303 - MEJIA JIMENEZ MARIA LUISA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "10195103",
            "name": "CHAPA DE LOS SANTOS  LAURA GERALDINA",
            "children": [],
            "data": {
              "relation": "10195103 - CHAPA DE LOS SANTOS  LAURA GERALDINA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "15238703",
            "name": "MORA MUNOZ MARIA DEL ROCIO",
            "children": [],
            "data": {
              "relation": "15238703 - MORA MUNOZ MARIA DEL ROCIO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          },
          {
            "id": "17634903",
            "name": "GONZALEZ ELIZONDO SOFIA JOANA",
            "children": [],
            "data": {
              "relation": "17634903 - GONZALEZ ELIZONDO SOFIA JOANA <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
            }
          }
        ],
        "data": {
          "relation": "474503 - SOLTERO CURIEL, JOSE ARTURO <br>Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>Rango: Diamante Real <br>VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>Nuevo León, MÉXICO"
        }
      }
    var rgraph = new $jit.RGraph({
        injectInto: 'infovis',
        background: {
          CanvasStyles: {
            strokeStyle: '#555'
          }
        },
        Navigation: {
          enable: true,
          panning: false,
          zooming: 20
        },
        Node: {
            color: '#258b53',
            type: 'circle',
        },
        Edge: {
          color: '#e69d9d',
          lineWidth:0.5
        },

        onBeforeCompute: function(node){
            Log.write("Centrando " + node.name + "...");
        },
        
        onCreateLabel: function(domElement, node){
            domElement.innerHTML = node.name;
            domElement.onclick = function(){
                rgraph.onClick(node.id, {
                    onComplete: function() {
                        Log.write("Completado");
                    }
                });
            };
        },
        
        onPlaceLabel: function(domElement, node){
            var style = domElement.style;
            style.display = '';
            style.cursor = 'pointer';

            if (node._depth <= 1) {
                style.fontSize = "0.8em";
                style.color = "#000";
            
            } else if(node._depth == 2){
                style.fontSize = "0.7em";
                style.color = "#000";
            
            } else {
                style.display = 'none';
            }

            var left = parseInt(style.left);
            var w = domElement.offsetWidth;
            style.left = (left - w / 2) + 'px';
        }
    });
    rgraph.loadJSON(json);
    rgraph.graph.eachNode(function(n) {
      var pos = n.getPos();
      pos.setc(-200, -200);
    });
    rgraph.compute('end');
    rgraph.fx.animate({
      modes:['polar'],
      duration: 2000
    });
    $jit.id('inner-details').innerHTML = rgraph.graph.getNode(rgraph.root).data.relation;
}


function getDataGenPers(){
    var associateid = $("#associateid").val();
    var abiname = $("#abiname").val();
    var data = {associateid: associateid}

    $.ajax({
        type: "get",
        url: "../getDataGenPers",
        data: data,
        beforeSend: function(){
            $('#title').text("Cargando...");
        },
        success: function(Response) {
            $('#title').text("Genealogia Radial");
            
            var json = {
                id: associateid,
                name: abiname.trim(),
                children: [],
                data: {
                    relation: "474503 - SOLTERO CURIEL, JOSE ARTURO <br>" +
                    "Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>" +
                    "Rango: Diamante Real <br>" +
                    "VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>" +
                    "Nuevo León, MÉXICO"
                }
            };

            var nuevo_nodo = function() {};
            nuevo_nodo.prototype = json;
            nuevo_nodo.prototype.n = function(){console.log('extendido1');};
            var extender = new nuevo_nodo; 

            for(var x = 0; x < Response.length; x++){
                extender.children.push({
                    id: Response[x]['associateid'],
                    name: Response[x]['AssociateName'].trim(),
                    children: [],
                    data: {
                        relation: Response[x]['associateid'] + " - " + Response[x]['AssociateName'].trim() + " <br>" + 
                        "Patrocinador: (469703) ANTOCORA, S.A. DE C.V. <br>" +
                        "Rango: Diamante Real <br>" +
                        "VP=327 | VGP=1,438 | VO=419,812 | VO-LDP=98,410 <br>" +
                        "Nuevo León, MÉXICO"
                    }
                });
            }

            console.log(json)

            init()
        }
    });
}