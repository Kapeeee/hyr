//id de emp enviado por src
var idemp = document.getElementById("idemp").src.match(/\w+=\w+/g);
var emp = idemp[0].split("=");




function imp() {

                $('#menu').css("display","none");
                $('#btnimp').css("display","none");
            window.print();
                $('#menu').css("display","block");
                $('#btnimp').css("display","block");
    
    

}



  //CARGA DE GIF CARGA
  $(document).ajaxStart(function() {
    $("#main").hide();
    $("#loading").show();
       }).ajaxStop(function() {
    $("#loading").hide();
    $("#main").show();
    }); 





$(document).ready(function () {


var graf = "rel";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {
        new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'relgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Relación'],
        barColors: ['Green'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });


$(document).ready(function () {


var graf = "debcred";


  $.ajax({
     url: '../controles/controlCargarF29Graf2.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'debcredgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value1', 'value2'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Débito','Crédito'],
        hideHover: 'auto',
        pointStrokeColors: ['white'],
        lineWidth: '6px',
        parseTime: false,
        lineColors: ['Green', 'Blue'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "ven";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'vengraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Ventas'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "ppm";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'ppmgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['PPM'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "impu";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'impugraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Imp. Único'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "ret";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'retgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Retención'],
        barColors: ['Green'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "impp";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'imppgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Imp. Pagado'],
        barColors: ['Green'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });

$(document).ready(function () {


var graf = "recref";


  $.ajax({
     url: '../controles/controlCargarF29Graf.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'recrefgraf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Remanente'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });
















$.getJSON('https://mindicador.cl/api', function(data) {
          var dailyIndicators = data;
          uf = parseInt(dailyIndicators.uf.valor);
          $("#val_uf").text(" UF Hoy $"+Number(parseInt(uf)).toLocaleString()+" ");
          console.log(uf);

  var colores = ['Red', 'Green'];


  $.ajax({
     url: '../controles/controlCargarF29Tot.php', 
     type: 'POST',
     data: {"emp":emp[1]},
     dataType:'json',
     success:function(result)
     {
      $("#totdeb").text(Number(parseInt(result[0].deb)).toLocaleString());
      $("#totcred").text(Number(parseInt(result[0].cred)).toLocaleString());
      $("#totven").text(Number(parseInt(result[0].ven)).toLocaleString());
      $("#totppm").text(Number(parseInt(result[0].ppm)).toLocaleString());
      $("#totimpu").text(Number(parseInt(result[0].impu)).toLocaleString());
      $("#totret").text(Number(parseInt(result[0].ret)).toLocaleString());
      $("#totimpp").text(Number(parseInt(result[0].impp)).toLocaleString());
      $("#totcredfis").text(Number(parseInt(result[0].credfis)).toLocaleString());

      $("#reg_trib").text(" Reg. Tributario: "+result[0].desc_reg_trib+" ");
      max_ven = parseInt(result[0].max_mon_reg_trib);




      switch(result[0].reg_trib_emp){
        case "3":

          max_ven = parseInt(max_ven) * parseInt(uf);
          dif = parseInt(max_ven) - parseInt(result[0].ven);

          if (parseInt(max_ven) < parseInt(result[0].ven)) {
            $('#alerta_ven_anual').addClass('alert alert-danger');
            $("#men_ven_anual").text("La venta anual ha excedido el monto maximo en $"+Number(parseInt(dif)).toLocaleString());
            $('#alerta_ven_anual').css("display","block");
          }else{
            $('#alerta_ven_anual').addClass('alert alert-info');
            $("#men_ven_anual").text("Faltan $"+Number(parseInt(dif)).toLocaleString()+" para superar el monto maximo de la venta anual");
            $('#alerta_ven_anual').css("display","block");
          } 


        
              new Morris.Donut({
                  // ID of the element in which to draw the chart.
                  element: 'venmgraf',
                  // Chart data records -- each entry in this array corresponds to a point on
                  // the chart.
                  data: [
                           { label: 'Venta Máxima', value: parseInt(dif) },
                           { label: 'Venta Anual', value: parseInt(result[0].ven) }],
                  formatter: function (value, data) { 
                            return Math.floor(value/max_ven*100) + '%, $'+ Number(parseInt(value)).toLocaleString(); 
                            },
                  // The name of the data record attribute that contains x-values.
                  //xkey: 'label',
                  // A list of names of data record attributes that contain y-values.
                  //ykeys: ['value'],
                  // Labels for the ykeys -- will be displayed when you hover over the
                  // chart.
                  //labels: ['$'],
                  colors: colores
                });


            

          break;
          case "4":

          max_ven = parseInt(max_ven) * parseInt(uf);
          dif = parseInt(max_ven) - parseInt(result[0].ven);

          if (parseInt(max_ven) < parseInt(result[0].ven)) {
            $('#alerta_ven_anual').addClass('alert alert-danger');
            $("#men_ven_anual").text("La venta anual ha excedido el monto maximo en $"+Number(parseInt(dif)).toLocaleString());
            $('#alerta_ven_anual').css("display","block");
          }else{
            $('#alerta_ven_anual').addClass('alert alert-info');
            $("#men_ven_anual").text("Faltan $"+Number(parseInt(dif)).toLocaleString()+" para superar el monto maximo de la venta anual");
            $('#alerta_ven_anual').css("display","block");
          } 

             new Morris.Donut({
                  // ID of the element in which to draw the chart.
                  element: 'venmgraf',
                  // Chart data records -- each entry in this array corresponds to a point on
                  // the chart.
                  data: [
                           { label: 'Venta Máxima', value: parseInt(dif) },
                           { label: 'Venta Anual', value: parseInt(result[0].ven) }],
                  formatter: function (value, data) { 
                            return Math.floor(value/max_ven*100) + '%, $'+ Number(parseInt(value)).toLocaleString(); 
                            },
                  // The name of the data record attribute that contains x-values.
                  //xkey: 'label',
                  // A list of names of data record attributes that contain y-values.
                  //ykeys: ['value'],
                  // Labels for the ykeys -- will be displayed when you hover over the
                  // chart.
                  //labels: ['$'],
                  colors: colores
                });



            

          break;
          case "5":

          max_ven = parseInt(max_ven) * parseInt(uf);
          dif = parseInt(max_ven) - parseInt(result[0].ven);

          if (parseInt(max_ven) < parseInt(result[0].ven)) {
            $('#alerta_ven_anual').addClass('alert alert-danger');
            $("#men_ven_anual").text("La venta anual ha excedido el monto maximo en $"+Number(parseInt(dif)).toLocaleString());
            $('#alerta_ven_anual').css("display","block");
          }else{
            $('#alerta_ven_anual').addClass('alert alert-info');
            $("#men_ven_anual").text("Faltan $"+Number(parseInt(dif)).toLocaleString()+" para superar el monto maximo de la venta anual");
            $('#alerta_ven_anual').css("display","block");
          } 

            new Morris.Donut({
                  // ID of the element in which to draw the chart.
                  element: 'venmgraf',
                  // Chart data records -- each entry in this array corresponds to a point on
                  // the chart.
                  data: [
                           { label: 'Venta Máxima', value: parseInt(dif) },
                           { label: 'Venta Anual', value: parseInt(result[0].ven) }],
                  formatter: function (value, data) { 
                            return Math.floor(value/max_ven*100) + '%, $'+ Number(parseInt(value)).toLocaleString(); 
                            },
                  // The name of the data record attribute that contains x-values.
                  //xkey: 'label',
                  // A list of names of data record attributes that contain y-values.
                  //ykeys: ['value'],
                  // Labels for the ykeys -- will be displayed when you hover over the
                  // chart.
                  //labels: ['$'],
                  colors: colores
                });



            

          break;
          case "6":

          max_ven = parseInt(max_ven) * parseInt(uf);
          dif = parseInt(max_ven) - parseInt(result[0].ven);

          if (parseInt(max_ven) < parseInt(result[0].ven)) {
            $('#alerta_ven_anual').addClass('alert alert-danger');
            $("#men_ven_anual").text("La venta anual ha excedido el monto maximo en $"+Number(parseInt(dif)).toLocaleString());
            $('#alerta_ven_anual').css("display","block");
          }else{
            $('#alerta_ven_anual').addClass('alert alert-info');
            $("#men_ven_anual").text("Faltan $"+Number(parseInt(dif)).toLocaleString()+" para superar el monto maximo de la venta anual");
            $('#alerta_ven_anual').css("display","block");
          } 

             new Morris.Donut({
                  // ID of the element in which to draw the chart.
                  element: 'venmgraf',
                  // Chart data records -- each entry in this array corresponds to a point on
                  // the chart.
                  data: [
                           { label: 'Venta Máxima', value: parseInt(dif) },
                           { label: 'Venta Anual', value: parseInt(result[0].ven) }],
                  formatter: function (value, data) { 
                            return Math.floor(value/max_ven*100) + '%, $'+ Number(parseInt(value)).toLocaleString(); 
                            },
                  // The name of the data record attribute that contains x-values.
                  //xkey: 'label',
                  // A list of names of data record attributes that contain y-values.
                  //ykeys: ['value'],
                  // Labels for the ykeys -- will be displayed when you hover over the
                  // chart.
                  //labels: ['$'],
                  colors: colores
                });



            

          break;
          default:
          $('#divvenmgraf').css("display","none");
      }




  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });



$(document).ready(function () {


var graf = "conactfijo";


  $.ajax({
     url: '../controles/controlCargarF29Graf2.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'conactfijograf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value1', 'value2'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Monto','Cantidad'],
        hideHover: 'auto',
        pointStrokeColors: ['white'],
        lineWidth: '6px',
        parseTime: false,
        lineColors: ['Blue', 'Grey'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });


$(document).ready(function () {


var graf = "condinactfijo";


  $.ajax({
     url: '../controles/controlCargarF29Graf2.php', 
     type: 'POST',
     data: {"emp":emp[1], "graf":graf},
     dataType:'json',
     success:function(result)
     {

        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'condinactfijograf',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: result,
        // The name of the data record attribute that contains x-values.
        xkey: 'periodo',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value1', 'value2'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Monto','Cantidad'],
        hideHover: 'auto',
        pointStrokeColors: ['white'],
        lineWidth: '6px',
        parseTime: false,
        lineColors: ['Blue', 'Gray'],
        xLabelAngle: 60,

      });
  },
  error: function(){
              swal("Error", "favor verifique sus datos e intente nuevamente o comuniquese con su Administrador de Sistema", "warning");      
      }
});
  });



