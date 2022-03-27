@extends('plantilla_maestra')
@section('titulo', 'Empleado')
@section('subtitulo1', 'Empleados')
@section('subtitulo2', 'Lista de Empleados')

@section('css')
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('menu-4')
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


@section('contenido')
<div class="container-fluid py-4">

  <div class="row">
    <div class="col-11">
      <div class="card ">
        <div class="card-header pb-0">
          <div class="text-center col-4">
            <a type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0"
            href="{{ url('empleados/create') }}">Agregar Empleado </a>
          </div>
        </div><br>
        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="empleados">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Avatar</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Nombres y Apellidos</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                N° Celular</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Cargo</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $empleados as $empleado)

                <tr>
                  <td  class="align-middle text-center">
                    <p class="text-sm font-weight-bold mb-0">{{$empleado->id}}</p>
                  </td>
                  <td >
                    <div class="my-auto">
                      @if(isset($empleado->img))
                      <img src="{{ asset('img/empleados').'/'.$empleado->img }}
                      " class="avatar avatar-sm rounded-circle me-2">
                      <!-- src="img/empleados/$empleado->img" -->
                      @else
                      <img src="{{ asset('img/empleados/user.png') }}
                      " class="avatar avatar-sm rounded-circle me-2">
                      @endif
                    </div>
                  </td>
                  <td>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$empleado->nombre}} {{$empleado->apellidos}}</h6>
                    </div>
                  </td>
                  <td >
                    <div class="my-auto">
                      <p class="text-sm font-weight-bold mb-0">{{$empleado->celular}}</p>
                    </div>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$empleado->direccion}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/empleados/'.$empleado->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}

                      <!-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>Ver</a> -->
                      <a class="btn btn-link text-dark px-3 mb-0" href="{{ url('/empleados/'.$empleado->id.'/edit') }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>

                      <input type="hidden" name="eliminarValor" value="{{ $empleado->id }}">
                      <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 "  id="btnEliminar">
                        <!-- onclick="return confirm ('¿Seguro que quiere eliminar este registro?')" -->
                        <i class="far fa-trash-alt me-2"></i>Eliminar
                      </button>
                    </form> 
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        
        

      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    $('#empleados').DataTable(
      {
        responsive: true,
        autoWidth: false,
        "language": {
            "lengthMenu": "Mostrar " 
                      +
                      '<select class="form-select form-select-sm"> <option value="10"> 10 </option> <option value="25"> 25 </option> <option value="50"> 50 </option> <option value="100"> 100 </option> <option value="-1"> Todos </option> </select>'
                      + " registros por página",
            "zeroRecords": "Lo sentimos, no se encontraron registros",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrando de un total de _MAX_ registros)",
            "search": "Buscar: ",
            "paginate": {
              "next": "<i class='fa fa-angle-right'></i>",
              "previous": "<i class='fa fa-angle-left'></i>",
            }
        },
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.formEliminar').submit(function(e){
        e.preventDefault();
       
        //alert ('Hola');

        swal({
          title: "¿Eliminar este registro?",
          text: "Una vez borrado, no se podrá recuperar la información",
          icon: "warning",
          buttons: true,

          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            this.submit();
            swal("Empleado eliminado satisfactoriamente!", {
              icon: "success",
            });
          } else {
            swal("Fiuu! Aún no se eliminó nada");
          }
        }); 
      });
    });
  </script>
  <!-- <script >
     $(document).on('click','#btnEliminar',function() 
    {
        
          swal({
            title: '¿Eliminar producto?',
            text: "Se perdera toda la información del producto, y no se puede revertir",
            type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Eliminar producto',
            confirmButtonColor: '#e85b5b',
      cancelButtonText: 'Cancelar',
            cancelButtonColor: '#848484',
      preConfirm: (value) => 
      {
        return new Promise((resolve) => 
        {
          $.ajax({
                        type: 'delete',
                        url: '/empleados'+ id,
                        data: 
                        {
                            '_token': $('input[name=_token]').val(),
                            'id': id
                        },
            success: function(data) 
            {
              resolve()
              table.row(row).remove().draw();
            },
            error: function(data) 
            {
                            console.log(data);
                            swal({
                            type: 'error',
                            title: 'Error al eliminar',
                            text: "El producto esta asociado con alguna venta",
                            confirmButtonColor: '#e85b5b',
                            confirmButtonText: 'Aceptar',
                            // text: data.responseJSON.error
                        });
              
            }
          });
        }); 
      },
      allowOutsideClick: () => !swal.isLoading()
    }).then((result) => 
    {
      if (result.value) 
      {
        swal({
        type: 'success',
        title: 'Producto eliminado exitosamente!'
        })
      }
      });
    });
  </script> -->
  
@endsection