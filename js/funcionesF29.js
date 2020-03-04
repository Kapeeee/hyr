
function modiva(id_iva){
  if (id_iva == "ivapost") {
    $("#ivapostval").show();
    $('#C89').prop('readonly', true);
  }
}


//INSTANCIAS DE DATATABLE informe

$(document).ready(function () {
    $('#tabla_inf_f29').DataTable({
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
      "order": [[ 2, "desc" ]],
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
        dom: 'Bfrtip'
    });
    $('.dataTables_length').addClass('bs-select');
  });


//RELLENO DE DATOS DEL DOCUMENTO
function mod(id_form) {
    
  $.ajax({
   url: '../controles/controlCargarDatosForm.php', 
   type: 'POST',
   data: {"id_f29":id_form},
   dataType:'json',
   success:function(result)
   {
     console.log(result);


      $('#emp').val(result[0].id_emp);
      $('#C585').val(result[0].c585); 
      $('#C20').val(result[0].c20 ); 
      $('#C586').val(result[0].c586); 
      $('#C142').val(result[0].c142); 
      $('#C731').val(result[0].c731); 
      $('#C732').val(result[0].c732); 
      $('#C714').val(result[0].c714); 
      $('#C715').val(result[0].c715); 
      $('#C515').val(result[0].c515); 
      $('#C587').val(result[0].c587); 
      $('#C720').val(result[0].c720); 
      $('#C503').val(result[0].c503); 
      $('#C502').val(result[0].c502); 
      $('#C763').val(result[0].c763); 
      $('#C764').val(result[0].c764); 
      $('#C716').val(result[0].c716); 
      $('#C717').val(result[0].c717); 
      $('#C110').val(result[0].c110); 
      $('#C111').val(result[0].c111); 
      $('#C758').val(result[0].c758); 
      $('#C759').val(result[0].c759); 
      $('#C512').val(result[0].c512); 
      $('#C513').val(result[0].c513); 
      $('#C509').val(result[0].c509); 
      $('#C510').val(result[0].c510); 
      $('#C708').val(result[0].c708); 
      $('#C709').val(result[0].c709); 
      $('#C733').val(result[0].c733); 
      $('#C734').val(result[0].c734); 
      $('#C516').val(result[0].c516); 
      $('#C517').val(result[0].c517); 
      $('#C500').val(result[0].c500); 
      $('#C501').val(result[0].c501); 
      $('#C154').val(result[0].c154); 
      $('#C518').val(result[0].c518); 
      $('#C713').val(result[0].c713); 
      $('#C738').val(result[0].c738); 
      $('#C739').val(result[0].c739); 
      $('#C740').val(result[0].c740); 
      $('#C741').val(result[0].c741); 
      $('#C538').val(result[0].c538); 
      $('#C511').val(result[0].c511); 
      $('#C514').val(result[0].c514); 
      $('#C564').val(result[0].c564); 
      $('#C521').val(result[0].c521); 
      $('#C566').val(result[0].c566); 
      $('#C560').val(result[0].c560); 
      $('#C584').val(result[0].c584); 
      $('#C562').val(result[0].c562); 
      $('#C519').val(result[0].c519); 
      $('#C520').val(result[0].c520); 
      $('#C761').val(result[0].c761); 
      $('#C762').val(result[0].c762); 
      $('#C765').val(result[0].c765); 
      $('#C766').val(result[0].c766); 
      $('#C524').val(result[0].c524); 
      $('#C525').val(result[0].c525); 
      $('#C527').val(result[0].c527); 
      $('#C528').val(result[0].c528); 
      $('#C531').val(result[0].c531); 
      $('#C532').val(result[0].c532); 
      $('#C534').val(result[0].c534); 
      $('#C535').val(result[0].c535); 
      $('#C536').val(result[0].c536); 
      $('#C553').val(result[0].c553); 
      $('#C504').val(result[0].c504); 
      $('#C593').val(result[0].c593); 
      $('#C594').val(result[0].c594); 
      $('#C592').val(result[0].c592); 
      $('#C539').val(result[0].c539); 
      $('#C718').val(result[0].c718); 
      $('#C164').val(result[0].c164); 
      $('#C730').val(result[0].c730); 
      $('#C742').val(result[0].c742); 
      $('#C743').val(result[0].c743); 
      $('#C127').val(result[0].c127); 
      $('#C729').val(result[0].c729); 
      $('#C744').val(result[0].c744); 
      $('#C745').val(result[0].c745); 
      $('#C544').val(result[0].c544); 
      $('#C523').val(result[0].c523); 
      $('#C712').val(result[0].c712); 
      $('#C757').val(result[0].c757); 
      $('#C537').val(result[0].c537); 
      $('#C77').val(result[0].c77); 
      $('#C89').val(result[0].c89); 
      $('#C760').val(result[0].c760); 
      $('#C50').val(result[0].c50); 
      $('#C751').val(result[0].c751); 
      $('#C735').val(result[0].c735); 
      $('#C48').val(result[0].c48); 
      $('#C151').val(result[0].c151); 
      $('#C153').val(result[0].c153); 
      $('#C54').val(result[0].c54); 
      $('#C56').val(result[0].c56); 
      $('#C588').val(result[0].c588); 
      $('#C589').val(result[0].c589); 
      $('#C30').val(result[0].c30); 
      $('#C563').val(result[0].c563); 
      $('#C115').val(result[0].c115); 
      $('#C68').val(result[0].c68); 
      $('#C62').val(result[0].c62); 
      $('#C565').val(result[0].c565); 
      $('#C120').val(result[0].c120); 
      $('#C542').val(result[0].c542); 
      $('#C122').val(result[0].c122); 
      $('#C123').val(result[0].c123); 
      $('#C700').val(result[0].c700); 
      $('#C701').val(result[0].c701); 
      $('#C702').val(result[0].c702); 
      $('#C711').val(result[0].c711); 
      $('#C703').val(result[0].c703); 
      $('#C66').val(result[0].c66); 
      $('#C152').val(result[0].c152); 
      $('#C70').val(result[0].c70 ); 
      $('#C595').val(result[0].c595); 
      $('#C1').val(result[0].c1); 
      $('#C2').val(result[0].c2); 
      $('#C5').val(result[0].c5); 
      $('#C583').val(result[0].c583); 
      $('#C91').val(result[0].c91); 
      $('#C92').val(result[0].c92); 
      $('#C93').val(result[0].c93); 
      $('#C94').val(result[0].c94); 
      $('#C529').val(result[0].c529); 
      $('#C530').val(result[0].c530); 
      $('#C409').val(result[0].c409); 
      $('#C522').val(result[0].c522); 
      $('#C526').val(result[0].c526); 
      $('#C113').val(result[0].c113); 
      $('#C28').val(result[0].c28); 
      $('#C548').val(result[0].c548); 
      $('#C540').val(result[0].c540); 
      $('#C541').val(result[0].c541); 
      $('#C549').val(result[0].c549); 
      $('#C550').val(result[0].c550); 
      $('#C577').val(result[0].c577); 
      $('#C32').val(result[0].c32); 
      $('#C150').val(result[0].c150); 
      $('#C146').val(result[0].c146); 
      $('#C752').val(result[0].c752); 
      $('#C545').val(result[0].c545); 
      $('#C546').val(result[0].c546); 
      $('#C710').val(result[0].c710); 
      $('#C602').val(result[0].c602); 
      $('#C575').val(result[0].c575); 
      $('#C576').val(result[0].c576); 
      $('#C574').val(result[0].c574); 
      $('#C33').val(result[0].c33); 
      $('#C580').val(result[0].c580); 
      $('#C149').val(result[0].c149); 
      $('#C582').val(result[0].c582); 
      $('#C85').val(result[0].c85); 
      $('#C753').val(result[0].c753); 
      $('#C754').val(result[0].c754); 
      $('#C551').val(result[0].c551); 
      $('#C559').val(result[0].c559); 
      $('#C508').val(result[0].c508); 
      $('#C533').val(result[0].c533); 
      $('#C552').val(result[0].c552); 
      $('#C603').val(result[0].c603); 
      $('#C507').val(result[0].c507); 
      $('#C506').val(result[0].c506); 
      $('#C556').val(result[0].c556); 
      $('#C557').val(result[0].c557); 
      $('#C558').val(result[0].c558); 
      $('#C543').val(result[0].c543); 
      $('#C573').val(result[0].c573); 
      $('#C598').val(result[0].c598); 
      $('#C39').val(result[0].c39); 
      $('#C554').val(result[0].c554); 
      $('#C736').val(result[0].c736); 
      $('#C597').val(result[0].c597); 
      $('#C555').val(result[0].c555); 
      $('#C596').val(result[0].c596); 
      $('#C725').val(result[0].c725); 
      $('#C737').val(result[0].c737); 
      $('#C727').val(result[0].c727); 
      $('#C704').val(result[0].c704); 
      $('#C705').val(result[0].c705); 
      $('#C706').val(result[0].c706); 
      $('#C160').val(result[0].c160); 
      $('#C161').val(result[0].c161); 
      $('#C570').val(result[0].c570); 
      $('#C126').val(result[0].c126); 
      $('#C128').val(result[0].c128); 
      $('#C571').val(result[0].c571); 
      $('#C572').val(result[0].c572); 
      $('#C568').val(result[0].c568); 
      $('#C590').val(result[0].c590); 
      $('#C547').val(result[0].c547); 
      $('#C728').val(result[0].c728); 
      $('#C707').val(result[0].c707); 
      $('#C73').val(result[0].c73); 
      $('#C130').val(result[0].c130); 
      $('#C591').val(result[0].c591); 
      $('#C6').val(result[0].c6); 
      $('#C610').val(result[0].c610); 
      $('#C611').val(result[0].c611); 
      $('#C612').val(result[0].c612); 
      $('#C8').val(result[0].c8); 
      $('#C53 ').val(result[0].c53 ); 
      $('#C613').val(result[0].c613); 
      $('#C9').val(result[0].c9); 
      $('#C601').val(result[0].c601); 
      $('#C604').val(result[0].c604); 
      $('#C55').val(result[0].c55); 
      $('#C44').val(result[0].c44); 
      $('#C726').val(result[0].c726); 
      $('#C313').val(result[0].c313); 
      $('#C314').val(result[0].c314); 
      $('#fecha').val(result[0].fecha_form);

      var ivapost = result[0].ivapost;
      var ivanop = result[0].ivanop;

      if( ivanop == 1 && ivapost == 0){
        jQuery('#ivanopagado').addClass('bg-warning');
        jQuery('#ivaposter').removeClass('bg-info');
        jQuery('#ivapagado').removeClass('bg-success');
        document.getElementById("ivanopagado").focus();
      }
      if(ivapost == 1 && ivanop == 0){
        jQuery('#ivaposter').addClass('bg-info');
        jQuery('#ivapagado').removeClass('bg-success');
        jQuery('#ivanopagado').removeClass('bg-warning');
        document.getElementById("ivaposter").focus();
      }
      if(ivapost == 0 && ivanop == 0){
        jQuery('#ivapagado').addClass('bg-success');
        jQuery('#ivaposter').removeClass('bg-info');
        jQuery('#ivanopagado').removeClass('bg-warning');
        document.getElementById("ivapagado").focus();
      }    

      

 
      
  }
})
}


