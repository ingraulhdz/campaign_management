@extends('main')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">#{{ $grupo->id }} - {{ $grupo->nombre }}</h6>
                <a href="{{ route('grupos.index') }}"
                    class="btn-sm  btn btn-primary btn-icon-split shadow-sm  d-sm-inline-block  ">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Regresar</span>
                </a>

            </div>

        </div>
        <div class="card-body">
            <!-- starts card body contens  -->


            <form action="{{ route('grupos.update', $grupo) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $grupo->id }}">


                <small for="inlineFormInputGroup">Nombre</small>
                <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('nombre') ? 'is-invalid' : 'is-valid' }} @endif" id="name"
                name="nombre"
                placeholder="nombre" value="{{ $grupo->nombre }}" required="true">
                {!! $errors->first('nombre', '<div class="invalid-feedback">:message        </div>') !!}


                <small for="inlineFormInputGroup">Descripcion</small>
                <input type="text" class="form-control @if ($errors->any()) {{ $errors->has('descripcion') ? 'is-invalid' : 'is-valid' }} @endif"
                id="descripcion"
                name="descripcion" placeholder="descripcion" value="{{ $grupo->descripcion }}" required="true">
                {!! $errors->first('descripcion', '<div class="invalid-feedback">:message        </div>') !!}

                <br>





                <!-- ends card body contens  -->

        </div>
        <div class="card-footer">

            <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fa fa-save"></i>
                </span>
                <span class="text">Actualizar</span>
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
