@extends('main')

@section('css')
    <link href="/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')

    <!-- Page Heading -->





    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">Roles</h6>

                <!-- <a href="{{ route('roles.create') }}" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Add</span>
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
                            <th>{{ __('Guard Name') }}</th>
                            <th>{{ __('Options') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($roles as $role)

                            <tr>
                                <td> # <a href="{{ route('roles.show', $role) }}"> {{ $role->id }}</a></td>
                                <td>{{ $role->front_name }}</td>
                                <td>{{ $role->guard_name }}</td>

                                <td width="10px">
                                    <a href="{{ route('roles.show', $role->id) }}" class="btn btn-sm btn-success">
                                        ver
                                    </a>

                                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-primary">
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

    <!-- Page level plugins -->
    <script src="/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="/backend/js/demo/tableDonations.js"></script>

@endsection
