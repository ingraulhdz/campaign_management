@extends('main')


@section('content')




    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Agregar nuevo usuario</h6>
        </div>
        <div class="card-body">

            <form action="{{ route('users.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @include('auth.users.partials.form')


                <div class="form-group">
                    <small for="inlineFormInputGroup"> {{ __('Password') }}</small>

                    <input placeholder="{{ __('password') }}" id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <small for="inlineFormInputGroup"> {{ __('Confirm Password') }}</small>

                    <input placeholder="{{ __('Confirm password') }}" id="password-confirm" type="password"
                        class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Guardar</span>
                </button>

            </form>


        </div>
    </div>

@stop
