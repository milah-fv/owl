@extends('plantilla_maestra')
@section('titulo', 'Agente Aduanal de Exportación')
@section('subtitulo1', 'Agente Aduanal de Exportación')
@section('subtitulo2', 'Lista de Agentes Ad. de Exportación')

@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('menu-2')
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#collapseExportacion" role="button" aria-expanded="false" aria-controls="collapseExportacion">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>office</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="office" transform="translate(153.000000, 2.000000)"> <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path> <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path> </g> </g> </g> </g> </svg>
      
          </div>
          <span class="nav-link-text ms-1">Data Exportación</span>
        </a>
        <ul class="nav ms-4 ps-2" >
          <li class=" collapse show" id="collapseExportacion">
           <a class="nav-link " href="/exportador">
              <div
                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>office</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="office" transform="translate(153.000000, 2.000000)"> <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path> <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path> </g> </g> </g> </g> </svg>
      
              </div>
              <span class="nav-link-text ms-1">Exportador</span>
            </a>
          </li>
        </ul>
        <ul class="nav ms-4 ps-2" >
          <li class=" collapse show" id="collapseExportacion">
           <a class="nav-link active" href="/ag_ad_exportacion">
              <div
                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>office</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="office" transform="translate(153.000000, 2.000000)"> <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path> <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path> </g> </g> </g> </g> </svg>
      
              </div>
              <span class="nav-link-text ms-1">Ag. Aduanal de Exp.</span>
            </a>
          </li>
        </ul>
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
            href="{{ url('ag_ad_exportacion/create') }}">Agregar Agente Ad. de Exportación </a>
          </div>
        </div><br>
        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="ag_ad_exportacion">
              <thead>
                <tr>
                  <th></th>
                  <th width="5%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th width="25%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Nombre</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  NIT</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Domicilio</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Contacto</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Teléfono</th>
                  <th width="10%" class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $agentes_ad_exportacion as $agente_ad_exportacion)

                <tr>
                  <td>{{$agente_ad_exportacion->updated_at}}</td>
                  <td  class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$agente_ad_exportacion->id}}</p>
                  </td>
                  <td>
                    <div class="my-auto">
                      <h6 class="mb-0 text-xs font-weight-bold">{{$agente_ad_exportacion->nombre}}</h6>
                    </div>
                  </td>
                  <td >
                      <span class="text-xs font-weight-bold mb-0">{{$agente_ad_exportacion->nit}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$agente_ad_exportacion->domicilio}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$agente_ad_exportacion->contacto}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$agente_ad_exportacion->telefono}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/ag_ad_exportacion/'.$agente_ad_exportacion->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}
                      <a title="Editar" class="btn btn-link text-dark px-3 mb-0" href="{{ url('/ag_ad_exportacion/'.$agente_ad_exportacion->id.'/edit') }}" style="padding:0px; "><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>

                      <input type="hidden" name="eliminarValor" value="{{ $agente_ad_exportacion->id }}">
                      <button style="padding:0px;" title="Eliminar" type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 "  id="btnEliminar">
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
    $('#ag_ad_exportacion').DataTable(
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
                { "targets":[0,1,2,5,6,7], "className": "desktop" },
                { "targets":[0,1,2,7], "className": "tablet, mobile" },
                { "targets":[3,4], "className": "none" },
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
            swal("Agente Aduanal de Exportación eliminado satisfactoriamente!", {
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