//////////funcion separador de miles inputs number
    $(document).on('keyup', '.nro', function (e) {
     element = e.target;
     value = element.value;
    n = value;
    n = String(n).replace(/\D/g, "");
    n = '' ? n : Number(n).toLocaleString();  
    element.value = n;
});

//////////quitar giro modal
$(function () {
    $(document).on('click', '#borrar_giro', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });
});


//////////agregar giros crear empresa
$(document).on("click", "#btn_cre_giro", function () {  
    
    if ($("#giro_cre").val()!='') {
    var nuevafila= "<tr><td>" +
          $("#giro_cre").val()+'</td><td>'+
          '<button id="borrar_giro" name="borrar_giro" class="btn btn-outline-danger" >Eliminar</button></td></tr>'
          
          $("#tabla_giros_emp_cre").append(nuevafila);
          $("#giro_cre").val('');
    }
});


//////////funcion carga nom empresa modal giros crear empresa
$(document).ready(function(){
  $("#btn_modal_giro").click(function(){
    $("#cre_emp_giro").text($("#rsocial").val());
  });
});

//////////funcion cargar comunas
function mod_ciudad(ciudad,com,comsel){
  $('#'+com).empty();
      $.ajax({
      type: "POST",
      url: '../controles/controlCargarComunas.php',
      data:{"ciudad":ciudad},
      dataType:'json',
      success: function (result) { 
        var filas = Object.keys(result).length;
        for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros
           let $option = $('<option />', {
              text: result[i].comuna_nombre,
              value: result[i].comuna_id,
          });
          $('#'+com).prepend($option);
          $('#'+com).val(comsel);
        }
      },
      error: function(){
              alert('Verifique los datos');      
      }
    });
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


  //CARGA DE GIF CREAR EMPRESA
  $(document).ajaxStart(function() {
    $("#formCrearEmp").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#formCrearEmp").show();
    }); 

//CARGA DE GIF MODIFICAR EMPRESA     
    $(document).ajaxStart(function() {
        $("#formModEmp").hide();
        $("#loading").show();
           }).ajaxStop(function() {
        $("#loading").hide();
        $("#formModEmp").show();
    });  

//CONTROL CREAR Empresa
$(document).ready(function() {
  $("#formCrearEmp").submit(function() { 

    var TableData = new Array();
    
            $('#tabla_giros_emp_cre tr').each(function(row, tr){
                TableData[row]={
                  "giro" : $(tr).find('td:eq(0)').text()
                }
            }); 
            TableData.shift();  // first row will be empty - so remove
            TableData = JSON.stringify(TableData);
            $('#tbConvertToJSON').val('JSON array: \n\n' + TableData.replace(/},/g, "},\n"));



    $.ajax({
      type: "POST",
      url: '../controles/controlCrearEmp.php',
      data:$("#formCrearEmp").serialize() + "&datagiros="+TableData,
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
              swal("Empresa Creada", msg, "success");
            }
      },
      error: function(){
              alert('Verifique los datos');      
      }
    });
    return false;
  });
});

  //BUSCAR EMPRESA
  function mod(emp) {
    
    $.ajax({
     url: '../controles/controlCargarDatosEmp.php',
     type: 'POST',
     data: {"emp":emp},
     dataType:'json',
     success:function(result){


        $('#rsoc').val(result[0].razon_social_emp);
        $('#mmail').val(result[0].mail_emp);
        $('#mrut').val(result[0].rut_emp);
        $('#mdirec').val(result[0].dir_emp);
        $('#mciudad').val(result[0].ciudad_emp);
        //$('#mcomuna').val(result[0].comuna_emp);
        $('#mmme').val(result[0].monto_mensual_emp);
        $('#mmre').val(result[0].monto_renta_emp);
        $('#mcse').val(result[0].cons_soc_emp);
        $('#mrte').val(result[0].reg_trib_emp);
        $('#mpce').val(result[0].patente_comer_emp);
        $('#mvig').val(result[0].vig_emp);
        $('#mfia').val(result[0].fec_ini_act_emp);
        $('#mcsii').val(result[0].clave_sii_emp);
        $('#mcprev').val(result[0].clave_previred_emp);
        $('#mfre').val(result[0].fac_rea_emp);
        $('#mrae').val(result[0].rta_at_emp);
        $('#mevem').val(result[0].evaluacion_emp);
        $('#mcem').val(result[0].nom_contacto_emp);
        if((result[0].vig_emp)=="1") {  
          $('#vigcheck').prop('checked', true);
          $('#vigtext').prop('value',"Actualmente Vigente");
        }else  {
          $('#vigcheck').prop('checked', false);
          $('#vigtext').prop('value',"No se Encuentra Vigente");
        }
        mod_ciudad(result[0].ciudad_emp,'mcomuna',result[0].comuna_emp);
    }
 })
}

//CONTROL MODIFICAR EMPRESA
$(document).ready(function() {
  $("#formModEmp").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlModEmp.php',
      data:$("#formModEmp").serialize(),
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
                    swal("Empresa Modificada", msg, "success");
                    setInterval('location.reload()',3000);
            }
      },
      error: function(){
              alert('Verifique los datos')      
        }
    });
    return false;
  });
});

