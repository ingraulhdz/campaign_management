@extends('main')


@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"># {{ $user->id }}-</h6>
        </div>
        <div class="card-body">







            <b>Information</b>
            <ul>
                <li><b>ID del user: </b>{{ $user->id }}</li>
                <li><b>E-mail: </b>{{ $user->email }}</li>
                <li><b>Name: </b>{{ $user->name }}</li>
                <ul>
                    <li><b>Permissions via Roles</b></li>
                    @foreach ($user->getPermissionsViaRoles() as $permission)

                        <li>{{ $permission->front_name }}</li>
                    @endforeach



                </ul>

                <ul>
                    <b>{{ __('Special Permissions') }}</b>
                    @foreach ($user->getDirectPermissions() as $permission)

                        <li>{{ $permission->front_name }}</li>
                    @endforeach



                </ul>
            </ul>

        </div>
    </div>
@endsection
