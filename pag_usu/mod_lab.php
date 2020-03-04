<?php 
  include("../includes/validaSesion.php")
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Modulo Laboral</title>
<!--Quitar al pasar a prod, no guarda cache-->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

<?php
  include("../includes/recursosExternos.php");
?>

<script src="../js/funcionesModLab.js"></script>
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
        <h3>Modulo Laboral  <i class="fa fa-black-tie" aria-hidden="true"></i></h3>
        </div>
    </div>
    <hr>
    <div class="table-responsive">
    <table id="tabla_mod_lab" class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
    <thead >
                                      <tr>
                                        <th style="display: none" scope="col">id Empresa</th>
                                        <th scope="col">Rut Empresa</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Cotizaciones</th>
                                        <th scope="col">Nro. Trabajadores</th>
                                        <th scope="col">Cargas Laborales</th>
                                        <th scope="col">Ultima fecha de actualización</th>
                                        <th scope="col">Tasa de Accidentabilidad</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">Actualizar</th>
                                      </tr>
    </thead>
    <tbody>

    <?php
      $re = $fun ->inf_mod_lab();

     foreach($re as $row)
        {

        
      ?>
    
    <tr>          
                  <td style="display: none"><?php echo $row['id_emp']?></td>
                  <td><?php echo $row['rut_emp']?></td>
                  <td><?php echo $row['razon_social_emp']?></td>
                  <td><?php echo "<script>var string = numeral(". $row['cot'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo "<script>var string = numeral(". $row['trab'].").format('000,000,000,000');document.write(string)</script>"?></td>
                  <td><?php echo $row['cargas']?></td>
                  <td><?php echo date('d-m-Y', strtotime($row['fec']))?></td>
                  <td><?php echo $row['tasa_acc']?></td>
                  <td><?php echo $row['periodo']?></td>

                  <td><?php echo'<a id="btn_modal_hist_mod_lab" class="link-modal btn btn-outline-success" data-id="'.$row['id_emp'].'" data-rut="'.$row['rut_emp'].'" data-emp="'.$row['razon_social_emp'].'" data-fec="'.date('d-m-Y', strtotime($row['fec'])).'"  data-toggle="modal" ><i class="fa fa-plus-square" aria-hidden="true"></i></a>';?></td>
                
                 
                

  
      </tr>

              </tr>

<?php } ?>  

    </tbody>
    <tfoot>
                                      <tr>
                                        <th style="display: none" scope="col">id Empresa</th>
                                        <th scope="col">Rut Empresa</th>
                                        <th scope="col">Empresa</th>
                                        <th scope="col">Cotizaciones</th>
                                        <th scope="col">Nro. Trabajadores</th>
                                        <th scope="col">Cargas Laborales</th>
                                        <th scope="col">Ultima fecha de actualización</th>
                                        <th scope="col">Tasa de Accidentabilidad</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">Actualizar</th>
                                      </tr>
    </tfoot> 
  </table>
</div>
        </div>
    </div>
    <hr>
    




</div>



<div class="modal fade" id="modal_hist_mod_lab" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></span>Empresa: <span id="emp_hist_mod_lab" name="emp_hist_mod_lab"></span> Rut: <span id="Remp_hist_mod_lab" name="Remp_hist_mod_lab"></span><br>
        Fecha Ultima Actualización: <span id="fec_ult_act" name="fec_ult_act"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     <form id="formReg" name="formReg" onsubmit="return false;" autocomplete="off">
      <input type="hidden" class="form-control" id="emp" name="emp" min="0" required readonly>
        <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="cot_lab">Cotizaciones:</label>
                                    <input type="text" class="form-control nro" id="cot_lab" name="cot_lab" min="0" required>
                              </div>
                  </div>
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="nro_trab">Nro Trabajadores:</label>
                                    <input type="text" class="form-control nro" id="nro_trab" name="nro_trab" min="0" required>
                              </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <br>
                              <div class="form-group">
                                                <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="checkbox" id="cargas_lab" name="cargas_lab" aria-label="Checkbox for following text input">
                                              </div>
                                            </div>
                                            <input type="text" class="form-control"  aria-label="Text input with checkbox" value="Cargas Laborales" readonly>
                                          </div>
                              </div>
                  </div>
                  <div class="col-6">
                              <div class="form-group">
                                  <div class="form-group">
                                    <label for="fecha_act">Fecha de Actualización:</label>
                                    <input type="date" class="form-control" id="fec_act" name="fec_act"  required>
                              </div>
                              </div>
                  </div>
                </div>
                <div class="row" >
                            
                            <div class="col-6">
                              <div class="form-group">
                                    <label for="tasa_acc">Tasa Accidentabilidad:</label>
                                    <input type="number" class="form-control" id="tasa_acc" name="tasa_acc" min="0" step="any" required>
                              </div>
                              </div>
                            <div class="col-6">
                              <div class="form-group">
                                    <label for="tasa">Periodo:</label>
                                    <input type="number" class="form-control" id="periodo" name="periodo"  maxlength="6" minlength="6" placeholder="MMAAAA" required>
                              </div>
                            </div>

                        </div>
                        <div class="row" >
                            <div class="col">
                              <div class="form-group">
                                    <button class="btn btn-outline-success" type="submit">
                                      Registrar
                                    </button>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                    
                              </div>
                            </div>
                        </div>
        </div>
        </form>
 

                        <table id="tabla_hist_mod_lab"class="table table-striped table-bordered" cellspacing="0" style="font-size: 0.8rem;" width="100%">
                              <thead>
                                <tr>
                                        <th scope="col">Cotizaciones</th>
                                        <th scope="col">Nro. Trabajadores</th>
                                        <th scope="col">Cargas Laborales</th>
                                        <th scope="col">Ultima fecha de actualización</th>
                                        <th scope="col">Tasa de Accidentabilidad</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">Usuario</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                              <tfoot>
                                <tr>    
                                        <th scope="col">Cotizaciones</th>
                                        <th scope="col">Nro. Trabajadores</th>
                                        <th scope="col">Cargas Laborales</th>
                                        <th scope="col">Ultima fecha de actualización</th>
                                        <th scope="col">Tasa de Accidentabilidad</th>
                                        <th scope="col">Periodo</th>
                                        <th scope="col">Usuario</th>
                                </tr>
                              </tfoot> 
                          </table>

 
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>