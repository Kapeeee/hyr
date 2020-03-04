<form id="formCrearUsu" onsubmit="return false;"  >
  <!-- Inicio Row -->
  <div class="row" >
      <div class="col-6">

              <div class="form-group">
                <label for="nom">Nombre:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="nombre" name="nombre"  maxlength="50" placeholder="Nombre" required>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="ape">Apellido Paterno:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="apellidop" name="apellidop"  maxlength="50" placeholder="Apellido" required>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="ape">Apellido Materno:</label>
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control" id="apellidom" name="apellidom"  maxlength="50" placeholder="Apellido" required>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="rut">Rut:</label>
                <input type="text"  class="form-control" id="rut" name="rut" maxlength="10" placeholder="xxxxxxxx-x" pattern="\d{3,8}-[\d|kK]{1}"  required>
              </div>
              <div class="form-group">
                <label for="mail">Mail:</label>
                <input type="text" class="form-control" id="mail" name="mail" maxlength="50"  placeholder="ejemplo@dominio.com" required>
              </div>
              
      </div>

    <div class="col-6">

          <div class="form-group">
            <label for="ape">Perfil de Sistema:</label>
            <select class="form-control" name="perfil" id="perfil" required>
              <option value="" selected disabled>Seleccione el perfil</option>
              <?php 
              $re = $fun->cargar_perfiles(1);   
              foreach($re as $row)      
              {
              ?>
              <option value="<?php echo $row['id_perfil'] ?>"><?php echo $row['perfil'] ?></option>

              <?php
              }    
              ?>       
            </select>
          </div>



          <div class="form-group">
            <label for="ape">Cargo:</label>
            <select class="form-control" name="cargo" id="cargo" required>
              <option value="" selected disabled>Seleccione el cargo</option>
              <?php 
              $re = $fun->cargar_cargos(1);   
              foreach($re as $row)      
              {
              ?>
              <option value="<?php echo $row['id_cargo'] ?>"><?php echo $row['cargo'] ?></option>

              <?php
              }    
              ?>       
            </select>
          </div>



          <div class="form-group">
             <label for="mail">Nickname:</label>
             <input type="text" class="form-control" id="nick" name="nick" maxlength="20"  required>
          </div>
          



    </div>

  </div>

      
  <div class="col-12 text-center">
    <input type="submit" class="btn btn-outline-success" id="btnAc" name="btnAc" value="Crear Usuario" >                                         
  </div>
  <!-- Fin Row -->  
</form>
 