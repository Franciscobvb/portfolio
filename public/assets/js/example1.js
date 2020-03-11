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


function init(json){
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
            };

            var nuevo_nodo = function() {};
            nuevo_nodo.prototype = json;
            nuevo_nodo.prototype.n = function(){console.log('extendido1');};
            var extender = new nuevo_nodo; 

            for(var x = 0; x < Response.length; x++){
                extender.children.push({
                    id: Response[x]['associateid'],
                    name: Response[x]['AssociateName'].trim(),
                });
            }

            console.log(json)

            init(json)
        }
    });
}