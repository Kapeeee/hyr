<form id="formCrearEmp" onsubmit="return false;"  >
  <!-- Inicio Row -->
  <h5>Detalle Empresa:</h5>
  <br>
  <div class="row" >

      
      <div class="col-4"> 
              <div class="form-group">
                <label for="rsocial">Razón Social:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="rsocial" name="rsocial"  maxlength="150" placeholder="Razón Social Empresa" required>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                  <label for="cem">Contacto Empresarial:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="cem" name="cem"  maxlength="" placeholder="Contacto Empresarial" required>
                    </div>
                  </div>
              </div>

              <div class="form-group">
                <label for="mail">Email:</label>
                <input type="text" class="form-control" id="mail" name="mail" maxlength="100"  required>
              </div>
              

              
      </div>
      
    <div class="col-4">

          <div class="form-group">
              <label for="rut">Rut:</label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" id="rut" name="rut"  maxlength="10" placeholder="xxxxxxxx-x" required>
                </div>
              </div>
          </div>





          <div class="form-group">
             <label for="direc">Dirección:</label>
             <input type="text" class="form-control" id="direc" name="direc" maxlength="150"  required>
          </div>


          <div class="form-group">
            <br>
                <a id="btn_modal_giro" class="link-modal btn btn-outline-info" data-toggle="modal" data-target="#modal_giro">Giros</a>
                
              </div>
          



    </div>

        <div class="col-4">

              <div class="form-group">
                <label for="ciudad">Provincia:</label>
                            <select class="form-control" name="ciudad" id="ciudad" required onchange="mod_ciudad(this.value,'comuna')">
              <option value="" selected disabled>Seleccione la Provincia</option>
              <?php 
              $re = $fun->cargar_ciudades();   
              foreach($re as $row)      
              {
              ?>
              <option value="<?php echo $row['provincia_id'] ?>"><?php echo $row['provincia_nombre'] ?></option>

              <?php
              }    
              ?>       
            </select>
              </div>

              <div class="form-group">
              <label for="comuna">Comuna:</label>
              <select class="form-control" name="comuna" id="comuna" required>
              <option value="" selected disabled>Seleccione la Comuna</option>
            </select>
              </div>




        </div>
  </div>
  <hr>
  <h5>Detalle Financiero Empresa:</h5>
  <br>
  <div class="row" >

      
<div class="col-4"> 

        <div class="form-group">
          <label for="mme">Monto Mensual Empresa:</label>
          <input type="text"  class="form-control nro" id="mme" name="mme" maxlength="20" placeholder="Monto Mensual Empresa" required>
        </div>
        <div class="form-group">
          <label for="mre">Monto Renta Empresa:</label>
          <input type="text" class="form-control nro" id="mre" name="mre" maxlength="20"  placeholder="Monto Renta Empresa" required>
        </div>
        <div class="form-group">
          <label for="cse">Cons. Soc. Emp.:</label>
          <input type="date" class="form-control" id="cse" name="cse" required>
        </div>
        <div class="form-group">
          <label for="rte">Reg. Trib. Emp.:</label>
          <input type="text" class="form-control" id="rte" name="rte" maxlength="25"  placeholder="Reg. Trib. Emp." required>
        </div>


        
</div>

<div class="col-4">

    <div class="form-group">
        <label for="pce">Patente Comercial:</label>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" id="pce" name="pce"  maxlength="10" placeholder="Patente Comercial" required>
          </div>
        </div>
    </div>

    <div class="form-group">
        <label for="pce">Evaluacion Empresa:</label>
        <div class="row">
          <div class="col-12">
            <input type="text" class="form-control" id="evem" name="evem"  maxlength="10" placeholder="Evaluacion Empresa" required>
          </div>
        </div>
    </div>
    <div class="form-group">
      <label for="fia">Fecha Inicio Actividades:</label>
        <div class="row">
          <div class="col-12">
            <input type="date" class="form-control" id="fia" name="fia"  maxlength="150" placeholder="Fecha Inicio Actividades" required>
          </div>
        </div>
      </div>

      <div class="form-group">
          <label for="rae">Rta. At. Emp.:</label>
          <div class="row">
            <div class="col-12">
              <input type="number" class="form-control" id="rae" name="rae"  maxlength="10" placeholder="Rta. At. Emp." required>
            </div>
          </div>
      </div>  
    
    

</div>

  <div class="col-4">

      <div class="form-group">
        <label for="csii">Clave SII:</label>
        <input type="text" class="form-control" id="csii" name="csii" maxlength="45"  placeholder="Clave SII" required>
      </div>
      <div class="form-group">
       <label for="cprev">Clave Previred:</label>
       <input type="text" class="form-control" id="cprev" name="cprev" maxlength="45" placeholder="Clave Previred" required>
       </div>

       <div class="form-group">
        <label for="fre">Fac. Rea. Emp.:</label>
        <div class="row">
          <div class="col-12">
            <input type="number" class="form-control" id="fre" name="fre" placeholder="Fac. Rea. Emp.">
          </div>
        </div>
        </div> 

         

  </div>
</div>
    <br>  
  <div class="col-12 text-center">
    <input type="submit" class="btn btn-outline-success" id="btnAc" name="btnAc" value="Crear Empresa" >                                         
  </div>
  <!-- Fin Row --> 
   </form> 

<!-- Modal giros --> 
  <div class="modal fade" id="modal_giro" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form id="formIngPago" name="formIngPago" onsubmit="return false;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Giros de empresa <span id="cre_emp_giro" name="cre_emp_giro"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <input type="text" class="form-control" id="giro_cre" name="giro_cre" placeholder="Nuevo Giro" required>
                              </div>
                  </div>
                  <div class="col-6">
                              <button id="btn_cre_giro" name="btn_cre_giro"  class="btn btn-outline-success" id="guardar_giro" id="name_giro">Agregar Giro</button>
                  </div>
                </div>
                <div class="row">
                  <table id="tabla_giros_emp_cre" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                      <th>Giro</th>
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
