@extends('main')

@section('css')
     <link href="/css/datatables/demo/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    <!-- Page Heading -->





    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">permissions</h6>

                <!-- <a href="{{ route('permissions.create') }}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Agregar</span>
                            </a> -->

            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="10px">{{ __('ID') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Model') }}</th>
                            <th>{{ __('Options') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($permissions as $permission)

                            <tr>
                                <td> # <a href="{{ route('permissions.show', $permission) }}"> {{ $permission->id }}</a>
                                </td>
                                <td>{{ $permission->front_name }}</td>
                                <td>{{ $permission->description }}</td>
                                <td>{{ $permission->model }}</td>

                                <td width="10px">
                                    <a href="{{ route('permissions.show', $permission->id) }}"
                                        class="btn btn-sm btn-success">
                                        ver
                                    </a>

                                    <a href="{{ route('permissions.edit', $permission->id) }}"
                                        class="btn btn-sm btn-primary">
                                        editar
                                    </a>
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
     <script src="/js/datatables/demo/jquery.dataTables.min.js"></script>
     <script src="/js/datatables/demo/dataTables.bootstrap4.min.js"></script>
     <script src="/js/datatables/demo/datatables-demo.js"></script>
@endsection