//CONTROL CREAR FORMULARIO
$(document).ready(function() {
  $("#formCrearForm").submit(function() { 

    $.ajax({
      type: "POST",
      url: '../controles/controlCrearForm.php',
      data:$("#formCrearForm").serialize(),
      success: function (result) { 
        var msg = result.trim();

        switch(msg) {
          case '-1':
              swal("Error Periodo F29", "La empresa ya cuenta con un F29 para este periodo, favor editar el existente", "warning");
              break;
          case '1':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '2':
              swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
              break;
          case '3':
              swal("Seleccionar Cliente", "Recuerde Seleccionar el Cliente antes de Ingresar el Formulario", "warning");
              break;
          case '4':
              swal("Seleccionar Tipo Pago", "Recuerde Seleccionar el Tipo de Pago IVA ( Pagado, Postergado, No Pagado).", "warning");
              break;
          default:
              swal("Ingreso Exitoso", msg, "success");
            }
      },
      error: function(){
              alert('Verifique los datos');      
      }
    });
    return false;
  });
});
  
  
  
  
//INSTANCIAS DE DATATABLE

$(document).ready(function () {
  $('#dtBasicExample1').DataTable({
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
  });
  $('.dataTables_length').addClass('bs-select');
});
  

//PINTAR VERDE LOS INPUT codigos 62 123 703
function greenStrings(idinput,valor){

  var id = document.getElementById(idinput);
  var val = document.getElementById(idinput).value;
  val = val.replace(/\./g,'');

  //alert("el Valor Es:"+val);

if (val) {
  id.style.backgroundColor = "#c1e6c7";
} else {
  id.style.backgroundColor = "#ffffff";
  document.getElementById(idinput).value = "0";
}

}


