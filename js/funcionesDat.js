//gif de carga
$(document).ajaxStart(function() {
  $("#formActPwd").hide();
  $("#main").hide();
  $("#loading").show();
     }).ajaxStop(function() {
  $("#loading").hide();
  $("#main").show();
  $("#formActPwd").show();
  });  


//actualizar contraseña
$(document).ready(function() {
  $("#formActPwd").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlActPwd.php',
      data:$("#formActPwd").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
                case '1':
                    swal("Error de Contraseña", "La contraseña actual no corresponde, intente nuevamente", "warning");
                    break;
                case '2':
                    swal("Error de Nueva Contraseña", "Las nuevas contraseñas no son iguales, intente nuevamente", "warning");
                    break;
                case '3':
                    swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                    break;
                default:
                    swal("Contraseña Actualizada", msg, "success");
                    $('#ModalActPwd').modal('hide');
                    setInterval('location.reload()',10000);
            }
      },
      error: function(){
              alert('Verifique los datos')      
        }
    });
    return false;
  });
});