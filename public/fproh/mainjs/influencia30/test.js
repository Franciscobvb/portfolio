var nombre = "";
var necesidad = "";
var intervaloSelected = "";
var intervaloBack = 0;
var arrayIntervalos = "";
var de = "";
var hasta = "";
var producto = "";
var moneda = "$";
var pais = "MEX";

$("#Jugadores").trigger('reset');
questionName();
$("#step5").hide();
$("#simuladorFin").hide();
//$("#slctProds").hide();
$("#step3Tittle").hide();
$("#step3options").hide();
$("#finalStepBody").hide();
$("#goFinalStep").attr('disabled', true);
$("#mailResultSuccess").hide();
$("#mailResultError").hide();
$("#mailResultFormat").hide();
$("#mailProccess").hide();
$("#ventasAlert0").hide();

function questionName(){
    swal.mixin({
        allowEscapeKey: false,
        allowOutsideClick: false,
        imageUrl: '../fproh/img/influencia30/minilogo.png',
        input: 'text',
        confirmButtonText: 'Comenzar',
        showCancelButton: false,
        progressSteps: [''],
        padding: '2em',
        footer: '<img src="../fproh/img/influencia30/personGroup.png" width="100%">',
    }).queue([
        {
            title: 'Estás a punto de comenzar un cambio radical en tu vida',
            text: 'Queremos conocer más de ti y mostrarte una alternativa para cumplir tus sueños, Coloca en el siguiente espacio tu nombre',
        },
    ]).then(function(result) {
        if (result.value) {
            if(result.value != ''){
                $("#step2Modal").modal({
                    backdrop: 'static',
                    keyboard: false
                });
                nombre = result.value;
                $("#visitorName").text(nombre);
                $("#padreNombre").text(nombre);
                $("#step2Name").text(nombre);
                $("#step6Name").text(nombre);
            }
            else{
                swal({
                    title: 'Error',
                    text: "Por favor, ingresa un nombre!",
                    type: 'error',
                    padding: '2em'
                }).then(function(){
                    questionName();
                });
            }
        }
    })
}

function getNeedVisitor(element){
    $("#step2ModalRturn").hide();
    var need = {
        1: 'Crédito/Alquiler casa',
        2: 'Estudios',
        3: 'Compromisos Financieros',
        4: 'Viajes',
        5: 'Inversión',
        6: 'Entretenimiento',
        7: 'Ahorro',
        8: 'Tarjeta de Crédito',
        9: 'Crédito Auto',
        10: 'Otros'
    }
    
    necesidad = need[element];
    if(element != 10){
        $("#needVisitor").text(necesidad);
        getNeedAmount();
    }
    else{
        swal.mixin({
            allowEscapeKey: false,
            allowOutsideClick: false,
            imageUrl: '../fproh/img/influencia30/svg/estrella.svg',
            imageWidth: 400,
            imageHeight: 200,
            input: 'text',
            confirmButtonText: 'Continuar',
            showCancelButton: false,
            padding: '2em',
        }).queue([
            {
                title: '¿Otro?',
                text: 'Cuéntanos cuál es tu deseo'
            },
        ]).then(function(result) {
            if (result.value) {
                if(result.value != ''){
                    necesidad = result.value;
                    $("#needVisitor").text(necesidad);
                    getNeedAmount();
                }
                else{
                    swal({
                        title: 'Error',
                        text: "Por favor, Cuéntanos cuál es tu deseo!",
                        type: 'error',
                        padding: '2em'
                    }).then(function(){
                        getNeedVisitor(element);
                    });
                }
            }
        })
    }
}

function getNeedAmount(){
    $("#step3Name").text(nombre);
    $("#step3Need").text(necesidad);
    $(".modal-open").css('overflow', 'auto');
    $(".modal-backdrop").show();
    $("#step3Modal").modal({
        backdrop: 'static',
        keyboard: false
    });
}

function getInterval(element){
    $("#step3Tittle").show(1000);
    $("#step3options").show(1000);
    pais = element;
    var data = {pais: element}
   $.ajax({
        type: 'GET',
        url: '/simInfGetIntervals',
        data: data,
        success: function(response){
            arrayIntervalos = response;
            $("#intervalo1").text(response[0]['Intervalo']);
            $("#intervalo2").text(response[1]['Intervalo']);
            $("#intervalo3").text(response[2]['Intervalo']);
        }
   });
}

