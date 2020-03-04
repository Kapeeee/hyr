<div class="row" id="div_tabla_docs" name="div_tabla_docs">
                            <div class="col-12">
                              <div class="table-responsive">
                                 <table class="table table-striped table-bordered" id="tabla_docs_cli" name="tabla_docs_cli">
                                    <thead>
                                      <tr>
                                        <th scope="col" style="display: none">Id_documento</th>
                                        <th scope="col">Nro Doc</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Fecha Emisión</th>
                                        <th scope="col">Fecha Vencimiento</th>
                                        <th scope="col">Tipo Doc</th>
                                        <th scope="col">Observación</th>
                                        <th scope="col">Ver</th>
                                      </tr>
                                    </thead>
                                    <tbody>


                        <?php

                                    $val_cli = $fun->validar_cliente($id_emp,$id,$perfil);


                                    if ($val_cli['val'] == 1) {




                                        $re = $fun->cargar_docs_emp($id_emp,2);

                                                   foreach($re as $row)
                                                      {
                                                        echo ' <tr>
                                                                <td style="display: none">'. $row['id_doc'].'</td>
                                                                <td>'.$row['nro_doc'].'</td>
                                                                <td>'.$row['est'].'</td>
                                                                <td><script>var string = numeral('. $row['monto_total_doc'].').format("000,000,000,000");document.write(string)</script></td>

                                                                <td>'. $row['fec_emi_doc'].'</td>
                                                                <td>'. $row['fec_ven_doc'].'</td>
                                                                <td>'. $row['tipo_doc'].'</td>
                                                                <td>'. $row['obs_doc'].'</td>



                                                                <td><a id="btn_modal_consulta" class="link-modal btn btn-outline-info" data-id="'.$row['id_doc'].'" data-doc="'.$row['nro_doc'].'" data-total="'.$row['monto_total_doc'].'" data-afecto="'.$row['monto_afecto_doc'].'" data-exento="'.$row['monto_exento_doc'].'" data-iva="'.$row['monto_iva_doc'].'" data-fec_ven="'.$row['fec_ven_doc'].'" data-tipo="'.$row['tipo_doc'].'" data-toggle="modal" >Ver</a></td>

                                                              
                                                               
                                                              

                                                
                                                    </tr>';
                                                  }
                                    }


                                          
                        ?>
                                      




                                    </tbody>
                                  </table>
                              </div>