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


<title>HYR - Ingreso de Documento</title>

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
        <h3>Ingreso de Documento  <i class="fa fa-file-text" aria-hidden="true"></i></h3>
        </div>
    </div>
    <hr>


    <form id="formEmpDoc" name="formEmpDoc">
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
                          <button class="btn btn-outline-warning" id="atras_emp_doc">
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

     <div  id="form_doc">
     <form id="formIngDoc" name="formIngDoc" onsubmit="return false;">
                        <div class="col-12">

                          <input type="hidden" class="form-control" id="emp" name="emp" min="0" required readonly>
                            
                        </div>
                         <div class="row" >

                        <div class="col-4">
                              <div class="form-group" >
                                <label for="num_doc">Nro Documento:</label>
                                <input type="number" class="form-control" id="num_doc" name="num_doc" min="0" required>
                              </div>
                              
                              <div class="form-group" >
                                <label for="afecto" id="lblAfecto">Monto Afecto:</label>
                                <input type="text" class="form-control nro" id="afecto" name="afecto" min="0" onkeyup="calculoIva();" readonly required>
                              </div>

                             
                              
                              
                              
                                 
                        </div>
                        <div class="col-4">   
                              <div class="form-group">
                                <label for="tipo_doc">Tipo Documento:</label>
                                <select class="form-control chosen" id="tipo_doc" name="tipo_doc" required>
                                        <option value="" selected disabled>Seleccione tipo documento</option>
                                           <?php 
                                            $re = $fun->cargar_tipo_doc(1);   
                                            foreach($re as $row)      
                                                {
                                                  ?>
                                                  
                                                   <option value="<?php echo $row['tipo'] ?>"><?php echo $row['tipo_doc'] ?></option>
                                                      
                                                  <?php
                                                }    
                                            ?>  
                            </select>
                              </div>

                              <div class="form-group" >
                                <label for="exento" id="lblExento">Monto Exento:</label>
                                <input type="text" class="form-control nro" id="exento" name="exento" min="0" onkeyup="calculoTotal();" readonly required>

                                        <div class="input-group mb-3" id="impbol">
                                            <br>
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">
                                                <input type="checkbox" id="impbolcheck" name="impbolcheck" aria-label="Checkbox for following text input" onclick="calculoIva()">
                                              </div>
                                            </div>
                                            <input type="text" class="form-control" id="impboltext" name="impboltext" aria-label="Text input with checkbox" value="Retener 10%" readonly>
                                          </div>
                              </div>

                              
                              
                        </div>
                        <div class="col-4">   
                              
                        <div class="form-group">
                                <label for="mon_men">Monto Mensual Acordado:</label>
                                <input type="text" class="form-control" id="mon_men" name="mon_men" min="0" readonly>
                              </div>
                              
                        <div class="form-group" >
                                <label for="iva" id="lblIva">Monto IVA:</label>
                                <input type="text" class="form-control" id="iva" name="iva" min="0" readonly required>
                        </div>
                        
                      
                        </div>

                        </div>  
                        <div class="row" >
                          <div class="col-12">
                            <div class="form-group">
                                    <label for="total">Monto Total:</label>
                                    <input type="text" class="form-control" id="total" name="total" style="width: 500px" required readonly>
                                  </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col-4">
                              <div class="form-group">
                                    <label for="fec_emi">Fecha Emisión:</label>
                                    <input type="date" class="form-control" id="fec_emi" name="fec_emi"  required>
                                  </div>
                            </div>
                            <div class="col-4">
                              <div class="form-group">
                                    <label for="fec_ven">Fecha Vencimiento:</label>
                                    <input type="date" class="form-control" id="fec_ven" name="fec_ven" required>
                              </div>
                            </div>
                            <div class="col-4">
                              
                            </div>


                        </div>
                        <textarea class="form-control" rows="5" id="obs_doc" name="obs_doc" placeholder="Observación"></textarea><br><br>

                        <div class="container-login100-form-btn">
                     
                          <button class="btn btn-outline-success" type="submit">
                            Ingresar Documento
                          </button>
         
					</div>
     </form>

    </div>




</div>


</body>
</html>