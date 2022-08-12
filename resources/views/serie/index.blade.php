@extends('plantilla_maestra')
@section('titulo', 'Series de Facturación')
@section('subtitulo1', 'Series de Facturación')
@section('subtitulo2', 'Lista de Series')

@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('menu-8')
<li class="nav-item">
        <a class="nav-link active" href="/serie">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>document</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="document" transform="translate(154.000000, 300.000000)"> <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path> <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path> </g> </g> </g> </g> </svg>
          </div>
          <span class="nav-link-text ms-1">Serie de Facturación</span>
        </a>
      </li>
@endsection


@section('contenido')
<div class="container-fluid py-4">

  <div class="row">
    <div class="col-11">
      <div class="card ">
        <div class="card-header pb-0">
          <div class="text-center col-md-4 col-sm-12">
            <a type="button" class="btn bg-gradient-primary w-100 mt-4 mb-0"
            href="{{ url('serie/create') }}">Agregar Serie </a>
          </div>
        </div><br>
        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="tblseries">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center ps-2">
                  N°</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">
                  Serie</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $series as $serie)

                <tr>
                  <td  class="align-middle text-center">
                    <p class="text-sm font-weight-bold mb-0">{{$serie->id}}</p>
                  </td>
                  <td>
                    <div class="align-middle text-center">
                      <h6 class="mb-0 text-sm">{{$serie->serie}}</h6>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/serie/'.$serie->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}
                      <a class="btn btn-link text-dark px-3 mb-0" href="{{ url('/serie/'.$serie->id.'/edit') }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>

                      <input type="hidden" name="eliminarValor" value="{{ $serie->id }}">
                      <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 "  id="btnEliminar">
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
    $('#tblseries').DataTable(
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
            swal("Serie eliminada satisfactoriamente!", {
              icon: "success",
            });
          } else {
            swal("Fiuu! Aún no se eliminó nada");
          }
        }); 
      });
    });
  </script>

  
@endsection