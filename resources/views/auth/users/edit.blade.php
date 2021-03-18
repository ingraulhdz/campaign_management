@extends('main')



@section('content')


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> #{{ $user->id }} {{ __('User') }} {{ $user->name }}</h6>
        </div>
        <div class="card-body">




            <form action="{{ route('users.update', $user) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $user->id }}">


                @include('auth.users.partials.form')

                <div class="form-group">
                    <small for="inlineFormInputGroup"> {{ __('Role') }}</small>
                    <select class="form-control @if ($errors->any()) {{ $errors->has('rol_id') ? 'is-invalid' : 'is-valid' }} @endif" id="role"
                        name="role" >
                        <option value="">Selecciona Role</option>
                        @foreach ($roles as $role)
                            <option value='{{ $role->name }}' @if ($user->roles[0]->name == $role->name) selected @endif>
                                {{ $role->front_name }}</option>
                        @endforeach
                    </select> {!! $errors->first(
    'guard_name',
    '
	<div class="invalid-feedback">:message        </div>',
) !!}

                </div>


                @include('auth.users.partials.permissions')

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


@section('js')

@endsection
