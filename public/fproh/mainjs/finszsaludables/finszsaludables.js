function geteventsfzssal(){
    var associateid = $("#associateid").val();
    var table = $('#genealogias').DataTable({
        'dom':
            "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'<'float-md-right ml-2'B>f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        'ajax': '/geteventsfzssal/?associateid=' + associateid,
        'buttons': [{
            'text': '<i class=" flaticon-view " aria-hidden="true"></i> Cambiar vista',
            'className': 'btn btn-gradient-warning btn-rounded text-black cardview',
            'attr': {
                'title': 'Cambiar vista',
                'id': 'cardview',
            },
            'action': function (e, dt, node) {
                $(dt.table().node()).toggleClass('cards');
                $('.fa', node).toggleClass(['fa-table', 'fa-id-badge']);
                dt.draw('page');
            },
        }],
        'select': 'single',
        'columns': [
            {
                'orderable': false,
                'data': null,
                'className': 'text-center',
                'render': function(data, type, row){
                    if (type === 'display'){
                        data = '<i class="fa fa-user fa-fw"></i>';
                        data = '<img src="' + row.EventImage + '" class="avatar" data-event="' + row.EventName + '" id="' + row.EventDate + '"  onclick="showEventPic(this.id)">';
                    }
                    return data;
                },
            },
            {
               'data': 'EventName'
            },
            {
               'data': 'EventDate'
            },
        ],
        'drawCallback': function (settings) {
            var api = this.api();
            var $table = $(api.table().node());
           
            if ($table.hasClass('cards')) {
                var labels = [];
                $('thead th', $table).each(function () {
                    labels.push($(this).text());
                });
                
                $('tbody tr', $table).each(function () {
                    $(this).find('td').each(function (column) {
                        $(this).attr('data-label', labels[column]);
                    });
                });
    
                var max = 0;
                $('tbody tr', $table).each(function () {
                    max = Math.max($(this).height(), max);
                }).height(max);
            }
            else {
                //$("#cardview").trigger("click");

                $('tbody td', $table).each(function () {
                    $(this).removeAttr('data-label');
                });
    
                $('tbody tr', $table).each(function () {
                    $(this).height('auto');
                });
                
            }

        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
        },
        "bLengthChange": false,
        "iDisplayLength": 10,
    })
    .on('select', function (e, dt, type, indexes) {
        var rowData = table.rows(indexes).data().toArray()
        $('#row-data').html(JSON.stringify(rowData));
    })
    .on('deselect', function () {
        $('#row-data').empty();
    })
}

function addNewEventFrm(){
    if($("#eventName").val().trim() != '' && $("#eventDate").val().trim() != '' && $("#eventPicture").val().trim() != ''){
        $("#addNewEventFrm").submit();
        $("#saveButton").prop('disabled', true);
    }
    else{
        $("#saveButton").prop('disabled', false);
        swal({
            title: 'Error!',
            text: "Todos los campos deben estar llenos!",
            type: 'error',
            padding: '2em'
        })
        if($("#eventName").val().trim() == ''){
            $("#eventName").focus();
        }
        else if($("#eventDate").val().trim() == ''){
            $("#eventDate").focus();
        }
    }
}

function getReport(){
    var associateid = $("#associateid").val();
    var type = $("#type").val();
    var count = 0;
    var table = $('#statusPers').DataTable( {
        destroy: true,
        ajax: "/getreportfzssal/?associateid=" + associateid + "&type=" + type,
        columns: [
            {
                data: null,
                "render": function (data, type, row) {
                    count++;
                    return count;
                }
            },
            {
                data: 'nivel',
            },
            {
                data: 'AssociateName',
            },
            {
                data: 'associateid',
            },
            {
                data: null,
                "render": function (data, type, row) {
                    return "5566778899"
                }
            },
            {
                data: null,
                "render": function (data, type, row) {
                    return "5566778899"
                }
            },
            {
                data: null,
                "render": function (data, type, row) {
                    return "mailtest@mail.com"
                }
            },
            {
                data: 'Rango',
            },
            {
                data: 'Pais',
            },
            {
                data: null,
                "render": function (data, type, row) {
                    return parseFloat(row.VP).toFixed()
                }
            },
            {
                data: 'Incorp_Influencers',
            },
            {
                data: 'NoEventos',
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    if(row.VP > 100){
                        return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                    }
                    else{
                        var falta = 100-row.VP;
                        return '<span class=" shadow-none badge badge-danger badge-pill">Falta ' + falta + '</span>';
                    }
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    if(row.Incorp_Influencers > 2){
                        return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                    }
                    else{
                        var falta = 2-row.Incorp_Influencers;
                        return '<span class=" shadow-none badge badge-danger badge-pill">Falta ' + falta + '</span>';
                    }
                }
            },
            {
                data: null,
                className: 'text-center',
                "render": function (data, type, row) {
                    if(row.NoEventos > 1){
                        return '<span class=" shadow-none badge badge-success badge-pill">Cumple</span>';
                    }
                    else{
                        var falta = 1-row.NoEventos;
                        return '<span class=" shadow-none badge badge-danger badge-pill">Falta ' + falta + '</span>';
                    }
                }
            },
        ],
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{ 
                extend: 'excel', 
                className: 'btn btn-default btn-rounded btn-sm mb-4 btn-gradient-warning',
                text:"<img src='http://services.nikken.com.mx/retos/img/excel.png' width='15px'></img> Exportar a Excel",
            }]
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json",
        },
        "bLengthChange": false,
        "iDisplayLength": 10,
        "responsive": true,
    });
}

function setHora(){
    fecha = new Date();
    hora = fecha.getHours();
    minuto = fecha.getMinutes();
    var ampm = hora >= 12 ? 'pm' : 'am';
    updateHour = hora + ":00:00 " + ampm;
    $("#hora").text(updateHour);
    setTimeout("setHora()",1000)
}

function showEventPic(img){
    var evento = $('#' + img).attr('data-event');
    var src = $('#' + img).attr('src');
    $("#myLargeModalLabel").text(evento);
    $("#eventPic").attr('src', src)
    $(".bd-example-modal-lg").modal('toggle');
}