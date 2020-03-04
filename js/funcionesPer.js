 //////////funcion separador de miles inputs number
    $(document).on('keyup', '.nro', function (e) {
     element = e.target;
     value = element.value;
    n = value;
    n = String(n).replace(/\D/g, "");
    n = '' ? n : Number(n).toLocaleString();  
    element.value = n;
  });


 //CONTROL MODIFICAR PERSONA
$(document).ready(function() {
  $("#formModPer").submit(function() { 

    $.ajax({
      type: "POST",
      url: '../controles/controlModPer.php',
      data:$("#formModPer").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
          case '-1':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '-4':
              window.location.assign("../index.html")
              break;
          default:
              swal("Persona Modificada", msg, "success");
              $('#formModPer').trigger("reset");
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






 //ELIMINAR SOCIEDAD
  function del_asoc(soc, idform) {
    
                $.ajax({
                    type: "POST",
                    url: '../controles/controlDelSoc.php',
                    data:{"soc":soc},
                    success: function (result) { 

                              var msg = result.trim();


                              switch(msg) {
                                case '-1':
                                    swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                                    break;
                                case '-4':
                                    window.location.assign("../index.html")
                                    break;
                                default:
                                    swal("Sociedad Eliminada", msg, "success");
                                      
                                    if (idform == '2') {
                                      $('#tabla_mod_soc_per tbody').empty();
                                      per = $("#mod_soc_per").val();
                                    }else if (idform == '1') {
                                      $('#tabla_soc_per tbody').empty();
                                      per = $("#soc_per").val();
                                    }

                                    
                                                $.ajax({
                                                type: "POST",
                                                url: '../controles/controlAsoPer.php',
                                                data:{"per":per},
                                                dataType:'json',
                                                success: function (result) { 

                                                    var filas = Object.keys(result).length;
                                                    //console.log (filas);
                                                 
                                                    for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
                                                      var nuevafila= '<tr><td style="display:none">' +
                                                      result[i].id_soc + "</td><td>" +
                                                      result[i].nom_per + "</td><td>" +
                                                      result[i].razon_social_emp + "</td><td>" +
                                                      result[i].porc_part_soc + "</td><td>" +
                                                      numeral(result[i].monto_part_soc).format('000,000,000,000') + "</td><td>" +
                                                      '<button id="btn_del_soc" name="btn_del_soc" class="btn btn-outline-danger" onclick="del_asoc('+result[i].id_soc+','+idform+')"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'
                                                      

                                                    }


                                                    if (idform == '2') {
                                                      $('#formModSoc').trigger("reset");
                                                      $("#tabla_mod_soc_per").append(nuevafila);
                                                    }else if (idform == '1') {
                                                      $('#formSoc').trigger("reset");
                                                      $("#tabla_soc_per").append(nuevafila);
                                                    }


                                                 },

                                                 });

                                  }
                  },
                  

                });  

}



  //BUSCAR PERSONA
  function mod(per) {

    $('#tabla_mod_soc_per tbody').empty();
    
    $.ajax({
     url: '../controles/controlCargarDatosPer.php',
     type: 'POST',
     data: {"per":per},
     dataType:'json',
     success:function(result){

        $("#mod_soc_per").val(result[0].id_per);

        $('#mnom_per').val(result[0].nom_per);
        $('#mmail_per').val(result[0].mail_per);
        $('#mcsii').val(result[0].clave_sii_per);
        $('#mrut_per').val(result[0].rut_per);
        $('#mciudad').val(result[0].ciudad_emp);
        //$('#mcomuna').val(result[0].comuna_emp);
        $('#mcprev').val(result[0].clave_previred_per);
        
        if((result[0].vig_per)=="1") {  
          $('#vigcheck').prop('checked', true);
          $('#vigtext').prop('value',"Actualmente Vigente");
        }else  {
          $('#vigcheck').prop('checked', false);
          $('#vigtext').prop('value',"No se Encuentra Vigente");
        }



                $.ajax({
                    type: "POST",
                    url: '../controles/controlAsoPer.php',
                    data:{"per":per},
                    dataType:'json',
                    success: function (result) { 

                      $('#tabla_mod_soc_per tbody').empty();

                      var filas = Object.keys(result).length;
                      //console.log (filas);
                   
                      for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
                        var nuevafila= '<tr><td style="display:none">' +
                        result[i].id_soc + "</td><td>" +
                        result[i].nom_per + "</td><td>" +
                        result[i].razon_social_emp + "</td><td>" +
                        result[i].porc_part_soc + "</td><td>" +
                        numeral(result[i].monto_part_soc).format('000,000,000,000') + "</td><td>" +
                        '<button id="btn_del_soc" name="btn_del_soc" class="btn btn-outline-danger" onclick="del_asoc('+result[i].id_soc+',2)"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'

                        $('#formModSoc').trigger("reset");
                        $("#tabla_mod_soc_per").append(nuevafila);

                      }


                    },

                  });



        
    }
 })
}








//INSTANCIAS DE DATATABLE

$(document).ready(function () {
    $('#dtBasicExample1').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
    $('.dataTables_length').addClass('bs-select');
  });


//AGREGAR SOC EN Mod PER
$(document).ready(function() {
  $("#btn_mod_soc").click(function() { 

    $.ajax({
      type: "POST",
      url: '../controles/controlAgregarSoc.php',
      data:$("#formModSoc").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
          case '-1':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '-2':
              swal("Error de Asociación", "La persona ya esta asociada a la empresa", "warning");
              break;
          case '-4':
              window.location.assign("../index.html")
              break;
          case '-5':
              swal("Error de Asociación", "Favor seleccione una empresa a asociar", "warning");
              break;
          default:
              swal("Asociación creada", msg, "success");
              id_per = $("#mod_soc_per").val();
                  $.ajax({
                    type: "POST",
                    url: '../controles/controlAsoPer.php',
                    data:{"per":id_per},
                    dataType:'json',
                    success: function (result) { 

                      $('#tabla_mod_soc_per tbody').empty();

                      var filas = Object.keys(result).length;
                      //console.log (filas);
                   
                      for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
                        var nuevafila= '<tr><td style="display:none">' +
                        result[i].id_soc + "</td><td>" +
                        result[i].nom_per + "</td><td>" +
                        result[i].razon_social_emp + "</td><td>" +
                        result[i].porc_part_soc + "</td><td>" +
                        numeral(result[i].monto_part_soc).format('000,000,000,000') + "</td><td>" +
                        '<button id="btn_del_soc" name="btn_del_soc" class="btn btn-outline-danger" onclick="del_asoc('+result[i].id_soc+',2)"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'

                        $('#formModSoc').trigger("reset");
                        $("#tabla_mod_soc_per").append(nuevafila);

                      }


                    },
                    error: function(){
                            swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
                    }
                  });
            }
      },
      error: function(){
              swal("Error", "favor verifique los datos", "warning");      
      }
    });
    return false;
  });
});



//AGREGAR SOC EN CREAR PER
$(document).ready(function() {
  $("#btn_cre_soc").click(function() { 

    $.ajax({
      type: "POST",
      url: '../controles/controlAgregarSoc.php',
      data:$("#formSoc").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
          case '-1':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '-2':
              swal("Error de Asociación", "La persona ya esta asociada a la empresa", "warning");
              break;
          case '-4':
              window.location.assign("../index.html")
              break;
          case '-5':
              swal("Error de Asociación", "Favor seleccione una empresa a asociar", "warning");
              break;
          default:
              swal("Asociación creada", msg, "success");
              id_per = $("#soc_per").val();
                  $.ajax({
                    type: "POST",
                    url: '../controles/controlAsoPer.php',
                    data:{"per":id_per},
                    dataType:'json',
                    success: function (result) { 

                      $('#tabla_soc_per tbody').empty();

                      var filas = Object.keys(result).length;
                      //console.log (filas);
                   
                      for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
                        var nuevafila= '<tr><td style="display:none">' +
                        result[i].id_soc + "</td><td>" +
                        result[i].nom_per + "</td><td>" +
                        result[i].razon_social_emp + "</td><td>" +
                        result[i].porc_part_soc + "</td><td>" +
                        numeral(result[i].monto_part_soc).format('000,000,000,000') + "</td><td>" +
                        '<button id="btn_del_soc" name="btn_del_soc" class="btn btn-outline-danger" onclick="del_asoc('+result[i].id_soc+',1)"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'

                        $('#formSoc').trigger("reset");
                        $("#tabla_soc_per").append(nuevafila);

                      }


                    },
                    error: function(){
                            swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
                    }
                  });
            }
      },
      error: function(){
              alert('Verifique los datos');      
      }
    });
    return false;
  });
});





