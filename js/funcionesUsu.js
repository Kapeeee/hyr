//INSTANCIAS DE DATATABLE

$(document).ready(function () {
    $('#dtBasicExample1').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
    $('.dataTables_length').addClass('bs-select');
  });

//CARGA DE GIF CREAR USUARIO
  $(document).ajaxStart(function() {
    $("#formCrearUsu").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formCrearUsu").show();
    }); 

//CARGA DE GIF MODIFICAR USUARIO     
    $(document).ajaxStart(function() {
        $("#formModUsu").hide();
        $("#loading").show();
           }).ajaxStop(function() {
        $("#loading").hide();
        $("#formModUsu").show();
    });  
  
//CONTROL CREAR USUARIO
  $(document).ready(function() {
    $("#formCrearUsu").submit(function() {    
      $.ajax({
        type: "POST",
        url: '../controles/controlCrearUsu.php',
        data:$("#formCrearUsu").serialize(),
        success: function (result) { 
          var msg = result.trim();
  
          switch(msg) {
            case '1':
                swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                break;
            case '2':
                swal("Error Mail", "Favor ingrese un correo electronico para enviar las credenciales", "warning");
                break;
            case '3':
                swal("Rut Duplicado", "El RUT ya se encuentra en el sistema, puede encontrarse sin vigencia", "warning");
                break;
            default:
                swal("Usuario Creado!", msg, "success");
              }
        },
        error: function(){
                alert('Verifique los datos');      
        }
      });
      return false;
    });
  });


  //BUSCAR USUARIO
  function mod(usu) {
    
    $.ajax({
     url: '../controles/controlCargarDatosUsu.php',
     type: 'POST',
     data: {"usu":usu},
     dataType:'json',
     success:function(result){
       console.log(result);
       $('#mod_nombre').val(result[0].nom_usu);
       $('#mod_apellidop').val(result[0].apepat_usu);
       $('#mod_apellidom').val(result[0].apemat_usu);
       $('#mod_rut').val(result[0].rut_usu);
       $('#mod_mail').val(result[0].mail_usu);
       $('#mod_nick').val(result[0].nick_usu);
       $("#mod_perfil").val(result[0].id_perfil);
       $("#mod_cargo").val(result[0].cargo_usu);

       if ((result[0].vig_usu)=="VIGENTE") {  
         $('#mod_vig').prop('checked', true);
             }else  {
               $('#mod_vig').prop('checked', false);
             }

    }
 })
}

//CONTROL MODIFICAR USUARIO
$(document).ready(function() {
    $("#formModUsu").submit(function() {    
      $.ajax({
        type: "POST",
        url: '../controles/controlModUsu.php',
        data:$("#formModUsu").serialize(),
        success: function (result) { 
          var msg = result.trim();
          console.log(result);
          switch(msg) {
                  case '0':
                      window.location.assign("../index.html")
                      break;
                  case '1':
                      swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                      break;
                  default:
                      swal("Usuario Modificado", msg, "success");
                      //location.reload(true);
              }
        },
        error: function(){
                alert('Verifique los datos')      
          }
      });
      return false;
    });
  });