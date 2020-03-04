//////////funcion cargar informe ultimo pago modal
$(document).on("click", "#btn_modal_ult_doc", function () {
     

     $("#tabla_ult_doc").dataTable().fnDestroy();
     $('#tabla_ult_doc tbody').empty();
     

     
    $.ajax({
      url: '../controles/controlDetInfUltPago.php',
      type: 'POST',
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
        //console.log (filas);
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
          var nuevafila= "<tr><td>" +
          result[i].rut_emp + "</td><td>" +
          result[i].razon_social_emp + "</td><td>" +
          result[i].clave_sii_emp + "</td><td>" +
          numeral(result[i].afecto).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].exento).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].iva).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].total).format('$000,000,000,000') + "</td><td>" +
          result[i].tipo_doc + "</td><td>" +
          result[i].nro_doc + "</td><td>" +
          result[i].fec_emi + "</td><td>" +
          result[i].usu + "</td></tr>"
     
          $("#tabla_ult_doc").append(nuevafila);

        }
             $('#tabla_ult_doc').DataTable({
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


            },
      error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
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
    $('#doc_ven').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
              "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;  
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?  i : 0;
                    };
                    //console.log(data);
                    
                    total_afecto = api.column( 4 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );

                    total_exento = api.column( 5 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );

                    total_iva = api.column( 6 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );

                    total_total = api.column( 7 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );

                    total_suma_pago = api.column( 16 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );
                    


                    total_afecto = parseInt(total_afecto);
                    total_exento = parseInt(total_exento);
                    total_iva = parseInt(total_iva);
                    total_total = parseInt(total_total);
                    total_suma_pago = parseInt(total_suma_pago);
                    // Update footer
                    $('#totalAfecto').html(numeral(total_afecto).format('$000,000,000,000'));
                    $('#totalExento').html(numeral(total_exento).format('$000,000,000,000'));   
                    $('#totalIva').html(numeral(total_iva).format('$000,000,000,000'));  
                    $('#totalTotal').html(numeral(total_total).format('$000,000,000,000'));   
                    $('#totalSumaPago').html(numeral(total_suma_pago).format('$000,000,000,000'));               
                }
    });
    $('.dataTables_length').addClass('bs-select');
  });

