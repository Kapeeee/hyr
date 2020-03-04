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
  <h3>Listado de Formularios&nbsp;&nbsp;<i class="fa fa-list-alt" aria-hidden="true"></i></h3>
  <hr>
</div>

<table id="dtBasicExample1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
            <th class="">ID                             <i class="" aria-hidden="true"></i></th>
            <th class="">USUARIO                            <i class="" aria-hidden="true"></i></th>
            <th class="">FECHA                        <i class="" aria-hidden="true"></i></th>
            <th class="">EMPRESA                             <i class="" aria-hidden="true"></i></th>
            <th class="">RUT                             <i class="" aria-hidden="true"></i></th>
            <th class="">TOTAL                          <i class="" aria-hidden="true"></i></th>
            <th class="">EDITAR                          <i class="" aria-hidden="true"></i></th>
        <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
      </tr>
    </thead>
    <tbody>
    <?php
      $re = $fun ->cargar_formularios(0,0);
      foreach($re as $row)
        {  
      ?>
      <tr>
        <td><?php echo $row['id']?></td>  
        <td><?php echo $row['nick']?></td>
        <td><?php echo date('d-m-Y', strtotime($row['fecha']))?></td>
        <td><?php echo $row['empresa']?></td>
        <td><?php echo $row['rut']?></td>
        <td><?php echo $row['total']?></td>
        <td><a style="text-decoration:none"  href="ef29get.php?id_f29=<?php echo $row['id']?>" name="" value="">Gestionar</a></td>
      </tr>
    <?php } ?>  
    </tbody>
</table>


</div>

</body>
</html>