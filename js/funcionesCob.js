
//id del perfil session enviado por src
var session = document.getElementById("funCob").src.match(/\w+=\w+/g);
var perfil = session[0].split("=");




//////////funcion cargar detalle informe cobranza modal
$(document).on("click", "#btn_modal_det_inf_cob", function () {
     var id_emp = $(this).data('id');
     var tipo = $(this).data('tipo');
     var rut_emp = $(this).data('rut');
     var emp = $(this).data('emp');
     var prom = $(this).data('prom');

     var desde = $('#fec_desde').val();
     var hasta = $('#fec_hasta').val();

     $("#Remp_det_inf_cob").text(rut_emp);
     $("#emp_det_inf_cob").text(emp);
     $("#prom_dias_pago").text(prom);

     if (tipo == 1) {
      console.log(1);
      $("#tit_det_inf_cob").text("Detalle de Docs. ");
     }else if (tipo == 2) {
      console.log(2);
      $("#tit_det_inf_cob").text("Docs. Pendientes ");
     }

     $("#tabla_det_inf").dataTable().fnDestroy();
     $('#tabla_det_inf tbody').empty();
     $('#totalCargos').text('');
     $('#totalPagos').text('');

     
    $.ajax({
      url: '../controles/controlDetInfCob.php',
      type: 'POST',
      data: {"emp":id_emp, "fec_desde":desde, "fec_hasta":hasta , "tipo":tipo},
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
        //console.log (filas);
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
          var nuevafila= "<tr><td>" +
          result[i].nro_doc + "</td><td>" +
          result[i].tipo_doc + "</td><td>" +
          result[i].tipo_mov + "</td><td>" +
          numeral(result[i].cargo).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].pago).format('$000,000,000,000') + "</td><td>" +
          result[i].fecha + "</td><td>" +
          result[i].obs + "</td><td>" +
          result[i].nick_usu + "</td></tr>"
     
          $("#tabla_det_inf").append(nuevafila);

        }
            $('#tabla_det_inf').DataTable({
      buttons: [
        {
            extend: 'excelHtml5',
            text: 'Excel'
        }
    ],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
        dom: 'Bfrtip',

        "footerCallback": function ( row, data, start, end, display ) {
                    var api = this.api(), data;  
                    // Remove the formatting to get integer data for summation
                    var intVal = function ( i ) {
                        return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?  i : 0;
                    };
                    console.log(data);
                    // total_cargos
                    total_cargos = api.column( 3 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );

                    // total_pagos
                    total_pagos = api.column( 4 ).data().reduce( function (a, b) {
                        return intVal(a) + intVal(b);
                    },0 );


                    total_cargos = parseInt(total_cargos);
                    total_pagos = parseInt(total_pagos);
                    // Update footer
                    $('#totalCargos').html(numeral(total_cargos).format('$000,000,000,000'));
                    $('#totalPagos').html(numeral(total_pagos).format('$000,000,000,000'));              
                }

    });
    $('.dataTables_length').addClass('bs-select');


      }
    })





    $('#modal_det_inf_cob').modal('show');
});

