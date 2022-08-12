@extends('plantilla_maestra')
@section('titulo', 'Empresas')
@section('subtitulo1', 'Empresas')
@section('subtitulo2', 'Lista de Empresas')

@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">  
@endsection

@section('menu-4')
<li class="nav-item">
  <a class="nav-link  active" href="/empresa">
    <div
    class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>shop </title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="shop-" transform="translate(0.000000, 148.000000)"> <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" id="Path" opacity="0.598981585"></path> <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z" id="Path"></path> </g> </g> </g> </g> </svg>
</div>
<span class="nav-link-text ms-1">Empresas</span>
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
            href="{{ url('empresa/create') }}">Agregar Empresas </a>
          </div>
        </div><br>


         <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="exportadoresTabla">
              <thead>
                <tr>
                  <th></th>
                  <th width="5%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th width="25%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Nombre</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Domicilio</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Contacto</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Teléfono</th>
                  <th width="10%"
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $empresas as $empresa)

                <tr >
                  <td>{{$empresa->created_at}}</td>
                  <td  class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$empresa->id}}</p>
                  </td>
                  <td >
                    <div class="my-auto">
                      <h6 class="mb-0 text-xs font-weight-bold" >{{$empresa->nombre}}</h6>
                    </div>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$empresa->domicilio}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$empresa->contacto}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$empresa->telefono}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/empresa/'.$empresa->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}
                      <a title="Editar" style="padding:0px;" class="btn btn-link text-dark px-3 mb-0" href="{{ url('/empresa/'.$empresa->id.'/edit') }}"  ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                      <input  type="hidden" name="eliminarValor" value="{{ $empresa->id }}">
                      <button title="Eliminar" style="padding:0px;" type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0 "  id="btnEliminar">
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
    $('#exportadoresTabla').DataTable(
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
                { "targets":[0,1,2,4,5,6], "className": "desktop" },
                { "targets":[0,1,5,6], "className": "tablet, mobile" },
                { "targets":[3], "className": "none" },
                { "orderable": false, "targets": [1,2] }
            ],
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.formEliminar').submit(function(e){
        e.preventDefault();
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
            swal("Empresa eliminada satisfactoriamente!", {
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