function seleccion(idlabel){

 
  switch (idlabel) {
    case "ivapagado":
        jQuery('#ivapagado').addClass('bg-success');
        jQuery('#ivaposter').removeClass('bg-info');
        jQuery('#ivanopagado').removeClass('bg-warning');
        $('#C89').prop('readonly', false);
        $("#C760").attr("onchange","calcimpto()");
        $("#C50").attr("onchange","calcimpto()");
        $("#C48").attr("onchange","calcimpto()");
        $("#C151").attr("onchange","calcimpto()");
        $("#C153").attr("onchange","calcimpto()");
        $("#C54").attr("onchange","calcimpto()");
        $("#C56").attr("onchange","calcimpto()");
        $("#C588").attr("onchange","calcimpto()");
        $("#C589").attr("onchange","calcimpto()");
        $("#C62").attr("onchange","calcimpto()");
        $("#C123").attr("onchange","calcimpto()");
        $("#C703").attr("onchange","calcimpto()");
        $("#C66").attr("onchange","calcimpto()");
        $("#C152").attr("onchange","calcimpto()");
        $("#C70").attr("onchange","calcimpto()");
        
      break;
    case "ivaposter":
        jQuery('#ivaposter').addClass('bg-info');
        jQuery('#ivapagado').removeClass('bg-success');
        jQuery('#ivanopagado').removeClass('bg-warning');
        $('#C89').prop('readonly', true);
        $("#C760").attr("onchange","calcimptoPoster()");
        $("#C50").attr("onchange","calcimptoPoster()");
        $("#C48").attr("onchange","calcimptoPoster()");
        $("#C151").attr("onchange","calcimptoPoster()");
        $("#C153").attr("onchange","calcimptoPoster()");
        $("#C54").attr("onchange","calcimptoPoster()");
        $("#C56").attr("onchange","calcimptoPoster()");
        $("#C588").attr("onchange","calcimptoPoster()");
        $("#C589").attr("onchange","calcimptoPoster()");
        $("#C62").attr("onchange","calcimptoPoster()");
        $("#C123").attr("onchange","calcimptoPoster()");
        $("#C703").attr("onchange","calcimptoPoster()");
        $("#C66").attr("onchange","calcimptoPoster()");
        $("#C152").attr("onchange","calcimptoPoster()");
        $("#C70").attr("onchange","calcimptoPoster()");
        
      break;
    
    case "ivanopagado":
        jQuery('#ivanopagado').addClass('bg-warning');
        jQuery('#ivaposter').removeClass('bg-info');
        jQuery('#ivapagado').removeClass('bg-success');
        $('#C89').prop('readonly', false);
        $("#C760").attr("onchange","calcimpto()");
        $("#C50").attr("onchange","calcimpto()");
        $("#C48").attr("onchange","calcimpto()");
        $("#C151").attr("onchange","calcimpto()");
        $("#C153").attr("onchange","calcimpto()");
        $("#C54").attr("onchange","calcimpto()");
        $("#C56").attr("onchange","calcimpto()");
        $("#C588").attr("onchange","calcimpto()");
        $("#C589").attr("onchange","calcimpto()");
        $("#C62").attr("onchange","calcimpto()");
        $("#C123").attr("onchange","calcimpto()");
        $("#C703").attr("onchange","calcimpto()");
        $("#C66").attr("onchange","calcimpto()");
        $("#C152").attr("onchange","calcimpto()");
        $("#C70").attr("onchange","calcimpto()");
 
      break;

    default:
      break;
  }

}

//PINTAR VERDE LOS INPUT
function green(idinput,valor){

  var id = document.getElementById(idinput);
  var val = document.getElementById(idinput).value;
  val = val.replace(/\./g,'');

  //alert("el Valor Es:"+val);

if (val >= 1) {
  id.style.backgroundColor = "#c1e6c7";
} else {
  id.style.backgroundColor = "#ffffff";
  document.getElementById(idinput).value = "0";
}

}

//BORRAR EL CERO AL HACER SELECCION.
function modcont(id_field){
  var id = id_field;

  if (document.getElementById(id).value == 0) {
    document.getElementById(id).value = "";
  }
}

function prueba(){

  var test = document.getElementById('test').value;
  test = test.replace(/\./,"");
  //var test = "1.258";
  //test.replace(/\./,"");
  alert(test);
}


