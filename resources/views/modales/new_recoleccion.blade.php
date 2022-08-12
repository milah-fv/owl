                  <!-- Modal -->
                  <form method="post" >
                          @csrf
                    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Empresa</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          
                          <div class="modal-body">
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="empresa_nombre" name="empresa_nombre">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Domicilio:</label>
                                <input type="text" class="form-control" id="empresa_domicilio" name="empresa_domicilio">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Contacto:</label>
                                <input type="text" class="form-control" id="empresa_contacto" name="empresa_contacto">
                              </div>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Telefono:</label>
                                <input type="text" class="form-control" id="empresa_telefono" name="empresa_telefono">
                              </div>
                            
                          </div>
                          <div class="modal-footer">
                             <a href="#" type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</a>     
                            <button type="submit" class="btn bg-gradient-primary" formaction="{{url('/empresa')}}">Agregar Empresa</button>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                  <!-- Modal -->