<div class="row">
    <div class="col-lg-11">
        <div class="card mb-4 h-100">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                           <label>Descripción de la Mercadería</label>
                           <input type="text" name="descmerc_descripcion_mercaderia" id="descmerc_descripcion_mercaderia" class="form-control"
                           autofocus value="{{ isset($descripcion_mercaderia->descripcion_mercaderia) ? $descripcion_mercaderia->descripcion_mercaderia: old('descmerc_descripcion_mercaderia') }}" required>
                           @error('descmerc_descripcion_mercaderia')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Fracción Arancelaria</label>
                            <input type="text" name="descmerc_fraccion_arancelaria" id="descmerc_fraccion_arancelaria" class="form-control" autofocus value="{{ isset($descripcion_mercaderia->fraccion_arancelaria) ? $descripcion_mercaderia->fraccion_arancelaria: old('descmerc_fraccion_arancelaria') }}" required>
                            @error('descmerc_fraccion_arancelaria')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                </div>
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Mercadería </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>