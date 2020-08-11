var labelType, useGradients, nativeTextSupport, animate;

(function() {
    var ua = navigator.userAgent,
        iStuff = ua.match(/iPhone/i) || ua.match(/iPad/i),
        typeOfCanvas = typeof HTMLCanvasElement,
        nativeCanvasSupport = (typeOfCanvas == 'object' || typeOfCanvas == 'function'),
        textSupport = nativeCanvasSupport && (typeof document.createElement('canvas').getContext('2d').fillText == 'function');
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
    //init RGraph
    var rgraph = new $jit.RGraph({
        //Where to append the visualization
        injectInto: 'infovis',
        //Optional: create a background canvas that plots
        //concentric circles.
        background: {
            CanvasStyles: {
            strokeStyle: '#000'
            }
        },
        //Add navigation capabilities:
        //zooming by scrolling and panning.
        Navigation: {
            enable: true,
            panning: true,
            zooming: 10
        },
        //Set Node and Edge styles.
        Node: {
            color: '#009b3b'
        },
      
        Edge: {
            color: '#C17878',
            lineWidth:0.5
        },

        onBeforeCompute: function(node){
            Log.write("centrando:  " + node.name + "...");
            //Add the relation list in the right column.
            //This list is taken from the data property of each JSON node.
            $jit.id('inner-details').innerHTML = node.data.relation;
        },
      
        //Add the name of the node in the correponding label
        //and a click handler to move the graph.
        //This method is called once, on label creation.
        onCreateLabel: function(domElement, node){
            domElement.innerHTML = node.name;
            domElement.onclick = function(){
                rgraph.onClick(node.id, {
                    onComplete: function() {
                        Log.write("");
                    }
                });
            };
        },
        //Change some label dom properties.
        //This method is called each time a label is plotted.
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
    //load JSON data
    rgraph.loadJSON(json);
    //trigger small animation
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

function getRank(rango){
    switch(rango.trim()){
        case "DIR":
            rango = "DIRECTO";
            break;
        case "EXE":
            rango = "EJECUTIVO";
            break;
        case "PLA":
            rango = "PLATA";
            break;
        case "ORO":
            rango = "ORO";
            break;
        case "PLO":
            rango = "PLATINO";
            break;
        case "DIA":
            rango = "DIAMANTE";
            break;
        case "DRL":
            rango = "DIAMANTE REAL";
            break;
        case "SLV":
            rango = "PLATA";
            break;
    }
    return rango;
}

function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
    try {
        if(amount == '.00'){
            amount = 0;
        }
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 0 : decimalCount;
        const negativeSign = amount < 0 ? "-" : "";
        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;
        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    }
    catch (e) {
        console.log(e)
    }
};

var initRadialGen = false;
function getDataGenPers(){
    if(!initRadialGen){
        var associateid = $("#associateid").val();
        var abiname = $("#abiname").val();
        var data = {associateid: associateid}

        $.ajax({
            type: "get",
            url: "/getDataGenPers",
            data: data,
            beforeSend: function(){
                $('#title').text("Cargando...");
            },
            success: function(Response) {
                $('#title').text("");
                var json = {
                    id: associateid,
                    name: abiname.trim(),
                    children: [],
                    data: {
                        relation: Response[0]['associateid'] + " - " + Response[0]['associatename'].trim() + "<br>" +
                        "Rango: " + getRank(Response[0]['PinRank']) + " <br>" +
                        "VP=" + formatMoney(Response[0]['PV']) + " | VGP=" +  formatMoney(Response[0]['GV']) + " | VO=" +  formatMoney(Response[0]['OV']) + " | VO-LDP=" +  formatMoney(Response[0]['QOVOPL']) + " <br>" +
                        `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                    }
                };

                var nuevo_nodo = function() {};
                nuevo_nodo.prototype = json;
                nuevo_nodo.prototype.n = function(){console.log('extendido1');};
				var extender = new nuevo_nodo;

                for(var x = 0; x < Response.length; x++){
					var hijoslvl2 = [];
					var hijoslvl3 = [];
					var hijoslvl4 = [];
					var hijoslvl5 = [];
					var hijoslvl6 = [];
					var hijoslvl7 = [];
					var hijoslvl8 = [];
					var hijoslvl9 = [];
					var hijoslvl10 = [];
					var hijoslvl11 = [];
					var hijoslvl12 = [];
					var hijoslvl13 = [];
					var hijoslvl14 = [];
					var hijoslvl15 = [];
					var hijoslvl16 = [];
					var hijoslvl17 = [];
					var hijoslvl18 = [];
					var hijoslvl19 = [];
					var hijoslvl20 = [];
					var hijoslvl21 = [];

					for (let i = 0; i < Response.length; i++) {
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 20){
							hijoslvl20.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl21,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 19){
							hijoslvl19.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl20,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 18){
							hijoslvl18.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslv19,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 17){
							hijoslvl17.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl18,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 16){
							hijoslvl16.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl17,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 15){
							hijoslvl15.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl16,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 14){
							hijoslvl14.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl15,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 13){
							hijoslvl13.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl14,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 12){
							hijoslvl12.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl13,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 11){
							hijoslvl11.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl12,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 10){
							hijoslvl10.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl11,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 9){
							hijoslvl9.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl10,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 8){
							hijoslvl8.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl9,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 7){
							hijoslvl7.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl8,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 6){
							hijoslvl6.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl7,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}

						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 5){
							hijoslvl5.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl6,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 4){
							hijoslvl4.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl5,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 3){
							hijoslvl3.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl4,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
						
						if(Response[i]['Sponsor_id'] == Response[x]['associateid'] && Response[i]['Level'] == 2){
							hijoslvl2.push(
								{
									id: Response[i]['associateid'],
									name: Response[i]['associatename'].trim(),
									children: hijoslvl3,
									data: {
										relation: Response[i]['associateid'] + " - " + Response[i]['associatename'] + " <br>" + 
										"Rango: " +  getRank(Response[i]['PinRank']) + "<br>" +
										"VP=" +  formatMoney(Response[i]['PV']) + " | VGP=" + formatMoney(Response[i]['GV']) + " | VO=" + formatMoney(Response[i]['OV']) + " | VO-LDP=" + formatMoney(Response[i]['QOVOPL']) + " <br>" +
										`<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
									}
								}
							)
						}
					}

                    if(Response[x]['Level'] == 1){
                        var childerns = extender.children.push({
                            id: Response[x]['associateid'],
                            name: Response[x]['associatename'].trim(),
                            children: hijoslvl2,
                            data: {
                                relation: Response[x]['associateid'] + " - " + Response[x]['associatename'] + " <br>" + 
                                "Rango: " +  getRank(Response[x]['PinRank']) + "<br>" +
                                "VP =" +  formatMoney(Response[x]['PV']) + " | VGP =" + formatMoney(Response[x]['GV']) + " | VO =" + formatMoney(Response[x]['OV']) + " | VO-LDP =" + formatMoney(Response[x]['QOVOPL']) + " <br>" +
                                `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                            }
						});
                    }
                }
                init(json);
            }
        });

        initRadialGen = true;
    }
}