//////////funcion buscar informe
$(document).ready(function() {
  $("#formInfCob").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlInfCob.php',
      data:$("#formInfCob").serialize(),
      dataType:'json',
      success: function (result) { 
        $("#tabla_inf_cob").dataTable().fnDestroy();
        $('#tabla_inf_cob tbody').empty();

        var filas = Object.keys(result).length;
        //console.log (filas);
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
          var nuevafila= "<tr><td>" +
          result[i].rut_emp + "</td><td>" +
          result[i].razon_social_emp + "</td><td>" +
          numeral(result[i].cant_docs).format('000,000,000,000') + "</td><td>" +
          numeral(result[i].cant_docs_ing).format('000,000,000,000') + "</td><td>" +
          numeral(result[i].cant_docs_pagop).format('000,000,000,000') + "</td><td>" +
          numeral(result[i].cant_docs_pagoc).format('000,000,000,000') + "</td><td>" +
          numeral(result[i].cargos).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].pagos).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].saldo).format('$000,000,000,000') + "</td><td>" +
          numeral(result[i].prom_dias_pago).format('000,000,000,000') + "</td><td>" +
          '<a id="btn_modal_det_inf_cob" class="link-modal btn btn-outline-success" data-id="'+result[i].id_emp+'" data-tipo="1" data-rut="'+result[i].rut_emp+'" data-emp="'+result[i].razon_social_emp+'" data-prom="'+result[i].prom_dias_pago+'"  data-toggle="modal" ><i class="fa fa-plus-square" aria-hidden="true"></i></a></td><td>'
          '<a id="btn_modal_det_inf_cob" class="link-modal btn btn-outline-warning" data-id="'+result[i].id_emp+'" data-tipo="2" data-rut="'+result[i].rut_emp+'" data-emp="'+result[i].razon_social_emp+'" data-prom="'+result[i].prom_dias_pago+'"  data-toggle="modal" ><i class="fa fa-plus-square" aria-hidden="true"></i></a></td></tr>'
          $("#tabla_inf_cob").append(nuevafila);

        }
            $('#tabla_inf_cob').DataTable({
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
    return false;
  });
}); 

//INSTANCIAS DE DATATABLE informe

$(document).ready(function () {
    $('#tabla_inf_cob').DataTable({
      buttons: [
        {
            extend: 'excelHtml5',
            text: 'Excel',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }
    ],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
        dom: 'Bfrtip'
    });
    $('.dataTables_length').addClass('bs-select');
  });



//////////funcion separador de miles inputs number
    $(document).on('keyup', '.nro', function (e) {
     element = e.target;
     value = element.value;
    n = value;
    n = String(n).replace(/\D/g, "");
    n = '' ? n : Number(n).toLocaleString();  
    element.value = n;
  });




  //////////funcion cambio doc boleta impuesto
  $(document).on("change", "#tipo_doc", function () {
    //Factura
    if ($('#tipo_doc').val() == 1) {
      $('#lblAfecto').text('Monto Afecto');
      //$('#exento').val("0");
      $('#lblExento').css("visibility","visible");
      $('#exento').css("display","block");
      $('#impbol').css("visibility","hidden");
      $('#lblIva').text('Monto IVA');
      $('#afecto').val(0);
      $('#exento').val(0);
      $('#iva').val(0);
      $('#total').val(0);
      $('#afecto').prop('readonly', false);
      $('#exento').prop('readonly', false);
      }

    //Boleta
    if ($('#tipo_doc').val() == 2) {
      $('#lblAfecto').text('Monto Liquido');
      $('#exento').val("0");
      $('#lblExento').css("visibility","hidden");
      $('#exento').css("display","none");
      $('#impbol').css("visibility","visible");
      $('#lblIva').text('Monto Retención');
      $('#afecto').val(0);
      $('#exento').val(0);
      $('#iva').val(0);
      $('#total').val(0);
      $('#afecto').prop('readonly', false);
      }

    
  });
  

  //CARGA DE GIF ING DOC
  $(document).ajaxStart(function() {
    $("#formIngDoc").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formIngDoc").show();
    }); 

    $(document).ajaxStart(function() {
    $("#formEmpDoc").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formEmpDoc").show();
    }); 

  //CARGA DE GIF PAGO DOC
  $(document).ajaxStart(function() {
    $("#formIngPago").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formIngPago").show();
    }); 

  $(document).ajaxStart(function() {
    $("#formEmpPago").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formEmpPago").show();
    }); 

  //CARGA DE GIF CONSULTA DOC
  $(document).ajaxStart(function() {
    $("#formEmpConsulta").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formEmpConsulta").show();
    }); 




