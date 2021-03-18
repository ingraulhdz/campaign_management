@extends('main')


@section('content')




    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">Agregar Item</h6>



            </div>
        </div>
        <div class="card-body">



            <form action="{{ route('grupos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <small for="inlineFormInputGroup">Name</small>
                <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('name') ? 'is-invalid' : 'is-valid' }} @endif" id="name"
                name="nombre"
                placeholder="Nombre" value="{{ old('name') }}" required="true">
                {!! $errors->first('name', '<div class="invalid-feedback">:message        </div>') !!}


                <small for="inlineFormInputGroup">Descripcion</small>
                <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('descripcion') ? 'is-invalid' : 'is-valid' }} @endif"
                id="descripcion"
                name="descripcion" placeholder="Descripcion" value="{{ old('descripcion') }}" required="true">
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message        </div>') !!}

        </div>
        <div class="card-footer">

            <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
                <span class="text">Guardar</span>
            </button>

            <a href="{{ route('grupos.index') }}"
                class="btn-sm  btn btn-danger btn-icon-split shadow-sm  d-sm-inline-block  ">
                <span class="icon text-white-50">
                    <i class="fas fa-times"></i>
                </span>
                <span class="text">Cancelar</span>
            </a>

            </form>

        </div>
    </div>






@stop
