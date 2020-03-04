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
?>

<script src="../js/funcionesF29.js"></script>
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
        <h3>Informe de Formulario 29  <i class="fa fa-list-alt" aria-hidden="true"></i></h3>
        </div>
    </div>
    <hr>
<!--     <form id="formInfF29" name="formInfF29">
    <div class="row">
      <div class="col-4">
                              <div class="form-group">
                                    <label for="fec_desde">Desde: <span class="badge badge-warning" data-toggle="popover" data-content="La busqueda se realizara por la fecha de emision de los documentos">?</span></label>
                                    <input type="date" class="form-control" id="fec_desde" name="fec_desde">
                              </div>
      </div>
      <div class="col-4">
                              <div class="form-group">
                                    <label for="fec_hasta">Hasta:</label>
                                    <input type="date" class="form-control" id="fec_hasta" name="fec_hasta">
                              </div>
      </div>
      <div class="col-4">
        <br>
        <input type="submit" class="btn btn-outline-info" name="buscar" id="buscar"  value="Buscar"> 
      </div>
    </div>
    <hr>
  </form> -->

    <div class="table-responsive">
    <table id="tabla_inf_f29" class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
    <thead >
      <tr>
                                        <th scope="col">Rut Empresa</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Cantidad de F29</th>
                                        <th scope="col">Relación Deb/Cred</th>
                                        <th scope="col">Débito</th>
                                        <th scope="col">Crédito</th>
                                        <th scope="col">Ivas Pagados</th>
                                        <th scope="col">Ivas Postergados</th>
                                        <th scope="col">Ivas No Pagados</th>
                                        <th scope="col">Detalle</th>
                                        
                                      </tr>
    </thead>
    <tbody>

    <?php
      $re = $fun ->inf_f29(0,0);

     foreach($re as $row)
        {

        
      ?>
    
    <tr>
                  <td><?php echo $row['rut_emp']?></td>
                  <td><?php echo $row['razon_social_emp']?></td>
                  <td><?php echo "<script>var string = numeral(". $row['cant_f29'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['rel'].").format('000,000,000,000.[00]');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['deb'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['cred'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['ivapag'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['ivapost'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['ivanop'].").format('000,000,000,000');document.write(string)</script>"?></td>
                   


                  <td><?php echo'<a  class="link-modal btn btn-outline-success" style="color: inherit;"  href="inf_f29get.php?emp='.$row['id_emp'].'"><i class="fa fa-plus-square" aria-hidden="true"></i></a>';?></td>

                  
                
                 
                

  
      </tr>

              </tr>

<?php } ?>  

    </tbody>
    <tfoot>
      <tr>
                                        <th scope="col">Rut Empresa</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Cantidad de F29</th>
                                        <th scope="col">Relación Deb/Cred</th>
                                        <th scope="col">Débito</th>
                                        <th scope="col">Crédito</th>
                                        <th scope="col">Ivas Pagados</th>
                                        <th scope="col">Ivas Postergados</th>
                                        <th scope="col">Ivas No Pagados</th>
                                        <th scope="col">Detalle</th>
                                       
      </tr>
    </tfoot> 
  </table>
</div>
        </div>
    </div>
    <hr>
    




</div>



<!-- <div class="modal fade" id="modal_det_inf_cob" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><span id="tit_det_inf_cob" name="tit_det_inf_cob"></span>Empresa: <span id="emp_det_inf_cob" name="emp_det_inf_cob"></span> Rut: <span id="Remp_det_inf_cob" name="Remp_det_inf_cob"></span><br>
        Promedio días de pago: <span id="prom_dias_pago" name="prom_dias_pago"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                </div>

                        <table id="tabla_det_inf"class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
                              <thead>
                                <tr>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Tipo Mov</th>
                                        <th scope="col">Facturado</th>
                                        <th scope="col">Pago</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Observacion</th>
                                        <th scope="col">Usuario</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                                <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Totales Generales</th>
                                        <th scope="col" id ='totalCargos'></th>
                                        <th scope="col" id ='totalPagos'></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                </tr>
                              </tfoot> 
                          </table>

 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div> -->


</body>
</html>