//////////funcion cargar movimientos documentos Modal
$(document).on("click", "#btn_modal_consulta", function () {
  $('#tabla_mov_doc tbody').empty();
     var nro_doc = $(this).data('doc');
     var id_doc = $(this).data('id');
     var total = $(this).data('total');
     var afecto = $(this).data('afecto');
     var exento = $(this).data('exento');
     var iva = $(this).data('iva');
     var fec_ven = new Date($(this).data('fec_ven'));
     var fec = Date.now();
     $("#nro_doc").text(nro_doc);
     $("#id_doc").val(id_doc);
     $("#monto_total").val(Number(parseInt(total)).toLocaleString());
     $("#monto_afecto").val(Number(parseInt(afecto)).toLocaleString());
     $("#monto_exento").val(Number(parseInt(exento)).toLocaleString());
     $("#monto_iva").val(Number(parseInt(iva)).toLocaleString());
     $("#tipo_modal").text($(this).data('tipo'));
     $("#fec_ven").val($(this).data('fec_ven'));

     if ($(this).data('tipo') == 'BOLETA') {
        $("#lblAfecto").text("Monto Liquido");
        $("#lblIva").text("Monto Retención");
        $("#lblExento").css("display","none");
        $("#monto_exento").css("display","none");
     }else if($(this).data('tipo') == 'FACTURA'){
        $("#lblAfecto").text("Monto Afecto");
        $("#lblIva").text("Monto IVA");
        $("#lblExento").css("display","block");
        $("#monto_exento").css("display","block");
     }

     fec_ven < fec ? $('#ven_doc').css("display","block") : $('#ven_doc').css("display","none");

    $.ajax({
      url: '../controles/controlDatosDoc.php',
      type: 'POST',
      data: {"doc":id_doc},
      dataType:'json',
      success:function(result){
        $('#est_doc').val(result[0].est);
        $('#monto_pagado').val(Number(parseInt(result[0].suma)).toLocaleString());
      }
    })

    $.ajax({
      url: '../controles/controlMovDoc.php',
      type: 'POST',
      data: {"doc":id_doc},
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
    

          var nuevafila= "<tr><td>" +
          result[i].fec_reg_mov + "</td><td>" +
          Number(parseInt(result[i].monto_mov)).toLocaleString() + "</td><td>" +
          result[i].usu + "</td><td>" +
          result[i].obs_mov + "</td><td>" +
          result[i].est + "</td><tr>"

           $("#tabla_mov_doc").append(nuevafila);

        }
        
      }
    })





    $('#modal_consulta').modal('show');
});




//////////funcion anular doc
function anu_doc(id_doc){

              swal({
              title:'Anular Documento',
              text: 'Ingresa el motivo',
              content: "input",
              button: {
                text: "Anular",
                closeModal: false,
              },
            })
            .then(mot => {
              if (!mot) throw null;


              $.ajax({
                            url: '../controles/controlAnularDoc.php',
                            type: 'POST',
                            data: { id_doc: id_doc, mot: mot},
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
                                          swal("Anular", msg, "success");
                                          
                                          $('#div_tabla_doc').css("display","none");
                                          $('#tabla_docs tbody').empty();
                                          $('#rut_emp').prop('readonly', false);
                                          $('#val_emp').css("display","block");
                                          $('#atras_emp_consulta').css("display","none");
                                          break;
                                  }
                            },
                            error: function(){
                                    alert('Verifique los datos') 
                                    $("#main").show();     
                              }
                        });

             
            })
            .catch(err => {
              if (err) {
                swal("Oh no!", "Tu evaluación no se ha guardado", "error");
              } else {
                swal.stopLoading();
                swal.close();
              }
            });

}





//////////funcion atras consulta doc
$(document).on("click", "#atras_emp_consulta", function () {
  $('#formEmpConsulta').trigger("reset");   
  $('#modal_pago').find('input').val('');
  $('#modal_pago').modal('hide');
  $('#div_tabla_doc').css("display","none");
  $('#forma_consulta').prop('selectedIndex',0);
  $('#tabla_docs tbody').empty();
  $('#obs_pago').val('');
  $('#rut_emp').prop('readonly', false);
  $('#val_emp').css("display","block");
  $('#atras_emp_consulta').css("display","none");

  
});

