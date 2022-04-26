@extends('plantilla_maestra')
@section('titulo', 'Servicio')
@section('subtitulo1', 'Servicios')
@section('subtitulo2', 'Lista de Servicios')
@section('css')
  <link href="{{ asset('plugins/datatables/datatables.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/datatables/responsive.bootstrap.css') }}" rel="stylesheet">
@endsection
@section('menu-1')
      <li class="nav-item">
        <a class="nav-link active " href="/servicios">
          <div
            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>credit-card</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(453.000000, 454.000000)">
                      <path class="color-background opacity-6"
                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                      </path>
                      <path class="color-background"
                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                      </path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <span class="nav-link-text ms-1">Servicio</span>
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
            href="{{ url('servicios/create') }}">Agregar Servicio </a>
          </div>
        </div><br>


        <div class="card-body">
          <div class="table-responsive p-2">
            <table class="table align-items-center justify-content-center mb-0" id="tblservicios">
              <thead>
                <tr>
                  <th> created_at</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 align-middle text-center">
                  N°</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Código</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Fecha Reg.</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Exportador</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Importador</th>
                  
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                  Estado</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                  Opciones</th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                  Recolección: </th>
                  <th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                  Entrega Inicio: </th>
                  <!--<th
                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                  Entrega Final: </th> -->
                </tr>
              </thead>
              <tbody>
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
  <script src="{{ asset('plugins/datatables/datatables.min.js') }}" type="text/javascript" ></script>
  <script src="{{ asset('plugins/datatables/dataTables.responsive.js') }}" type="text/javascript" ></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    $('#tblservicios').DataTable(
      {
          "processing": true,
          "serverSide": true,
          "ajax": "/servicioJson",
          "columns": [
            {data: 'created_at'},
            {data: 'id'},
            {data: 'codigo'},
            {data: 'fecha'},
            {data: 'exportador.nombre'},
            {data: 'importador.nombre'},
            {data: 'estado_id'},
            // opciones en vez de serie
            {data: 'btn'},
            //{data: 'detalle.fecha_factura'},
            //
            {data: 'recolecciones', 
              render: function(data) 
                    {
                        return '<br> <ul> <b>Fecha : </b>'+ data.fecha + ' - <b> Hora : </b>'+ data.hora +'</ul> <ul> <b>Tipo de Transporte : </b>' + data.tipo_transporte  + '</ul>';
                    }
            },
            {data: 'cargas', 
              render: function(data) 
                    {
                        return '<br> <ul> <b>Fecha : </b>'+ data.fecha + ' - <b> Hora : </b>'+ data.hora +'</ul> <ul> <b>Tipo de Transporte : </b>' + data.tipo_transporte + '</ul>';
                    }
            },

            
            //{data: 'cargas.'},
   
          ],
          "order": [[ 0, "desc" ]],            
            "responsive":  true,
            "columnDefs": [
                {
                    "targets": [ 0 ],
                    "visible": false,
                    "searchable": true
                },
                { "targets":[0,1,2,3,4,5,6,7], "className": "desktop" },
                { "targets":[0,1,2,3,6,7], "className": "tablet, mobile" },
                { "targets":[8,9], "className": "none" },
                { "orderable": false, "targets": [4] }
            ],
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
            swal("Servicio eliminado satisfactoriamente!", {
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