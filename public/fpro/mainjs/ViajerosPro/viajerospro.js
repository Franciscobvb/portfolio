var meses = {'202001': 'Enero', '202002': 'Febrero', '202003': 'Marzo', '202004': 'Abril', '202005': 'Mayo', '202006': 'Junio', '202007': 'Julio', '202008': 'Agosto', '202009': 'Septiembre', '202010': 'Octubre', '202011': 'Noviembre', '202012': 'Diciembre'};

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

var kinyaPer = 0;
var kinya1lvl = 0;
var rangos = {0: '', 1: 'DIR', 3: 'EXE', 5: 'PLA', 6: 'ORO', 7: 'PLO', 8: 'DIA', 9: 'DRL'}
$("#mainPts").dataTable({
    lengthChange: false,
    ordering: false,
    info: false,
    destroy: true,
    ajax: '/vpGetMonts?associateid=' + $("#associateid").val(),
    dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
    buttons: {
        buttons: [
            { 
                extend: 'excel', 
                className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3 btnExcel', 
                text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
            },
        ]
    },
    columns: [
        { data: 'associateid', className: 'text-center' },
        { data: 'AssociateName', className: 'text-center' },
        { 
            data: 'Periodo', 
            className: 'text-center',
            "render": function(data, type, row){
                var Periodo = meses[row.Periodo];
                return Periodo;
            }
        },
        { 
            data: 'VP',
            className: 'text-center',
            "render": function(data, type, row){
                var vp = row.VP;
                if(vp >= 100){
                    vp = number_format(row.VP) +'<br><span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
                }
                else{
                    vp = number_format(row.VP) + '<br><span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
                }
                return vp;
            }
        },
        { 
            data: 'VGP',
            className: 'text-center',
            "render": function(data, type, row){
                var VGP = row.VGP;
                if(VGP >= 1000){
                    VGP = number_format(row.VGP) +'<br><span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
                }
                else{
                    VGP = number_format(row.VGP) + '<br><span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
                }
                return VGP;
            }
        },
        { 
            data: 'VGPacumulado',
            className: 'text-center',
            "render": function(data, type, row){
                var VGVGPacumuladoP = row.VGPacumulado;
                VGVGPacumuladoP = number_format(VGVGPacumuladoP);
                return VGVGPacumuladoP;
            }
        },
        {
            data: 'RangoN',
            className: 'text-center',
            "render": function(data, type, row){
                var rango = row.RangoN;
                rango = rangos[rango];
                return rango;
            }
        },
        {
            data: 'Rango_Pago',
            className: 'text-center',
            "render": function(data, type, row){
                var Rango_Pago = row.Rango_Pago;
                Rango_Pago = rangos[Rango_Pago];
                return Rango_Pago;
            }
        },
        { data: 'kinya', className: 'text-center' },
        { data: 'KinYaL1', className: 'text-center' },
        {
            data: 'Cumple_MesV',
            className: 'text-center',
            "render": function(data, type, row){
                var Cumple_MesV = row.Cumple_MesV.trim();
                if(row.Cumple_MesV == 'YES'){
                    Cumple_MesV = '<br><span class="badge badge-success badge-pill"><i class="flaticon-single-circle-tick"></i> Cumple</span>';
                }
                else{
                    Cumple_MesV = '<br><span class="badge badge-danger badge-pill"><i class="flaticon-close"></i> No cumple</span>';
                }
                return Cumple_MesV;
            }
        },
    ],
    language: {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    }
});

var contador = 0;
var flag = {'PER': 'peru.png', 'MEX': 'mexico.png', 'LAT': 'mexico.png', 'COL': 'colombia.png', 'CHL': 'chile.png', 'ECU': 'ecuador.png', 'PAN': 'panama.png', 'SLV': 'salvador.png', 'GTM': 'guatemala.png', 'CRI': 'costarica.png'};
var mainCode = $("#associateid").val();
$("#rankingTab").dataTable({
    lengthChange: false,
    ordering: false,
    info: false,
    destroy: true,
    ajax: "/vpGetRank",
    columns: [
        { 
            data: 'Associateid', 
            className: 'text-center',
            "render": function(data, type, row){
                contador++;
                if(row.Associateid == mainCode){
                    var indent = "<span id='mainposition'></span>"
                    $("#mainposition").parent().parent().addClass('mainPosition')
                    return "# " + contador + indent;
                }
                else{
                    return "# " + contador;
                }
                
            }
        },
        { data: 'AssociateName', className: 'text-center' },
        { data: 'Rango', className: 'text-center' },
        { 
            data: 'Pais', 
            className: 'text-center',
            "render": function(data, type, row){
                var paisText = row.Pais;
                if(paisText == 'LAT'){
                    paisText = "MEX";
                }
                return "<img src='../fpro/img/flags/" + flag[row.Pais.trim()] + "' width=25px'> <br> " + paisText;
            }
        },
        {
            data: 'VGP_Acumulado',
            className: 'text-center',
            "render": function(data, type, row){
                return number_format(row.VGP_Acumulado);
            }

        },
    ],
    language: {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    }
});