function selectProd1(){
    $("#slctProds").hide(1000);
    $("#step5").show(1000);
    $("#prod1, #prod2, #prod3").text('Waterfall');
    $("#numPzProd1, #numPzProd2, #numPzProd3").text('1');
    $("#imgProd1, #imgProd2, #imgProd3").attr('src', '../fproh/img/influencia30/piwaterfallbg.jpg');
}

function step4(intervalo){
    $(".modal-open").css('overflow', 'auto');
    $(".modal-backdrop").hide();
    $("#step3Modal").hide();
    $("#step2Modal").hide();
    intervaloBack = intervalo;
    switch(intervalo){
        case 1:
            intervaloSelected = $("#intervalo1").text();
            break;
        case 2:
            intervaloSelected = $("#intervalo2").text();
            break;
        case 3:
            intervaloSelected = $("#intervalo3").text();
            break;
    }
    $("#step4Name").text(nombre);
    $("#step4Need").text(necesidad);

    var intervalo = intervaloSelected.split('-');
    de = intervalo[0];
    hasta = intervalo[1];
    $("#step4De").text(intervalo[0]);
    $("#step4A").text(intervalo[1]);
    
    if(pais == 'PER' || pais == 'GTM' ){
        moneda = intervalo[0][0] + intervalo[0][1];
    }
    else{
        moneda = intervalo[0][0];
    }
    
    $("#step6MonedaLinea0, #step6MonedaLinea1, #step6MonedaLinea2, #step6MonedaLinea3, #step6MonedaLinea4, #step6MonedaLinea5, #step6MonedaLinea6, #step6MonedaLinea7").text(moneda);
    $("#costVisitor").text(intervaloSelected);
}

function number_format(number, decimals, dec_point, thousands_point) {
    if (number == null || !isFinite(number)) {
        throw new TypeError("number is not valid");
    }
    if (!decimals) {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }
    if (!dec_point) {
        dec_point = '.';
    }
    if (!thousands_point) {
        thousands_point = ',';
    }
    number = parseFloat(number).toFixed(decimals);
    number = number.replace(".", dec_point);
    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);
    return number;
}

function step5(prod){
    $("#slctProds").hide(1000);
    $("#step5").show(1000);
    $("#step5Name").text(nombre);
    switch(prod){
        case 1:
            producto = "Waterfall";
            break;
        case 2:
            producto = "Waterfall + Optimizer";
            break;
    }
    $("#step5Prod").text(producto);

    if(prod == 1 && intervaloBack == 1){
        $("#step5NoUnidades").text(arrayIntervalos[0]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[0]['ValorIngreso'], 2, '.', ','));
    }
    else if(prod == 1 && intervaloBack == 2){
        $("#step5NoUnidades").text(arrayIntervalos[1]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[1]['ValorIngreso'], 2, '.', ','));
    }
    else if(prod == 1 && intervaloBack == 3){
        $("#step5NoUnidades").text(arrayIntervalos[2]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[2]['ValorIngreso'], 2, '.', ','));
    }

    if(prod == 2 && intervaloBack == 1){
        $("#step5NoUnidades").text(arrayIntervalos[3]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[3]['ValorIngreso'], 2, '.', ','));
    }
    else if(prod == 2 && intervaloBack == 2){
        $("#step5NoUnidades").text(arrayIntervalos[4]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[4]['ValorIngreso'], 2, '.', ','));
    }
    else if(prod == 2 && intervaloBack == 3){
        $("#step5NoUnidades").text(arrayIntervalos[5]['Cantidad']);
        $("#step5Monto").text(moneda + number_format(arrayIntervalos[5]['ValorIngreso'], 2, '.', ','));
    }
}

function showSimulador(){
    $("#step5").hide(1000);
    $("#simuladorFin").show(1000);
    $("#stepsBody").show(1000);
    $("#finalStepBody").hide(1000);
    $("#slctProds").hide();

    var nJugadores = $("#step5NoUnidades").text();
    switch(parseInt(nJugadores)){
        case 2:
            $(".item1, .item2").show();
            $(".item3, .item4, .item5, .item6, .item7").hide();
            $("#prodSelecLinea3, #prodSelecLinea4, #prodSelecLinea5, #prodSelecLinea6, #prodSelecLinea7").val('');
            break;
        case 3:
            $(".item1, .item2, .item3").show();
            $(".item4, .item5, .item6, .item7").hide();
            $("#prodSelecLinea4, #prodSelecLinea5, #prodSelecLinea6, #prodSelecLinea7").val('');
            break;
        case 4:
            $(".item1, .item2, .item3, .item4").show();
            $(".item5, .item6, .item7").hide();
            $("#prodSelecLinea5, #prodSelecLinea6, #prodSelecLinea7").val('');
            break;
        case 5:
            $(".item1, .item2, .item3, .item4, .item5").show();
            $(".item6, .item7").hide();
            $("#prodSelecLinea6, #prodSelecLinea7").val('');
            break;
        case 7:
            $(".item1, .item2, .item3, .item4, .item5, .item6, .item7").show();
            break;
    }
}

