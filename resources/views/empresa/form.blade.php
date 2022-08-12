<div class="row">
    <div class="col-lg-11">
        <div class="card mb-4 h-100">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                           <label>Nombre de la Empresa</label>
                           <input type="text" name="empresa_nombre" id="empresa_nombre" class="form-control"
                           autofocus value="{{ isset($empresa->nombre) ? $empresa->nombre: old('empresa_nombre') }}" >
                           @error('empresa_nombre')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Domicilio</label>
                            <input type="text" name="empresa_domicilio" id="empresa_domicilio" class="form-control" autofocus value="{{ isset($empresa->domicilio) ? $empresa->domicilio: old('empresa_domicilio') }}" required>
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
                            <input type="text" name="empresa_contacto" id="empresa_contacto" class="form-control" autofocus value="{{ isset($empresa->contacto) ? $empresa->contacto: old('empresa_contacto') }}" required>
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
                            <input type="text" name="empresa_telefono" id="empresa_telefono" class="form-control" autofocus value="{{ isset($empresa->telefono) ? $empresa->telefono: old('empresa_telefono') }}" required>
                            @error('telefono')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Empresa </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>