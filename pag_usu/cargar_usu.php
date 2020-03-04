
<table id="dtBasicExample1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="">ID               <i class="" aria-hidden="true"></i></th>
        <th class="">Nombre           <i class="" aria-hidden="true"></i></th>
        <th class="">Apellidos        <i class="" aria-hidden="true"></i></th>
        <th class="">Rut              <i class="" aria-hidden="true"></i></th>
        <th class="">Mail             <i class="" aria-hidden="true"></i></th>
        <th class="">Perfil           <i class="" aria-hidden="true"></i></th>
        <th class="">Cargo            <i class="" aria-hidden="true"></i></th>
        <th class="">Vigencia         <i class="" aria-hidden="true"></i></th>
        <th class="">Fecha de Creación<i class="" aria-hidden="true"></i></th>
        <th class="">Nick             <i class="" aria-hidden="true"></i></th>
        <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
      </tr>
    </thead>
    <tbody>
    <?php
      $re = $fun ->cargar_usuarios(1,1);
      foreach($re as $row)
        {  
      ?>
      <tr>
        <td><?php echo $row['id_usu']?></td>  
        <td><?php echo $row['nom_usu']?></td>
        <td><?php echo $row['apepat_usu']." ". $row['apemat_usu']?></td>
        <td><?php echo $row['rut_usu']?></td>
        <td><?php echo $row['mail_usu']?></td>
        <td><?php echo $row['id_perfil']?></td>
        <td><?php echo $row['cargo_usu']?></td>
        <td><?php echo $row['vig_usu']?></td>
        <td><?php echo date('d-m-Y', strtotime($row['fec_cre_usu'])) ?></td>
        <td><?php echo $row['nick_usu']?></td>
      </tr>
    <?php } ?>  
    </tbody>
</table>
