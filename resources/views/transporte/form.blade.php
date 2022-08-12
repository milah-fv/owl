<div class="row">
    <div class="col-lg-11">
        <div class="card mb-4 h-100">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                           <label>Operador</label>
                           <input type="text" name="transporte_operador" id="transporte_operador" class="form-control"
                           autofocus value="{{ isset($transporte->operador) ? $transporte->operador: old('transporte_operador') }}" required>
                           @error('transporte_operador')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Placas Tracto</label>
                           <input type="text" name="transporte_placas_tracto" id="transporte_placas_tracto" class="form-control"
                           autofocus value="{{ isset($transporte->placas_tracto) ? $transporte->placas_tracto: old('transporte_placas_tracto') }}" >
                           @error('transporte_placas_tracto')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Licencia</label>
                           <input type="text" name="transporte_licencia" id="transporte_licencia" class="form-control"
                           autofocus value="{{ isset($transporte->licencia) ? $transporte->licencia: old('transporte_licencia') }}" >
                           @error('transporte_licencia')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>CAAT</label>
                           <input type="text" name="transporte_caat" id="transporte_caat" class="form-control"
                           autofocus value="{{ isset($transporte->caat) ? $transporte->caat: old('transporte_caat') }}" >
                           @error('transporte_caat')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Nro ECO</label>
                           <input type="text" name="transporte_nro_eco" id="transporte_nro_eco" class="form-control"
                           autofocus value="{{ isset($transporte->nro_eco) ? $transporte->nro_eco: old('transporte_nro_eco') }}" >
                           @error('transporte_nro_eco')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Capacidad</label>
                           <input type="text" name="transporte_capacidad" id="transporte_capacidad" class="form-control"
                           autofocus value="{{ isset($transporte->capacidad) ? $transporte->capacidad: old('transporte_capacidad') }}" >
                           @error('transporte_capacidad')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Placa Cajas</label>
                           <input type="text" name="transporte_placa_cajas" id="transporte_placa_cajas" class="form-control"
                           autofocus value="{{ isset($transporte->placa_cajas) ? $transporte->placa_cajas: old('transporte_placa_cajas') }}" >
                           @error('transporte_placa_cajas')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Transporte Afianzador</label>
                           <input type="text" name="transporte_transporte_afianzador" id="transporte_transporte_afianzador" class="form-control"
                           autofocus value="{{ isset($transporte->transporte_afianzador) ? $transporte->transporte_afianzador: old('transporte_transporte_afianzador') }}" >
                           @error('transporte_transporte_afianzador')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    <div class="col-md-5">
                        <div class="form-group">
                           <label>Codigo Aduanero</label>
                           <input type="text" name="transporte_codigo_aduanero" id="transporte_codigo_aduanero" class="form-control"
                           autofocus value="{{ isset($transporte->codigo_aduanero) ? $transporte->codigo_aduanero: old('transporte_codigo_aduanero') }}" >
                           @error('transporte_codigo_aduanero')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                </div>
                
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Transporte </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>