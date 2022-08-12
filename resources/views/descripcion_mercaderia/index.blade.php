@extends('plantilla_maestra')
@section('titulo', 'Mercadería')
@section('subtitulo1', 'Mercadería')
@section('subtitulo2', 'Lista de Mercadería')

@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('menu-6')
<li class="nav-item">
        <a class="nav-link active " href="/descmercaderia">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>settings</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="settings" transform="translate(304.000000, 151.000000)"> <polygon class="color-background" id="Path" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon> <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" id="Path" opacity="0.596981957"></path> <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z" id="Path"></path> </g> </g> </g> </g> </svg>
          </div>
          <span class="nav-link-text ms-1">Mercadería</span>
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
            href="{{ url('descmercaderia/create') }}">Agregar Mercadería </a>
          </div>
        </div><br>
        
        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="exportadores">
              <thead>
                <tr>
                  <th></th>
                  <th width="5%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th width="50%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Descripción</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Fracción Arancelaria</th>
                  <th width="10%"
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $descripcion_mercaderia as $descmerc)

                <tr >
                  <td>{{$descmerc->created_at}}</td>
                  <td  class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$descmerc->id}}</p>
                  </td>
                  <td >
                    <div class="my-auto">
                      <h6 class="mb-0 text-xs font-weight-bold" >{{$descmerc->descripcion_mercaderia}}</h6>
                    </div>
                  </td>
                  <td >
                      <span class="text-xs font-weight-bold mb-0">{{$descmerc->fraccion_arancelaria}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/descmercaderia/'.$descmerc->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}

                      <!-- <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>Ver</a> -->
                      <a title="Editar" style="padding:0px;" class="btn btn-link text-dark px-3 mb-0" href="{{ url('/descmercaderia/'.$descmerc->id.'/edit') }}"  ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>

                      <input  type="hidden" name="eliminarValor" value="{{ $descmerc->id }}">
                      <button title="Eliminar" style="padding:0px;" type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 "  id="btnEliminar">
                        <!-- onclick="return confirm ('¿Seguro que quiere eliminar este registro?')" -->
                        <i class="far fa-trash-alt me-2"></i>
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
    $('#exportadores').DataTable(
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
        "order": [[ 0, "desc" ]], 
        "columnDefs": [
                { "orderable": true, "className": 'reorder', "targets": [1,2] },
                { "orderable": false, "targets": '_all' },
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": false
                },
                { "targets":[0,1,2,3,4], "className": "desktop" },
                { "targets":[0,1,2,4], "className": "tablet, mobile" },
                { "targets":[], "className": "none" },
                { "orderable": false, "targets": [1,2] }
            ],
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
            swal("Exportador eliminado satisfactoriamente!", {
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