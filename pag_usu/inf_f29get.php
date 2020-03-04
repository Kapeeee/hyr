<?php 
  include("../includes/validaSesion.php")
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Informes F29</title>
<!--Quitar al pasar a prod, no guarda cache-->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

<?php
  include("../includes/recursosExternos.php");
  $emp = $_GET['emp'];
?>




<!--recursos para graficos-->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script id="idemp" src="../js/funcionesF29graficos.js?emp=<?php echo $emp; ?>"></script>
</head>

<body>


<?php
  include("../includes/infoLog.php");
  include("../includes/menu.php");
?>


<div id="loading" style="display: none;">
        <center><img src="../recursos/img/load.gif"></center>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-12">
     <button  class="btn btn-outline-danger" style="color: inherit;" id="btnimp" onclick="imp()"><i class="fa fa-print" aria-hidden="true"></i></button>
     <h5><span class="badge badge-warning" id="reg_trib"></span>
         <span class="badge badge-success" id="val_uf"></span></h5>


     <?php
      $re = $fun ->cargar_datos_emp2($emp,2);
      foreach($re as $row)
        {
          echo '<h3>Informe Form. 29: <b>'.$row['razon_social_emp'].'</b> RUT:  <b>'.$row['rut_emp'].'</b> <i class="fa fa-list-alt" aria-hidden="true"></i></h3>';
        }
      ?>

        
        </div>
    </div>
    <hr>
 

<div class="row">

<div  class="tit">
   Total Débito <br>
  <span id="totdeb" class="num"></span>
</div>

<div  class="tit">
   Total Crédito <br>
  <span id="totcred" class="num"></span>
</div>

<div  class="tit">
   Total Ventas Netas <br>
  <span id="totven" class="num"></span>
</div>

<div  class="tit">
   Total PPM <br>
  <span id="totppm" class="num"></span>
</div>

<div  class="tit">
   Total Imp. Único <br>
  <span id="totimpu" class="num"></span>
</div>

<div  class="tit">
   Total Retención <br>
  <span id="totret" class="num"></span>
</div>

<div  class="tit">
   Total Imp. Pagado <br>
  <span id="totimpp" class="num"></span>
</div>

<div  class="tit">
   Total Cred. Fiscal <br>
  <span id="totcredfis" class="num"></span>
</div>



</div>
<br>

<div id="alerta_ven_anual" style="display: none">
  <strong><span id="men_ven_anual"></span></strong>
</div>

<hr>
<br>


<div class="row">

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Relacion Débito/Crédito</h5>
<div id="relgraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Débito y Crédito</h5>
<div id="debcredgraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Ventas</h5>
<div id="vengraf" class="graf"></div>
</div>

</div>
<br>
<div class="row">
  
<div class="col-sm-12 col-md-12 col-lg-4">
<h5>PPM Pagado</h5>
<div id="ppmgraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Impuesto Unico Pagado</h5>
<div id="impugraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Retención</h5>
<div id="retgraf" class="graf"></div>
</div>

</div>
<br>
<div class="row">

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Impuesto Pagado</h5>
<div id="imppgraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4">
<h5>Remanente Cred. Fiscal</h5>
<div id="recrefgraf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4" id="divvenmgraf">
<h5>Venta Máxima anual</h5>
<div id="venmgraf" class="graf"></div>
</div>


</div>





<br>
<div class="row">
  
<div class="col-sm-12 col-md-12 col-lg-4" id="divconactfijo">
<h5>Control Activo Fijo</h5>
<div id="conactfijograf" class="graf"></div>
</div>

<div class="col-sm-12 col-md-12 col-lg-4" id="divcondinactfijo">
<h5>Control DIN Activo Fijo</h5>
<div id="condinactfijograf" class="graf"></div>
</div>

  <div class="col-sm-4">
<h5>Resumen de IVA</h5>
<table id="resiva" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
            <th class="">Periodo                             <i class="" aria-hidden="true"></i></th>
            <th class="">Tipo IVA                           <i class="" aria-hidden="true"></i></th>

        <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
      </tr>
    </thead>
    <tbody>
    <?php
      $re = $fun ->cargar_resiva($emp);
      foreach($re as $row)
        {  
      ?>
      <tr>
        <td><?php echo $row['periodo']?></td>  
        <td><?php echo $row['iva']?></td>

      </tr>
    <?php } ?>  
    </tbody>
</table>

</div>

</div>








</div>






</body>
</html>
