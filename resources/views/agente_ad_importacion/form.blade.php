<div class="row">
   
    <div class="col-lg-11">

        <div class="card mb-4 h-100">
            <div class="card-body ">

                

                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                           <label>Nombre del Agente Aduanal de Importación</label>
                           <input type="text" name="nombre" id="nombre" class="form-control"
                           autofocus value="{{ isset($agente_ad_importacion->nombre) ? $agente_ad_importacion->nombre: old('nombre') }}" required>
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
                            <input type="text" name="nit" id="nit" class="form-control" autofocus value="{{ isset($agente_ad_importacion->nit) ? $agente_ad_importacion->nit: old('nit') }}" required>
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
                            <input type="text" name="domicilio" id="domicilio" class="form-control" autofocus value="{{ isset($agente_ad_importacion->domicilio) ? $agente_ad_importacion->domicilio: old('domicilio') }}" required>
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
                            <input type="text" name="contacto" id="contacto" class="form-control" autofocus value="{{ isset($agente_ad_importacion->contacto) ? $agente_ad_importacion->contacto: old('contacto') }}" required>
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
                            <input type="text" name="telefono" id="telefono" class="form-control" autofocus value="{{ isset($agente_ad_importacion->telefono) ? $agente_ad_importacion->telefono: old('telefono') }}" required>
                            @error('telefono')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Agente Ad. de Importación </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>