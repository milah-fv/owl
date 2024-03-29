@extends('plantilla_maestra')
@section('titulo', 'Transportes')
@section('subtitulo1', 'Transportes')
@section('subtitulo2', 'Lista de Transportes')

@section('css')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('menu-5')
 <li class="nav-item">
        <a class="nav-link active " href="/transporte">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>spaceship</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="spaceship" transform="translate(4.000000, 301.000000)"> <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path> <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z" id="Path"></path> <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" id="color-2" opacity="0.598539807"></path> <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path> </g> </g> </g> </g> </svg>
      

          </div>
          <span class="nav-link-text ms-1">Transporte</span>
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
            href="{{ url('transporte/create') }}">Agregar Transporte </a>
          </div>
        </div><br>
        
        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="TblTransportes">
              <thead>
                <tr>
                  <th></th>
                  <th width="5%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th width="25%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Operador</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Placas Tracto</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Licencia</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  CAAT</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  N° ECO</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Capacidad</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Placa Cajas</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Transporte Afianzador</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Codigo Aduanero</th>
                  <th width="10%"
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                Opciones</th>

                </tr>
              </thead>
              <tbody>
                @foreach( $transportes as $transporte)

                <tr >
                  <td>{{$transporte->created_at}}</td>
                  <td  class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{$transporte->id}}</p>
                  </td>
                  <td >
                    <div class="my-auto">
                      <h6 class="mb-0 text-xs font-weight-bold" >{{$transporte->operador}}</h6>
                    </div>
                  </td>
                  <td >
                    <span class="text-xs font-weight-bold mb-0">{{$transporte->placas_tracto}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->licencia}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->caat}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->nro_eco}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->capacidad}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->placa_cajas}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->transporte_afianzador}}</span>
                  </td>
                  <td>
                    <span class="text-xs font-weight-bold">{{$transporte->codigo_aduanero}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <form action="{{ url('/transporte/'.$transporte->id) }}" method="post" class="formEliminar">
                      @csrf
                      {{method_field('DELETE')}}
                      <a title="Editar" style="padding:0px;" class="btn btn-link text-dark px-3 mb-0" href="{{ url('/transporte/'.$transporte->id.'/edit') }}"  ><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>

                      <input  type="hidden" name="eliminarValor" value="{{ $transporte->id }}">
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
    $('#TblTransportes').DataTable(
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
                { "targets":[0,1,2,4,9,11], "className": "desktop" },
                { "targets":[0,1,2,4,11], "className": "tablet, mobile" },
                { "targets":[3,5,6,7,8,10], "className": "none" },
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
            swal("Transporte eliminado satisfactoriamente!", {
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