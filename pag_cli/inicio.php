<?php 
  include("../includes/validaSesionCli.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Inicio</title>

<?php
  include("../includes/recursosExternos.php");
  include("../includes/infoLog.php");
  include("../includes/menuCli.php");
?>

<script  src="../js/funcionesInicioCli.js"></script>
</head>

<body>
<div id="loading" style="display: none;">
        <center><img src="../recursos/img/load.gif"></center>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-12 text-center">
        
        <h3 class="titulodiv">
          <i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;Resúmen General</h3>
        <hr>
        </div>

        
        <div class="col-12 ">
        <br>
    <div class="table-responsive">
    <table id="main_cli" class="table table-striped table-bordered" cellspacing="0" >
    <thead >
      <tr>
                                        
                                        <th class="topheaders" style="vertical-align: top;" scope="col">Rut</th>
                                        <th class="topheaders" style="vertical-align: top;" scope="col">Empresa</th>
                                        <th class="topheaders" style="vertical-align: top;" scope="col">Doc. Pendientes de Pago</th>
                                        <th class="topheaders" style="vertical-align: top;" scope="col">F29 Ingresados</th>
                                        <th class="topheaders" style="vertical-align: top;" scope="col">Ver Más</th>
                                      </tr>
    </thead>
    <tbody>

    <?php
      $re = $fun ->cargar_main_cli($id, $perfil);

     foreach($re as $row)
        {

        
      ?>
    
    <tr>
                  <td><?php echo $row['rut_emp']?></td>
                  <td><?php echo $row['razon_social_emp']?></td>
                  <td><?php echo "<script>var string = numeral(". $row['cant_docs_pagop'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['cant_f29'].").format('000,000,000,000');document.write(string)</script>"?></td>

                  <td><?php echo'<a href="det_emp.php?id='.$row['id_emp'].'&emp='.$row['razon_social_emp'].'" id="det_cli" name="det_cli" class="btn btn-success" ><i class="fa fa-plus-square" aria-hidden="true"></i></a>';?></td>

                
                 
                

  
      </tr>

              </tr>

<?php } ?>  

    </tbody> 
  </table>
</div>
        </div>
    </div>
    <hr>
    




</div>

</body>
</html>