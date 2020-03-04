<table id="dtBasicExample1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
            <th class="">ID                             <i class="" aria-hidden="true"></i></th>
            <th class="">Razón Social                           <i class="" aria-hidden="true"></i></th>
            <th class="">Rut                        <i class="" aria-hidden="true"></i></th>
            <th class="">Provincia                             <i class="" aria-hidden="true"></i></th>
            <th class="">Comuna                             <i class="" aria-hidden="true"></i></th>
            <th class="">Dirección                          <i class="" aria-hidden="true"></i></th>
            <th class="">Mail                           <i class="" aria-hidden="true"></i></th>
            <th class="">Fecha de Creación                      <i class="" aria-hidden="true"></i></th>
            <th class="">Usuario Creador                <i class="" aria-hidden="true"></i></th>

        <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
      </tr>
    </thead>
    <tbody>
    <?php
      $re = $fun ->cargar_empresas(2);
      foreach($re as $row)
        {  
      ?>
      <tr>
        <td><?php echo $row['id_emp']?></td>  
        <td><?php echo $row['razon_social_emp']?></td>
        <td><?php echo $row['rut_emp']?></td>
        <td><?php echo $row['ciudad_emp']?></td>
        <td><?php echo $row['comuna_emp']?></td>
        <td><?php echo $row['dir_emp']?></td>
        <td><?php echo $row['mail_emp']?></td>
        <td><?php echo date('d-m-Y', strtotime($row['fec_cre_emp']))?></td>
        <td><?php echo $row['nick_usu']?></td>

      </tr>
    <?php } ?>  
    </tbody>
</table>
