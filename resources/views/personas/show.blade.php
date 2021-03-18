@extends('main')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">#{{ $persona->id }} - {{ $persona->name }}</h6>

                <a href="{{ route('personas.index') }}"
                    class="btn-sm  btn btn-primary btn-icon-split shadow-sm  d-sm-inline-block  ">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Regresar</span>
                </a>

            </div>
        </div>
        <div class="card-body">

            <!-- starts card  -->
            <b>Informacion</b>
            <ul>
                <li><b>Name: </b>{{ $persona->name }}</li>
                <li><b>Description: </b>{{ $persona->description }}</li>
                <li><b>fecha de creacion:
                    </b>{{ \Carbon\Carbon::parse($persona->created_at)->locale('es')->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}
                </li>

            </ul>
            <!-- ends card ; -->
        </div>
        <div class="card-footer">
        </div>
    </div>




@endsection
