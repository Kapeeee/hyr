<?php 
  include("../includes/validaSesion.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - F29</title>

<?php
  include("../includes/recursosExternos.php");
?>

<script src="../js/funcionesF29.js"></script>

</head>

<body>


<?php
  include("../includes/infoLog.php");
  include("../includes/menu.php");
?>

<div class="container" id="main">

<div class="col-12 text-center">
  <h3>Formulario - 29&nbsp;&nbsp;<i class="fa fa-list-alt" aria-hidden="true"></i></h3>
  <hr>
</div>

<ul class="nav nav-pills" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="lista-tab" data-toggle="tab" href="#lista" role="tab" aria-controls="lista"
      aria-selected="true">&nbsp;&nbsp;Débitos y Ventas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="agrega-tab" data-toggle="tab" href="#agrega" role="tab" aria-controls="agrega"
      aria-selected="false">&nbsp;&nbsp;Créditos y Compras</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="modifica-tab" data-toggle="tab" href="#modifica" role="tab" aria-controls="modifica"
      aria-selected="false">&nbsp;&nbsp;Impuesto a la Renta D.L. 824/74</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="impto-tab" data-toggle="tab" href="#impto" role="tab" aria-controls="impto"
      aria-selected="false">&nbsp;&nbsp;TRIBUTACIÓN SIMPLIFICADA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="impadici-tab" data-toggle="tab" href="#impadici" role="tab" aria-controls="impadici"
      aria-selected="false">&nbsp;&nbsp;IMP. ADICIONAL ART. 37</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="impto_adici2-tab" data-toggle="tab" href="#impto_adici2" role="tab" aria-controls="impto_adici2"
      aria-selected="false">&nbsp;&nbsp;IMP. ADICIONAL ART. 42</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cambiosueldo-tab" data-toggle="tab" href="#cambiosueldo" role="tab" aria-controls="cambiosueldo"
      aria-selected="false">&nbsp;&nbsp;CAMBIO DE SUJETO D.L. 825</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="crediespe-tab" data-toggle="tab" href="#crediespe" role="tab" aria-controls="crediespe"
      aria-selected="false">&nbsp;&nbsp;CRÉDITOS ESPECIALES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="rem_credespe-tab" data-toggle="tab" href="#rem_credespe" role="tab" aria-controls="rem_credespe"
      aria-selected="false">&nbsp;&nbsp;REMANENTE CRÉDITOS ESPECIALES</a>
  </li>
</ul>

<hr>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="lista" role="tabpanel" aria-labelledby="lista-tab">
        <!-- CONTENIDO 1 -->
        <?php
          include("debitos_ventas.php");
        ?>
    </div>
  <div class="tab-pane fade" id="agrega" role="tabpanel" aria-labelledby="agrega-tab">
  <!-- CONTENIDO 2 -->
        <!-- CONTENIDO 1 -->
        <?php
          include("creditos_compras.php");
        ?>       
  </div>
  <div class="tab-pane fade" id="modifica" role="tabpanel" aria-labelledby="modifica-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("impto_renta.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="impto" role="tabpanel" aria-labelledby="impto-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("tribu_simp.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="impadici" role="tabpanel" aria-labelledby="impadici-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("impto_adici.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="impto_adici2" role="tabpanel" aria-labelledby="impto_adici2-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("impto_adici2.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="cambiosueldo" role="tabpanel" aria-labelledby="cambiosueldo-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("cambiosueldo.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="crediespe" role="tabpanel" aria-labelledby="crediespe-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("crediespe.php");
        ?>  
  </div>
  <div class="tab-pane fade" id="rem_credespe" role="tabpanel" aria-labelledby="rem_credespe-tab">
  <!-- CONTENIDO 3 -->    
        <?php
          include("rem_credespe.php");
        ?>  
  </div>
</div>


</div>

</body>
</html>