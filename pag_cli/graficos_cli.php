
<div class="container" class="main">
    <div class="row">
        <div class="col-12 text-center">
            <button  class="btn btn-primary menubtns" id="btnimp" onclick="imp()"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Imprimir Información</button>
        </div>
 
        
        
    </div>
                                  <hr>
                               

                              <div class="row">

                              <div  class="iconosant tit">
                                 Total Débito <br>
                                <span id="totdeb" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Crédito <br>
                                <span id="totcred" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Ventas Netas <br>
                                <span id="totven" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total PPM <br>
                                <span id="totppm" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Imp. Único <br>
                                <span id="totimpu" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Retención <br>
                                <span id="totret" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Imp. Pagado <br>
                                <span id="totimpp" class="num"></span>
                              </div>

                              <div  class="iconosant tit">
                                 Total Cred. Fiscal <br>
                                <span id="totcredfis" class="num"></span>
                              </div>



                              </div>
                              <br>

                              <div id="alerta_ven_anual" style="display: none">
                                <strong><span id="men_ven_anual"></span></strong>
                              </div>

                              <hr>
                              <br>


                              <div class="row">

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Relacion Débito/Crédito</h5>
                              <div id="relgraf" class="graf"></div>
                              </div>

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv" >Débito y Crédito</h5>
                              <div id="debcredgraf" class="graf"></div>
                              </div>

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Ventas</h5>
                              <div id="vengraf" class="graf"></div>
                              </div>

                              

                              </div>
                              <br>
                              <div class="row">
                                
                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">PPM Pagado</h5>
                              <div id="ppmgraf" class="graf"></div>
                              </div>

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Impuesto Unico Pagado</h5>
                              <div id="impugraf" class="graf"></div>
                              </div>

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Retención</h5>
                              <div id="retgraf" class="graf"></div>
                              </div>

                              </div>
                              <br>
                              <div class="row">

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Impuesto Pagado</h5>
                              <div id="imppgraf" class="graf"></div>
                              </div>

                              <div class="col-md-12 col-lg-4">
                              <h5 class="titulodiv">Remanente Cred. Fiscal</h5>
                              <div id="recrefgraf" class="graf"></div>
                              </div>


                              <div class="col-md-12 col-lg-4 col-lg-4" id="divvenmgraf">
                              <h5 class="titulodiv">Venta Máxima anual</h5>
                              <div id="venmgraf" class="graf"></div>
                              </div>
                              </div>
                              <br>
                              <div class="row">

                              <div class="col-sm-12 col-md-12 col-lg-4" id="divconactfijo">
                              <h5>Control Activo Fijo</h5>
                              <div id="conactfijograf" class="graf"></div>
                              </div>

                              <div class="col-sm-12 col-md-12 col-lg-4" id="divcondinactfijo">
                              <h5>Control DIN Activo Fijo</h5>
                              <div id="condinactfijograf" class="graf"></div>
                              </div>

                              <div class="col-sm-4">

                              <div class="col-sm-12 col-md-6 col-lg-4">
                              <h5 class="titulodiv">Resumen de IVA</h5>
                              <br>
                              <table id="resiva" class="table table-striped table-bordered" cellspacing="0" style="width:100%;">
                                  <thead>
                                    <tr>
                                          <th class="">Periodo                             <i class="" aria-hidden="true"></i></th>
                                          <th class="">Tipo IVA                           <i class="" aria-hidden="true"></i></th>

                                      <!--<th class="th-sm">Editar<i class="fa fa-sort float-right" aria-hidden="true"></i></th>-->
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                    $re = $fun ->cargar_resiva($id_emp);
                                    foreach($re as $row)
                                      {  
                                    ?>
                                    <tr>
                                      <td><?php echo $row['periodo']?></td>  
                                      <td><?php echo $row['iva']?></td>

                                    </tr>
                                  <?php } ?>  
                                  </tbody>
                              </table>

                              </div>

                              </div>

                              </div>  
                             
                          </div>