/////////funcion cargar documentos empresa consulta
$(document).ready(function() {
  $("#formEmpConsulta").submit(function() { 

    $('#tabla_docs').DataTable().destroy();
    $('#tabla_docs tbody').empty();

    $.ajax({
      url: '../controles/controlCargarEmp.php',
      type: 'POST',
      data:$("#formEmpConsulta").serialize(),
      dataType:'json',
      success:function(result){
        $('#nom_emp').val(result[0].razon_social_emp);
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });

    $("#tabla_docs").dataTable().fnDestroy();
      
       $.ajax({
      url: '../controles/controlCargarDocsEmpConsulta.php',
      type: 'POST',
      data:$("#formEmpConsulta").serialize(),
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
    

          var nuevafila= "<tr><td style='display:none;'>" +
          result[i].id_doc + "</td><td>" +
          result[i].nro_doc + "</td><td>" +
          result[i].est + "</td><td>" +
          Number(result[i].monto_afecto_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_exento_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_iva_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_total_doc).toLocaleString() + "</td><td>" +
          result[i].fec_emi_doc + "</td><td>" +
          result[i].fec_ven_doc + "</td><td>" +
          result[i].tipo_doc+"</td><td>"+
          result[i].obs_doc + "</td><td>"+
          '<a id="btn_modal_consulta" class="link-modal btn btn-outline-info" data-id="'+result[i].id_doc+'" data-doc="'+result[i].nro_doc+'" data-total="'+result[i].monto_total_doc+'" data-afecto="'+result[i].monto_afecto_doc+'" data-exento="'+result[i].monto_exento_doc+'" data-iva="'+result[i].monto_iva_doc+'" data-fec_ven="'+result[i].fec_ven_doc+'" data-tipo="'+result[i].tipo_doc+'" data-toggle="modal" >Ver</a></td><td>'
          if (result[i].est_doc == 1 && perfil[1] == 1) {
            nuevafila = nuevafila +'<button id="anu_doc" name="anu_doc" onclick="anu_doc('+result[i].id_doc+')" class="btn btn-outline-danger" >Anular</button></td></tr>'
          } else{
            nuevafila = nuevafila +'</td></tr>'
          }
     
          $("#tabla_docs").append(nuevafila);

        }
        $("#div_tabla_doc").css("display","block");
        $('#rut_emp').prop('readonly', true);
        $('#val_emp').css("display","none");
        $('#atras_emp_consulta').css("display","block");
        $('#tabla_docs').DataTable({
            "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
    $('.dataTables_length').addClass('bs-select');
  },
  error: function(){
              swal("Error1", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });
    return false;
  });
});


//////////funcion atras ingreso pago
$(document).on("click", "#atras_emp_pago", function () {
  $('#formEmpPago').trigger("reset");   
  $('#modal_pago').find('input').val('');
  $('#modal_pago').modal('hide');
  $('#div_tabla_doc').css("display","none");
  $('#forma_pago').prop('selectedIndex',0);
  $('#tabla_docs tbody').empty();
  $('#obs_pago').val('');
  $('#rut_emp').prop('readonly', false);
  $('#val_emp').css("display","block");
  $('#atras_emp_pago').css("display","none");

  
});



//////////funcion cargar documentos empresa pago
$(document).ready(function() {
  $("#formEmpPago").submit(function() { 

    $.ajax({
      url: '../controles/controlCargarEmpSV.php',
      type: 'POST',
      data:$("#formEmpPago").serialize(),
      dataType:'json',
      success:function(result){
        $('#nom_emp').val(result[0].razon_social_emp);
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });


      
       $.ajax({
      url: '../controles/controlCargarDocsEmp.php',
      type: 'POST',
      data:$("#formEmpPago").serialize(),
      dataType:'json',
      success:function(result){
        var filas = Object.keys(result).length;
     
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
          var nuevafila= "<tr><td style='display:none;'>" +
          result[i].id_doc + "</td><td>" +
          result[i].nro_doc + "</td><td>" +
          Number(result[i].monto_afecto_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_exento_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_iva_doc).toLocaleString() + "</td><td>" +
          Number(result[i].monto_total_doc).toLocaleString() + "</td><td>" +
          result[i].fec_emi_doc + "</td><td>" +
          result[i].fec_ven_doc + "</td><td>" +
          result[i].tipo_doc+"</td><td>"+
          result[i].obs_doc + "</td><td>"+
          '<a id="btn_modal_pago" class="link-modal btn btn-outline-info" data-id="'+result[i].id_doc+'" data-doc="'+result[i].nro_doc+'" data-total="'+result[i].monto_total_doc+'" data-afecto="'+result[i].monto_afecto_doc+'" data-fec_ven="'+result[i].fec_ven_doc+'" data-toggle="modal" >Pagar</a></td></tr>'
     
          $("#tabla_docs").append(nuevafila);

        }
        $("#div_tabla_doc").css("display","block");
        $('#rut_emp').prop('readonly', true);
        $('#val_emp').css("display","none");
        $('#atras_emp_pago').css("display","block");
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });
    return false;
  });
}); 





//////////funcion atras ingreso doc
$(document).on("click", "#atras_emp_doc", function () {
     
  $('#formEmpDoc').trigger("reset");
  $('#formIngDoc').trigger("reset");
  $('#form_doc').css("display","none");
  $('#rut_emp').prop('readonly', false);
  $('#atras_emp_doc').css("display","none");
  $('#val_emp').css("display","block");
  $('#afecto').prop('readonly', true);
  $('#exento').prop('readonly', true);

  
});





//////////funcion pago documento
$(document).ready(function() {
  $("#formIngPago").submit(function() {    

    var total = String($('#monto_total').val()).replace(/\D/g, "");
    var pagado = String($('#monto_pagado').val()).replace(/\D/g, "");
    var pago = String($('#monto_pago').val()).replace(/\D/g, "");

    if (parseInt(total) < (parseInt(pago)+parseInt(pagado))) {
           swal({
                  title: "Advertencia de Monto",
                  text: "La suma de monto pagado es mayor que el total del documento ¿Estas seguro que deseas registrarlo?",
                  icon: "warning",
                  buttons: ["Cancelar", "Aceptar"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                        $.ajax({
                            type: "POST",
                            url: '../controles/controlPagoDoc.php',
                            data:$("#formIngPago").serialize(),
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
                                          swal("Pago Ingresado", msg, "success");
                                          $('#modal_pago').find('input').val('');
                                          $('#modal_pago').modal('hide');
                                          $('#div_tabla_doc').css("display","none");
                                          $('#formEmpPago').trigger("reset");
                                          $('#forma_pago').prop('selectedIndex',0);
                                          $('#tabla_docs tbody').empty();
                                          $('#obs_pago').val('');
                                          $('#rut_emp').prop('readonly', false);
                                          $('#val_emp').css("display","block");
                                          $('#atras_emp_pago').css("display","none");
                                          break;
                                  }
                            },
                            error: function(){
                                    swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
                            }
                          });

                  } 
                });
    
    }else{
          swal({
                  title: "Ingreso de Pago",
                  text: "¿Esta seguro de registrar el pago?",
                  icon: "warning",
                  buttons: ["Cancelar", "Aceptar"],
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                      $.ajax({
                            type: "POST",
                            url: '../controles/controlPagoDoc.php',
                            data:$("#formIngPago").serialize(),
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
                                          swal("Pago Ingresado", msg, "success");
                                          $('#modal_pago').find('input').val('');
                                          $('#modal_pago').modal('hide');
                                          $('#div_tabla_doc').css("display","none");
                                          $('#formEmpPago').trigger("reset");
                                          $('#forma_pago').prop('selectedIndex',0);
                                          $('#tabla_docs tbody').empty();
                                          $('#obs_pago').val('');
                                          $('#rut_emp').prop('readonly', false);
                                          $('#val_emp').css("display","block");
                                          $('#atras_emp_pago').css("display","none");
                                          break;
                                  }
                            },
                            error: function(){
                                    swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
                            }
                          });
                       } 
                });
    }


    


    return false;
  });
}); 