//FORMATEAR NUMEROS Y AGREGAR SEPARADOR DE MILES
function format(input)
{
var num = input.value.replace(/\./g,'');
if(!isNaN(num)){
num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
num = num.split('').reverse().join('').replace(/^[\.]/,'');
input.value = num;
}
 
else{ swal("Solo Numeros", "En esta Casilla Solo Se Aceptan Numeros", "warning");
input.value = input.value.replace(/[^\d\.]*/g,'');
}
}


  
   //FUNCION PARA DESCARTAR
  function calcularHojauno(){

    var C502 = parseInt(document.getElementById('C502').value);
    var C764 = parseInt(document.getElementById('C764').value);
    var C717 = parseInt(document.getElementById('C717').value);
    var C111 = parseInt(document.getElementById('C111').value);
    var C759 = parseInt(document.getElementById('C759').value);
    var C513 = parseInt(document.getElementById('C513').value);
    var C510 = parseInt(document.getElementById('C510').value);
    var C709 = parseInt(document.getElementById('C709').value);
    var C734 = parseInt(document.getElementById('C734').value);
    var C517 = parseInt(document.getElementById('C517').value);
    var C501 = parseInt(document.getElementById('C501').value);
    var C154 = parseInt(document.getElementById('C154').value);
    var C518 = parseInt(document.getElementById('C518').value);
    var C713 = parseInt(document.getElementById('C713').value);
    var C738 = parseInt(document.getElementById('C738').value);
    var C739 = parseInt(document.getElementById('C739').value);
    var C740 = parseInt(document.getElementById('C740').value);
    var C741 = parseInt(document.getElementById('C741').value);
    var C538 = parseInt(document.getElementById('C538').value);
    var C511 = parseInt(document.getElementById('C511').value);
    var C514 = parseInt(document.getElementById('C514').value);
    //var C564 = parseInt(document.getElementById('C564').value);
    var C521 = parseInt(document.getElementById('C521').value);
    //var C566 = parseInt(document.getElementById('C566').value);
    var C560 = parseInt(document.getElementById('C560').value);
    //var C584 = parseInt(document.getElementById('C584').value);
    var C562 = parseInt(document.getElementById('C562').value);
    //var C519 = parseInt(document.getElementById('C519').value);

    var C537 = parseInt(document.getElementById('C537').value);
    var C77 = parseInt(document.getElementById('C77').value);
    
    var C595 = parseInt(document.getElementById('C595').value);
    var C91 = parseInt(document.getElementById('C91').value);
    var C92 = parseInt(document.getElementById('C92').value);
    var C93 = parseInt(document.getElementById('C93').value);
    var C94 = parseInt(document.getElementById('C94').value);

    

    


      var C529 = parseInt(document.getElementById('C529').value);
      var C530 = parseInt(document.getElementById('C530').value);
      var C409 = parseInt(document.getElementById('C409').value);
      var C522 = parseInt(document.getElementById('C522').value);
      var C526 = parseInt(document.getElementById('C526').value);
      var C113 = parseInt(document.getElementById('C113').value);
      var C28 = parseInt(document.getElementById('C28').value);
      var C548 = parseInt(document.getElementById('C548').value);
      var C540 = parseInt(document.getElementById('C540').value);
      var C541 = parseInt(document.getElementById('C541').value);
      var C549 = parseInt(document.getElementById('C549').value);
      var C550 = parseInt(document.getElementById('C550').value);
      var C577 = parseInt(document.getElementById('C577').value);
      var C32 = parseInt(document.getElementById('C32').value);
      var C150 = parseInt(document.getElementById('C150').value);
      var C146 = parseInt(document.getElementById('C146').value);
      var C752 = parseInt(document.getElementById('C752').value);
      var C545 = parseInt(document.getElementById('C545').value);
      var C546 = parseInt(document.getElementById('C546').value);
      var C710 = parseInt(document.getElementById('C710').value);
      var C602 = parseInt(document.getElementById('C602').value);
      var C575 = parseInt(document.getElementById('C575').value);
      var C576 = parseInt(document.getElementById('C576').value);
      var C574 = parseInt(document.getElementById('C574').value);
      var C33 = parseInt(document.getElementById('C33').value);
      var C580 = parseInt(document.getElementById('C580').value);
      var C149 = parseInt(document.getElementById('C149').value);
      var C582 = parseInt(document.getElementById('C582').value);
      var C85 = parseInt(document.getElementById('C85').value);
      var C753 = parseInt(document.getElementById('C753').value);
      var C754 = parseInt(document.getElementById('C754').value);
      var C551 = parseInt(document.getElementById('C551').value);
      var C559 = parseInt(document.getElementById('C559').value);
      var C508 = parseInt(document.getElementById('C508').value);
      var C533 = parseInt(document.getElementById('C533').value);
      var C552 = parseInt(document.getElementById('C552').value);
      var C603 = parseInt(document.getElementById('C603').value);
      var C507 = parseInt(document.getElementById('C507').value);
      var C506 = parseInt(document.getElementById('C506').value);
      var C556 = parseInt(document.getElementById('C556').value);
      var C557 = parseInt(document.getElementById('C557').value);
      var C558 = parseInt(document.getElementById('C558').value);
      var C543 = parseInt(document.getElementById('C543').value);
      var C573 = parseInt(document.getElementById('C573').value);
      var C598 = parseInt(document.getElementById('C598').value);
      var C39 = parseInt(document.getElementById('C39').value);
      var C554 = parseInt(document.getElementById('C554').value);
      var C736 = parseInt(document.getElementById('C736').value);
      var C597 = parseInt(document.getElementById('C597').value);
      var C555 = parseInt(document.getElementById('C555').value);
      var C596 = parseInt(document.getElementById('C596').value);
      var C725 = parseInt(document.getElementById('C725').value);
      var C737 = parseInt(document.getElementById('C737').value);
      var C727 = parseInt(document.getElementById('C727').value);
      var C704 = parseInt(document.getElementById('C704').value);
      var C705 = parseInt(document.getElementById('C705').value);
      var C706 = parseInt(document.getElementById('C706').value);
      var C160 = parseInt(document.getElementById('C160').value);
      var C161 = parseInt(document.getElementById('C161').value);
      var C570 = parseInt(document.getElementById('C570').value);
      var C126 = parseInt(document.getElementById('C126').value);
      var C128 = parseInt(document.getElementById('C128').value);
      var C571 = parseInt(document.getElementById('C571').value);
      var C572 = parseInt(document.getElementById('C572').value);
      var C568 = parseInt(document.getElementById('C568').value);
      var C590 = parseInt(document.getElementById('C590').value);
      var C547 = parseInt(document.getElementById('C547').value);
      var C728 = parseInt(document.getElementById('C728').value);
      var C707 = parseInt(document.getElementById('C707').value);
      var C73 = parseInt(document.getElementById('C73').value);
      var C130 = parseInt(document.getElementById('C130').value);
      var C591 = parseInt(document.getElementById('C591').value);


      var impart37 = C113 - C28 - C548 - C540 + C541;

      if (impart37 >= 0) {
      
        document.getElementById("C550").value = impart37;
        document.getElementById("C549").value = 0;
      }else{
        impart37 = ( impart37 * -1);
        document.getElementById("C549").value = impart37;
        document.getElementById("C550").value = 0;
      }

      var debitos = C577+C32+C150+C146+C752+C545-C546-C710;
      document.getElementById("C602").value = debitos;
      
      var creditos = C576 + C33 + C149 + C85 + C754 + C551 - C559 + C508 - C533 + C552;
      document.getElementById("C603").value = creditos;

      var diferencia1 = debitos - creditos;


      if (diferencia1 >= 0) {
      
        document.getElementById("C506").value = diferencia1;
        document.getElementById("C507").value = 0;
      }else{
        diferencia1 = ( diferencia1 * -1);
        document.getElementById("C507").value = diferencia1;
        document.getElementById("C506").value = 0;
      }

      /////////////////////////////////
      // CALCULO LINEAS 98 hasta 102 //
      /////////////////////////////////

      var cod556 = document.getElementById("C556").value;

      if (cod556 >= 1) {
        var anticipo = C556 + C557 - C558;
        var calculorem = document.getElementById("C89").value;  /* $ 1.990.080 */
        document.getElementById("C543").value = anticipo;  /* $ 2.042.047 */
        document.getElementById("C573").value = anticipo-calculorem;
        document.getElementById("C598").value = calculorem; 
      } else {
        
      }

      //////////////////////////////
      //     CALCULO LINEA 547    //
      //////////////////////////////

      var linea65 = document.getElementById("C595").value;
      var linea102 = document.getElementById("C598").value;
      var totaldeterminado = linea65 - linea102;
      document.getElementById("C547").value = totaldeterminado;
  }
 //FUNCION PARA DESCARTAR


  //CONTROL MODIFICAR FORMULARIO29
