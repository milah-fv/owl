<div class="row">
   
    <div class="col-lg-11">

        <div class="card mb-4 h-100">
            <div class="card-body ">

                

                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                           <label>Nombre del Agente Aduanal de Exportación</label>
                           <input type="text" name="nombre" id="nombre" class="form-control"
                           autofocus value="{{ isset($agente_ad_exportacion->nombre) ? $agente_ad_exportacion->nombre: old('nombre') }}" required>
                           @error('nombre')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>NIT</label>
                            <input type="text" name="nit" id="nit" class="form-control" autofocus value="{{ isset($agente_ad_exportacion->nit) ? $agente_ad_exportacion->nit: old('nit') }}" required>
                            @error('nit')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label for="domicilio">Domicilio</label>
                            <input type="text" name="domicilio" id="domicilio" class="form-control" autofocus value="{{ isset($agente_ad_exportacion->domicilio) ? $agente_ad_exportacion->domicilio: old('domicilio') }}" required>
                            @error('domicilio')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Contacto</label>
                            <input type="text" name="contacto" id="contacto" class="form-control" autofocus value="{{ isset($agente_ad_exportacion->contacto) ? $agente_ad_exportacion->contacto: old('contacto') }}" required>
                            @error('contacto')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" autofocus value="{{ isset($agente_ad_exportacion->telefono) ? $agente_ad_exportacion->telefono: old('telefono') }}" required>
                            @error('telefono')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Agente Ad. de Exportación </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>