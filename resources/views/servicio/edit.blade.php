@extends('plantilla_maestra')
@section('titulo', 'Editar Servicio')
@section('subtitulo1', 'Servicios')
@section('subtitulo2', 'Editar Servicio')

@section('menu-1')
      <li class="nav-item">
        <a class="nav-link active " href="/servicios">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>credit-card</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(453.000000, 454.000000)">
                      <path class="color-background opacity-6"
                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                      </path>
                      <path class="color-background"
                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Servicio</span>
        </a>
      </li>
@endsection


@section ('contenido')




<div class="container-fluid py-4">
    <div class="row mt-4">
        <form action="{{url( '/servicios/'.$servicio->id )}}" method="post" enctype="multipart/form-data">
           @csrf
            {{method_field ('PATCH') }}

           <div class="row">
   
                <div class="col-lg-11">

                    <div class="card mb-4">
                        <div class="card-body ">
                            <h4>Editar Servicio </h4>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                       <label>Estado</label>
                                        <div class="form-group">
                                            <select class="form-control" id="estados" name="estados" required>
                                            <!--Select seleccionando el valor -->
                                                @foreach ($estados as $estado)
                                                <option select value="{{ $estado->id }}" 
                                                        @if ($servicio->estado_id === $estado->id || old('estados') === $estado->id) selected @endif
                                                >
                                                {{ $estado->estado }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                       <label>Fecha</label>
                                       <input type="date" name="fecha_servicio" id="fecha_servicio" class="form-control"
                                        value="{{ date('Y-m-d', strtotime($servicio->fecha)) }}" select required> 
                                       @error('serie')
                                        <small class="alert">* {{$message}}</small>
                                       @enderror
                                   </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label>N° de Serie</label>
                                        <div class="row">
                                        <div class="col-md-4 col-sm-6">   
                                            <div class="form-group">
                                               
                                                <select class="form-control" id="series" name="series" required style="text-align: center;">
                                                    <!--Select seleccionando el valor -->
                                                    @foreach ($series as $serie)
                                                        <option select value="{{ $serie->id }}" 
                                                            @if ($servicio->serie_id === $serie->id || old('series') === $serie->id) selected @endif
                                                        >
                                                        {{ $serie->serie }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-6 form-group">
                                            <input class="form-control" style="text-align: center;" value="- {{$servicio->id}}" disabled>
                                        </div>
                                    </div>
                               </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-4" >
                        <div class="card-body ">
                            <h6>Recolección</h6>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Fecha</label>
                                       <input type="date" name="fecha_recoleccion" id="fecha_recoleccion" class="form-control"
                                       autofocus value="{{ date('Y-m-d', strtotime($servicio->recolecciones->fecha)) }}" >
                                   </div>
                               </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Hora</label>
                                       <select class="form-control" name="hora_recoleccion" id="hora_recoleccion">
                                            <option value="09:00 am" @if ($servicio->recolecciones->hora === "09:00 am" || old('hora_recoleccion') === "09:00 am") selected @endif >09:00 am</option>
                                            <option value="10:00 am" @if ($servicio->recolecciones->hora === "10:00 am" || old('hora_recoleccion') === "10:00 am") selected @endif>10:00 am</option>
                                            <option value="11:00 am" @if ($servicio->recolecciones->hora === "11:00 am" || old('hora_recoleccion') === "11:00 am") selected @endif>11:00 am</option>
                                            <option value="12:00 am" @if ($servicio->recolecciones->hora === "12:00 am" || old('hora_recoleccion') === "12:00 am") selected @endif>12:00 am</option>
                                            <option value="13:00 pm" @if ($servicio->recolecciones->hora === "13:00 pm" || old('hora_recoleccion') === "13:00 pm") selected @endif>13:00 pm</option>
                                            <option value="14:00 pm" @if ($servicio->recolecciones->hora === "14:00 pm" || old('hora_recoleccion') === "14:00 pm") selected @endif>14:00 pm</option>
                                            <option value="15:00 pm" @if ($servicio->recolecciones->hora === "15:00 pm" || old('hora_recoleccion') === "15:00 pm") selected @endif>15:00 pm</option>
                                            <option value="16:00 pm" @if ($servicio->recolecciones->hora === "16:00 pm" || old('hora_recoleccion') === "16:00 pm") selected @endif>16:00 pm</option>
                                            <option value="17:00 pm" @if ($servicio->recolecciones->hora === "17:00 pm" || old('hora_recoleccion') === "17:00 pm") selected @endif>17:00 pm</option>
                                            <option value="18:00 pm" @if ($servicio->recolecciones->hora === "18:00 pm" || old('hora_recoleccion') === "18:00 pm") selected @endif>18:00 pm</option>
                                            <option value="19:00 pm" @if ($servicio->recolecciones->hora === "19:00 pm" || old('hora_recoleccion') === "19:00 pm") selected @endif>19:00 pm</option>
                                            <option value="20:00 pm" @if ($servicio->recolecciones->hora === "20:00 pm" || old('hora_recoleccion') === "20:00 pm") selected @endif>20:00 pm</option>
                                            <option value="21:00 pm" @if ($servicio->recolecciones->hora === "21:00 pm" || old('hora_recoleccion') === "21:00 pm") selected @endif>21:00 pm</option>
                                        </select>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Tipo de Transporte</label>
                                       <select class="form-control" name="tipo_transporte_recoleccion" id="tipo_transporte_recoleccion">
                                            <option value="Caja 24'" @if ($servicio->recolecciones->tipo_transporte === "Caja 24'" || old('hora_recoleccion') === "Caja 24'") selected @endif>Caja 24'</option>
                                            <option value="Caja 48'" @if ($servicio->recolecciones->tipo_transporte === "Caja 48'" || old('hora_recoleccion') === "Caja 48'") selected @endif>Caja 48'</option>
                                            <option value="Caja Seca" @if ($servicio->recolecciones->tipo_transporte === "Caja Seca" || old('hora_recoleccion') === "Caja Seca") selected @endif>Caja Seca</option>
                                            <option value="Caja Seca 40'" @if ($servicio->recolecciones->tipo_transporte === "Caja Seca 40'" || old('hora_recoleccion') === "Caja Seca 40'") selected @endif>Caja Seca 40'</option>
                                            <option value="Caja Seca 48'" @if ($servicio->recolecciones->tipo_transporte === "Caja Seca 48'" || old('hora_recoleccion') === "Caja Seca 48'") selected @endif>Caja Seca 48'</option>
                                            <option value="Caja Seca 53'" @if ($servicio->recolecciones->tipo_transporte === "Caja Seca 53'" || old('hora_recoleccion') === "Caja Seca 53'") selected @endif>Caja Seca 53'</option>
                                            <option value="Caja Refrigerada 48'" @if ($servicio->recolecciones->tipo_transporte === "Caja Refrigerada 48'" || old('hora_recoleccion') === "Caja Refrigerada 48'") selected @endif>Caja Refrigerada 48'</option>
                                            <option value="Caja Refrigerada 53'" @if ($servicio->recolecciones->tipo_transporte === "Caja Refrigerada 53'" || old('hora_recoleccion') === "Caja Refrigerada 53'") selected @endif>Caja Refrigerada 53'</option>
                                            <option value="Camioneta 3.5 TON." @if ($servicio->recolecciones->tipo_transporte === "Camioneta 3.5 TON." || old('hora_recoleccion') === "Camioneta 3.5 TON.") selected @endif>Camioneta 3.5 TON.</option>
                                            <option value="Contenedor 40'" @if ($servicio->recolecciones->tipo_transporte === "Contenedor 40'" || old('hora_recoleccion') === "Contenedor 40'") selected @endif>Contenedor 40'</option>
                                            <option value="Contenedor 20'" @if ($servicio->recolecciones->tipo_transporte === "Contenedor 20'" || old('hora_recoleccion') === "Contenedor 20'") selected @endif>Contenedor 20'</option>
                                            <option value="Full 2 X 40'" @if ($servicio->recolecciones->tipo_transporte === "Full 2 X 40'" || old('hora_recoleccion') === "Full 2 X 40'") selected @endif>Full 2 X 40'</option>
                                            <option value="Plataforma 40'" @if ($servicio->recolecciones->tipo_transporte === "Plataforma 40'" || old('hora_recoleccion') === "Plataforma 40'") selected @endif>Plataforma 40'</option>
                                        </select>
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                        <label>Nombre de Empresa</label>
                                        <div class="input-field">
                                          
                                          <input type="text" name="empresa_recolectora" id="empresa_recolectora" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->recolecciones->empresaTransporte['nombre']) ? $servicio->recolecciones->empresaTransporte['nombre']: old('empresa_recolectora') }}">

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
                                        <label>Lugar de Origen</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="lugar_origen" id="lugar_origen"  type="text" autofocus placeholder="Ciudad, País" value="{{old('lugar_origen', $servicio->recolecciones->lugar_origen)}}">
                                        </div>
                                    </div>
                               </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Domicilio</label>
                                       <input type="text" name="domicilio_recoleccion" id="domicilio_recoleccion" class="form-control"
                                       autofocus value="{{ isset($servicio->recolecciones->empresaTransporte['domicilio']) ? $servicio->recolecciones->empresaTransporte['domicilio']: old('domicilio_recoleccion') }}">

                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_recoleccion" id="contacto_recoleccion" class="form-control"
                                       autofocus value="{{ isset($servicio->recolecciones->empresaTransporte['contacto']) ? $servicio->recolecciones->empresaTransporte['contacto']: old('contacto_recoleccion') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_recoleccion" id="telefono_recoleccion" class="form-control"
                                       autofocus value="{{ isset($servicio->recolecciones->empresaTransporte['telefono']) ? $servicio->recolecciones->empresaTransporte['telefono']: old('telefono_recoleccion') }}">

                                   </div>
                               </div>
                                <input type="text" name="id_emp_recolectora" id="id_emp_recolectora" class="form-control" hidden autofocus value="{{ isset($servicio->recolecciones->empresaTransporte['id']) ? $servicio->recolecciones->empresaTransporte['id']: old('id_emp_recolectora') }}">

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
                                       <input type="date" name="fecha_entrega_inicio" id="fecha_entrega_inicio" class="form-control"
                                       autofocus value="{{ date('Y-m-d', strtotime($servicio->cargas->fecha)) }}" >
                                   </div>
                               </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Hora</label>
                                       <select class="form-control" name="hora_entrega_inicio" id="hora_entrega_inicio">
                                            <option value="09:00 am" @if ($servicio->cargas->hora === "09:00 am" || old('hora_entrega_inicio') === "09:00 am") selected @endif >09:00 am</option>
                                            <option value="10:00 am" @if ($servicio->cargas->hora === "10:00 am" || old('hora_entrega_inicio') === "10:00 am") selected @endif>10:00 am</option>
                                            <option value="11:00 am" @if ($servicio->cargas->hora === "11:00 am" || old('hora_entrega_inicio') === "11:00 am") selected @endif>11:00 am</option>
                                            <option value="12:00 am" @if ($servicio->cargas->hora === "12:00 am" || old('hora_entrega_inicio') === "12:00 am") selected @endif>12:00 am</option>
                                            <option value="13:00 pm" @if ($servicio->cargas->hora === "13:00 pm" || old('hora_entrega_inicio') === "13:00 pm") selected @endif>13:00 pm</option>
                                            <option value="14:00 pm" @if ($servicio->cargas->hora === "14:00 pm" || old('hora_entrega_inicio') === "14:00 pm") selected @endif>14:00 pm</option>
                                            <option value="15:00 pm" @if ($servicio->cargas->hora === "15:00 pm" || old('hora_entrega_inicio') === "15:00 pm") selected @endif>15:00 pm</option>
                                            <option value="16:00 pm" @if ($servicio->cargas->hora === "16:00 pm" || old('hora_entrega_inicio') === "16:00 pm") selected @endif>16:00 pm</option>
                                            <option value="17:00 pm" @if ($servicio->cargas->hora === "17:00 pm" || old('hora_entrega_inicio') === "17:00 pm") selected @endif>17:00 pm</option>
                                            <option value="18:00 pm" @if ($servicio->cargas->hora === "18:00 pm" || old('hora_entrega_inicio') === "18:00 pm") selected @endif>18:00 pm</option>
                                            <option value="19:00 pm" @if ($servicio->cargas->hora === "19:00 pm" || old('hora_entrega_inicio') === "19:00 pm") selected @endif>19:00 pm</option>
                                            <option value="20:00 pm" @if ($servicio->cargas->hora === "20:00 pm" || old('hora_entrega_inicio') === "20:00 pm") selected @endif>20:00 pm</option>
                                            <option value="21:00 pm" @if ($servicio->cargas->hora === "21:00 pm" || old('hora_entrega_inicio') === "21:00 pm") selected @endif>21:00 pm</option>
                                        </select>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Tipo de Transporte</label>
                                       <select class="form-control" name="tipo_transporte_entrega" id="tipo_transporte_entrega">
                                             <option value="Caja 24'" @if ($servicio->cargas->tipo_transporte === "Caja 24'" || old('tipo_transporte_entrega') === "Caja 24'") selected @endif>Caja 24'</option>
                                            <option value="Caja 48'" @if ($servicio->cargas->tipo_transporte === "Caja 48'" || old('tipo_transporte_entrega') === "Caja 48'") selected @endif>Caja 48'</option>
                                            <option value="Caja Seca" @if ($servicio->cargas->tipo_transporte === "Caja Seca" || old('tipo_transporte_entrega') === "Caja Seca") selected @endif>Caja Seca</option>
                                            <option value="Caja Seca 40'" @if ($servicio->cargas->tipo_transporte === "Caja Seca 40'" || old('tipo_transporte_entrega') === "Caja Seca 40'") selected @endif>Caja Seca 40'</option>
                                            <option value="Caja Seca 48'" @if ($servicio->cargas->tipo_transporte === "Caja Seca 48'" || old('tipo_transporte_entrega') === "Caja Seca 48'") selected @endif>Caja Seca 48'</option>
                                            <option value="Caja Seca 53'" @if ($servicio->cargas->tipo_transporte === "Caja Seca 53'" || old('tipo_transporte_entrega') === "Caja Seca 53'") selected @endif>Caja Seca 53'</option>
                                            <option value="Caja Refrigerada 48'" @if ($servicio->cargas->tipo_transporte === "Caja Refrigerada 48'" || old('tipo_transporte_entrega') === "Caja Refrigerada 48'") selected @endif>Caja Refrigerada 48'</option>
                                            <option value="Caja Refrigerada 53'" @if ($servicio->cargas->tipo_transporte === "Caja Refrigerada 53'" || old('tipo_transporte_entrega') === "Caja Refrigerada 53'") selected @endif>Caja Refrigerada 53'</option>
                                            <option value="Camioneta 3.5 TON." @if ($servicio->cargas->tipo_transporte === "Camioneta 3.5 TON." || old('tipo_transporte_entrega') === "Camioneta 3.5 TON.") selected @endif>Camioneta 3.5 TON.</option>
                                            <option value="Contenedor 40'" @if ($servicio->cargas->tipo_transporte === "Contenedor 40'" || old('tipo_transporte_entrega') === "Contenedor 40'") selected @endif>Contenedor 40'</option>
                                            <option value="Contenedor 20'" @if ($servicio->cargas->tipo_transporte === "Contenedor 20'" || old('tipo_transporte_entrega') === "Contenedor 20'") selected @endif>Contenedor 20'</option>
                                            <option value="Full 2 X 40'" @if ($servicio->cargas->tipo_transporte === "Full 2 X 40'" || old('tipo_transporte_entrega') === "Full 2 X 40'") selected @endif>Full 2 X 40'</option>
                                            <option value="Plataforma 40'" @if ($servicio->cargas->tipo_transporte === "Plataforma 40'" || old('tipo_transporte_entrega') === "Plataforma 40'") selected @endif>Plataforma 40'</option>
                                        </select>
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Nombre de la Empresa</label>
                                        <div class="input-field">
                                          <input type="text" name="empresa_carga" id="empresa_carga" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->cargas->empresaTransporte['nombre']) ? $servicio->cargas->empresaTransporte['nombre']: old('empresa_carga') }}">
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
                                          <input class="form-control" name="lugar_carga_entrega" id="lugar_carga_entrega"  type="text" autofocus value="{{old('lugar_carga_entrega', $servicio->cargas->lugar_carga)}}">
                                        </div>
                                    </div>
                               </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Dirección</label>
                                       <input type="text" name="direccion_emp_carga" id="direccion_emp_carga" class="form-control"
                                       autofocus  value="{{ isset($servicio->cargas->empresaTransporte['domicilio']) ? $servicio->cargas->empresaTransporte['domicilio']: old('direccion_emp_carga') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_emp_carga" id="contacto_emp_carga" class="form-control"
                                       autofocus  value="{{ isset($servicio->cargas->empresaTransporte['contacto']) ? $servicio->cargas->empresaTransporte['contacto']: old('contacto_emp_carga') }}" >
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_emp_carga" id="telefono_emp_carga" class="form-control"
                                       autofocus  value="{{ isset($servicio->cargas->empresaTransporte['telefono']) ? $servicio->cargas->empresaTransporte['telefono']: old('telefono_emp_carga') }}">

                                   </div>
                               </div>
                               <input type="text" name="id_emp_carga" id="id_emp_carga" class="form-control" hidden autofocus  value="{{ isset($servicio->cargas->empresaTransporte['id']) ? $servicio->cargas->empresaTransporte['id']: old('id_emp_carga') }}">
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
                                          <input type="text" name="nombre_exportador" id="nombre_exportador" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->exportador->nombre) ? $servicio->exportador->nombre: old('nombre_exportador') }}">

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
                                          <input class="form-control" name="rfc_exportador" id="rfc_exportador"  type="text" autofocus value="{{ isset($servicio->exportador->rfc) ? $servicio->exportador->rfc: old('rfc_exportador') }}">

                                        </div>
                                    </div>
                               </div>
                               <!--
                               <div class="col-md-2 col-sm-12" >
                                   <div class="form-group">
                                        <label>País de Origen</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="pais_origen" id="pais_origen"  type="text" autofocus value="">
                                        </div>
                                    </div>
                               </div> -->
                                <!--
                               <div class="col-md-2 col-sm-12" >
                                   <div class="form-group">
                                        <label>Ciudad de Origen</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="ciudad_origen" id="ciudad_origen"  type="text" autofocus value="">
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
                                       autofocus value="{{ isset($servicio->exportador->domicilio) ? $servicio->exportador->domicilio: old('domicilio_exportador') }}">

                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_exportador" id="contacto_exportador" class="form-control"
                                       autofocus value="{{ isset($servicio->exportador->contacto) ? $servicio->exportador->contacto: old('contacto_exportador') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_exportador" id="telefono_exportador" class="form-control"
                                       autofocus value="{{ isset($servicio->exportador->telefono) ? $servicio->exportador->telefono: old('telefono_exportador') }}">
                                   </div>
                               </div>
                               <input type="text" name="id_exportador" id="id_exportador" class="form-control" hidden autofocus value="{{ isset($servicio->exportador->id) ? $servicio->exportador->id: old('id_exportador') }}">
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
                                          <input type="text" name="nombre_ag_ad_exportacion" id="nombre_ag_ad_exportacion" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->agente_ad_exportacion->nombre) ? $servicio->agente_ad_exportacion->nombre: old('nombre_ag_ad_exportacion') }}">
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
                                          <input class="form-control" name="nit_ag_ad_exportacion" id="nit_ag_ad_exportacion"  type="text" autofocus value="{{ isset($servicio->agente_ad_exportacion->nit) ? $servicio->agente_ad_exportacion->nit: old('nit_ag_ad_exportacion') }}">
                                        </div>
                                    </div>
                               </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Domicilio</label>
                                       <input type="text" name="domicilio_ag_ad_exportacion" id="domicilio_ag_ad_exportacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_exportacion->domicilio) ? $servicio->agente_ad_exportacion->domicilio: old('domicilio_ag_ad_exportacion') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_ag_ad_exportacion" id="contacto_ag_ad_exportacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_exportacion->contacto) ? $servicio->agente_ad_exportacion->contacto: old('contacto_ag_ad_exportacion') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_ag_ad_exportacion" id="telefono_ag_ad_exportacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_exportacion->telefono) ? $servicio->agente_ad_exportacion->telefono: old('telefono_ag_ad_exportacion') }}">
                                   </div>
                               </div>
                               <input type="text" name="id_ag_ad_exportacion" id="id_ag_ad_exportacion" class="form-control" hidden  autofocus value="{{ isset($servicio->agente_ad_exportacion->id) ? $servicio->agente_ad_exportacion->id: old('id_ag_ad_exportacion') }}">
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
                                          <input type="text" name="nombre_importador" id="nombre_importador" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->importador->nombre) ? $servicio->importador->nombre: old('nombre_importador') }}">
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
                                          <input class="form-control" name="nit_importador" id="nit_importador"  type="text" autofocus value="{{ isset($servicio->importador->nit) ? $servicio->importador->nit: old('nit_importador') }}">
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Domicilio</label>
                                       <input type="text" name="domicilio_importador" id="domicilio_importador" class="form-control"
                                       autofocus value="{{ isset($servicio->importador->domicilio) ? $servicio->importador->domicilio: old('domicilio_importador') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_importador" id="contacto_importador" class="form-control"
                                       autofocus value="{{ isset($servicio->importador->contacto) ? $servicio->importador->contacto: old('contacto_importador') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_importador" id="telefono_importador" class="form-control"
                                       autofocus value="{{ isset($servicio->importador->telefono) ? $servicio->importador->telefono: old('telefono_importador') }}">
                                   </div>
                               </div>
                               <input type="text" name="id_importador" id="id_importador" class="form-control" hidden autofocus value="{{ isset($servicio->importador->id) ? $servicio->importador->id: old('id_importador') }}">
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
                                          <input type="text" name="nombre_ag_ad_importacion" id="nombre_ag_ad_importacion" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->agente_ad_importacion->nombre) ? $servicio->agente_ad_importacion->nombre: old('nombre_ag_ad_importacion') }}">
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
                                          <input class="form-control" name="nit_ag_ad_importacion" id="nit_ag_ad_importacion"  type="text" autofocus value="{{ isset($servicio->agente_ad_importacion->nit) ? $servicio->agente_ad_importacion->nit: old('nit_ag_ad_importacion') }}">
                                        </div>
                                    </div>
                               </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Domicilio</label>
                                       <input type="text" name="domicilio_ag_ad_importacion" id="domicilio_ag_ad_importacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_importacion->domicilio) ? $servicio->agente_ad_importacion->domicilio: old('domicilio_ag_ad_importacion') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Contacto</label>
                                       <input type="text" name="contacto_ag_ad_importacion" id="contacto_ag_ad_importacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_importacion->contacto) ? $servicio->agente_ad_importacion->contacto: old('contacto_ag_ad_importacion') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_ag_ad_importacion" id="telefono_ag_ad_importacion" class="form-control"
                                       autofocus value="{{ isset($servicio->agente_ad_importacion->telefono) ? $servicio->agente_ad_importacion->telefono: old('telefono_ag_ad_importacion') }}">
                                   </div>
                               </div>
                               <input type="text" name="id_ag_ad_importacion" id="id_ag_ad_importacion" class="form-control" hidden autofocus value="{{ isset($servicio->agente_ad_importacion->id) ? $servicio->agente_ad_importacion->id: old('id_ag_ad_importacion') }}">
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
                                       autofocus value="{{ date('Y-m-d', strtotime($servicio->entregas->fecha)) }}" >
                                   </div>
                               </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                       <label>Hora</label>
                                       <select class="form-control" name="hora_entrega_final" id="hora_entrega_final">
                                            <option value="09:00 am" @if ($servicio->entregas->hora === "09:00 am" || old('hora_entrega_final') === "09:00 am") selected @endif >09:00 am</option>
                                            <option value="10:00 am" @if ($servicio->entregas->hora === "10:00 am" || old('hora_entrega_final') === "10:00 am") selected @endif>10:00 am</option>
                                            <option value="11:00 am" @if ($servicio->entregas->hora === "11:00 am" || old('hora_entrega_final') === "11:00 am") selected @endif>11:00 am</option>
                                            <option value="12:00 am" @if ($servicio->entregas->hora === "12:00 am" || old('hora_entrega_final') === "12:00 am") selected @endif>12:00 am</option>
                                            <option value="13:00 pm" @if ($servicio->entregas->hora === "13:00 pm" || old('hora_entrega_final') === "13:00 pm") selected @endif>13:00 pm</option>
                                            <option value="14:00 pm" @if ($servicio->entregas->hora === "14:00 pm" || old('hora_entrega_final') === "14:00 pm") selected @endif>14:00 pm</option>
                                            <option value="15:00 pm" @if ($servicio->entregas->hora === "15:00 pm" || old('hora_entrega_final') === "15:00 pm") selected @endif>15:00 pm</option>
                                            <option value="16:00 pm" @if ($servicio->entregas->hora === "16:00 pm" || old('hora_entrega_final') === "16:00 pm") selected @endif>16:00 pm</option>
                                            <option value="17:00 pm" @if ($servicio->entregas->hora === "17:00 pm" || old('hora_entrega_final') === "17:00 pm") selected @endif>17:00 pm</option>
                                            <option value="18:00 pm" @if ($servicio->entregas->hora === "18:00 pm" || old('hora_entrega_final') === "18:00 pm") selected @endif>18:00 pm</option>
                                            <option value="19:00 pm" @if ($servicio->entregas->hora === "19:00 pm" || old('hora_entrega_final') === "19:00 pm") selected @endif>19:00 pm</option>
                                            <option value="20:00 pm" @if ($servicio->entregas->hora === "20:00 pm" || old('hora_entrega_final') === "20:00 pm") selected @endif>20:00 pm</option>
                                            <option value="21:00 pm" @if ($servicio->entregas->hora === "21:00 pm" || old('hora_entrega_final') === "21:00 pm") selected @endif>21:00 pm</option>
                                        </select>
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Nombre de la Empresa</label>
                                        <div class="input-field">
                                          <input type="text" name="empresa_final" id="empresa_final" class="form-control" autofocus autocomplete="off" value="{{ isset($servicio->entregas->empresaTransporte['nombre']) ? $servicio->entregas->empresaTransporte['nombre']: old('empresa_final') }}">
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
                                       autofocus value="{{ isset($servicio->entregas->empresaTransporte['contacto']) ? $servicio->entregas->empresaTransporte['contacto']: old('contacto_emp_final') }}">
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-12">
                                   <div class="form-group">
                                       <label>Telefono</label>
                                       <input type="text" name="telefono_emp_final" id="telefono_emp_final" class="form-control"
                                       autofocus value="{{ isset($servicio->entregas->empresaTransporte['telefono']) ? $servicio->entregas->empresaTransporte['telefono']: old('telefono_emp_final') }}">
                                   </div>
                               </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6 col-sm-12" >
                                   <div class="form-group">
                                        <label>Dirección de Entrega</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="lugar_final_entrega" id="lugar_final_entrega"  type="text" autofocus value="{{old('lugar_final_entrega', $servicio->entregas->lugar_entrega)}}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-6 col-sm-12" >
                                   <div class="form-group">
                                        <label>Lugar de Destino</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="lugar_destino" id="lugar_destino"  type="text" autofocus placeholder="Ciudad, País" value="{{old('lugar_destino', $servicio->entregas->lugar_destino)}}">
                                        </div>
                                    </div>
                               </div>
                               
                               <input type="text" name="id_emp_entrega" id="id_emp_entrega" class="form-control" hidden autofocus value="{{old('id_emp_entrega', $servicio->entregas->id)}}">
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
                                          <input class="form-control" name="nro_pedido" id="nro_pedido"  type="text" autofocus value="{{old('nro_pedido', $servicio->detalle->nro_pedido_cliente)}}">
                                        </div>
                                    </div>
                               </div>

                               <div class="col-md-4 col-sm-12" >
                                   <div class="form-group">
                                        <label style="color: #f01700">Nro de Factura</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="nro_factura" id="nro_factura"  type="text" autofocus value="{{old('nro_factura', $servicio->detalle->nro_factura_cliente)}}">
                                        </div>
                                    </div>
                               </div>

                               <div class="col-md-4 col-sm-12" >
                                   <div class="form-group">
                                        <label style="color: #f01700">Fecha de Factura</label>
                                       <input type="date" name="fecha_factura" id="fecha_factura" class="form-control"
                                       autofocus value="{{ date('Y-m-d', strtotime($servicio->detalle->fecha_factura)) }}" >
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
                                          <input class="form-control" name="valor_mercancia" id="valor_mercancia"  type="text" autofocus value="{{old('valor_mercancia', $servicio->detalle->valor_mercancia)}}">
                                        </div>
                                    </div>
                               </div>

                               <div class="col-md-3 col-sm-12" >
                                   <div class="form-group">
                                        <label>Peso Neto</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="peso_mercancia" id="peso_mercancia"  type="text" autofocus placeholder="En Kg." value="{{old('peso_mercancia', $servicio->detalle->peso_neto)}}">
                                        </div>
                                    </div>
                               </div>

                               <div class="col-md-3 col-sm-12" >
                                   <div class="form-group">
                                        <label>Volumen</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="volumen_mercancia" id="volumen_mercancia"  type="text" autofocus value="{{old('volumen_mercancia', $servicio->detalle->volumen)}}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-3 col-sm-12" >
                                   <div class="form-group">
                                        <label>Pallets</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="pallets" id="pallets"  type="text" autofocus value="{{old('pallets', $servicio->detalle->pallets)}}">
                                        </div>
                                    </div>
                               </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12" >
                                   <div class="form-group">
                                        <label>Descripción de la Mercancía</label>
                                        <div class="input-field">
                                          <input class="form-control" name="descripcion_mercancia" id="descripcion_mercancia"  type="text" autofocus value="{{ isset($servicio->detalle->desc_mercaderia['descripcion_mercaderia']) ? $servicio->detalle->desc_mercaderia['descripcion_mercaderia']: old('descripcion_mercancia') }}">
                                        </div>
                                    </div>
                               </div>

                               <div class="col-md-4 col-sm-12" >
                                   <div class="form-group">
                                        <label>Fracción Arancelaria</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="fraccion_arancelaria" id="fraccion_arancelaria"  type="text" autofocus value="{{ isset($servicio->detalle->desc_mercaderia['fraccion_arancelaria']) ? $servicio->detalle->desc_mercaderia['fraccion_arancelaria']: old('fraccion_arancelaria') }}">
                                        </div>
                                    </div>
                               </div>

                               <input type="text" name="id_descrip_merc" id="id_descrip_merc" class="form-control"  autofocus hidden value="{{ isset($servicio->detalle->desc_mercaderia['id']) ? $servicio->detalle->desc_mercaderia['id']: old('id_descrip_merc') }}">

                               <div class="col-md-4 col-sm-12" >
                                   <div class="form-group">
                                        <label>Regimen Aduanero</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="regimen_aduanero" id="regimen_aduanero"  type="text" autofocus value="{{old('regimen_aduanero', $servicio->detalle->regimen_aduanero)}}">
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
                                            <option value="Terrestre" @if ($servicio->detalle->medio_transporte === "Terrestre" || old('medio_transporte') === "Terrestre") selected @endif >Terrestre</option>
                                            <option value="Marítimo" @if ($servicio->detalle->medio_transporte === "Marítimo" || old('medio_transporte') === "Marítimo") selected @endif >Marítimo</option>
                                            <option value="Aéreo" @if ($servicio->detalle->medio_transporte === "Aéreo" || old('medio_transporte') === "Aéreo") selected @endif >Aéreo</option>
                                        </select>
                                   </div>
                               </div>
                                <div class="col-md-4 col-sm-12" >
                                    <div class="form-group">
                                        <label>Aduana de Inicio</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="aduana_inicio" id="aduana_inicio"  type="text" autofocus value="{{old('aduana_inicio', $servicio->detalle->aduana_inicio)}}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-4 col-sm-12" >
                                    <div class="form-group">
                                        <label>Aduana de Ingreso</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="aduana_ingreso" id="aduana_ingreso"  type="text" autofocus value="{{old('aduana_ingreso', $servicio->detalle->aduana_ingreso)}}">
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
                                          <input class="form-control" name="operador" id="operador"  type="text" autofocus autocomplete="off" value="{{ isset($servicio->transporte->operador) ? $servicio->transporte->operador: old('operador') }}">
                                        </div>
                                   </div>
                                   <input type="text" name="id_transporte" id="id_transporte" class="form-control"  autofocus hidden value="{{ isset($servicio->transporte->id) ? $servicio->transporte->id: old('id_transporte') }}">
                                   
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
                                          <input class="form-control" name="placas_tracto" id="placas_tracto"  type="text" autofocus value="{{ isset($servicio->transporte->placas_tracto) ? $servicio->transporte->placas_tracto: old('placas_tracto') }}">
                                        </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>Licencia</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="licencia" id="licencia"  type="text" autofocus value="{{ isset($servicio->transporte->licencia) ? $servicio->transporte->licencia: old('licencia') }}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>CAAT</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="caat" id="caat"  type="text" autofocus value="{{ isset($servicio->transporte->caat) ? $servicio->transporte->caat: old('caat') }}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>Número ECO</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="nro_eco" id="nro_eco"  type="text" autofocus value="{{ isset($servicio->transporte->nro_eco) ? $servicio->transporte->nro_eco: old('nro_eco') }}">
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                       <label>Capacidad</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="capacidad" id="capacidad"  type="text" autofocus value="{{ isset($servicio->transporte->capacidad) ? $servicio->transporte->capacidad: old('capacidad') }}">
                                        </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>Placas Caja</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="placa_cajas" id="placa_cajas"  type="text" autofocus value="{{ isset($servicio->transporte->placa_cajas) ? $servicio->transporte->placa_cajas: old('placa_cajas') }}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>Transporte Afianzador</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="transporte_afianzador" id="transporte_afianzador" type="text" autofocus value="{{ isset($servicio->transporte->transporte_afianzador) ? $servicio->transporte->transporte_afianzador: old('transporte_afianzador') }}">
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-3 col-sm-12" >
                                    <div class="form-group">
                                        <label>Código Aduanero</label>
                                        <div class="input-group mb-4">
                                          <input class="form-control" name="codigo_aduanero" id="codigo_aduanero" type="text" autofocus value="{{ isset($servicio->transporte->codigo_aduanero) ? $servicio->transporte->codigo_aduanero: old('codigo_aduanero') }}">
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
                                            <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center" width=5% >N°</th> -->
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Factura</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Cajas</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=10% >Peso</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" width=50% >Descripción</th>
                                            <th class="text-secondary opacity-7" width=10% ></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($servicio->productos as $prod)
                                            <tr id="product0">
                                            <!-- <th class="text-center">1</th> -->
                                            <th><input class="form-control" name="producto_factura[]" id="producto_factura"  type="text" autofocus value="{{ isset($prod->factura) ? $prod->factura: old('producto_factura[]') }}"></th>
                                            <th><input class="form-control" name="producto_cajas[]" id="producto_cajas"  type="text" autofocus value="{{ isset($prod->cajas) ? $prod->cajas: old('producto_cajas[]') }}"></th>
                                            <th><input class="form-control" name="producto_peso[]" id="producto_peso"  type="text" autofocus placeholder="En Kg." value="{{ isset($prod->peso) ? $prod->peso: old('producto_peso[]') }}"></th>
                                            <th><input class="form-control" name="producto_descripcion[]" id="producto_descripcion"  type="text" autofocus value="{{ isset($prod->contenido) ? $prod->contenido: old('producto_descripcion[]') }}"></th>
                                            <td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot style="background-color: #f0f0f0;">
                                            <tr>
                                            <th colspan="1" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
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
                                                  <input type="text"  class="monto form-control text-center" onchange="sumarMonto();" name="flete" id="flete" autofocus value="{{ isset($servicio->pago->flete) ? $servicio->pago->flete: old('flete') }}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-12" >
                                            <div class="form-group">
                                                <label>Seguro</label>
                                                <div class="input-group">
                                                  <span class="input-group-text">$</span>
                                                  <input type="text"  class="monto form-control text-center" onchange="sumarMonto();" name="seguro" id="seguro" autofocus value="{{ isset($servicio->pago->seguro) ? $servicio->pago->seguro: old('seguro') }}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-11 col-sm-12" >
                                        <div class="form-group">
                                            <label>Total</label>
                                            <div class="input-group"  >
                                                <span class="input-group-text">$</span>
                                                <input type="text" id="total" name="total" class="form-control text-center" readonly value="{{ isset($servicio->pago->total) ? $servicio->pago->total: old('total') }}"/>
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
                                            <textarea class="form-control" id="observaciones" name="observaciones" rows="4" autofocus> {{ old('observaciones', $servicio->detalle->observaciones) }} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="text-center col-md-3 col-sm-12">
                            <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> Actualizar Servicio </button> 
                        </div>
                    </div>

                </div>
            </div>

            

       </form>
   </div>
