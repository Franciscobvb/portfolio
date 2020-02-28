$("#current").prop('checked', true);
var lang = $("#lang").val();

switch(lang){
    case 'en':
        lang = 'Englis'
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

$('#volumeGenealogy').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/" + lang + ".json"
    },
});

var current = true;

function getReport(element){
    var year = $("#" + element).attr('data-year');
    var type = $("#" + element).val();
    $("#yearVo").text(year);
    
    if(element == "current" && current == true){
        alert("Reporte de año actual");
        current = false;
    }
    else if(element == "last" && current == false){
        alert("Reporte de año pasado");
        current = true;
    }
}