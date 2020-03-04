
//////////funcion atras ingreso doc
$(document).on("click", "#btn_calc", function () {


    var emp = $("#emp").val();
    var trib = $("#trib").val();
    var util_ejer = String($('#util_ejer').val()).replace(/\D/g, "");
    var idpc = String($('#val_idpc').text()).replace(/\D/g, "");
    var base_idpc = String($('#val_base_idpc').text()).replace(/\D/g, "");
    var gc = 0;  


    if (($('#per_pro_renta').val() != '')&&($('#per_pro_renta').val() != 'NaN')){
      $.ajax({
            url: '../controles/controlDatosSocPro.php',
            type: 'POST',
            data: {"emp":emp},
            dataType:'json',
            success:function(result){

                      var filas = Object.keys(result).length;

                      for (  i = 0 ; i < filas; i++){ //cuenta la cantidad de registros



                        //regimenes trib 14A-14B no registran base calculo IDPC
                       if (trib == 1 || trib == 7) {
                            var atrib = parseInt(base_idpc) * (result[i].porc_part_soc / 100);
                            var cred = parseInt(idpc) * (result[i].porc_part_soc / 100);

                            $.ajax({
                                    url: '../controles/controlDatosGcPro.php',
                                    type: 'POST',
                                    data: {"atrib":atrib},
                                    success:function(result){
                                       gc = result;                 
                                  }
                              })

                              var igc_total = parseInt(gc) - parseInt(cred);

                              var nuevafila= "<tr><td style='display:none;'>" +
                              result[i].id_per + "</td><td>" +
                              result[i].nom_per + "</td><td>" +
                              result[i].porc_part_soc + " %</td><td>" +
                              Number(parseInt(atrib)).toLocaleString()+"</td><td>" +
                              Number(parseInt(cred)).toLocaleString() + "</td><td>" +
                              Number(parseInt(gc)).toLocaleString() + "</td><td>" +
                              Number(igc_total).toLocaleString() + "</td><tr>";
                            
                        //Régimen B o parcialmente integrado crédito 65%
                       }else if(trib == 2) {
                            var atrib = parseInt(base_idpc) * (result[i].porc_part_soc / 100);
                            var cred = parseInt(idpc) * (result[i].porc_part_soc / 100);
                            cred = cred * 0.65;

                            $.ajax({
                                    url: '../controles/controlDatosGcPro.php',
                                    type: 'POST',
                                    data: {"atrib":atrib},
                                    success:function(result){
                                       gc = result;                 
                                  }
                              })

                              var igc_total = parseInt(gc) - parseInt(cred);

                              var nuevafila= "<tr><td style='display:none;'>" +
                              result[i].id_per + "</td><td>" +
                              result[i].nom_per + "</td><td>" +
                              result[i].porc_part_soc + " %</td><td>" +
                              "<input type='number' class='form-control' id='atrib' name='atrib' ></td><td>" +
                              Number(parseInt(cred)).toLocaleString() + "</td><td>" +
                              Number(parseInt(gc)).toLocaleString() + "</td><td>" +
                              Number(igc_total).toLocaleString() + "</td><tr>";
                            

                       }else{
                            var atrib = parseInt(util_ejer) * (result[i].porc_part_soc / 100);
                            var cred = parseInt(idpc) * (result[i].porc_part_soc / 100);

                            $.ajax({
                                    url: '../controles/controlDatosGcPro.php',
                                    type: 'POST',
                                    data: {"atrib":atrib},
                                    success:function(result){
                                       gc = result;                 
                                  }
                              })

                              var igc_total = parseInt(gc) - parseInt(cred);

                              var nuevafila= "<tr><td style='display:none;'>" +
                              result[i].id_per + "</td><td>" +
                              result[i].nom_per + "</td><td>" +
                              result[i].porc_part_soc + " %</td><td>" +
                              Number(parseInt(atrib)).toLocaleString()+"</td><td>" +
                              Number(parseInt(cred)).toLocaleString() + "</td><td>" +
                              Number(parseInt(gc)).toLocaleString() + "</td><td>" +
                              Number(igc_total).toLocaleString() + "</td><tr>";
                            
                       }


                       




                         $("#tabla_per").append(nuevafila);

                      }




              
          }
      })










    }else{
      swal("Error", "Favor ingrese el periodo", "warning");    
    }


  
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


//////////funcion cargar datos al cambiar fecha
$(document).ready(function(){
  $("#per_pro_renta").on('change', function() {

    var emp = $("#emp").val();
    var per = $(this).val();



    $.ajax({
        url: '../controles/controlDatosPro.php',
        type: 'POST',
        data: {"emp":emp, "per":per},
        dataType:'json',
        success:function(result){
          $('#ppmo').val(Number(parseInt(result[0].ppmo)).toLocaleString());
          $('#ppmv').val(Number(parseInt(result[0].ppmv)).toLocaleString());
      }
  })
});
});


function calculoTotal()
{ 

    if (($('#util_ejer').val() != '')&&($('#util_ejer').val() != 'NaN')){
      var util_ejer = String($('#util_ejer').val()).replace(/\D/g, "");
    }else{
      var util_ejer = 0;
    }

    if (($('#base_idpc').val() != '')&&($('#base_idpc').val() != 'NaN')){
      var base_idpc = $("#base_idpc").val();
      base_idpc = parseInt(base_idpc) / 100;
    }else{
      var base_idpc = 1;
    }

    val_base = Number(parseInt(util_ejer) * base_idpc);

    $("#val_base_idpc").text(Number(val_base).toLocaleString());

    if (($('#idpc').val() != '')||($('#idpc').val() != 'NaN')){
      var idpc = $("#idpc").val();
      idpc = parseInt(idpc) / 100;
    }else{
      var idpc = 1;
    }


    if (base_idpc == 1) {

      $("#val_idpc").text(Number(parseInt(util_ejer) * idpc).toLocaleString());
    }else{

      $("#val_idpc").text(Number(parseInt(val_base) * idpc).toLocaleString());
    }



    
}





//////////funcion modal proyeccion renta
$(document).on("click", "#btn_modal_pro_renta", function () {

    $('#tabla_per tbody').empty();
    $('#formRegProRenta').trigger("reset");


     $('#base_idpc').prop('readonly', false);
     var id_emp = $(this).data('id');
     var rut_emp = $(this).data('rut');
     var emp = $(this).data('emp');
     var trib = $(this).data('reg_trib');

     $("#Remp_pro_renta").text(rut_emp);
     $("#emp_pro_renta").text(emp);
     $("#emp").val(id_emp);
     $("#trib").val(trib);

     //regimenes trib 14A-14B no registran base calculo IDPC
     if (trib == 1 || trib == 7 || trib == 2) {
          $('#base_idpc').prop('readonly', true);
     }


     
    $('#modal_pro_renta').modal('show');

    
  });



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
    $('#tabla_proy_ren').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      }
    });
    $('.dataTables_length').addClass('bs-select');
  });