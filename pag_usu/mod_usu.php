    <form id="formModUsu" onsubmit="return false;"  >
    <div class="col-12">
      <select class="form-control" id="usu" name="usu" style="width: 500px" onchange="mod(this.value)">
          <option value="" selected disabled>Seleccione Usuario</option>
                     <?php 
                      $re = $fun->cargar_usuarios(1,1);   
                      foreach($re as $row)      
                          {
                            ?>
                            
                             <option value="<?php echo $row['id_usu'] ?>"><?php echo $row['nom_usu']." ".$row['apepat_usu']." ".$row["apemat_usu"] ?></option>
                                
                            <?php
                          }    
                      ?>  
      </select><hr>
    </div>



  <div class="row" >
  <div class="col-6">
          <div class="form-group">
            <label for="nom">Nombre:</label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" id="mod_nombre" name="mod_nombre"  maxlength="25" placeholder="Nombre" required>
                </div>
             </div>
          </div>
          <div class="form-group">
              <label for="ape">Apellido Paterno:</label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" id="mod_apellidop" name="mod_apellidop"  maxlength="25" placeholder="Apellido" required>
                </div>
             </div>
          </div>
          <div class="form-group">
              <label for="ape">Apellido Materno:</label>
              <div class="row">
                <div class="col-12">
                  <input type="text" class="form-control" id="mod_apellidom" name="mod_apellidom"  maxlength="25" placeholder="Apellido" required>
                </div>
             </div>
          </div>
          <div class="form-group">
             <label for="rut">Rut:</label>
             <input type="text"  class="form-control" id="mod_rut" name="mod_rut" maxlength="10" placeholder="xxxxxxxx-x"  readonly>
          </div>
          <div class="form-group">
             <label for="mail">Mail:</label>
             <input type="text" class="form-control" id="mod_mail" name="mod_mail" maxlength="50"  required>
          </div>           
  </div>
  <div class="col-6">
        <div class="form-group">
          <label for="ape">Perfil de Sistema:</label>
             <select class="form-control" name="mod_perfil" id="mod_perfil" required>
                          <option value="" selected disabled>Seleccione el perfil</option>
                                       <?php 
                                        $re = $fun->cargar_perfiles(1);   
                                        foreach($re as $row)      
                                            {
                                              ?>
                                               <option value="<?php echo $row['id_perfil']; ?>"><?php echo $row['perfil']; ?></option>
                                              <?php
                                            }
                                        ?></select>
          </div>
          <div class="form-group">
            <label for="ape">Cargo:</label>
               <select class="form-control" name="mod_cargo" id="mod_cargo" required>
                            <option value="" selected disabled>Seleccione el cargo</option>
                                         <?php 
                                          $re = $fun->cargar_cargos(1);   
                                          foreach($re as $row)      
                                              {
                                                ?>
                                                 <option value="<?php echo $row['id_cargo'] ?>"><?php echo $row['cargo'] ?></option>
                                                    <?php
                                              }
                                          ?></select>
            </div>
            <div class="form-group">
             <label for="mail">Nickname:</label>
             <input type="text" class="form-control" id="mod_nick" name="mod_nick" maxlength="20"  readonly>
          </div>             
          <div class="form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="mod_vig" id="mod_vig"> Vigencia</label>
          </div>
          
          </form>
  </div>
  <div class="col-12 text-center">
  <input type="submit" class="btn btn-outline-success" id="btnAc" name="btnAc" value="Modificar Usuario" >                                         
    </div>
  </div>


