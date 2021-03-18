 @extends('main')

 @section('css')
     <link href="/css/datatables/demo/dataTables.bootstrap4.min.css" rel="stylesheet">

 @endsection

 @section('content')

      <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Estructura</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opciones:</div>
                                            <a class="dropdown-item" href="{{route('estructuras.create')}}">Agregar</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Nombre</th>
                             <th>Cargo</th>

                             <th>Opciones</th>
                         </tr>
                     </thead>

                     <tbody>
                         @foreach ($estructuras as $item)

                             <tr>
                                 <td> <a href="{{ route('estructuras.show', $item) }}" class="text-gray-600">
                                         {{ $item->nombre }}  {{ $item->apellido_materno }} {{ $item->apellido_paterno }}</a></td>

                                 <td>{{ $item->cargoCampana->nombre }}</td>
                                 <td>
                                     <div class="mx-auto">
                                         <button class='btn btn-sm btn-danger btn-circle delete '
                                             value='{{ $item->id }}'>
                                             <a href="#">
                                                 <i class="fas fa-trash text-gray-100 "></i>

                                             </a>
                                         </button>
                                         <button class='btn btn-sm btn-info btn-circle edit' value='{{ $item->id }}'>
                                             <a href="{{ route('estructuras.edit', $item) }}">
                                                 <i class="fas fa-edit text-gray-100 "></i>

                                             </a>
                                         </button>

                                         <button class='btn btn-sm btn-success btn-circle show' value='{{ $item->id }}'>
                                             <a href="{{ route('estructuras.show', $item) }}">
                                                 <i class="fas fa-eye text-gray-100 "></i>

                                             </a>
                                         </button>



                                     </div>
                                 </td>
                                 </td>
                             </tr>

                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>
     </div>


 @endsection

 @section('js')

     <!-- Page level plugins -->
     <script src="/js/datatables/demo/jquery.dataTables.min.js"></script>
     <script src="/js/datatables/demo/dataTables.bootstrap4.min.js"></script>
     <script src="/js/datatables/demo/datatables-demo.js"></script>
     <script>
         $(document).ready(function() {

         });





         $(document).on("click", ".delete", function() {



             Swal.fire({
                 title: 'Esta Seguro que desea eliminar el elemento?',
                 text: "No podra reveritr este cambio!",
                 icon: 'warning',
                 showCancelButton: true,
                 confirmButtonColor: '#3085d6',
                 cancelButtonColor: '#d33',
                 confirmButtonText: 'Si, eliminar!'
             }).then((result) => {
                 if (result.isConfirmed) {




                     var $ele = $(this).parent().parent().parent();
                     var id = $(this).val();
                     var url = "{{ URL('estructuras') }}";
                     var dltUrl = url + "/" + id;
                     $.ajax({
                         url: dltUrl,
                         type: "DELETE",
                         cache: false,
                         data: {
                             _token: '{{ csrf_token() }}'
                         },
                         success: function(dataResult) {

                             var dataResult = JSON.parse(dataResult);
                             if (dataResult.statusCode == 200) {
                                 $ele.fadeOut().remove();
                             }

                         },
                         error() {
                             alert('error');
                         }
                     });


                     Swal.fire(
                         'Eliminado!',
                         'El elemento ha sido eliminado.',
                         'success'
                     )
                 }
             })






         });

     </script>
 @endsection