//BTN CREAR NUEVA PERSONA
$(document).ready(function() {
  $("#btn_reset").click(function() { 
      $('#formCrearPer').trigger("reset");
      $("#btn_modal_soc").css("display","none");
      $("#btn_crear_per").css("display","block");
      $("#btn_reset").css("display","none");
      $("#soc_per").val('');

  });
});


//CONTROL CREAR PERSONA
$(document).ready(function() {
  $("#formCrearPer").submit(function() { 
    $('#tabla_soc_per tbody').empty();

    $.ajax({
      type: "POST",
      url: '../controles/controlCrearPer.php',
      data:$("#formCrearPer").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
          case '-1':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '-2':
              swal("Error Mail", "Favor ingrese un correo electronico para enviar las credenciales", "warning");
              break;
          case '-3':
              swal("Rut Duplicado", "El RUT ya se encuentra en el sistema, puede encontrarse sin vigencia", "warning");
              break;
          case '-4':
              window.location.assign("../index.html")
              break;
          default:
              swal("Persona Creada", "La persona ha sido creada, ahora puede agregar las sociedades", "success");
              $("#btn_modal_soc").css("display","block");
              $("#btn_crear_per").css("display","none");
              $("#btn_reset").css("display","block");
              $("#soc_per").val(msg);

            }
      },
      error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");           
      }
    });
    return false;
  });
});


