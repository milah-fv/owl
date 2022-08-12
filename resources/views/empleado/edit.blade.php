@extends('plantilla_maestra')
@section('titulo', 'Editar Empleado')
@section('subtitulo1', 'Empleados')
@section('subtitulo2', 'Editar Empleado')

@section('menu-7')
<li class="nav-item">
	<a class="nav-link  active" href="/empleados">
		<div
		class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
		<svg class="text-dark" width="16px" height="16px" viewBox="0 0 46 42" version="1.1"
		xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<title>customer-support</title>
		<g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			<g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
			fill-rule="nonzero">
			<g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
				<g id="customer-support" transform="translate(1.000000, 0.000000)">
					<path class="color-background"
					d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
					id="Path" opacity="0.59858631"></path>
					<path class="color-foreground"
					d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
					id="Path"></path>
					<path class="color-foreground"
					d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"
					id="Path"></path>
				</g>
			</g>
		</g>
	</g>
</svg>
</div>
<span class="nav-link-text ms-1">Empleados</span>
</a>
</li>
@endsection

@section ('contenido')




<div class="container-fluid py-4">
	<div class="row mt-4">
		<form action="{{ url( '/empleados/'.$empleado->id ) }}" method="post" enctype="multipart/form-data">
			@csrf
			{{method_field ('PATCH') }}
		
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
                           <input type="text" name="name" id="name" class="form-control"
                           autofocus value="{{ isset($empleado->name) ? $empleado->name: old('name') }}" required>
                           @error('name')
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ejemplo@gmail.com" autofocus value="{{ isset($empleado->email)? $empleado->email: old('email') }}" required>
                            @error('email')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="text" name="password" id="password" class="form-control" autofocus >
                            @error('password')
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
                           <label>Nro de Teléfono</label>
                           <input type="text" name="celular" id="celular" class="form-control" autofocus value="{{ isset($empleado->celular)? $empleado->celular: old('celular') }}" required>
                           @error('celular')
                                <small class="alert">* {{$message}}</small>
                            @enderror
                       </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <label>Cargo</label>
                           <select class="form-control" name="cargo" id="cargo">
                                <option value="Ventas" @if ($empleado->cargo === "Ventas" || old('cargo') === "Ventas") selected @endif >Ventas</option>
                                <option value="Coord. Comercio Ext." @if ($empleado->cargo === "Coord. Comercio Ext." || old('cargo') === "Coord. Comercio Ext.") selected @endif >Coord. Comercio Ext.</option>
                                <option value="Finanzas" @if ($empleado->cargo === "Finanzas" || old('cargo') === "Finanzas") selected @endif >Finanzas</option>
                                <option value="Administrador" @if ($empleado->cargo === "Administrador" || old('cargo') === "Administrador") selected @endif >Administrador</option>
                            </select>
                       </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="text-center col-md-4 col-sm-12">

                        <button class="btn bg-gradient-primary w-100 mt-4 mb-0"> Actualizar Empleado </button> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
		</form>
	</div>
</div>
@endsection


