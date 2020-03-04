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
</ul>

<hr>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="lista" role="tabpanel" aria-labelledby="lista-tab">
        <!-- CONTENIDO 1 -->
        <?php
          include("f29_h1.php");
        ?>
    </div>
  <div class="tab-pane fade" id="agrega" role="tabpanel" aria-labelledby="agrega-tab">
  <!-- CONTENIDO 2 -->
        <!-- CONTENIDO 1 -->
        <?php
          include("f29_h2.php");
        ?>       
  </div>
 </div>


</div>

</body>
</html>