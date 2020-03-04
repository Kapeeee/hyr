<?php 
  include("../includes/validaSesion.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>HYR - Ingreso de Pago</title>

<?php
  include("../includes/recursosExternos.php");

?>
<script id="funCob" src="../js/funcionesCob.js?id=<?php echo $_SESSION['perfil']; ?>"></script>
</head>
<?php

  include("../includes/infoLog.php");
  include("../includes/menu.php");
?>



<body>
<div id="loading" style="display: none;">
  <center><img src="../recursos/img/load.gif"></center>
</div>
<div class="container" id="main">
    <div class="row">
        <div class="col-12">
        <h3>Ingreso de Pago  <i class="fa fa-money" aria-hidden="true"></i></h3>
        </div>
    </div>
    <hr>

    <div id="loading" style="display: none;">
        <center><img src="../recursos/img/load.gif"></center>
    </div>

                        
    <form id="formEmpPago" name="formEmpPago">
    <div class="row" >

                        <div class="col-4">
                              <div class="form-group" >
                                <label for="rut_emp">Rut Empresa:</label>
                                <input type="text" class="form-control" id="rut_emp" name="rut_emp" placeholder="Ingrese Rut: '12345678-9'" pattern="\d{3,8}-[\d|kK]{1}" required>
                              </div>
                                      
                        </div>
                         <div class="col-2">
                          <br>
                              <button class="btn btn-outline-success" id="val_emp" type="submit">
                            <i class="fa fa-check-square"></i>
                          </button>
                          <button class="btn btn-outline-warning" id="atras_emp_pago">
                            <i class="fa fa-arrow-circle-left"></i>
                          </button>
                                      
                        </div>
                        <div class="col-6">
                              <div class="form-group" >
                                <label for="nom_emp">Nombre Empresa:</label>
                                <input type="text" class="form-control" id="nom_emp" name="nom_emp" required readonly>
                              </div>
                                      
                        </div>
      </div>
      </form>
<hr>
                    <div  id="form_pago">
                        </div>
                         <div class="row" id="div_tabla_doc" name="div_tabla_doc">
                            <div class="col-12">
                              <div class="table-responsive">
                                 <table class="table table-sm" id="tabla_docs" name="tabla_docs">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col" style="display: none">Id_documento</th>
                                        <th scope="col">Nro Documento</th>
                                        <th scope="col">Afecto</th>
                                        <th scope="col">Exento</th>
                                        <th scope="col">IVA</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Fecha Vencimiento</th>
                                        <th scope="col">Tipo Documento</th>
                                        <th scope="col">Observación</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>  



                  
    </div>


<div class="modal fade" id="modal_pago" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form id="formIngPago" name="formIngPago" onsubmit="return false;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pago Documento Nro: <span id="nro_doc" name="nro_doc"></span></h5>
        <input type="hidden" id="id_doc" name="id_doc" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="monto_total">Monto Total:</label>
                                    <input type="text" class="form-control" id="monto_total" name="monto_total" readonly>
                              </div>
                  </div>
                  <div class="col-6">
                              <br>
                              <div class="alert alert-danger" role="alert" id="ven_doc" name="ven_doc">
                                    Documento Vencido
                              </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="est_doc">Estado Documento:</label>
                                    <input type="text" class="form-control" id="est_doc" name="est_doc" readonly>
                              </div>
                  </div>
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="monto_pagado">Monto pagado:</label>
                                    <input type="text" class="form-control" id="monto_pagado" name="monto_pagado" readonly>
                              </div>
                  </div>
                </div>
                <div class="row" >
                            
                            <div class="col">
                              <div class="form-group">
                                    <label for="forma_pago">Forma de Pago:</label>
                                      <select class="form-control chosen" id="forma_pago" name="forma_pago" required>
                                        <option value="" selected disabled>Seleccione Forma de Pago</option>
                                           <?php 
                                            $re = $fun->cargar_forma_pago(1);   
                                            foreach($re as $row)      
                                                {
                                                  ?>
                                                  
                                                   <option value="<?php echo $row['id_formapago'] ?>"><?php echo $row['desc_formapago'] ?></option>
                                                      
                                                  <?php
                                                }    
                                            ?>  
                              </select>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                    <label for="monto_mov">Monto de Pago:</label>
                                    <input type="text" class="form-control nro" id="monto_pago" name="monto_pago"  required>
                              </div>
                            </div>


                        </div>
                        <div class="row" >
                            <div class="col">
                              <div class="form-group">
                                    <label for="fecha_pago">Fecha de Pago:</label>
                                    <input type="date" class="form-control" id="fec_pago" name="fec_pago"  required>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                    
                              </div>
                            </div>
                        </div>

                        <textarea class="form-control" rows="5" id="obs_pago" name="obs_pago" placeholder="Observación"></textarea><br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <div class="container-login100-form-btn">
                <button class="btn btn-outline-success" type="submit">Guardar Pago</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>





    



</div>


</body>
</html>