$(document).ready(function(){
    $('body').on('click', '#Genealogy', function(){
        $("#modalGenealogy").modal({backdrop: 'static', keyboard: false});
    });

    $('body').on('click', '#DetailKinya', function(){
        $("#modalTable").modal({backdrop: 'static', keyboard: false});
    });

    $('body').on('click', '#DetailKinyaPlus', function(){
        $("#modalCart").modal({backdrop: 'static', keyboard: false});
    });

    $('body').on('click', '#DetailKintai', function(){
        $("#modalKintai").modal({backdrop: 'static', keyboard: false});
    });

    $('body').on('click', '#detailsInfluencia', function(){
        $("#modalInfluencia").modal({backdrop: 'static', keyboard: false});
    });
    $("#period").val('-')
});

//GRAFICAS TEMPLATE
pie_short_Kinya_3_0();
function pie_short_Kinya_3_0() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kinya_3_0',
            data: {
                columns: [
                    ["1 Artículo", 34],
                    ["2 Artículos", 34],
                    ["3 Artículos", 34],
                ],
                type: 'pie',
            },
            color: {
                pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_3_1();
function pie_short_Kinya_3_1() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kinya_3_1',
            data: {
                columns: [
                    ["1 Artículo", 34],
                    ["2 Artículos", 34],
                    ["3 Artículos", 34],
                ],
                type: 'pie',
            },
            color: {
                pattern: ['#F7464A', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_3_2();
function pie_short_Kinya_3_2() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kinya_3_2',
            data: {
                columns: [
                    ["1 Artículo", 34],
                    ["2 Artículos", 34],
                    ["3 Artículos", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#F7464A', '#FF5733', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_3_3();
function pie_short_Kinya_3_3() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kinya_3_3',
            data: {
                columns: [
                    ["1 Artículo", 34],
                    ["2 Artículos", 34],
                    ["3 Artículos", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#F7464A', '#FF5733', '#FDB45C']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_plus_2_0();
function pie_short_Kinya_plus_2_0() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_KinyaPlus_2_0',
            data: {
                columns: [
                    ["Nivel 1", 50],
                    ["Nivel 2", 50],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_plus_2_1();
function pie_short_Kinya_plus_2_1() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_KinyaPlus_2_1',
            data: {
                columns: [
                    ["Nivel 1", 50],
                    ["Nivel 2", 50],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#86af49', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kinya_plus_2_2();
function pie_short_Kinya_plus_2_2() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_KinyaPlus_2_2',
            data: {
                columns: [
                    ["Nivel 1", 50],
                    ["Nivel 2", 50],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#86af49', '#9cd634']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_3_0();
function pie_short_Kintai_3_0() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_3_0',
            data: {
                columns: [
                    ["1 Línea", 34],
                    ["2 Líneas", 34],
                    ["3 Líneas", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_3_1();
function pie_short_Kintai_3_1() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_3_1',
            data: {
                columns: [
                    ["1 Línea", 34],
                    ["2 Líneas", 34],
                    ["3 Líneas", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_3_2();
function pie_short_Kintai_3_2() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_3_2',
            data: {
                columns: [
                    ["1 Línea", 34],
                    ["2 Líneas", 34],
                    ["3 Líneas", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#4684BF', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_3_3();
function pie_short_Kintai_3_3() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_3_3',
            data: {
                columns: [
                    ["1 Línea", 34],
                    ["2 Líneas", 34],
                    ["3 Líneas", 34],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#4684BF', '#46BFBD']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_0();
function pie_short_Kintai_6_0() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_0',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_1();
function pie_short_Kintai_6_1() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_1',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_2();
function pie_short_Kintai_6_2() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_2',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#8046BF', '#C0C0C0', '#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_3();
function pie_short_Kintai_6_3() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_3',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#8046BF', '#4684BF', '#C0C0C0', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_4();
function pie_short_Kintai_6_4() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_4',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#C0C0C0', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_5();
function pie_short_Kintai_6_5() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_5',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#46BFBD', '#C0C0C0']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();
}

pie_short_Kintai_6_6();
function pie_short_Kintai_6_6() {
    var sort = true;
    var generate = function () {
        return c3.generate({
            bindto: '#NikkenChallengeChart_Kintai_6_6',
            data: {
                columns: [
                    ["1 Persona", 16],
                    ["2 Personas", 16],
                    ["3 Personas", 16],
                    ["4 Personas", 16],
                    ["5 Personas", 16],
                    ["6 Personas", 16],
                ],
                type: 'pie',
            },
            color: {   
                pattern: ['#8046BF', '#8046BF', '#4684BF', '#4684BF', '#46BFBD', '#46BFBD']
            },
            axis: {
                x: {
                    label: 'Sepal.Width'
                },
                y: {
                    label: 'Petal.Width'
                }
            },
        });
    }, chart = generate();

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

pie_short_influencia();
function pie_short_influencia() {
    var pzPiWater = 0;
    var pzWaterfall = 0;
    var pzPiWater_Optimizer = 0;
    var pzWaterfall_Optimizer = 0;
    var pzOptimizer = 0;
    var pzAquaPourD = 0;
    var associateid = $("#associateid").val();

    var data = {associateid: associateid}

    $.ajax({
        type: 'GET',
        url: '/getInfoInfluencia',
        data: data,
        success: function(Response){
            if(Response['contPiezasBono'].length > 0){
                $("#infBono").text(number_format(Response['contPiezasBono'][0]['Total_Amount'], 2, '.', ','));
                $("#piezasInfluencia").text(Response['contPiezasBono'][0]['No_Unidades']);
            }
            else{
                $("#infBono").text(number_format(0, 2, '.', ','));
                $("#piezasInfluencia").text(0);
            }
            
            var tr = "";

            for(var x = 0; x < Response['Detalle'].length; x++){
                if(Response['Detalle'][x]['Descripcion'] == 'WaterFall'){
                    pzWaterfall++;
                }
                if(Response['Detalle'][x]['Descripcion'] == 'PiWater'){
                    pzPiWater++;
                }
                if(Response['Detalle'][x]['Descripcion'] == 'Optimizer'){
                    pzOptimizer++;
                }
                if(Response['Detalle'][x]['Descripcion'] == 'PiWater_Optimizer'){
                    pzPiWater_Optimizer++;
                }
                if(Response['Detalle'][x]['Descripcion'] == 'WaterFall_Optimizer'){
                    pzWaterfall_Optimizer++;
                }
            }

            for(var i = 0; i < Response['tabDetalles'].length; i++){
                tr += '<tr>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Associateid'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['apfirstname'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Ordernum'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Orderdate'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['itemcode'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Descripcion'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Qty_Item'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['Bono_Tres_Unidades_o_Mas'] + '</td>' +
                        '<td scope="row">' + Response['tabDetalles'][i]['owner_country'] + '</td>' +
                    '</tr>';
            }
            $("#bodyTabInfluencia").html(tr);
            $("#tabInfluenciaDetail").DataTable({
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [{ 
                        extend: 'excel',
                        title: 'Influencia 3.0!',
                        className: 'btn btn-default btn-rounded btn-sm mb-4 btn-influencia-180 br-50',
                        text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
                    }]
                },
                language: {
                    url: "https://services.nikken.com.mx/fproh/mainjs/regactivinf/Spanish.json",
                    info: "Mostrando paguina _PAGE_ a _PAGES_"
                },
                responsive: true
            });
            
            var col1 = "#00a5e0";
            var col2 = "#45529a";
            var col3 = "#bccf02";
            var col4 = "#212165";
            var col5 = "#489d2d";
            var col6 = "#a29bff";

            if(Response['Detalle'].length <= 0){
                pzWaterfall = 1;
                pzPiWater = 1;
                pzOptimizer = 1;
                pzPiWater_Optimizer = 1;
                pzWaterfall_Optimizer = 1;
                pzAquaPourD = 1;

                col1 = "#c0c0c0";
                col2 = "#c0c0c0";
                col3 = "#c0c0c0";
                col4 = "#c0c0c0";
                col5 = "#c0c0c0";
                col6 = "#c0c0c0";
            }

            var ContpzWaterfall = 0;
            var ContpzPiWater = 0;
            var ContpzOptimizer = 0;
            var ContpzPiWater_Optimizer = 0;
            var ContpzWaterfall_Optimizer = 0;
            var contpzAquaPourD = 0;

            if(Response['Detalle'].length <= 0){
                ContpzWaterfall = 0;
                ContpzPiWater = 0;
                ContpzOptimizer = 0;
                ContpzPiWater_Optimizer = 0;
                ContpzWaterfall_Optimizer = 0;
                contpzAquaPourD = 0;
            }
            else{
                ContpzWaterfall = pzWaterfall;
                ContpzPiWater = pzPiWater;
                ContpzOptimizer = pzOptimizer;
                ContpzPiWater_Optimizer = pzPiWater_Optimizer;
                ContpzWaterfall_Optimizer = pzWaterfall_Optimizer;
                contpzAquaPourD = pzAquaPourD;
            }

            var sort = true;
            var generate = function () {
                return c3.generate({
                    bindto: '#NikkenChallengeChart_influencia',
                    data: {
                        columns: [
                            ["Pi Water: " + ContpzPiWater, pzPiWater],
                            ["Waterfall: " + ContpzWaterfall, pzWaterfall],
                            ["Pi Water + Optimizer: " + ContpzPiWater_Optimizer, pzPiWater_Optimizer],
                            ["Waterfall + Optimizer: " + ContpzWaterfall_Optimizer, pzWaterfall_Optimizer],
                            ["Optimizer: " + ContpzOptimizer, pzOptimizer],
                            ["Aqua Pour D: " + contpzAquaPourD, pzAquaPourD],
                        ],
                        type: 'pie',
                    },
                    color: {
                        pattern: [col1, col2, col3, col4, col5, col6]
                    },
                    axis: {
                        x: {
                            label: 'Sepal.Width'
                        },
                        y: {
                            label: 'Petal.Width'
                        }
                    },
                });
            }, chart = generate();
        }
    });
}
//END GRAFICAS TEMPLATE

//MODAL WINNER
var ganador = $("#kintaiWinner").val();

if (ganador != '0') {
    winner();
}

function winner() {
    var end = Date.now() + (15 * 1000);

    var interval = setInterval(function() {
        if (Date.now() > end) {
            return clearInterval(interval);
        }

        confetti({
            startVelocity: 30,
            spread: 360,
            ticks: 60,
            origin: {
                x: Math.random(),
                y: Math.random() - 0.2
            }
        });
    }, 200);

    var duration = 15 * 1000;
    var end = Date.now() + duration;

    function frame() {
        confetti({
        particleCount: 15,
        angle: 60,
        spread: 55,
        origin: { x: 0 }
        });
        
        confetti({
        particleCount: 15,
        angle: 120,
        spread: 55,
        origin: { x: 1 }
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    };

    swal({
        title: '¡¡FELICIDADES HAS COMPLETADO EL KINTAI!!',
        text: 'HAS GANADO ' + $("#amountWinn").val(),
        imageUrl: '../fpro/img/NCINF/winner.png',
        imageWidth: 400,
        imageHeight: 220,
        imageAlt: 'Has ganado el kintai',
        animation: false,
        customClass: 'animated wobble',
        padding: '2em',
        footer: 'Reconocemos tu esfuerzo, recuerda que aún puedes obtener más ganancias.',
    })
}

$("#detailKintai").DataTable({
    dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
    buttons: {
        buttons: [{ 
            extend: 'excel',
            title: 'Kintai',
            className: 'btn btn-default btn-rounded btn-sm mb-4 aqua-gradient br-50',
            text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
        }]
    },
    language: {
        url: "https://services.nikken.com.mx/fproh/mainjs/regactivinf/Spanish.json",
        info: "Mostrando paguina _PAGE_ a _PAGES_"
    },
    responsive: true
});

$("#tabDetailKinya").DataTable({
    dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
    buttons: {
        buttons: [{ 
            extend: 'excel',
            title: 'KinYa!',
            className: 'btn btn-default btn-rounded btn-sm mb-4 btn-influencia-180 br-50',
            text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
        }]
    },
    language: {
        url: "https://services.nikken.com.mx/fproh/mainjs/regactivinf/Spanish.json",
        info: "Mostrando paguina _PAGE_ a _PAGES_"
    },
    responsive: true
});

var continuar = $("#continue");
var pricereset= 0;
var contador = document.getElementById("contador").value;

continuar.on("click", function() {
    pricereset= 0;
    document.getElementById("Kinmaster").style='block';
    document.getElementById("exponente").textContent = contador;
});

function reset(){
    document.getElementById("amount").innerText = '$0';
}

window.addEventListener("load", postSize, false);
function postSize(e){
    var target = parent.postMessage ? parent : (parent.document.postMessage ? parent.document : undefined);
    if (typeof target != "undefined" && document.body.scrollHeight){
        target.postMessage( document.body.scrollHeight, "*");
    }
}

function getEdoCta(periodo){
    var associateid = $("#associateid").val();
    window.open("/InfContGetPDF?associateid=" + associateid + "&periodo=" + periodo, "width=500,height=300,scrollbars=NO");
    $("#period").val('-');
}

function getJugadores(type){
    $("#mis_jugadores").val('-');
    if(type == 1){
        $("#modalGenealogy").modal('toggle');
        loadDataModalGenealogy();
    }
    else if(type == 2){
        $("#modalLideres").modal('toggle');
        loadDataModalLeaders();
    }
}

function loadDataModalGenealogy(){
    $("#jugadoresRed").DataTable({
        destroy: true,
        ajax: '/ctrinfGetGen?abi=' + $("#associateid").val(),
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{ 
                extend: 'excel',
                title: 'Jugadores de mi Red',
                className: 'btn btn-default btn-rounded btn-sm mb-4 btn-influencia-180 br-50',
                text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
            }]
        },
        columns: [
            { 'data': 'sponsorid', className: 'text-center ' },
            { 'data': 'associateid', className: 'text-center ' },
            { 'data': 'Name', className: 'text-center ' },
            { 'data': 'level', className: 'text-center ' },
            { 'data': 'QTY', className: 'text-center ' },
            { 'data': 'e_mail', className: 'text-center ' },
        ],
        language: {
            url: "https://services.nikken.com.mx/fproh/mainjs/regactivinf/Spanish.json",
            info: "Mostrando paguina _PAGE_ a _PAGES_"
        },
        responsive: true
    });
}

function loadDataModalLeaders(){
    $("#jugadoresRedLideres").DataTable({
        destroy: true,
        ajax: '/ctrinfGetLeaders?abi=' + $("#associateid").val(),
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{ 
                extend: 'excel',
                title: 'Jugadores de mi Red',
                className: 'btn btn-default btn-rounded btn-sm mb-4 btn-influencia-180 br-50',
                text:"<img src='https://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
            }]
        },
        columns: [
            { 'data': 'Sponsor_id', },
            { 'data': 'associateid', },
            { 'data': 'AssociateName', },
            { 'data': 'Level', },
            { 'data': 'Qty', },
            { 'data': 'Email', },
        ],
        processing: true,
        language: {
            url: "https://services.nikken.com.mx/fproh/mainjs/regactivinf/Spanish.json",
            info: "Mostrando paguina _PAGE_ a _PAGES_"
        },
        responsive: true
    });
}