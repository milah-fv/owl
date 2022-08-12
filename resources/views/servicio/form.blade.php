@section('css')

@endsection

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
        <!--
        <div class="card mb-4" >
            <div class="card-body ">
                <div class="nav-wrapper position-relative end-0">
                  <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-2 active" data-bs-toggle="tab" href="#profile-tabs-icons" role="tab" aria-controls="preview" aria-selected="true">
                      <i class="ni ni-badge text-sm me-2"></i> My Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-2" data-bs-toggle="tab" href="#dashboard-tabs-icons" role="tab" aria-controls="code" aria-selected="false">
                        <i class="ni ni-laptop text-sm me-2"></i> Dashboard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link mb-0 px-0 py-2" data-bs-toggle="tab" href="#dashboard-tabs-icons" role="tab" aria-controls="code" aria-selected="false">
                        <i class="ni ni-laptop text-sm me-2"></i> Dashboard
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>  -->
        

        <div class="card mb-4" >
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
                            <label>Nombre de Empresa</label>
                            <div class="input-field">
                              
                              <input type="text" name="empresa_recolectora" id="empresa_recolectora" class="form-control" autofocus autocomplete="off">

                            </div>
                        </div>
                   </div>
                   
                   <div class="col-md-1 col-sm-2">
                       <div class="form-group">
                            <div class="text-center col-md-12 col-sm-12">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalMessage1" class="btn bg-gradient-secondary w-100 mt-4 mb-0">
                                <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span></a>
                            </div>
                        </div>
                   </div>


                   <div class="col-md-3 col-sm-12" >
                       <div class="form-group">
                            <label>Lugar de Origen</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="lugar_origen" id="lugar_origen"  type="text" autofocus placeholder="Ciudad, País">
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio</label>
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
                    <input type="text" name="id_emp_recolectora" id="id_emp_recolectora" class="form-control" hidden autofocus >
                </div>
                <!-- <div class="row">
                    <div class="col-md-12 col-sm-12">
                       <div class="form-group">
                           <label>Dirección de Recolección</label>
                           <input type="text" name="dirección_recoleccion" id="dirección_recoleccion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div> -->
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <h6>Entrega</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Fecha</label>
                           <input type="date" name="fecha_entrega_inicio" id="fecha_entrega_inicio" class="form-control"
                           autofocus value="{{ isset($fecha->fecha) ? $fecha->fecha: old('fecha') }}" >
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Hora</label>
                           <select class="form-control" name="hora_entrega_inicio">
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
                            <div class="input-field">
                              <input type="text" name="empresa_carga" id="empresa_carga" class="form-control" autofocus autocomplete="off">
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
                              <input class="form-control" name="lugar_carga_entrega" id="lugar_carga_entrega"  type="text" autofocus placeholder="Ciudad, País">
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Dirección</label>
                           <input type="text" name="direccion_emp_carga" id="direccion_emp_carga" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_emp_carga" id="contacto_emp_carga" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_emp_carga" id="telefono_emp_carga" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <input type="text" name="id_emp_carga" id="id_emp_carga" class="form-control" hidden autofocus >
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
                            <div class="input-field">
                              <input type="text" name="nombre_exportador" id="nombre_exportador" class="form-control" autofocus autocomplete="off">
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
                   <!--
                   <div class="col-md-2 col-sm-12" >
                       <div class="form-group">
                            <label>País de Origen</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="pais_origen" id="pais_origen"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                   <div class="col-md-2 col-sm-12" >
                       <div class="form-group">
                            <label>Ciudad de Origen</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="ciudad_origen" id="ciudad_origen"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                    -->
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
                           <input type="text" name="contacto_exportador" id="contacto_exportador" class="form-control"
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
                   <input type="text" name="id_exportador" id="id_exportador" class="form-control" hidden autofocus >
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
                            <div class="input-field">
                              <input type="text" name="nombre_ag_ad_exportacion" id="nombre_ag_ad_exportacion" class="form-control" autofocus autocomplete="off">
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
                           <input type="text" name="contacto_ag_ad_exportacion" id="contacto_ag_ad_exportacion" class="form-control"
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
                   <input type="text" name="id_ag_ad_exportacion" id="id_ag_ad_exportacion" class="form-control" hidden autofocus >
                </div>
            </div>
        </div>
        <hr>
        <div class="card mb-4" style="background: #dceff2">
            <div class="card-body ">
                <h6>Importador</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre del Importador</label>
                            <div class="input-field">
                              <input type="text" name="nombre_importador" id="nombre_importador" class="form-control" autofocus autocomplete="off">
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
                              <input class="form-control" name="nit_importador" id="nit_importador"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio</label>
                           <input type="text" name="domicilio_importador" id="domicilio_importador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_importador" id="contacto_importador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_importador" id="telefono_importador" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <input type="text" name="id_importador" id="id_importador" class="form-control" hidden autofocus >
                </div>
            </div>
        </div>

        <div class="card mb-4" style="background: #dceff2">
            <div class="card-body ">
                <h6>Agente Aduanal de Importación</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                            <label>Nombre del Agente Aduanal de Importación</label>
                            <div class="input-field">
                              <input type="text" name="nombre_ag_ad_importacion" id="nombre_ag_ad_importacion" class="form-control" autofocus autocomplete="off">
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
                              <input class="form-control" name="nit_ag_ad_importacion" id="nit_ag_ad_importacion"  type="text" autofocus>
                            </div>
                        </div>
                   </div>

                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Domicilio</label>
                           <input type="text" name="domicilio_ag_ad_importacion" id="domicilio_ag_ad_importacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_ag_ad_importacion" id="contacto_ag_ad_importacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_ag_ad_importacion" id="telefono_ag_ad_importacion" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <input type="text" name="id_ag_ad_importacion" id="id_ag_ad_importacion" class="form-control" hidden autofocus >
                </div>
            </div>
        </div>
        <hr>
        <div class="card mb-4">
            <div class="card-body ">
                <h6>Entrega Final</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Fecha</label>
                           <input type="date" name="fecha_entrega_final" id="fecha_entrega_final" class="form-control"
                           autofocus value="{{ isset($fecha->fecha) ? $fecha->fecha: old('fecha') }}" >
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                           <label>Hora</label>
                           <select class="form-control" name="hora_entrega_final">
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
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <label>Nombre de la Empresa</label>
                            <div class="input-field">
                              <input type="text" name="empresa_final" id="empresa_final" class="form-control" autofocus autocomplete="off">
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

                   <div class="col-md-3 col-sm-12">
                       <div class="form-group">
                           <label>Contacto</label>
                           <input type="text" name="contacto_emp_final" id="contacto_emp_final" class="form-control"
                           autofocus >
                       </div>
                   </div>
                   <div class="col-md-4 col-sm-12">
                       <div class="form-group">
                           <label>Telefono</label>
                           <input type="text" name="telefono_emp_final" id="telefono_emp_final" class="form-control"
                           autofocus >
                       </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6 col-sm-12" >
                       <div class="form-group">
                            <label>Dirección de Entrega</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="lugar_final_entrega" id="lugar_final_entrega"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-6 col-sm-12" >
                       <div class="form-group">
                            <label>Destino</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="lugar_destino" id="lugar_destino"  type="text" autofocus placeholder="Ciudad, País">
                            </div>
                        </div>
                   </div>

                   <input type="text" name="id_emp_entrega" id="id_emp_entrega" class="form-control" hidden autofocus >
                </div>
            </div>
        </div>
    
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
                            <label>Peso Neto</label>
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
                            <div class="input-field">
                              <input type="text" name="descripcion_mercancia" id="descripcion_mercancia" class="form-control" autofocus autocomplete="off">
                            </div>
                        </div>
                   </div>

                   <div class="col-md-4 col-sm-12" >
                       <div class="form-group">
                            <label>Fracción Arancelaria</label>
                            <div class="input-group mb-4">
                              <input type="text" name="fraccion_arancelaria" id="fraccion_arancelaria" class="form-control" autofocus>
                            </div>
                        </div>
                   </div>

                   <input type="text" name="id_descrip_merc" id="id_descrip_merc" class="form-control"  autofocus hidden>

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
                <h6>Transporte</h6>
                <div class="row">
                    <div class="col-md-4 col-sm-12" >
                        <div class="form-group">
                           <label>Medio de Transporte</label>
                           <select class="form-control" name="medio_transporte">
                                <option value="Terrestre">Terrestre</option>
                                <option value="Marítimo">Marítimo</option>
                                <option value="Aéreo">Aéreo</option>
                            </select>
                       </div>
                   </div>
                    <div class="col-md-4 col-sm-12" >
                        <div class="form-group">
                            <label>Aduana de Inicio</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="aduana_inicio" id="aduana_inicio"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-4 col-sm-12" >
                        <div class="form-group">
                            <label>Aduana de Ingreso</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="aduana_ingreso" id="aduana_ingreso"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body ">
                <h6>Transporte</h6>
                <div class="row">
                    <div class="col-md-5 col-sm-12" >
                        <div class="form-group">
                           <label>Operador</label>
                            <div class="input-field">
                              <input class="form-control" name="operador" id="operador"  type="text" autofocus autocomplete="off">
                            </div>
                       </div>
                       <input type="text" name="id_transporte" id="id_transporte" class="form-control"  autofocus hidden>
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
                    <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                           <label>Placas Tracto</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="placas_tracto" id="placas_tracto"  type="text" autofocus>
                            </div>
                       </div>
                    </div>
                    <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>Licencia</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="licencia" id="licencia"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>CAAT</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="caat" id="caat"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>Número ECO</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="nro_eco" id="nro_eco"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                           <label>Capacidad</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="capacidad" id="capacidad"  type="text" autofocus>
                            </div>
                       </div>
                    </div>
                    <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>Placas Caja</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="placa_cajas" id="placa_cajas"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>Transporte Afianzador</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="transporte_afianzador" id="transporte_afianzador"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-3 col-sm-12" >
                        <div class="form-group">
                            <label>Código Aduanero</label>
                            <div class="input-group mb-4">
                              <input class="form-control" name="codigo_aduanero" id="codigo_aduanero"  type="text" autofocus>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body ">
                <h6>Productos</h6>
               
          
                <div class="col-md-12 col-sm-12" >
                   <div class="table-responsive" class="productos_tabla">
                        <table class="table align-items-center mb-0" id="lista" name="lista">
                            <thead>
                                <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center" width=5% >N°</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Factura</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Cajas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Peso</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=50% >Descripción</th>
                                <th class="text-secondary opacity-7" width=10% ></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="product0">
                                <th class="text-center">1</th>
                                <th><input class="form-control" name="producto_factura[]" id="producto_factura"  type="text" autofocus></th>
                                <th><input class="form-control" name="producto_cajas[]" id="producto_cajas"  type="text" autofocus></th>
                                <th><input class="form-control" name="producto_peso[]" id="producto_peso"  type="text" autofocus placeholder="En Kg."></th>
                                <th><input class="form-control" name="producto_descripcion[]" id="producto_descripcion"  type="text" autofocus></th>
                                <td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i></a></td>
                                </tr>
                                <!--<tr id="product1">
                                <th class="text-center">02</th>
                                <th><input class="form-control" name="producto_factura[]" id="producto_factura"  type="text" autofocus></th>
                                <th><input class="form-control" name="producto_cajas[]" id="producto_cajas"  type="text" autofocus></th>
                                <th><input class="form-control" name="producto_peso[]" id="producto_peso"  type="text" autofocus placeholder="En Kg."></th>
                                <th><input class="form-control" name="producto_descripcion[]" id="producto_descripcion"  type="text" autofocus></th>
                                <td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i></a></td>
                                </tr> -->
                                <!-- <tr id="product1"></tr> -->
                            </tbody>
                            <tfoot style="background-color: #f0f0f0;">
                                <tr>
                                <th colspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" id="totalcajas"></th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" id="totalpeso"></th>
                                <th colspan="2" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>  
                <div class="row"> 
                    <div class=" col-md-6 col-sm-12" >
                        <div class="form-group" style="float: left; ">
                            <div class="input-group mb-4">
                                <button class="btn bg-gradient-success w-100 mt-4 mb-0" id="add_row" type="button"><i class="fas fa-plus-circle"></i> Añadir Fila</button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class=" col-md-6 col-sm-12">
                        <div class="form-group"  style="float: right; ">
                            <div class="input-group mb-4" >
                                <button class="btn bg-gradient-warning w-100 mt-4 mb-0" id='delete_row' type="button"><i class="fa fa-minus-circle"></i> Eliminar Fila </button>
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 ">
                <div class="card mb-4 ">
                    <div class="card-body ">
                        <h6>Pagos</h6>
                        <div class="row">
                            <div class="col-md-5 col-sm-12" >
                                <div class="form-group">
                                    <label>Flete</label>
                                    <div class="input-group">
                                      <span class="input-group-text">$</span>
                                      <input type="text"  class="monto form-control text-center" onchange="sumarMonto();" name="flete" id="flete" autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12" >
                                <div class="form-group">
                                    <label>Seguro</label>
                                    <div class="input-group">
                                      <span class="input-group-text">$</span>
                                      <input type="text"  class="monto form-control text-center" onchange="sumarMonto();" name="seguro" id="seguro" autofocus/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-11 col-sm-12" >
                            <div class="form-group">
                                <label>Total</label>
                                <div class="input-group"  >
                                    <span class="input-group-text">$</span>
                                    <input type="text" id="total" name="total" value="0" class="form-control text-center" readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="card mb-4">
                    <div class="card-body ">
                        <h6>Otros Cargos</h6>
                        <div class="form-group">
                            <label>*Observaciones</label>
                            <div class="input-field">
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="4" autofocus></textarea>
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

