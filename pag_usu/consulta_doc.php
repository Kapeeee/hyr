<?php 
  include("../includes/validaSesion.php")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!--Quitar al pasar a prod, no guarda cache-->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

<title>HYR - Consulta Documento</title>

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
        <h3>Consulta de Documento  <i class="fa fa-search" aria-hidden="true"></i></h3>
        </div>
    </div>
    <hr>


                        
    <form id="formEmpConsulta" name="formEmpConsulta">
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
                          <button class="btn btn-outline-warning" id="atras_emp_consulta">
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
                    <div  id="form_consulta">
                        </div>
                         <div class="row" id="div_tabla_doc" name="div_tabla_doc">
                            <div class="col-12">
                              <div class="table-responsive">
                                 <table class="table table-striped table-bordered" id="tabla_docs" name="tabla_docs">
                                    <thead>
                                      <tr>
                                        <th scope="col" style="display: none">Id_documento</th>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Afecto</th>
                                        <th scope="col">Exento</th>
                                        <th scope="col">IVA</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Fecha Vencimiento</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Observación</th>
                                        <th scope="col">Ver</th>
                                        <th scope="col">Anular</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>  



                  
    </div>


<div class="modal fade" id="modal_consulta" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form id="formIngPago" name="formIngPago" onsubmit="return false;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><span id="tipo_modal" name="tipo_modal"></span> Nro: <span id="nro_doc" name="nro_doc"></span></h5>
        <input type="hidden" id="id_doc" name="id_doc" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="fec_ven">Fecha Vencimiento:</label>
                                    <input type="date" class="form-control" id="fec_ven" name="fec_ven" readonly required>
                              </div>
                  </div>
                  <div class="col-6">
                              <br>
                              <div class="alert alert-danger" role="alert" id="ven_doc" name="ven_doc">
                                    Documento Vencido
                              </div>
                              <br>
                              
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                    <label for="afecto" id="lblAfecto">Monto Afecto:</label>
                                    <input type="text" class="form-control" id="monto_afecto" name="monto_afecto"  readonly required>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="exento" id="lblExento">Monto Exento:</label>
                                <input type="text" class="form-control" id="monto_exento" name="monto_exento"  readonly required>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="iva" id="lblIva">Monto IVA:</label>
                                <input type="text" class="form-control" id="monto_iva" name="monto_iva"  readonly required>
                        </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                                    <label for="total">Monto Total:</label>
                                    <input type="text" class="form-control" id="monto_total" name="monto_total" required readonly>
                                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="pagado">Monto Pagado:</label>
                                <input type="text" class="form-control" id="monto_pagado" name="monto_pagado" readonly required>
                        </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                                    <label for="est">Estado Documento:</label>
                                    <input type="text" class="form-control" id="est_doc" name="est_doc" required readonly>
                                  </div>
                  </div>
                </div>

                        <table id="tabla_mov_doc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                      <th class="">Fecha Movimiento<i class="" aria-hidden="true"></i></th>
                                      <th class="">Monto<i class="" aria-hidden="true"></i></th>
                                      <th class="">Usuario<i class="" aria-hidden="true"></i></th>
                                      <th class="">Observacion<i class="" aria-hidden="true"></i></th>
                                      <th class="">Estado Documento<i class="" aria-hidden="true"></i></th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    </form>
  </div>
</div>





    



</div>


</body>
</html>