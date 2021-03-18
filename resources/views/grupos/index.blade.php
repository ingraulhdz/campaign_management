 @extends('main')

 @section('css')
     <link href="/css/datatables/demo/dataTables.bootstrap4.min.css" rel="stylesheet">

 @endsection

 @section('content')

     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <div class="d-sm-flex align-items-center justify-content-between mb-4">
                 <h6 class="h3 mb-0 font-weight-bold text-primary">grupos</h6>

                 <a href="{{ route('grupos.create') }}"
                     class="btn-sm  btn btn-primary btn-icon-split shadow-sm  d-sm-inline-block  ">
                     <span class="icon text-white-50">
                         <i class="fas fa-plus"></i>
                     </span>
                     <span class="text">Agregar Grupo</span>
                 </a>

             </div>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Name</th>
                             <th>Description</th>

                             <th>Opciones</th>
                         </tr>
                     </thead>

                     <tbody>
                         @foreach ($grupos as $item)

                             <tr>
                                 <td> <a href="{{ route('grupos.show', $item) }}" class="text-gray-600">
                                         {{ $item->nombre }}</a></td>

                                 <td>{{ $item->descripcion }}</td>
                                 <td>
                                     <div class="mx-auto">
                                         <button class='btn btn-sm btn-danger btn-circle delete '
                                             value='{{ $item->id }}'>
                                             <a href="#">
                                                 <i class="fas fa-trash text-gray-100 "></i>

                                             </a>
                                         </button>
                                         <button class='btn btn-sm btn-info btn-circle edit' value='{{ $item->id }}'>
                                             <a href="{{ route('grupos.edit', $item) }}">
                                                 <i class="fas fa-edit text-gray-100 "></i>

                                             </a>
                                         </button>

                                         <button class='btn btn-sm btn-success btn-circle show' value='{{ $item->id }}'>
                                             <a href="{{ route('grupos.show', $item) }}">
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
                     var url = "{{ URL('grupos') }}";
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