//////////funcion cargar documento para pago Modal
$(document).on("click", "#btn_modal_pago", function () {
     var nro_doc = $(this).data('doc');
     var id_doc = $(this).data('id');
     var total = $(this).data('total');
     var afecto = $(this).data('afecto');
     var fec_ven = new Date($(this).data('fec_ven'));
     var fec = Date.now();
     $("#nro_doc").text(nro_doc);
     $("#id_doc").val(id_doc);
     
     fec_ven < fec ? $('#ven_doc').css("display","block") : $('#ven_doc').css("display","none");

    $.ajax({
      url: '../controles/controlDatosDoc.php',
      type: 'POST',
      data: {"doc":id_doc},
      dataType:'json',
      success:function(result){
        if (result[0].tipo_doc == 2) {
          $("#monto_total").val(Number(afecto).toLocaleString());
        }else{
          $("#monto_total").val(Number(total).toLocaleString());
        }
        $('#est_doc').val(result[0].est);
        $('#monto_pagado').val(Number(result[0].suma).toLocaleString());
      }
    })





    $('#modal_pago').modal('show');
});






//////////funcion calcular monto total
function calculoTotal()
{     
      var afecto = $('#afecto').val() == '' ? 0 : String($('#afecto').val()).replace(/\D/g, "");
      var exento = $('#exento').val() == '' ? 0 : String($('#exento').val()).replace(/\D/g, "");
      var iva = $('#iva').val() == '' ? 0 : String($('#iva').val()).replace(/\D/g, "");


       var total = parseInt(afecto) + parseInt(exento) + parseInt(iva);
        $('#total').val(Number(parseInt(total)).toLocaleString());
}
//////////funcion calcular monto iva
function calculoIva()
{
        var afecto = String($('#afecto').val()).replace(/\D/g, "")
        if ($('#tipo_doc').val() == 1) {
          if (afecto!=0) {
            var iva = parseInt(afecto) * 0.19;
            $('#iva').val(Number(parseInt(iva)).toLocaleString());
          }else{
            $('#iva').val(0);
          }
          
        }else if ($('#tipo_doc').val() == 2) {
          $('#exento').val('0');
          if ($('#impbolcheck').prop('checked')) {
            if (afecto!=0) {
              var iva = parseInt(afecto) / 0.8925;
              var iva = iva - parseInt(afecto);
              $('#iva').val(Number(Math.round(iva)).toLocaleString());
            }else{
              $('#iva').val(0);
            }
          }else{
            $('#iva').val('0');
          }
          
        }
        
        calculoTotal();
}


