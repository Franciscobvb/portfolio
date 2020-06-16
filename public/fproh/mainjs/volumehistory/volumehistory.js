$("#current").prop('checked', true);
var lang = $("#lang").val();
$("#totalLavel").text($("#totalText").val());
switch(lang){
    case 'en':
        lang = 'English'
        break;
    case 'fre':
        lang = 'French'
        break;
    case 'swe':
        lang = 'Swedish'
        break;
    case 'deu':
        lang = 'German'
        break;
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

function getDataReport(periodo){
    var associateid = $("#associateid").val();
    var table = $('#volumeGenealogy').DataTable({
        destroy: true,
        ajax: "/getReportGenUKRetailPV/" + associateid + '/' + periodo,
        columns: [
            {
                data: 'period_id',
            },
            {
                data: 'Name',
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.PPV);
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.PGPV);
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.RETAIL_PGPV);
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.OPV);
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.OPV_OPL);
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    return number_format(row.OPV_OP_SL);
                }
            },
        ],
        "dom": '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/" + lang + ".json"
        },
        'processing': true
    });
}

function getDataTotals(periodo){
    var associateid = $("#associateid").val();
    $.ajax({
        type: "get",
        url: "/getTotalsGenUkRetailPV/" + associateid + '/' + periodo,
        success: function(totals){
            $("#OPV").text(totals[0]['OPV']);
            $("#OPV_OPL").text(totals[0]['OPV_OPL']);
            $("#OPV_OP_SL").text(totals[0]['OPV_OP_SL']);
            $("#PGPV").text(totals[0]['PGPV']);
            $("#PPV").text(totals[0]['PPV']);
            $("#RETAIL_PGPV").text(totals[0]['RETAIL_PGPV']);
        }
    });
}

var current = true;
function getReport(element){
    var year = "";
    if (!element) {
        element = "current";
        var d = new Date();
        year = d.getFullYear();
    }
    else{
        year = $("#" + element).attr('data-year');
    }

    $("#yearVo").text(year);
    if(element == "current" && current == true){
        $("#OPV").text('0.00');
        $("#OPV_OPL").text('0.00');
        $("#OPV_OP_SL").text('0.00');
        $("#PGPV").text('0.00');
        $("#PPV").text('0.00');
        $("#RETAIL_PGPV").text('0.00');
        getDataReport(year)
        getDataTotals(year)
        current = false;
    }
    else if(element == "last" && current == false){
        $("#OPV").text('0.00');
        $("#OPV_OPL").text('0.00');
        $("#OPV_OP_SL").text('0.00');
        $("#PGPV").text('0.00');
        $("#PPV").text('0.00');
        $("#RETAIL_PGPV").text('0.00');
        getDataReport(year)
        getDataTotals(year)
        current = true;
    }
}

getReport(null);