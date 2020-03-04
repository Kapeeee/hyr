<table id="dtBasicExample1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
            <th class="">ID                             <i class="" aria-hidden="true"></i></th>
            <th class="">Nombre                           <i class="" aria-hidden="true"></i></th>
            <th class="">Rut                        <i class="" aria-hidden="true"></i></th>
            <th class="">Mail                           <i class="" aria-hidden="true"></i></th>
            <th class="">Fecha de Creación                      <i class="" aria-hidden="true"></i></th>
            <th class="">Usuario Creador                <i class="" aria-hidden="true"></i></th>
            <th class="">Sociedades                           <i class="" aria-hidden="true"></i></th>

        <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
      </tr>
    </thead>
    <tbody>
    <?php
      $re = $fun ->cargar_personas(2);
      foreach($re as $row)
        {  
      ?>
      <tr>
        <td><?php echo $row['id_per']?></td>  
        <td><?php echo $row['nom_per']?></td>
        <td><?php echo $row['rut_per']?></td>
        <td><?php echo $row['mail_per']?></td>
        <td><?php echo date('d-m-Y', strtotime($row['fec_cre_per']))?></td>
        <td><?php echo $row['nick_usu']?></td>
        <td><?php echo $row['sociedades']?></td>

      </tr>
    <?php } ?>  
    </tbody>
</table>