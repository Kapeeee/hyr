<form id="formModPer" onsubmit="return false;"  >
  <!-- Inicio Row -->
    <div class="col-12">
      <select class="form-control" id="per" name="per" style="width: 500px" onchange="mod(this.value)">
          <option value="" selected disabled>Seleccione Persona</option>
                     <?php 
                      $re = $fun->cargar_personas(3);   
                      foreach($re as $row)      
                          {
                            ?>
                            
                             <option value="<?php echo $row['id_per'] ?>"><?php echo $row['nom_per']?></option>
                                
                            <?php
                          }    
                      ?>  
      </select><hr>
    </div>

  <div class="row" >

      
      <div class="col-6"> 
              <div class="form-group">
                <label for="nom_per">Nombre:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="mnom_per" name="mnom_per"  maxlength="150" placeholder="Nombre Persona" required>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                <label for="mail_per">Email:</label>
                <input type="text" class="form-control" id="mmail_per" name="mmail_per" maxlength="100"  required>
              </div>

              <div class="form-group">
                <label for="csii">Clave SII:</label>
                <input type="text" class="form-control" id="mcsii" name="mcsii" maxlength="45"  placeholder="Clave SII" required>
              </div>
              

              
      </div>
      
    <div class="col-6">

          <div class="form-group">
              <label for="rut">Rut:</label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" id="mrut_per" name="mrut_per" pattern="\d{3,8}-[\d|kK]{1}"  maxlength="10" placeholder="xxxxxxxx-x" readonly required>
                </div> 
              </div>
          </div>





          <div class="form-group">
             <label for="cprev">Clave Previred:</label>
             <input type="text" class="form-control" id="mcprev" name="mcprev" maxlength="45" placeholder="Clave Previred" required>
          </div>


          <div class="form-group">
            <br>
                <a id="btn_modal_soc" class="link-modal btn btn-outline-info" data-toggle="modal" data-target="#modal_mod_soc">Agregar Sociedad</a>
                
              </div>
          



    </div>

    <div class="col-6">

          
           <label for="vigcheck"> Vigencia:</label>
        <div class="input-group mb-3">
          <br>
        
          <div class="input-group-prepend">
            <div class="input-group-text">
              <input type="checkbox" id="vigcheck" name="vigcheck" aria-label="Checkbox for following text input">
            </div>
          </div>
          <input type="text" class="form-control" id="vigtext" name="vigtext" aria-label="Text input with checkbox" placeholder="Vigencia Actual de la Persona" readonly>
        </div>



    </div>


  </div>
    <br>  
  <div class="col-12 text-center">
    <input type="submit" class="btn btn-outline-success" id="btn_mod_per" name="btn_mod_per" value="Modificar Persona" >                                   
  </div>




  <!-- Fin Row -->  
</form>



<!-- Modal Mod Sociedades --> 
  <div class="modal fade" id="modal_mod_soc" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form id="formModSoc" name="formModSoc" onsubmit="return false;">
       <input type="hidden" class="form-control" id="mod_soc_per" name="mod_soc_per" required>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Empresas Ascociadas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                   <label for="porc_soc">Seleccione Empresa:</label>
                   <select class="form-control" id="emp" name="emp">
                        <option value="" selected disabled>Seleccione Empresa</option>
                                   <?php 
                                    $re = $fun->cargar_empresas(1);   
                                    foreach($re as $row)      
                                        {
                                          ?>
                                          
                                           <option value="<?php echo $row['id_emp'] ?>"><?php echo $row['razon_social_emp']?></option>
                                              
                                          <?php
                                        }    
                                    ?>  
                    </select>
                  </div>
                  <div class="col-6">
                              <label for="porc_soc">Porcentaje Sociedad:</label>
                              <input type="number" class="form-control" id="porc_soc" name="porc_soc" min="0" max="100" step="any" required>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-6">
                   <label for="mon_soc">Monto Participación:</label>
                              <input type="text" class="form-control nro" id="mon_soc" name="mon_soc" min="0" required>
                    </select>
                  </div>
                  <div class="col-6">
                    <br>
                              <button type="button" id="btn_mod_soc" name="btn_mod_soc"  class="btn btn-outline-success" >Agregar Sociedad</button>
                  </div>
                </div>
                <br>
                <div class="row">
                  <table id="tabla_mod_soc_per" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                      <th>Persona</th>
                                      <th>Empresa</th>
                                      <th>Porcentaje %</th>
                                      <th>Monto $</th>
                                      <th>Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <div class="container-login100-form-btn">
        </div>
      </div>
    </div>
   
  </div>
</div>
</form>