$(document).ready(function() {
  $("#formModForm").submit(function() {    
    $.ajax({
      type: "POST",
      url: '../controles/controlModForm.php',
      data:$("#formModForm").serialize(),
      success: function (result) { 
        var msg = result.trim();
        console.log(result);
        switch(msg) {
              case '-1':
              swal("Error Periodo F29", "La empresa ya cuenta con un F29 para este periodo, favor editar el existente", "warning");
              break;
                case '0':
                    window.location.assign("../index.html")
                    break;
                case '1':
                    swal("Error Base de Datos", "Error de base de datos, comuniquese con el administrador", "warning");
                    break;
                default:
                    swal("Formulario Modificado Correctamente", msg, "success");
                    
            }
      },
      error: function(){
              alert('Verifique los datos')      
        }
    });
    return false;
  });
});


/////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////
//// F   O  R  M  U  L  A  R  I  O  2 9  ///////
////////////////////////////////////////////////

////////////////////////////////////////////////
//CALCULO FORMULARIO 29 LINEA 7 HASTA LINEA 22//
//          TOTAL DEBITOS HOJA 1              //
////////////////////////////////////////////////
  function calcDebitos(){

    var C502 = (document.getElementById('C502').value);
    var C764 = (document.getElementById('C764').value);
    var C717 = (document.getElementById('C717').value);
    var C111 = (document.getElementById('C111').value);
    var C759 = (document.getElementById('C759').value);
    var C513 = (document.getElementById('C513').value);
    var C510 = (document.getElementById('C510').value);
    var C709 = (document.getElementById('C709').value);
    var C734 = (document.getElementById('C734').value);
    var C517 = (document.getElementById('C517').value);
    var C501 = (document.getElementById('C501').value);
    var C154 = (document.getElementById('C154').value);
    var C518 = (document.getElementById('C518').value);
    var C713 = (document.getElementById('C713').value);
    var C741 = (document.getElementById('C741').value);
    
    C502 = parseInt(C502.replace(/\./g,""));
    C764 = parseInt(C764.replace(/\./g,""));
    C717 = parseInt(C717.replace(/\./g,""));
    C111 = parseInt(C111.replace(/\./g,""));
    C759 = parseInt(C759.replace(/\./g,""));
    C513 = parseInt(C513.replace(/\./g,""));
    C510 = parseInt(C510.replace(/\./g,""));
    C709 = parseInt(C709.replace(/\./g,""));
    C734 = parseInt(C734.replace(/\./g,""));
    C517 = parseInt(C517.replace(/\./g,""));
    C501 = parseInt(C501.replace(/\./g,""));
    C154 = parseInt(C154.replace(/\./g,""));
    C518 = parseInt(C518.replace(/\./g,""));
    C713 = parseInt(C713.replace(/\./g,""));
    C741 = parseInt(C741.replace(/\./g,""));

    var totaldebito = C502+C764+C717+C111+C759+C513-C510-C709-C734+C517+C501+C154+C518+C713+C741;

    document.getElementById("C538").value = totaldebito;

  }
////////////////////////////////////////////////
//  FIN FORMULARIO 29 LINEA 7 HASTA LINEA 22  //
//          TOTAL DEBITOS HOJA 1              //
////////////////////////////////////////////////

////////////////////////////////////////////////
//     CALCULO  29 LINEA 23 HASTA LINEA 47    //
//          TOTAL CREDITOS HOJA 1             //
////////////////////////////////////////////////

function calcCreditos(){



  var C520 = (document.getElementById('C520').value);
  var C762 = (document.getElementById('C762').value);
  var C766 = (document.getElementById('C766').value);
  var C525 = (document.getElementById('C525').value);
  var C528 = (document.getElementById('C528').value);
  var C532 = (document.getElementById('C532').value);
  var C535 = (document.getElementById('C535').value);
  var C553 = (document.getElementById('C553').value);
  var C504 = (document.getElementById('C504').value);
  var C593 = (document.getElementById('C593').value);
  var C594 = (document.getElementById('C594').value);
  var C592 = (document.getElementById('C592').value);
  var C539 = (document.getElementById('C539').value);
  var C718 = (document.getElementById('C718').value);
  var C164 = (document.getElementById('C164').value);
  var C730 = (document.getElementById('C730').value);
  var C742 = (document.getElementById('C742').value);
  var C743 = (document.getElementById('C743').value);
  var C127 = (document.getElementById('C127').value);
  var C729 = (document.getElementById('C729').value);
  var C744 = (document.getElementById('C744').value);
  var C745 = (document.getElementById('C745').value);
  var C544 = (document.getElementById('C544').value);
  var C523 = (document.getElementById('C523').value);
  var C712 = (document.getElementById('C712').value);
  var C757 = (document.getElementById('C757').value);
  

  C520 = parseInt(C520.replace(/\./g,""));
  C762 = parseInt(C762.replace(/\./g,""));
  C766 = parseInt(C766.replace(/\./g,""));
  C525 = parseInt(C525.replace(/\./g,""));
  C528 = parseInt(C528.replace(/\./g,""));
  C532 = parseInt(C532.replace(/\./g,""));
  C535 = parseInt(C535.replace(/\./g,""));
  C553 = parseInt(C553.replace(/\./g,""));
  C504 = parseInt(C504.replace(/\./g,""));
  C593 = parseInt(C593.replace(/\./g,""));
  C594 = parseInt(C594.replace(/\./g,""));
  C592 = parseInt(C592.replace(/\./g,""));
  C539 = parseInt(C539.replace(/\./g,""));
  C718 = parseInt(C718.replace(/\./g,""));
  C164 = parseInt(C164.replace(/\./g,""));
  C730 = parseInt(C730.replace(/\./g,""));
  C742 = parseInt(C742.replace(/\./g,""));
  C743 = parseInt(C743.replace(/\./g,""));
  C127 = parseInt(C127.replace(/\./g,""));
  C729 = parseInt(C729.replace(/\./g,""));
  C744 = parseInt(C744.replace(/\./g,""));
  C745 = parseInt(C745.replace(/\./g,""));
  C544 = parseInt(C544.replace(/\./g,""));
  C523 = parseInt(C523.replace(/\./g,""));
  C712 = parseInt(C712.replace(/\./g,""));
  C757 = parseInt(C757.replace(/\./g,""));

  var totaldebito = (document.getElementById('C538').value);
  var totalcredito = C520+C762+C766+C525-C528+C532+C535+C553+C504-C593-C594-C592-C539-C718+C164+C127+C544-C523-C712-C757;

  document.getElementById("C537").value = totalcredito;

// ASIGNACION DE VALOR A CASILLAS 77 O 89 SEGUN CORRESPONDA
    var diferencia = totaldebito-totalcredito;
    if (diferencia >= 0) {
      document.getElementById("C89").value = diferencia;
      document.getElementById("C77").value = 0;
    }else{
      diferencia = ( diferencia * -1);
      document.getElementById("C77").value = diferencia;
      document.getElementById("C89").value = 0;
    }
}
////////////////////////////////////////////////
//     FIN      29 LINEA 23 HASTA LINEA 47    //
//          TOTAL CREDITOS HOJA 1             //
////////////////////////////////////////////////