//////////funcion ingresar documento
$(document).ready(function() {
  $("#formIngDoc").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlIngDoc.php',
      data:$("#formIngDoc").serialize(),
      success: function (result) { 
      var msg = result.trim();

        switch(msg) {
                case '-1':
                    swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                    break;
                case '-2':
                    swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");
                    break;
                case '-3':
                    swal("Validación Documento", "este documento ya se encuentra ingresado, favor validar", "warning");
                    break;
                default :
                    swal("Documento Ingresado", msg, "success");
                    $('#formEmpDoc').trigger("reset");
                    $('#formIngDoc').trigger("reset");
                    $('#form_doc').css("display","none");
                    $('#rut_emp').prop('readonly', false);
                    $('#atras_emp_doc').css("display","none");
                    $('#val_emp').css("display","block");

                    //$('#obs_doc').val('');
                    break;
            }
      },
      error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });
    return false;
  });
}); 



//////////funcion cargar empresa ing doc
$(document).ready(function() {
  $("#formEmpDoc").submit(function() { 
      
       $.ajax({
      url: '../controles/controlCargarEmp.php',
      type: 'POST',
      data:$("#formEmpDoc").serialize(),
      dataType:'json',
      success:function(result){
        $('#nom_emp').val(result[0].razon_social_emp);
        $('#emp').val(result[0].id_emp);
        $('#mon_men').val(Number(result[0].monto_mensual_emp).toLocaleString());
        $('#form_doc').css("display","block");
        $('#rut_emp').prop('readonly', true);
        $('#val_emp').css("display","none");
        $('#atras_emp_doc').css("display","block");
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
    });
    return false;
  });
}); 

