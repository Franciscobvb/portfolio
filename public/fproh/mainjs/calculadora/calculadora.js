var targetNode;
var isoMoney = {'LAT': "$", 'COL': '$', 'CRI': '₡', 'PAN': '$', 'ECU': 'USD', 'PER': 'S/', 'SLV': '$', 'GTM': 'Q', 'CHL': '$'}
var pais = 'PER';

function initCalc(){
    loadCatProd('kenko_light', null, );
    setIsoMoney();

    $("#nodo1").trigger('reset');
    $("#nodo2").trigger('reset');
    $("#nodo3").trigger('reset');
    $("#nodo4").trigger('reset');
    $("#nodo5").trigger('reset');
    $("#nodo6").trigger('reset');

    $("#rangoPadre").val('DIR');
}

function changeIcon(element, option){
    element.attr('src', '../fproh/img/calculadora/' + option + '.png');
}

function getProducts(element){
    var familyProduct = $(element).attr('data-product');
    loadCatProd(familyProduct);
}

function slectProd(product){
    targetNode.val(product)
}

function getNodeRef(input){
    targetNode = $(input);
}

function loadCatProd(product){
    $('#catProd').DataTable( {
        "ordering": false,
        "info": false,
        "select": true,
        "destroy": true,
        "dom": '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-12"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        "ajax": "/calcGetProducts?familyProd=" + product,
        "columns": [
            {
                "data": null,
                "className": "center",
                "defaultContent": '<a href="javascript:void(0)" onclick="slectProd(this.parentNode.parentNode.id)">' + 
                    '<button class="btn btn-success btn-rounded" data-dismiss="modal"><i class="flaticon-single-circle-tick" style="color: #fff"></i> Seleccionar</button>' + 
                '</a>'
            },
            { "data": 'codigo', "className": 'text-center hiden' },
            { "data": 'producto', "className": 'text-center' },
            { 
                "data": null, 
                "className": 'text-right',
                "render": function(data, type, row){
                    return isoMoney[pais];
                }
            },
            {
                "data": 'Email',
                "className": 'text-center',
                "render": function(data, type, row){
                    return "0000.0000"
                }
            },
        ],
        "rowId": function(a) {
            return a.codigo + '|' + a.producto;
        },
        "language": {
            "paginate": {
              "previous": "<i class='flaticon-arrow-left-1'></i>",
              "next": "<i class='flaticon-arrow-right'></i>"
            },
            "search": "" ,
            "searchPlaceholder": "Buscar por nombre o por código...",
            "info": "Showing page _PAGE_ of _PAGES_",
            "loadingRecords": 'Cargando Productos Nikken <i class="flaticon-spinner-5 spin"></i>',
        }
    });

    $('.dataTables_filter input[type="search"]').css(
        {'width':'100%','display':'inline-block', 'text-align': 'center', 'border': '3px solid #00aa97'}
    );
    $('.dataTables_filter label').css(
        {'width':'100%'}
    );
    $('.dataTable').css(
        {'border-radius':'25px'}
    );
}

function getBonos(){
    /*== datos del nodo 1 ==*/
    var nombreNodo1 = $("#nombreNodo1").val();
    var rangoNodo1 = $("#rangoNodo1").val();
    var influencerNodo1 = $("#influencerNodo1").val();
    var productoNodo1 = $("#prodNode1").val();
    var piezasNodo1 = $("#pzsProdNode1").val();

    /*== datos del nodo 2 ==*/
    var nombreNodo2 = $("#nombreNodo2").val();
    var rangoNodo2 = $("#rangoNodo2").val();
    var influencerNodo2 = $("#influencerNodo2").val();
    var productoNodo2 = $("#prodNode2").val();
    var piezasNodo2 = $("#pzsProdNode2").val();
    
    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 3 ==*/
    var nombreNodo3 = $("#nombreNodo3").val();
    var rangoNodo3 = $("#rangoNodo3").val();
    var influencerNodo3 = $("#influencerNodo3").val();
    var productoNodo3 = $("#prodNode3").val();
    var piezasNodo3 = $("#pzsProdNode3").val();

    /*== datos del nodo 4 ==*/
    var nombreNodo4 = $("#nombreNodo4").val();
    var rangoNodo4 = $("#rangoNodo4").val();
    var influencerNodo4 = $("#influencerNodo4").val();
    var productoNodo4 = $("#prodNode4").val();
    var piezasNodo4 = $("#pzsProdNode4").val();

    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 5 ==*/
    var nombreNodo5 = $("#nombreNodo5").val();
    var rangoNodo5 = $("#rangoNodo5").val();
    var influencerNodo5 = $("#influencerNodo5").val();
    var productoNodo5 = $("#prodNode5").val();
    var piezasNodo5 = $("#pzsProdNode5").val();

    /*== datos del nodo 6 ==*/
    var nombreNodo6 = $("#nombreNodo6").val();
    var rangoNodo6 = $("#rangoNodo6").val();
    var influencerNodo6 = $("#influencerNodo6").val();
    var productoNodo6 = $("#prodNode6").val();
    var piezasNodo6 = $("#pzsProdNode6").val();

    var data = {
        /*== nodo 1 ==*/
        nombreNodo1: nombreNodo1,
        rangoNodo1: rangoNodo1,
        influencerNodo1: influencerNodo1,
        productoNodo1: productoNodo1,
        piezasNodo1: piezasNodo1,

        /*== nodo 2 ==*/
        nombreNodo2: nombreNodo2,
        rangoNodo2: rangoNodo2,
        influencerNodo2: influencerNodo2,
        productoNodo2: productoNodo2,
        piezasNodo2: piezasNodo2,

        /*== nodo 3 ==*/
        nombreNodo3: nombreNodo3,
        rangoNodo3: rangoNodo3,
        influencerNodo3: influencerNodo3,
        productoNodo3: productoNodo3,
        piezasNodo3: piezasNodo3,

        /*== nodo 4 ==*/
        nombreNodo4: nombreNodo4,
        rangoNodo4: rangoNodo4,
        influencerNodo4: influencerNodo4,
        productoNodo4: productoNodo4,
        piezasNodo4: piezasNodo4,

        /*== nodo 5 ==*/
        nombreNodo5: nombreNodo5,
        rangoNodo5: rangoNodo5,
        influencerNodo5: influencerNodo5,
        productoNodo5: productoNodo5,
        piezasNodo5: piezasNodo5,

        /*== nodo 6 ==*/
        nombreNodo6: nombreNodo6,
        rangoNodo6: rangoNodo6,
        influencerNodo6: influencerNodo6,
        productoNodo6: productoNodo6,
        piezasNodo6: piezasNodo6,
    }

    $.ajax({
        type: 'get',
        url: '/calcGetBonos',
        data: data,
        success: function(result){
            console.log(result);
        }
    }).fail(function(){
        console.log('error sending data');
    });
}

function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
    try {
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

function setIsoMoney(){
    $("span[id=moneda]").text(isoMoney[pais]);
}