////////////////////////////////////////////////
//     CALCULO  29 LINEA 48 HASTA LINEA 64    //
//          IMPTO A LA RENTA HOJA 1           //
////////////////////////////////////////////////

function calcimpto(){

    ///////////////////////////////
    // CALCULO LINEAS 58 - 59 60 //
    ///////////////////////////////
    var baseimponible = document.getElementById("C563").value;
    baseimponible = parseInt(baseimponible.replace(/\./g,""));
    var tasa = document.getElementById("C115").value;
    var ppmdet = ((baseimponible*tasa) / 100);
    //regresar = ppmdet.toString().replace(/\./g,',');
    document.getElementById("C62").value = Math.round(ppmdet);



    var baseimponible2 = document.getElementById("C120").value;
    baseimponible2 = parseInt(baseimponible2.replace(/\./g,""));
    var tasa2 = document.getElementById("C542").value;
    var ppmdet2 = ((baseimponible2*tasa2) / 100);
    //regresar2 = ppmdet2.toString().replace(/\./g,',');
    document.getElementById("C123").value = Math.round(ppmdet2);

    var baseimponible3 = document.getElementById("C701").value;
    baseimponible3 = parseInt(baseimponible3.replace(/\./g,""));
    var tasa3 = document.getElementById("C702").value;
    var ppmdet3 = ((baseimponible3*tasa3) / 100);
    //regresar3 = ppmdet3.toString().replace(/\./g,',');
    document.getElementById("C703").value = Math.round(ppmdet3);
    // FIN CALCULO LINEAS   58 - 59 - 60

  var C89  = (document.getElementById('C89').value);
  var C760 = (document.getElementById('C760').value);
  var C50  = (document.getElementById('C50').value);
  var C48  = (document.getElementById('C48').value);
  var C151 = (document.getElementById('C151').value);
  var C153 = (document.getElementById('C153').value);
  var C54  = (document.getElementById('C54').value);
  var C56  = (document.getElementById('C56').value);
  var C588 = (document.getElementById('C588').value);
  var C589 = (document.getElementById('C589').value);
  var C62  = (document.getElementById('C62').value);
  var C123 = (document.getElementById('C123').value);
  var C703 = (document.getElementById('C703').value);
  var C66  = (document.getElementById('C66').value);
  var C152 = (document.getElementById('C152').value);
  var C70  = (document.getElementById('C70').value);

  C89  = parseInt(C89.replace(/\./g,""));
  C760 = parseInt(C760.replace(/\./g,""));
  C50  = parseInt(C50.replace(/\./g,""));
  C48  = parseInt(C48.replace(/\./g,""));
  C151 = parseInt(C151.replace(/\./g,""));
  C153 = parseInt(C153.replace(/\./g,""));
  C54  = parseInt(C54.replace(/\./g,""));
  C56  = parseInt(C56.replace(/\./g,""));
  C588 = parseInt(C588.replace(/\./g,""));
  C589 = parseInt(C589.replace(/\./g,""));
  C62  = parseInt(C62.replace(/\./g,""));
  C123 = parseInt(C123.replace(/\./g,""));
  C703 = parseInt(C703.replace(/\./g,""));
  C66  = parseInt(C66.replace(/\./g,""));
  C152 = parseInt(C152.replace(/\./g,""));
  C70 = parseInt(C70.replace(/\./g,""));




    var subtotal = C89+C760+C50+C48+C151+C153+C54+C56+C588+C589+C62+C123+C703+C66+C152+C70;
    
    //document.getElementById("C94").value = total;
    
    totaldethoja2 = document.getElementById("C598").value;
    //alert(totaldethoja2);
    if (totaldethoja2) {
      document.getElementById("C91").value = subtotal-totaldethoja2;
    }else{
      document.getElementById("C91").value = totaldethoja2;  
    }


    document.getElementById("C595").value = subtotal;
  

    ///////////////////////////////
    //  FIN  LINEAS 58 - 59 60   //
    ///////////////////////////////



}
////////////////////////////////////////////////
//     FIN  29 LINEA 48 HASTA LINEA 64        //
//          IMPTO A LA RENTA HOJA 1           //
////////////////////////////////////////////////


