<?php 
  include("../includes/validaSesion.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Inicio</title>

<?php
  include("../includes/recursosExternos.php");
  include("../includes/infoLog.php");
  include("../includes/menu.php");
?>

<script  src="../js/funcionesInicio.js"></script>
</head>

<body>
<div id="loading" style="display: none;">
        <center><img src="../recursos/img/load.gif"></center>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-12 text-center">
        
        <h3><i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp;Resúmen General</h3>
        <hr>
        </div>
        
                <?php if($_SESSION['perfil']==1){echo'<a id="btn_modal_ult_doc" class="link-modal btn btn-outline-success" data-target="#modal_ult_doc" data-toggle="modal" >Infome Ultimo Doc. Emitido</a>';}?>

        
        <div class="col-12 ">
        <br>
        <h5>Documentos de Pago Vencidos <i class="fa fa-clock-o" aria-hidden="true"></i></i></h5>
    <div class="table-responsive">
    <table id="doc_ven" class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
    <thead >
      <tr>
                                        <th scope="col" style="display: none">Id_documento</th>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col" style="display: none">afecto_num</th>
                                        <th scope="col" style="display: none">exento_num</th>
                                        <th scope="col" style="display: none">iva_num</th>
                                        <th scope="col" style="display: none">total_num</th>
                                        <th scope="col">Afecto</th>
                                        <th scope="col">Exento</th>
                                        <th scope="col">IVA</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Fecha Vencimiento</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Observación</th>
                                        <th scope="col">Monto Pagado</th>
                                        <th scope="col">Notificar</th>
                                      </tr>
    </thead>
    <tbody>

    <?php
      $re = $fun ->cargar_docs_emp(0,1);

     foreach($re as $row)
        {

        
      ?>
    
    <tr>
                  <td style="display: none"><?php echo $row['id_doc']?></td>
                  <td><?php echo "N° ".$row['nro_doc']?></td>
                  <td><?php echo $row['razon_social_emp']?></td>
                  <td><?php echo $row['est']?></td>
                  <td style="display: none"><?php echo $row['monto_afecto_doc']?></td>
                  <td style="display: none"><?php echo $row['monto_exento_doc']?></td>
                  <td style="display: none"><?php echo $row['monto_iva_doc']?></td>
                  <td style="display: none"><?php echo $row['monto_total_doc']?></td>

                  <td><?php echo "<script>var string = numeral(". $row['monto_afecto_doc'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['monto_exento_doc'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['monto_iva_doc'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['monto_total_doc'].").format('$000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo date('d-m-Y', strtotime($row['fec_emi_doc'])) ?></td>
                  <td><?php echo date('d-m-Y', strtotime($row['fec_ven_doc'])) ?></td>
                  <td><?php echo $row['tipo_doc']?></td>
                  <td><?php echo $row['obs_doc']?></td>
                  <td><?php echo $row['suma']?></td>

                  <td><?php //if($_SESSION['perfil']==1){ --PVICENCIO  se quita la restriccion de perfil a pedido de Raul 26/12/2019
                    echo'<button id="not_doc" name="not_doc" onclick="not_doc('.$row["id_doc"].')" class="btn btn-warning" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>';
                  //}
                  ?></td>
                 
                

  
      </tr>

              </tr>

<?php } ?>  

    </tbody>
    <tfoot>
      <tr>
                                        <th scope="col" style="display: none">Id_documento</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col" style="display: none">afecto_num</th>
                                        <th scope="col" style="display: none">exento_num</th>
                                        <th scope="col" style="display: none">iva_num</th>
                                        <th scope="col" style="display: none">total_num</th>
                                        <th scope="col"> Totales Generales</th>
                                        <th scope="col" id ='totalAfecto'></th>
                                        <th scope="col" id ='totalExento'></th>
                                        <th scope="col" id ='totalIva'></th>
                                        <th scope="col" id ='totalTotal'></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col" id ='totalSumaPago'></th>
                                        <th scope="col"></th>
      </tr>
    </tfoot> 
  </table>
</div>
        </div>
    </div>
    <hr>
    




</div>


<div class="modal fade" id="modal_ult_doc" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" id="modal_ult_doc_content" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informe de ultimo documento emitido por empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                </div>
                      <div class="table-responsive">
                        <table id="tabla_ult_doc"class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
                              <thead>
                                <tr>
                                        <th scope="col">Rut Emp</th>
                                        <th scope="col">Razon Social</th>
                                        <th scope="col">Clave SII</th>
                                        <th scope="col">Afecto</th>
                                        <th scope="col">Exento</th>
                                        <th scope="col">Iva o Retención</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Usuario</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                                <tr>
                                        <th scope="col">Rut Emp</th>
                                        <th scope="col">Razon Social</th>
                                        <th scope="col">Clave SII</th>
                                        <th scope="col">Afecto</th>
                                        <th scope="col">Exento</th>
                                        <th scope="col">Iva o Retención</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Usuario</th>
                                </tr>
                              </tfoot>
                          </table>
                        </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>