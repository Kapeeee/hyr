<div class="modal fade" id="modal_consulta" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content" class="contenimodal">
      <div class="modal-header">
        <h5 class="modal-title"><span id="tipo_modal" name="tipo_modal"></span> Nro: <span id="nro_doc" name="nro_doc"></span></h5>
        <input type="hidden" id="id_doc" name="id_doc" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                              <div class="form-group">
                                    <label for="fec_ven" >Fecha Vencimiento:</label>
                                    <input type="date" class="form-control" id="fec_ven" name="fec_ven" readonly required>
                              </div>
                  </div>
                  <div class="col-6">
                              <br>
                              <div class="alert alert-danger" role="alert" id="ven_doc" name="ven_doc">
                                    Documento Vencido
                              </div>
                              <br>
                              
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                    <label for="afecto" id="lblAfecto">Monto Afecto:</label>
                                    <input type="text" class="form-control" id="monto_afecto" name="monto_afecto"  readonly required>
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="exento" id="lblExento">Monto Exento:</label>
                                <input type="text" class="form-control" id="monto_exento" name="monto_exento"  readonly required>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="iva" id="lblIva">Monto IVA:</label>
                                <input type="text" class="form-control" id="monto_iva" name="monto_iva"  readonly required>
                        </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                                    <label for="total">Monto Total:</label>
                                    <input type="text" class="form-control" id="monto_total" name="monto_total" required readonly>
                                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6">
                      <div class="form-group" >
                                <label for="pagado">Monto Pagado:</label>
                                <input type="text" class="form-control" id="monto_pagado" name="monto_pagado" readonly required>
                        </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                                    <label for="est">Estado Documento:</label>
                                    <input type="text" class="form-control" id="est_doc" name="est_doc" required readonly>
                                  </div>
                  </div>
                </div>
                     <div class="table-responsive">
                        <table id="tabla_mov_doc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                <tr>
                                      <th class="">Fecha Movimiento<i class="" aria-hidden="true"></i></th>
                                      <th class="">Monto<i class="" aria-hidden="true"></i></th>
                                      <th class="">Usuario<i class="" aria-hidden="true"></i></th>
                                      <th class="">Observacion<i class="" aria-hidden="true"></i></th>
                                      <th class="">Estado Documento<i class="" aria-hidden="true"></i></th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary num" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>