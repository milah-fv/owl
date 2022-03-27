<div class="row">
    <div class="col-lg-4 mb-lg-0 mb-4">
        <div class="card h-100">
            <div class="card-body "> 
                <div class="row  mb-4">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                        <img src="{{ isset($empleado->img) ? asset('img/empleados').'/'.$empleado->img : '/img/empleados/user.png' }}" class="avatar avatar-empleado rounded-circle me-2">
                    </div>
                </div>
                <div class="row  mb-4">
                    <div class="col-md-11">
                        <div class="form-group">
                               <label>Elija una Imágen de Perfil</label>
                            <input type="file" class="btn btn-outline-primary w-100 mt-4 mb-0" name="img" id="img" value="{{ isset($empleado->img) ? $empleado->img: old('img') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">

        <div class="card mb-4 h-100">
            <div class="card-body ">

                

               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label>Nombres</label>
                           <input type="text" name="nombre" id="nombre" class="form-control"
                           autofocus value="{{ isset($empleado->nombre) ? $empleado->nombre: old('nombre') }}" required>
                           @error('nombre')
                            <small class="alert">* {{$message}}</small>
                           @enderror
                       </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos" class="form-control" autofocus value="{{ isset($empleado->apellidos) ? $empleado->apellidos: old('apellidos') }}" required>
                            @error('apellidos')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
               </div>
               <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Domicilio</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" autofocus value="{{ isset($empleado->direccion)? $empleado->direccion: old('direccion') }}" required>
                            @error('direccion')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                   </div>
                   <div class="col-md-4">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@gmail.com" autofocus value="{{ isset($empleado->email)? $empleado->email: old('email') }}" required>
                            @error('email')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                           <label>Nro de Celular</label>
                           <input type="text" name="celular" id="celular" class="form-control" autofocus value="{{ isset($empleado->celular)? $empleado->celular: old('celular') }}" required>
                           @error('celular')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="text-center col-md-3 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> {{$modo}} Empleado </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>