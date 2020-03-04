<?php 
  include("../includes/validaSesion.php")
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Empresas</title>
<!--Quitar al pasar a prod, no guarda cache-->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

<?php
  include("../includes/recursosExternos.php");
?>

<script src="../js/funcionesEmp.js"></script>

</head>

<body>


<?php
  include("../includes/infoLog.php");
  include("../includes/menu.php");
?>


<div class="container" id="main">

<div class="col-12 text-center">
  <h3>Empresas Actuales&nbsp;&nbsp;<i class="fa fa-building" aria-hidden="true"></i></h3>
  <hr>
</div>

<ul class="nav nav-pills" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="lista-tab" data-toggle="tab" href="#lista" role="tab" aria-controls="lista"
      aria-selected="true"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;Listado</a>
  </li>
  <?php if($_SESSION['perfil']==1){
  echo '<li class="nav-item">
    <a class="nav-link" id="agrega-tab" data-toggle="tab" href="#agrega" role="tab" aria-controls="agrega"
      aria-selected="false"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Agregar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="modifica-tab" data-toggle="tab" href="#modifica" role="tab" aria-controls="modifica"
      aria-selected="false"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Modificar</a>
  </li>';}?>       
</ul>

<hr>
<div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="lista" role="tabpanel" aria-labelledby="lista-tab">
        <!-- CONTENIDO 1 -->
        <?php
          include("cargar_emp.php");
        ?>
    </div>
  <div class="tab-pane fade" id="agrega" role="tabpanel" aria-labelledby="agrega-tab">
  <!-- CONTENIDO 2 -->
        <!-- CONTENIDO 1 -->
        <?php if($_SESSION['perfil']==1){
          include("crear_emp.php");}
        ?>       
  </div>
  <div class="tab-pane fade" id="modifica" role="tabpanel" aria-labelledby="modifica-tab">
  <!-- CONTENIDO 3 -->    
        <?php if($_SESSION['perfil']==1){
          include("mod_emp.php");}
        ?>    
  </div>
</div>


</div>

</body>
</html>