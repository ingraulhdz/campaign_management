@extends('main')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> #{{ $role->id }} {{ $role->front_name }}</h6>
        </div>
        <div class="card-body">




            <form action="{{ route('roles.update', $role) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $role->id }}">


                @include('auth.roles.partials.permissions')

                <hr>


                <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Actualizar</span>
                </button>
            </form>

        </div>
    </div>


@stop
