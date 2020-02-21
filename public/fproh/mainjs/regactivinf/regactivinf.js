$('#genealogias').DataTable( {
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
        "paginate": {
          "previous": "<i class='flaticon-arrow-left-1'></i>",
          "next": "<i class='flaticon-arrow-right'></i>"
        },
        "info": "Showing page _PAGE_ of _PAGES_"
    },
    responsive: true
} );


