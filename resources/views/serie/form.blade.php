<div class="row">
   
    <div class="col-lg-11">

        <div class="card mb-4 h-100">
            <div class="card-body ">

                

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                           <label>Código de Serie</label>
                           <input type="text" name="serie" id="serie" class="form-control"
                           autofocus value="{{ isset($serie->serie) ? $serie->serie: old('serie') }}" required placeholder="Ejemplo: ABC" maxlength="5">
                           @error('serie')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
              
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Serie </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>