@include('modales.new_recoleccion')

                <!-- Modal -->
                    <div class="modal fade" id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" value="Creative Tim" id="recipient-name">
                              </div>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary">Send message</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal -->


@section('scripts')
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- Empresa Recoleccion -->
    <script type="text/javascript">
        $(document).ready(function(){
          //console.log('holi');
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findEmpresa')!!}',
            success:function(response){
                //console.log(response);
                var empresaRecArray = response;
                var dataEmpRec = {};
                var dataEmpRec2 = {};
                for (var i = 0; i < empresaRecArray.length; i++){
                    dataEmpRec[empresaRecArray[i].nombre] = null;
                    dataEmpRec2[empresaRecArray[i].nombre] = empresaRecArray[i];

                }
                //console.log('dataEmpRec2');
                //console.log(dataEmpRec2);
                //material
                 $('input#empresa_recolectora').autocomplete({
                      data: dataEmpRec,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        //console.log(reqdata);
                        $('#domicilio_recoleccion').val(dataEmpRec2[reqdata]['domicilio']);
                        $('#contacto_recoleccion').val(dataEmpRec2[reqdata]['contacto']);
                        $('#telefono_recoleccion').val(dataEmpRec2[reqdata]['telefono']);
                        $('#id_emp_recolectora').val(dataEmpRec2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Empresa de Carga -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findEmpresa')!!}',
            success:function(response){
                var empresaCargaArray = response;
                var dataEmpCarga = {};
                var dataEmpCarga2 = {};
                for (var i = 0; i < empresaCargaArray.length; i++){
                    dataEmpCarga[empresaCargaArray[i].nombre] = null;
                    dataEmpCarga2[empresaCargaArray[i].nombre] = empresaCargaArray[i];

                }
             
                 $('input#empresa_carga').autocomplete({
                      data: dataEmpCarga,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#direccion_emp_carga').val(dataEmpCarga2[reqdata]['domicilio']);
                        $('#contacto_emp_carga').val(dataEmpCarga2[reqdata]['contacto']);
                        $('#telefono_emp_carga').val(dataEmpCarga2[reqdata]['telefono']);
                        $('#id_emp_carga').val(dataEmpCarga2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Exportador -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findExportador')!!}',
            success:function(response){
                //console.log(response);
                var exportadorArray = response;
                var dataExportador = {};
                var dataExportador2 = {};
                for (var i = 0; i < exportadorArray.length; i++){
                    dataExportador[exportadorArray[i].nombre] = null;
                    dataExportador2[exportadorArray[i].nombre] = exportadorArray[i];

                }
             
                 $('input#nombre_exportador').autocomplete({
                      data: dataExportador,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#rfc_exportador').val(dataExportador2[reqdata]['rfc']);
                        $('#pais_origen').val(dataExportador2[reqdata]['pais_origen']);
                        $('#ciudad_origen').val(dataExportador2[reqdata]['ciudad_origen']);
                        $('#domicilio_exportador').val(dataExportador2[reqdata]['domicilio']);
                        $('#contacto_exportador').val(dataExportador2[reqdata]['contacto']);
                        $('#telefono_exportador').val(dataExportador2[reqdata]['telefono']);
                        $('#id_exportador').val(dataExportador2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Agente Aduanal de Exportación -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findAgAdExportacion')!!}',
            success:function(response){
                var agenteAdExportacionArray = response;
                var dataAgenteAdExportacion = {};
                var dataAgenteAdExportacion2 = {};
                for (var i = 0; i < agenteAdExportacionArray.length; i++){
                    dataAgenteAdExportacion[agenteAdExportacionArray[i].nombre] = null;
                    dataAgenteAdExportacion2[agenteAdExportacionArray[i].nombre] = agenteAdExportacionArray[i];
                }
             
                 $('input#nombre_ag_ad_exportacion').autocomplete({
                      data: dataAgenteAdExportacion,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#nit_ag_ad_exportacion').val(dataAgenteAdExportacion2[reqdata]['nit']);
                        $('#domicilio_ag_ad_exportacion').val(dataAgenteAdExportacion2[reqdata]['domicilio']);
                        $('#contacto_ag_ad_exportacion').val(dataAgenteAdExportacion2[reqdata]['contacto']);
                        $('#telefono_ag_ad_exportacion').val(dataAgenteAdExportacion2[reqdata]['telefono']);
                        $('#id_ag_ad_exportacion').val(dataAgenteAdExportacion2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Importador -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findImportador')!!}',
            success:function(response){
                //console.log(response);
                var importadorArray = response;
                var dataImportador = {};
                var dataImportador2 = {};
                for (var i = 0; i < importadorArray.length; i++){
                    dataImportador[importadorArray[i].nombre] = null;
                    dataImportador2[importadorArray[i].nombre] = importadorArray[i];

                }
             
                 $('input#nombre_importador').autocomplete({
                      data: dataImportador,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#nit_importador').val(dataImportador2[reqdata]['nit']);
                        $('#domicilio_importador').val(dataImportador2[reqdata]['domicilio']);
                        $('#contacto_importador').val(dataImportador2[reqdata]['contacto']);
                        $('#telefono_importador').val(dataImportador2[reqdata]['telefono']);
                        $('#id_importador').val(dataImportador2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Agente Aduanal de Importación -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findAgAdImportacion')!!}',
            success:function(response){
                var agenteAdImportacionArray = response;
                var dataAgenteAdImportacion = {};
                var dataAgenteAdImportacion2 = {};
                for (var i = 0; i < agenteAdImportacionArray.length; i++){
                    dataAgenteAdImportacion[agenteAdImportacionArray[i].nombre] = null;
                    dataAgenteAdImportacion2[agenteAdImportacionArray[i].nombre] = agenteAdImportacionArray[i];
                }
             
                 $('input#nombre_ag_ad_importacion').autocomplete({
                      data: dataAgenteAdImportacion,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#nit_ag_ad_importacion').val(dataAgenteAdImportacion2[reqdata]['nit']);
                        $('#domicilio_ag_ad_importacion').val(dataAgenteAdImportacion2[reqdata]['domicilio']);
                        $('#contacto_ag_ad_importacion').val(dataAgenteAdImportacion2[reqdata]['contacto']);
                        $('#telefono_ag_ad_importacion').val(dataAgenteAdImportacion2[reqdata]['telefono']);
                        $('#id_ag_ad_importacion').val(dataAgenteAdImportacion2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>

    <!-- Descripción Mercaderia -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findDescMerc')!!}',
            success:function(response){
                var descMercaderiaArray = response;
                var dataDescMercaderia = {};
                var dataDescMercaderia2 = {};
                for (var i = 0; i < descMercaderiaArray.length; i++){
                    dataDescMercaderia[descMercaderiaArray[i].descripcion_mercaderia] = null;
                    dataDescMercaderia2[descMercaderiaArray[i].descripcion_mercaderia] = descMercaderiaArray[i];
                }
             
                 $('input#descripcion_mercancia').autocomplete({
                      data: dataDescMercaderia,
                      limit:3,
                      onAutocomplete:function(reqdata){
                        $('#fraccion_arancelaria').val(dataDescMercaderia2[reqdata]['fraccion_arancelaria']);
                        $('#id_descrip_merc').val(dataDescMercaderia2[reqdata]['id']);
                        
                      }
                    });
            }
          })
        });
    </script>

    <!-- Empresa de Entrega Final -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findEmpresa')!!}',
            success:function(response){
                var empresaEntregaArray = response;
                var dataEmpEntrega = {};
                var dataEmpEntrega2 = {};
                for (var i = 0; i < empresaEntregaArray.length; i++){
                    dataEmpEntrega[empresaEntregaArray[i].nombre] = null;
                    dataEmpEntrega2[empresaEntregaArray[i].nombre] = empresaEntregaArray[i];

                }
             
                 $('input#empresa_final').autocomplete({
                      data: dataEmpEntrega,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#contacto_emp_final').val(dataEmpEntrega2[reqdata]['contacto']);
                        $('#telefono_emp_final').val(dataEmpEntrega2[reqdata]['telefono']);
                        $('#id_emp_entrega').val(dataEmpEntrega2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>
    <!-- Transporte -->
    <script type="text/javascript">
        $(document).ready(function(){
          $.ajax({
            type: 'get',
            url:'{!!URL::to('findTransporte')!!}',
            success:function(response){
                var transporteArray = response;
                var dataTransporte = {};
                var dataTransporte2 = {};
                for (var i = 0; i < transporteArray.length; i++){
                    dataTransporte[transporteArray[i].operador] = null;
                    dataTransporte2[transporteArray[i].operador] = transporteArray[i];

                }
             
                 $('input#operador').autocomplete({
                      data: dataTransporte,
                      limit:5,
                      onAutocomplete:function(reqdata){
                        $('#placas_tracto').val(dataTransporte2[reqdata]['placas_tracto']);
                        $('#licencia').val(dataTransporte2[reqdata]['licencia']);
                        $('#caat').val(dataTransporte2[reqdata]['caat']);
                        $('#nro_eco').val(dataTransporte2[reqdata]['nro_eco']);
                        $('#capacidad').val(dataTransporte2[reqdata]['capacidad']);
                        $('#placa_cajas').val(dataTransporte2[reqdata]['placa_cajas']);
                        $('#transporte_afianzador').val(dataTransporte2[reqdata]['transporte_afianzador']);
                        $('#codigo_aduanero').val(dataTransporte2[reqdata]['codigo_aduanero']);
                        $('#id_transporte').val(dataTransporte2[reqdata]['id']);
                 
                      }
                    });
            }
          })
        });
    </script>
    <!-- <script>
      $(document).ready(function(){
        let row_number = {{ count(old('products', [''])) }};
        $("#add_row").click(function(e){
          e.preventDefault();
          let new_row_number = row_number - 1;
          $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
          $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
          row_number++;
        });
        $("#delete_row").click(function(e){
          e.preventDefault();
          if(row_number > 1){
            $("#product" + (row_number - 1)).html('');
            row_number--;
          }
        });
      });
    </script> -->
    <script>
        var boton=document.getElementById('add_row');
        var lista=document.getElementById('lista');
        var data = [];
        var cant = 1;
        boton.addEventListener("click", agregar_producto);
        function agregar_producto(){
            //var factura = document.getElementById('producto_factura').value;
            //var cajas = parseFloat(document.getElementById('producto_cajas').value);
            //var peso = parseFloat(document.getElementById('producto_peso').value);
            //var descripcion = document.getElementById('producto_descripcion').value;
            var nrofila = cant+1;
            
            data.push(
                {
                    "id": cant,
                    //"factura": factura,
                    //"cajas": cajas,
                    //"peso": peso,
                    //"descripcion": descripcion, 
                }
            );
            var id_row = 'product' + cant;
            var fila = '<tr id=' + id_row + '><th class="text-center">' + nrofila + '</th><th><input class="form-control" name="producto_factura[]" id="producto_factura"  type="text" autofocus></th><th><input class="form-control" name="producto_cajas[]" id="producto_cajas"  type="text" autofocus></th><th><input class="form-control" name="producto_peso[]" id="producto_peso"  type="text" autofocus placeholder="En Kg."></th><th><input class="form-control" name="producto_descripcion[]" id="producto_descripcion"  type="text" autofocus></th><td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="eliminar('+ cant +')";><i class="far fa-trash-alt me-2"></i></a></td> </tr>';
            //Agregar a la lista
            $('#lista').append(fila);
            //$('#producto_factura').val('');
            //$('#producto_cajas').val('');
            //$('#producto_peso').val('');
            //$('#producto_descripcion').val('');
            //$('#producto_factura').focus();
            cant++;
            //sumar();
            
        }
        function eliminar(row){
            //remover la fila del html
            $("#product"+row).remove();
            var i = 0;
            var pos = 0;
            for(x of data){
                if(x.id==row){
                    pos = i;
                }
                i++;
            }
            data.splice(pos, 1);
            //sumar();
        }

       function sumar(){
            
            var cajas = parseFloat(document.getElementById('producto_cajas').value);
            var peso = parseFloat(document.getElementById('producto_peso').value);
            var totalcajas = 0;
            var totalpeso = 0;
            for (x of data) {
                totalcajas = totalcajas + x.cajas;
            }
            for (y of data) {
                totalpeso = totalpeso + y.peso;
            }
            document.getElementById('totalcajas').innerHTML =  totalcajas;
            document.getElementById('totalpeso').innerHTML =  totalpeso;
        }
        
         
    </script>
    <script type="text/javascript">
        /* Sumar dos números. */
        function sumarMonto()
        {
          const $total = document.getElementById('total');
          let subtotal = 0;
          [ ...document.getElementsByClassName( "monto" ) ].forEach( function ( element ) {
            if(element.value !== '') {
              subtotal += parseFloat(element.value);
            }
          });
          $total.value = subtotal;
        }
    </script>
@endsection

