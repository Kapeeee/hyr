//////////funcion separador de miles inputs number
    $(document).on('keyup', '.nro', function (e) {
     element = e.target;
     value = element.value;
    n = value;
    n = String(n).replace(/\D/g, "");
    n = '' ? n : Number(n).toLocaleString();  
    element.value = n;
  });


//////////funcion registrar actualizacion modulo laboral
$(document).ready(function() {
  $("#formReg").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlRegModLab.php',
      data:$("#formReg").serialize(),
      success: function (result) { 
      var msg = result.trim();

        switch(msg) {
                case '-1':
                    swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                    break;
                case '-2':
                    swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");
                    break;
                default :
                    swal("Actualización Modulo Laboral", msg, "success");
                    $('#formReg').trigger("reset");
                    break;
            }
            $("#btn_modal_hist_mod_lab").click();

      },
      error: function(){
              swal("Error", "Favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });
    return false;
  });
}); 






//////////funcion cargar historial de actualizaciones modulo laboral
$(document).on("click", "#btn_modal_hist_mod_lab", function () {
     var id_emp = $(this).data('id');
     var rut_emp = $(this).data('rut');
     var emp = $(this).data('emp');
     var fec = $(this).data('fec');

     $("#Remp_hist_mod_lab").text(rut_emp);
     $("#emp_hist_mod_lab").text(emp);
     $("#fec_ult_act").text(fec);
     $("#emp").val(id_emp);


     $("#tabla_hist_mod_lab").dataTable().fnDestroy();
     $('#tabla_hist_mod_lab tbody').empty();
     

     
    $.ajax({
      url: '../controles/controlHistModLab.php',
      type: 'POST',
      data: {"emp":id_emp},
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
        //console.log (filas);
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
          var nuevafila= "<tr><td>" +
          numeral(result[i].cot_mod_lab).format('000,000,000,000') + "</td><td>" +
          numeral(result[i].ntrab_mod_lab).format('000,000,000,000') + "</td><td>" +
          result[i].cargas_mod_lab + "</td><td>" +
          result[i].fec_act_mod_lab + "</td><td>" +
          result[i].tasa_acc_mod_lab + "</td><td>" +
          result[i].periodo_mod_lab + "</td><td>" +
          result[i].nick_usu + "</td></tr>"
     
          $("#tabla_hist_mod_lab").append(nuevafila);

        }
             $('#tabla_hist_mod_lab').DataTable({
              "order": [[ 3, "desc" ]],
      buttons: [
        {
            extend: 'excelHtml5',
            text: 'Excel'
        }
    ],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },

        dom: 'Bfrtip'
    });
    $('.dataTables_length').addClass('bs-select');
    $('#modal_hist_mod_lab').modal('show');

            },
      error: function(){
              $('#modal_hist_mod_lab').modal('show');   
      }
    });
    
  });




//////////funcion notificar documentos pendiente
function not_doc(id_doc){
  swal({
                  title: "Advertencia de Notificación",
                  text: "Se enviara un correo al cliente, informando acerca de la deuda ¿Estas seguro que deseas notificarlo?",
                  icon: "warning",
                  buttons: ["Cancelar", "Aceptar"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {

    $.ajax({
      url: '../controles/controlNotificarDoc.php',
      type: 'POST',
      data:{ id_doc: id_doc},
      success:function(result){
        var msg = result.trim();

        switch(msg) {
                case '-2':
                    swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");
                    break;
                default :
                    swal("Documento Notificado", msg, "success");

                    //$('#obs_doc').val('');
                    break;
            }
    },
    error: function(){
                swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
        }
        });
      return false;
    }
    });
  }



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
    $('#tabla_mod_lab').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
    $('.dataTables_length').addClass('bs-select');
  });