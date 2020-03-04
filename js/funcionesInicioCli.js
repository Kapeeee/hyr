







 //CARGA DE GIF INICIO
  $(document).ajaxStart(function() {
    $("#main").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#main").show();
    }); 



//INSTANCIAS DE DATATABLE

$(document).ready(function () {
    $('#main_cli').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
             
    });
    $('.dataTables_length').addClass('bs-select');
  });

