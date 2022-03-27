<div class="row">
   
    <div class="col-lg-11">

        <div class="card mb-4">
            <div class="card-body ">
                <h4>Registrar Servicio</h4>
                <hr>
                
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                           <label>Fecha</label>
                           <input type="date" name="fecha_servicio" id="fecha_servicio" class="form-control"
                            value="<?php echo date("Y-m-d");?>" select required>
                           @error('serie')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>N° de Serie</label>
                            <select class="form-control" id="series" name="series" required>
                                @foreach ($series as $serie)
                                    <option select value="{{ $serie->id }}">{{ $serie->serie }}</option>
                                @endforeach
                            </select>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body ">
                <h6>Recolección</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Fecha</label>
                           <input type="date" name="fecha_recoleccion" id="fecha_recoleccion" class="form-control"
                           autofocus value="{{ isset($fecha->fecha) ? $fecha->fecha: old('fecha') }}" >
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Hora</label>
                           <select class="form-control" name="hora_recoleccion">
                                <option value="09:00 am">09:00 am</option>
                                <option value="10:00 am">10:00 am</option>
                                <option value="11:00 am">11:00 am</option>
                                <option value="12:00 am">12:00 am</option>
                                <option value="13:00 pm">13:00 pm</option>
                                <option value="14:00 pm">14:00 pm</option>
                                <option value="15:00 pm">15:00 pm</option>
                                <option value="16:00 pm">16:00 pm</option>
                                <option value="17:00 pm">17:00 pm</option>
                                <option value="18:00 pm">18:00 pm</option>
                                <option value="19:00 pm">19:00 pm</option>
                                <option value="20:00 pm">20:00 pm</option>
                                <option value="21:00 pm">21:00 pm</option>
                            </select>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Tipo de Transporte</label>
                           <select class="form-control" name="tipo_transporte_recoleccion">
                                <option value="Caja 24'">Caja 24'</option>
                                <option value="Caja 48'">Caja 48'</option>
                                <option value="Caja Seca">Caja Seca</option>
                                <option value="Caja Seca 40'">Caja Seca 40'</option>
                                <option value="Caja Seca 48'">Caja Seca 48'</option>
                                <option value="Caja Seca 53'">Caja Seca 53'</option>
                                <option value="Caja Refrigerada 48'">Caja Refrigerada 48'</option>
                                <option value="Caja Refrigerada 53'">Caja Refrigerada 53'</option>
                                <option value="Camioneta 3.5 TON.">Camioneta 3.5 Ton.</option>
                                <option value="Contenedor 40’">Contenedor 40’</option>
                                <option value="Contenedor 20’">Contenedor 20’</option>
                                <option value="Full 2 X 40'">Full 2 X 40'</option>
                                <option value="Plataforma 40'">Plataforma 40'</option>
                            </select>
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre de Empresa Recolectora</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="empresa_recolectora" id="empresa_recolectora" placeholder="Buscar" type="text" autofocus>
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-md-1 col-sm-2">
                       <div class="form-group">
                            <div class="text-center col-md-12 col-sm-12">
                                <a href="" class="btn bg-gradient-secondary w-100 mt-4 mb-0"><i class="ni ni-fat-add"></i></a>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio de la Empresa Recolectora</label>
                           <input type="text" name="domicilio_recoleccion" id="domicilio_recoleccion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_recoleccion" id="contacto_recoleccion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_recoleccion" id="telefono_recoleccion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                       <div class="form-group">
                           <label>Dirección de Recolección</label>
                           <input type="text" name="dirección_recoleccion" id="dirección_recoleccion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <h6>Entrega</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Fecha</label>
                           <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control"
                           autofocus value="{{ isset($fecha->fecha) ? $fecha->fecha: old('fecha') }}" >
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Hora</label>
                           <select class="form-control" name="hora_entrega">
                                <option value="09:00 am">09:00 am</option>
                                <option value="10:00 am">10:00 am</option>
                                <option value="11:00 am">11:00 am</option>
                                <option value="12:00 am">12:00 am</option>
                                <option value="13:00 pm">13:00 pm</option>
                                <option value="14:00 pm">14:00 pm</option>
                                <option value="15:00 pm">15:00 pm</option>
                                <option value="16:00 pm">16:00 pm</option>
                                <option value="17:00 pm">17:00 pm</option>
                                <option value="18:00 pm">18:00 pm</option>
                                <option value="19:00 pm">19:00 pm</option>
                                <option value="20:00 pm">20:00 pm</option>
                                <option value="21:00 pm">21:00 pm</option>
                            </select>
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Tipo de Transporte</label>
                           <select class="form-control" name="tipo_transporte_entrega">
                                <option value="Caja 24'">Caja 24'</option>
                                <option value="Caja 48'">Caja 48'</option>
                                <option value="Caja Seca">Caja Seca</option>
                                <option value="Caja Seca 40'">Caja Seca 40'</option>
                                <option value="Caja Seca 48'">Caja Seca 48'</option>
                                <option value="Caja Seca 53'">Caja Seca 53'</option>
                                <option value="Caja Refrigerada 48'">Caja Refrigerada 48'</option>
                                <option value="Caja Refrigerada 53'">Caja Refrigerada 53'</option>
                                <option value="Camioneta 3.5 TON.">Camioneta 3.5 Ton.</option>
                                <option value="Contenedor 40’">Contenedor 40’</option>
                                <option value="Contenedor 20’">Contenedor 20’</option>
                                <option value="Full 2 X 40'">Full 2 X 40'</option>
                                <option value="Plataforma 40'">Plataforma 40'</option>
                            </select>
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre de la Empresa</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="empresa_entrega" id="empresa_entrega" placeholder="Buscar" type="text" autofocus>
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-md-1 col-sm-2">
                       <div class="form-group">
                            <div class="text-center col-md-12 col-sm-12">
                                <a href="" class="btn bg-gradient-secondary w-100 mt-4 mb-0"><i class="ni ni-fat-add"></i></a>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Lugar de Carga</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="lugar_carga_entrega" id="lugar_carga_entrega"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Dirección</label>
                           <input type="text" name="direccion_entrega" id="direccion_entrega" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_entrega" id="contacto_entrega" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_entrega" id="telefono_entrega" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <h6>Exportador</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre del Exportador</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nombre_exportador" id="nombre_exportador" placeholder="Buscar" type="text" autofocus>
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-md-1 col-sm-2">
                       <div class="form-group">
                            <div class="text-center col-md-12 col-sm-12">
                                <a href="" class="btn bg-gradient-secondary w-100 mt-4 mb-0"><i class="ni ni-fat-add"></i></a>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>RFC</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="rfc_exportador" id="rfc_exportador"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label>Ciudad y País de Origen</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="ciudad_pais_origen" id="ciudad_pais_origen"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio</label>
                           <input type="text" name="domicilio_exportador" id="domicilio_exportador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacte_exportador" id="contacte_exportador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_exportador" id="telefono_exportador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <h6>Agente Aduanal de Exportación</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre del Agente Aduanal de Exportación</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nombre_ag_ad_exportacion" id="nombre_ag_ad_exportacion" placeholder="Buscar" type="text" autofocus>
                              <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                        </div>
                   </div>
                   
                   <div class="col-md-1 col-sm-2">
                       <div class="form-group">
                            <div class="text-center col-md-12 col-sm-12">
                                <a href="" class="btn bg-gradient-secondary w-100 mt-4 mb-0"><i class="ni ni-fat-add"></i></a>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>NIT</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nit_ag_ad_exportacion" id="nit_ag_ad_exportacion"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio</label>
                           <input type="text" name="domicilio_ag_ad_exportacion" id="domicilio_ag_ad_exportacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacte_ag_ad_exportacion" id="contacte_ag_ad_exportacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_ag_ad_exportacion" id="telefono_ag_ad_exportacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="card mb-4">
            <div class="card-body ">
                <h6>Información de Servicio</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label style="color: #f01700">Nro de Pedido del Cliente</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nro_pedido" id="nro_pedido"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label style="color: #f01700">Nro de Factura</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nro_factura" id="nro_factura"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label style="color: #f01700">Fecha de Factura</label>
                           <input type="date" name="fecha_factura" id="fecha_factura" class="form-control"
                           autofocus value="{{ isset($fecha->fecha) ? $fecha->fecha: old('fecha') }}" >
                        </div>
                   </div>

                </div>

                <hr>    
                <br>
                <h6>Mercancía</h6>

                <div class="row">
                    <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Valor de la Marcancía</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="valor_mercancia" id="valor_mercancia"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Pero Neto</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="peso_mercancia" id="peso_mercancia"  type="text" autofocus placeholder="En Kg.">
                            </div>
                        </div>
                   </div>

                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Volumen</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="volumen_mercancia" id="nro_factura"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Pallets</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="pallets" id="pallets"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label>Descripción de la Mercancía</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="descripcion_mercancia" id="descripcion_mercancia"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label>Fracción Arancelaria</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="fraccion_arancelaria" id="fraccion_arancelaria"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label>Regimen Aduanero</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="regimen_aduanero" id="regimen_aduanero"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
               

                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Servicio </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>