</div>

@endsection

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Empresa Recolectora -->
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
    <script>
        var boton=document.getElementById('add_row');
        var lista=document.getElementById('lista');
        var data = [];
        var cant = 1;
        boton.addEventListener("click", agregar_producto);
        function agregar_producto(){
            var nrofila = cant+1;
            data.push(
                {
                    "id": cant,
                }
            );
            var id_row = 'product' + cant;
            var fila = '<tr id=' + id_row + '><th><input class="form-control" name="producto_factura[]" id="producto_factura"  type="text" autofocus></th><th><input class="form-control" name="producto_cajas[]" id="producto_cajas"  type="text" autofocus></th><th><input class="form-control" name="producto_peso[]" id="producto_peso"  type="text" autofocus placeholder="En Kg."></th><th><input class="form-control" name="producto_descripcion[]" id="producto_descripcion"  type="text" autofocus></th><td><a href="#" class="btn btn-link text-danger text-gradient px-3 mb-0" onclick="eliminar('+ cant +')";><i class="far fa-trash-alt me-2"></i></a></td> </tr>';
            //Agregar a la lista
            $('#lista').append(fila);
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
    <!--<script type="text/javascript">
      let total1 = 0;
      let celdascajas = document.querySelectorAll('td + td');
      for(let i = 0; i < celdascajas.length; ++i){
        total1 += parseFloat(celdascajas[i].firstChild.data);
      }
      console.log(total1);
      let nuevaFila = document.createElement('tr');
      let celdaTotal = document.createElement('td');
      let textoCeldaTotal = document.createTextNode('Total: ');
      celdaTotal.appendChild(textoCeldaTotal);
      nuevaFila.appendChild(celdaTotal);
      let celdaValorTotal = document.createElement('td');
      let textoCeldaValorTotal = document.createTextNode(total1);
      celdaValorTotal.appendChild(textoCeldaValorTotal);
      nuevaFila.appendChild(celdaValorTotal);
      document.getElementById('lista').appendChild(nuevaFila);
    </script> -->
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


