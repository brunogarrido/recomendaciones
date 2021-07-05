
function init()

{   
  
    $.post("../ajax/registro.php?op=selectWebinar", function(r){
                $("#NOWEBINAR").html(r);
                $('#NOWEBINAR').selectpicker('refresh');       
    });
 
    $('#NOWEBINAR').val('NOWEBINAR');
    listar();
}



function listar()
{//document.getElementById("COD").value;
    NODOC=document.getElementById("NODOC").value;
    //bootbox.alert(NOCLIENTE);
    FECHA_I=document.getElementById("FECHA_I").value;
    //bootbox.alert(FECHA_I);
    FECHA_F=document.getElementById("FECHA_F").value;
    // (reporte==='ISO')?   NOMINERAL=document.getElementById("NOMINERAL").value:NOMINERAL=0;
    var data = 
[
    {
        "id": 0,
        "name": "test0",
        "price": "$0"
    },
    {
        "id": 1,
        "name": "test1",
        "price": "$1"
    },
    {
        "id": 2,
        "name": "test2",
        "price": "$2"
    },
    {
        "id": 3,
        "name": "test3",
        "price": "$3"
    },
    {
        "id": 4,
        "name": "test4",
        "price": "$4"
    },
    {
        "id": 5,
        "name": "test5",
        "price": "$5"
    },
    {
        "id": 6,
        "name": "test6",
        "price": "$6"
    },
    {
        "id": 7,
        "name": "test7",
        "price": "$7"
    },
    {
        "id": 8,
        "name": "test8",
        "price": "$8"
    },
    {
        "id": 9,
        "name": "test9",
        "price": "$9"
    },
    {
        "id": 10,
        "name": "test10",
        "price": "$10"
    },
    {
        "id": 11,
        "name": "test11",
        "price": "$11"
    },
    {
        "id": 12,
        "name": "test12",
        "price": "$12"
    },
    {
        "id": 13,
        "name": "test13",
        "price": "$13"
    },
    {
        "id": 14,
        "name": "test14",
        "price": "$14"
    },
    {
        "id": 15,
        "name": "test15",
        "price": "$15"
    },
    {
        "id": 16,
        "name": "test16",
        "price": "$16"
    },
    {
        "id": 17,
        "name": "test17",
        "price": "$17"
    },
    {
        "id": 18,
        "name": "test18",
        "price": "$18"
    },
    {
        "id": 19,
        "name": "test19",
        "price": "$19"
    },
    {
        "id": 20,
        "name": "test20",
        "price": "$20"
    }
];

   /* tabla=$('#tbllistado').dataTable(
    {
       
       "lengthMenu":  [ 5, 10, 25, 75, 100],//mostramos el menú de registros a revisar
        "Processing": true,//Activamos el procesamiento del datatables
        "aServerSide": false,//Paginación y filtrado realizados por el servidor
       
        dom: '<Bl<f>rtip>',//Definimos los elementos del control de tabla
        buttons: [                
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdf'
                    
                ],
        "ajax":
                {
                    url: '../ajax/documento.php?op=listarDoc',
                    data: { NODOC: NODOC,FECHA_I: FECHA_I,FECHA_F: FECHA_F},
                    type : "get",
                    dataType : "json",                      
                    error: function(e){
                        console.log(e.responseText);    
                    }
                },
        "language": {
            "lengthMenu": "Mostrar : _MENU_ registros",
            "buttons": {
            "copyTitle": "Tabla Copiada",
            "copySuccess": {
                    _: '%d líneas copiadas',
                    1: '1 línea copiada'
                }
            }
        },
        
        "bDestroy": true,
        "iDisplayLength": 100,//Paginación
        "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
   }).DataTable();*/
// $(function () {

    tabla=$('#tbllistado').bootstrapTable({ 
        data: data});
  /*  tabla=$('#tbllistado').bootstrapTable({
        
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      pageSize: 8,
      pageList: [8, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    });

    tabla.bootstrapTable('refreshOptions', {url: '../ajax/documento.php?op=listarDoc'});
    tabla.bootstrapTable('refres', {url: '../ajax/documento.php?op=listarDoc'});

*/
  /* table = $('#tbllistado').bootstrapTable( {
        lengthChange: false,
        ajax: "../ajax/documento.php?op=listarDoc",
        columns: [
            { data: null, render: function ( data, type, row ) {
                // Combine the first and last names into a single table field
                return data.first_name+' '+data.last_name;
            } },
            { data: "0" },
            { data: "1" },
            { data: "2" },
            { data: "3" },
            { data: "4" },
             { data: "5" }  //render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
        ],
        select: true
    } );

  /*  $alertBtn.click(function () {
      alert('You pressed on Alert')
    })*/
  //})


}