////////////////////////////////////////////////
//     CALCULO  29 LINEA 66 en adelante       //
//          TRIB SIMPLE RENTA HOJA 2          //
////////////////////////////////////////////////
function valoresHoja2(){

  var C595  = (document.getElementById('C595').value);
  var C409  = (document.getElementById('C409').value);
  var C522  = (document.getElementById('C522').value);
  var C526  = (document.getElementById('C526').value);
  var C550  = (document.getElementById('C550').value);
  var C506  = (document.getElementById('C506').value);
  var C598  = (document.getElementById('C598').value);
  var C596  = (document.getElementById('C596').value);
  var C727  = (document.getElementById('C727').value);
  var C706  = (document.getElementById('C706').value);
  var C570  = (document.getElementById('C570').value);
  var C571  = (document.getElementById('C571').value);
  var C590  = (document.getElementById('C590').value);

  C595  = parseInt(C595.replace(/\./g,""));
  C409  = parseInt(C409.replace(/\./g,""));
  C522  = parseInt(C522.replace(/\./g,""));
  C526  = parseInt(C526.replace(/\./g,""));
  C550  = parseInt(C550.replace(/\./g,""));
  C506  = parseInt(C506.replace(/\./g,""));
  C598  = parseInt(C598.replace(/\./g,""));
  C596  = parseInt(C596.replace(/\./g,""));
  C727  = parseInt(C727.replace(/\./g,""));
  C706  = parseInt(C706.replace(/\./g,""));
  C570  = parseInt(C570.replace(/\./g,""));
  C571  = parseInt(C571.replace(/\./g,""));
  C590  = parseInt(C590.replace(/\./g,""));


var totalDeterm = C595+C409+C522+C526+C550+C506-C598+C596-C727-C706-C570-C571-C590;
document.getElementById("C547").value = totalDeterm;

  if (totalDeterm >= 0) {
    document.getElementById("C91").value = totalDeterm;
  } else {
    var C89 = (document.getElementById('C89').value);
    document.getElementById("C91").value = C89;
  }

}
////////////////////////////////////////////////
//     FIN      29 LINEA 66 en adelante       //
//          TRIB SIMPLE RENTA HOJA 2          //
////////////////////////////////////////////////


////////////////////////////////////////////////
//     CALCULO  29 LINEA 71 a 76              //
//          IMPTO ADICIONAL   HOJA 2          //
////////////////////////////////////////////////
function imptAdi(){

  var C113 = (document.getElementById('C113').value);
  var C28  = (document.getElementById('C28').value);
  var C548 = (document.getElementById('C548').value);
  var C540 = (document.getElementById('C540').value);
  var C541 = (document.getElementById('C541').value);
  var C549 = (document.getElementById('C549').value);
  var C550 = (document.getElementById('C550').value);

  C113 = parseInt(C113.replace(/\./g,""));
  C28 = parseInt(C28.replace(/\./g,""));
  C548 = parseInt(C548.replace(/\./g,""));
  C540 = parseInt(C540.replace(/\./g,""));
  C541 = parseInt(C541.replace(/\./g,""));
  C549 = parseInt(C549.replace(/\./g,""));
  C550 = parseInt(C550.replace(/\./g,""));

  var resultado = C113-C28-C548-C540+C541;

  // ASIGNACION DE VALOR A CASILLAS 549 O 550 SEGUN CORRESPONDA
  if (resultado >= 0) {
    document.getElementById("C550").value = resultado;
    document.getElementById("C549").value = 0;
  }else{
    resultado = ( resultado * -1);
    document.getElementById("C549").value = resultado;
    document.getElementById("C550").value = 0;
  }




}
////////////////////////////////////////////////
//     FIN  29 LINEA 71 a 76                  //
//          IMPTO ADICIONAL   HOJA 2          //
////////////////////////////////////////////////

////////////////////////////////////////////////
//     CALCULO  29 LINEA 77 a 97              //
//          IMPTO ADICIONAL   HOJA 2          //
////////////////////////////////////////////////
function imptAdi42(){

  var C577 = (document.getElementById('C577').value);
  var C32 = (document.getElementById('C32').value);
  var C150 = (document.getElementById('C150').value);
  var C146 = (document.getElementById('C146').value);
  var C752 = (document.getElementById('C752').value);
  var C545 = (document.getElementById('C545').value);
  var C546 = (document.getElementById('C546').value);
  var C710 = (document.getElementById('C710').value);
  var C602 = (document.getElementById('C602').value);
  var C576 = (document.getElementById('C576').value);
  var C33 = (document.getElementById('C33').value);
  var C149 = (document.getElementById('C149').value);
  var C85 = (document.getElementById('C85').value);
  var C754 = (document.getElementById('C754').value);
  var C551 = (document.getElementById('C551').value);
  var C559 = (document.getElementById('C559').value);
  var C508 = (document.getElementById('C508').value);
  var C533 = (document.getElementById('C533').value);
  var C552 = (document.getElementById('C552').value);
  var C603 = (document.getElementById('C603').value);

C577 = parseInt(C577.replace(/\./g,""));
C32  = parseInt(C32.replace(/\./g,""));
C150 = parseInt(C150.replace(/\./g,""));
C146 = parseInt(C146.replace(/\./g,""));
C752 = parseInt(C752.replace(/\./g,""));
C545 = parseInt(C545.replace(/\./g,""));
C546 = parseInt(C546.replace(/\./g,""));
C710 = parseInt(C710.replace(/\./g,""));
C602 = parseInt(C602.replace(/\./g,""));
C576 = parseInt(C576.replace(/\./g,""));
C33  = parseInt(C33.replace(/\./g,""));
C149 = parseInt(C149.replace(/\./g,""));
C85  = parseInt(C85.replace(/\./g,""));
C754 = parseInt(C754.replace(/\./g,""));
C551 = parseInt(C551.replace(/\./g,""));
C559 = parseInt(C559.replace(/\./g,""));
C508 = parseInt(C508.replace(/\./g,""));
C533 = parseInt(C533.replace(/\./g,""));
C552 = parseInt(C552.replace(/\./g,""));
C603 = parseInt(C603.replace(/\./g,""));

var resultado1 = C577+C32+C150+C146+C752+C545-C546-C710;
document.getElementById("C602").value = resultado1;

var resultado2 = C576+C33+C149+C85+C754+C551-C559+C508-C533+C552;
document.getElementById("C603").value = resultado2;

resultado = resultado1 - resultado2;


resultado = parseInt(resultado);

  if (resultado >= 0) {
    document.getElementById("C506").value = resultado;
    document.getElementById("C507").value = 0;
  }else{
    resultado = ( resultado * -1);
    document.getElementById("C507").value = resultado;
    document.getElementById("C506").value = 0;
  }

}
////////////////////////////////////////////////
//     FIN      29 LINEA 77 a 97              //
//          IMPTO ADICIONAL   HOJA 2          //
////////////////////////////////////////////////