var lieaSelec = 0;
function showProducts(linea){
    lieaSelec = linea
    $("#modalProductos").modal({
        backdrop: 'static',
        keyboard: false
    });

    var tipo = $('input:radio[name=customRadioLiena' + linea + ']:checked').val();
    if(pais == 'GTM' || pais == 'SLV'){
        if(tipo == 1){
            $("#optimizer").show();
            $("#wafOpt").show();
            $("#piwOpt").show();
        }
        else{
            $("#optimizer").hide();
            $("#wafOpt").hide();
            $("#piwOpt").hide();
        }
    }
}

function selectProd(prodByBtn){
    $("#prodSelecLinea" + lieaSelec).val(prodByBtn);
}

function returnStep4(){
    $("#step5").hide(1000);
    $("#slctProds").show(1000);
}

function final(){
    $("#stepsBody").hide(1000);
    $("#finalStepBody").show(1000);
}

/* Extraccion de bonificaciones */
function extraeBonos(){
    $("#goFinalStep").attr('disabled', false);

    var kitLinea1 = $("#prodSelecLinea1").val();
    var kitLinea2 = $("#prodSelecLinea2").val();
    var kitLinea3 = $("#prodSelecLinea3").val();
    var kitLinea4 = $("#prodSelecLinea4").val();
    var kitLinea5 = $("#prodSelecLinea5").val();
    var kitLinea6 = $("#prodSelecLinea6").val();
    var kitLinea7 = $("#prodSelecLinea7").val();

    var tipo1 = $('input:radio[name=customRadioLiena1]:checked').val();
    var tipo2 = $('input:radio[name=customRadioLiena2]:checked').val();
    var tipo3 = $('input:radio[name=customRadioLiena3]:checked').val();
    var tipo4 = $('input:radio[name=customRadioLiena4]:checked').val();
    var tipo5 = $('input:radio[name=customRadioLiena5]:checked').val();
    var tipo6 = $('input:radio[name=customRadioLiena6]:checked').val();
    var tipo7 = $('input:radio[name=customRadioLiena7]:checked').val();

    var data = {
        pais: pais, 
        linea1KitSel: kitLinea1, 
        linea2KitSel: kitLinea2, 
        linea3KitSel: kitLinea3, 
        linea4KitSel: kitLinea4, 
        linea5KitSel: kitLinea5,
        linea6KitSel: kitLinea6,
        linea7KitSel: kitLinea7,
        tipo1: tipo1, 
        tipo2: tipo2, 
        tipo3: tipo3,
        tipo4: tipo4,
        tipo5: tipo5,
        tipo6: tipo6,
        tipo7: tipo7
    };

    $.ajax({
        type: 'GET',
        url: '/simInfGmetBonosTest',
        data: data,
        success: function(response){
            // mostrando los bonos del nivel 0
            $("#step6MontoGanado").text(number_format(response[0]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 1
            $("#BonoLinea1").text(number_format(response[1]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 2
            $("#BonoLinea2").text(number_format(response[2]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 3
            $("#BonoLinea3").text(number_format(response[3]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 4
            $("#BonoLinea4").text(number_format(response[4]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 5
            $("#BonoLinea5").text(number_format(response[5]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 6
            $("#BonoLinea6").text(number_format(response[6]['TotalAmount'], 2, '.', ','));

            // mostrando los bonos de la linea 7
            $("#BonoLinea7").text(number_format(response[7]['TotalAmount'], 2, '.', ','));

            if(response[0]['TotalP'] >= 3){
                $("#ventasAlert0").hide(1000);
            }
        }
    });
}

function limpiarSimulacion(){
    $("#step6MontoGanado").text('0.00');
    $("#BonoLinea1").text('0.00');
    $("#BonoLinea2").text('0.00');
    $("#BonoLinea3").text('0.00');
    $("#BonoLinea4").text('0.00');
    $("#BonoLinea5").text('0.00');
    $("#BonoLinea6").text('0.00');
    $("#BonoLinea7").text('0.00');
    $("#optimizer").show();
    $("#wafOpt").show();
    $("#piwOpt").show();
    $("#ventasAlert0").hide();
}

function getPdf(medio){
    var email = "";

    var jugador1 = $("#jugadorLinea1").val();
    var jugador2 = $("#jugadorLinea2").val();
    var jugador3 = $("#jugadorLinea3").val();
    var jugador4 = $("#jugadorLinea4").val();
    var jugador5 = $("#jugadorLinea5").val();
    var jugador6 = $("#jugadorLinea6").val();
    var jugador7 = $("#jugadorLinea7").val();

    var bono = $("#step6MontoGanado").text();
    var moneda = $("#step6MonedaLinea0").text();

    var bono1 = $("#BonoLinea1").text();
    var bono2 = $("#BonoLinea2").text();
    var bono3 = $("#BonoLinea3").text();
    var bono4 = $("#BonoLinea4").text();
    var bono5 = $("#BonoLinea5").text();
    var bono6 = $("#BonoLinea6").text();
    var bono7 = $("#BonoLinea7").text();

    var kitInfluencia1 = $("#prodSelecLinea1").val();
    var kitInfluencia2 = $("#prodSelecLinea2").val();
    var kitInfluencia3 = $("#prodSelecLinea3").val();
    var kitInfluencia4 = $("#prodSelecLinea4").val();
    var kitInfluencia5 = $("#prodSelecLinea5").val();
    var kitInfluencia6 = $("#prodSelecLinea6").val();
    var kitInfluencia7 = $("#prodSelecLinea7").val();

    var deseo = $("#step4Need").text();

    var tipo1 = $('input:radio[name=customRadioLiena1]:checked').val();
    var tipo2 = $('input:radio[name=customRadioLiena2]:checked').val();
    var tipo3 = $('input:radio[name=customRadioLiena3]:checked').val();
    var tipo4 = $('input:radio[name=customRadioLiena4]:checked').val();
    var tipo5 = $('input:radio[name=customRadioLiena5]:checked').val();
    var tipo6 = $('input:radio[name=customRadioLiena6]:checked').val();
    var tipo7 = $('input:radio[name=customRadioLiena7]:checked').val();

    var nombrefin = $("#step6Name").text();

    if(medio == 'correo'){
        email = $("#mailSend").val();
        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(email)){
            var data = {
                nombreJugador1: jugador1, 
                nombreJugador2: jugador2, 
                nombreJugador3: jugador3, 
                nombreJugador4: jugador4, 
                nombreJugador5: jugador5, 
                nombreJugador6: jugador6, 
                nombreJugador7: jugador7, 
                bono: bono,
                moneda: moneda, 
                bono1: bono1, 
                bono2: bono2, 
                bono3: bono3, 
                bono4: bono4, 
                bono5: bono5, 
                bono6: bono6, 
                bono7: bono7, 
                kitInfluencia1: kitInfluencia1.replace(/\+/g, "-"), 
                kitInfluencia2: kitInfluencia2.replace(/\+/g, "-"), 
                kitInfluencia3: kitInfluencia3.replace(/\+/g, "-"),
                kitInfluencia4: kitInfluencia4.replace(/\+/g, "-"),
                kitInfluencia5: kitInfluencia5.replace(/\+/g, "-"),
                kitInfluencia6: kitInfluencia6.replace(/\+/g, "-"),
                kitInfluencia7: kitInfluencia7.replace(/\+/g, "-"),
                deseo: deseo, 
                tipo1: tipo1, 
                tipo2: tipo2, 
                tipo3: tipo3, 
                tipo4: tipo4, 
                tipo5: tipo5, 
                tipo6: tipo6, 
                tipo7: tipo7, 
                medio: medio, 
                email: email, 
                nombre: nombrefin
            }
            $.ajax({
                type: 'GET',
                url: '/simInfPdfViewTest',
                data: data,
                beforeSend: function(){
                    $("#mailResultSuccess").hide(1000);
                    $("#mailResultError").hide(1000);
                    $("#mailResultFormat").hide(1000);
                    $("#mailProccess").show(1000);
                },
                success: function(Response) {
                    if(Response == '1' || Response == 1){
                        $("#mailResultSuccess").show(1000);
                        $("#mailResultError").hide(1000);
                        $("#mailResultFormat").hide(1000);
                        $("#mailProccess").hide(1000);
                    }
                    else{
                        $("#mailResultSuccess").hide(1000);
                        $("#mailResultError").show(1000);
                        $("#mailResultFormat").hide(1000);
                        $("#mailProccess").hide(1000);
                    }
                },
                error: function () {
                    $("#mailResultSuccess").hide(1000);
                    $("#mailResultError").show(1000);
                    $("#mailResultFormat").hide(1000);
                    $("#mailProccess").hide(1000);
                },
            });
        }
        else {
            $("#mailResultSuccess").hide(1000);
            $("#mailResultError").hide(1000);
            $("#mailResultFormat").show(1000);
            $("#mailProccess").hide(1000);
        }
    }
    else{
        window.open("/simInfPdfViewTest?nombre=" + nombre + "&nombreJugador1=" + jugador1 + "&nombreJugador2=" + jugador2 + "&nombreJugador3=" + jugador3 + "&nombreJugador4=" + jugador4 + "&nombreJugador5=" + jugador5 + "&nombreJugador6=" + jugador6 + "&nombreJugador7=" + jugador7 + "&bono="+ bono + "&moneda=" + moneda + "&bono1=" + bono1 + "&bono2=" + bono2 + "&bono3=" + bono3 + "&bono4=" + bono4 + "&bono5=" + bono5 + "&bono6=" + bono6 + "&bono7=" + bono7 + '&kitInfluencia1=' + kitInfluencia1.replace(/\+/g, "-") + '&kitInfluencia2=' + kitInfluencia2.replace(/\+/g, "-") + '&kitInfluencia3=' + kitInfluencia3.replace(/\+/g, "-") + '&kitInfluencia4=' + kitInfluencia4.replace(/\+/g, "-") + '&kitInfluencia5=' + kitInfluencia5.replace(/\+/g, "-") + '&kitInfluencia6=' + kitInfluencia6.replace(/\+/g, "-") + '&kitInfluencia7=' + kitInfluencia7.replace(/\+/g, "-") + "&deseo=" + deseo + '&tipo1=' + tipo1 + '&tipo2=' + tipo2 + '&tipo3=' + tipo3 + '&tipo4=' + tipo4 + '&tipo5=' + tipo5 + '&tipo6=' + tipo6 + '&tipo7=' + tipo7 + "&medio=" + medio + "&email=" + email, "width=500,height=300,scrollbars=NO")
    }
}

function validaPais(tipo){
    if(pais == 'GTM' && tipo == 'venta' || pais == 'SLV' && tipo == 'venta' ){
        $("#optimizer").hide();
        $("#wafOpt").hide();
        $("#piwOpt").hide();

        if($("#prodSelecLinea1").val() == 'PiMag Optimizer'){
            $("#prodSelecLinea1").val('PiMag Pi Water');
        }
        else if($("#prodSelecLinea2").val() == 'PiMag Optimizer'){
            $("#prodSelecLinea2").val('PiMag Pi Water');
        }
        else if($("#prodSelecLinea3").val() == 'PiMag Optimizer'){
            $("#prodSelecLinea3").val('PiMag Pi Water');
        }
    }
    else{
        $("#optimizer").show();
        $("#wafOpt").show();
        $("#piwOpt").show();
    }
}

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('#step3Modal').stop().animate({
            scrollTop: target.offset().top
        }, 2000);
    }
});

function regresarapso2(){
    $("#step2Modal").css('overflow', 'auto');
    $("#step2Modal").modal({
        backdrop: 'static',
        keyboard: false
    });
}

function regresarapso3(){
    $("#step3Modal").css('overflow', 'auto');
    $("#step3Modal").modal({
        backdrop: 'static',
        keyboard: false
    });
}

function regresarapaso5(){
    $("#simuladorFin").hide(1000);
    $("#step5").show(1000);
}

function stopVideo(){
    $('video')[0].pause();
}

function validaCompra(linea){
    var tipo1 = $('input:radio[name=customRadioLiena1]:checked').val();
    var tipo2 = $('input:radio[name=customRadioLiena2]:checked').val();
    var tipo3 = $('input:radio[name=customRadioLiena3]:checked').val();

    if(tipo1 == 0 || tipo2 == 0 || tipo3 == 0){
        $("#ventasAlert0").show(1000);
    }
    else if(tipo1 == 0 && tipo2 == 0 && tipo3 == 0){
        $("#ventasAlert0").show(1000);
    }
    else{
        $("#ventasAlert0").hide(1000);
    }
}