////////////////////////////////////////////////
//     CALCULO  29 LINEA 98 a 107             //
//          ANTICIPO CAMBIO   HOJA 2          //
////////////////////////////////////////////////
function anticipo(){

  valoresHoja2();
  var C556 = (document.getElementById('C556').value);
  var C557 = (document.getElementById('C557').value);
  var C558 = (document.getElementById('C558').value);
  var C573 = (document.getElementById('C573').value);
  var C598 = (document.getElementById('C598').value);
  var C39  = (document.getElementById('C39').value);
  var C554 = (document.getElementById('C554').value);
  var C736 = (document.getElementById('C736').value);
  var C597 = (document.getElementById('C597').value);
  var C555 = (document.getElementById('C555').value);
  var C596 = (document.getElementById('C596').value);
  
  C556 = parseInt(C556.replace(/\./g,""));
  C557 = parseInt(C557.replace(/\./g,""));
  C558 = parseInt(C558.replace(/\./g,""));
  C573 = parseInt(C573.replace(/\./g,""));
  C598 = parseInt(C598.replace(/\./g,""));
  C39  = parseInt(C39.replace(/\./g,""));
  C554 = parseInt(C554.replace(/\./g,""));
  C736 = parseInt(C736.replace(/\./g,""));
  C597 = parseInt(C597.replace(/\./g,""));
  C555 = parseInt(C555.replace(/\./g,""));
  C596 = parseInt(C596.replace(/\./g,""));
  
  var anticipo = C556+C557-C558;
  document.getElementById("C543").value = anticipo;
  var cod89 = document.getElementById("C89").value;
  cod89 = parseInt(cod89.replace(/\./g,""));
  

  if (anticipo > cod89) {
    document.getElementById("C598").value = cod89;
  }else{
    document.getElementById("C598").value = anticipo;
  }

  

  var agRetenedor = C39+C554-C736+C597+C555;
  document.getElementById("C596").value = agRetenedor;
  valoresHoja2();

}
////////////////////////////////////////////////
//     FIN      29 LINEA 98 a 107            //
//          ANTICIPO CAMBIO   HOJA 2          //
////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////////////////////////////



function calcimptoPoster(){

  ///////////////////////////////////////////////////////////////////////////////////
  // CALCULO LINEAS 58 - 59 60  DE IVA POSTERGADO "NO INCLUYE CODIGO 89 EN EL TOTAL//
  ///////////////////////////////////////////////////////////////////////////////////
  var baseimponible = document.getElementById("C563").value;
  baseimponible = parseInt(baseimponible.replace(/\./g,""));
  var tasa = document.getElementById("C115").value;
  var ppmdet = ((baseimponible*tasa) / 100);
  //regresar = ppmdet.toString().replace(/\./g,',');
  document.getElementById("C62").value = Math.round(ppmdet);



  var baseimponible2 = document.getElementById("C120").value;
  baseimponible2 = parseInt(baseimponible2.replace(/\./g,""));
  var tasa2 = document.getElementById("C542").value;
  var ppmdet2 = ((baseimponible2*tasa2) / 100);
  //regresar2 = ppmdet2.toString().replace(/\./g,',');
  document.getElementById("C123").value = Math.round(ppmdet2);

  var baseimponible3 = document.getElementById("C701").value;
  baseimponible3 = parseInt(baseimponible3.replace(/\./g,""));
  var tasa3 = document.getElementById("C702").value;
  var ppmdet3 = ((baseimponible3*tasa3) / 100);
  //regresar3 = ppmdet3.toString().replace(/\./g,',');
  document.getElementById("C703").value = Math.round(ppmdet3);
  // FIN CALCULO LINEAS   58 - 59 - 60

var C89  = (document.getElementById('C89').value);
var C760 = (document.getElementById('C760').value);
var C50  = (document.getElementById('C50').value);
var C48  = (document.getElementById('C48').value);
var C151 = (document.getElementById('C151').value);
var C153 = (document.getElementById('C153').value);
var C54  = (document.getElementById('C54').value);
var C56  = (document.getElementById('C56').value);
var C588 = (document.getElementById('C588').value);
var C589 = (document.getElementById('C589').value);
var C62  = (document.getElementById('C62').value);
var C123 = (document.getElementById('C123').value);
var C703 = (document.getElementById('C703').value);
var C66  = (document.getElementById('C66').value);
var C152 = (document.getElementById('C152').value);
var C70  = (document.getElementById('C70').value);

C89  = parseInt(C89.replace(/\./g,""));
C760 = parseInt(C760.replace(/\./g,""));
C50  = parseInt(C50.replace(/\./g,""));
C48  = parseInt(C48.replace(/\./g,""));
C151 = parseInt(C151.replace(/\./g,""));
C153 = parseInt(C153.replace(/\./g,""));
C54  = parseInt(C54.replace(/\./g,""));
C56  = parseInt(C56.replace(/\./g,""));
C588 = parseInt(C588.replace(/\./g,""));
C589 = parseInt(C589.replace(/\./g,""));
C62  = parseInt(C62.replace(/\./g,""));
C123 = parseInt(C123.replace(/\./g,""));
C703 = parseInt(C703.replace(/\./g,""));
C66  = parseInt(C66.replace(/\./g,""));
C152 = parseInt(C152.replace(/\./g,""));
C70 = parseInt(C70.replace(/\./g,""));




  var subtotal = C760+C50+C48+C151+C153+C54+C56+C588+C589+C62+C123+C703+C66+C152+C70;
  
  //document.getElementById("C94").value = total;
  
  totaldethoja2 = document.getElementById("C598").value;
  //alert(totaldethoja2);
  if (totaldethoja2) {
    document.getElementById("C91").value = subtotal-totaldethoja2;
  }else{
    document.getElementById("C91").value = totaldethoja2;  
  }


  document.getElementById("C595").value = subtotal;


  ///////////////////////////////
  //  FIN  LINEAS 58 - 59 60   //
  ///////////////////////////////



}
////////////////////////////////////////////////
//     FIN  29 LINEA 48 HASTA LINEA 64        //
//          IMPTO A LA RENTA HOJA 1           //
////////////////////////////////////////////////
