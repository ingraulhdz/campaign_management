@extends('main')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h6 class="h3 mb-0 font-weight-bold text-primary">#{{ $estructura->id }} - {{ $estructura->nombre }} {{ $estructura->apellido_paterno }}</h6>

                <a href="{{ route('estructuras.index') }}"
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
                            <li><img  width="64px" src="/{{$estructura->foto}}" class="rounded-circle"> </li>

                <li><b>Nombre: </b>{{ $estructura->nombre }} {{ $estructura->apellido_paterno}}</li>
                <li><b>fecha de creacion:
                    </b>{{ \Carbon\Carbon::parse($estructura->created_at)->locale('es')->isoFormat('dddd D \d\e MMMM \d\e\l Y') }}
                </li>
<li><b>Nombre: </b>{{ $estructura->curriculum }} </li>
<li><b>Direccion: </b>{{ $estructura->calle }} {{ $estructura->numero_exterior }}, {{ $estructura->localidad->nombre}}, 
{{ $estructura->municipio->nombre }}, {{ $estructura->estado->nombre}}</li>
<li><b>Telefono: </b>{{ $estructura->telefono }} </li>
<li><b>Email: </b>{{ $estructura->email }} </li>
<li><b>Area: </b>{{ $estructura->area->nombre }} </li>
<li><b>Actividad Actual: </b>{{ $estructura->actividad_actual }} </li>
<li><b>Grupo: </b>{{ $estructura->grupo_id}} </li>
<li><b>Distritos Federales: </b>{{ $estructura->distritoFederal->nombre }} </li>
<li><b>Distritos Local: </b>{{ $estructura->distritoLocal->nombre }} </li>
<li><b>Distritos Local: </b>{{ $estructura->seccion->nombre }} </li>
<li><b>Seccion: </b>{{ $estructura->seccion_asignado }} </li>
<li><b>Cargo Campana: </b>{{ $estructura->cargoCampana->nombre}} </li>
<li><b>CURP: </b>{{ $estructura->curp }} </li>
<li><b>Clave electoral: </b>{{ $estructura->clave_electoral }} </li>
<li><b>Facebook: </b>{{ $estructura->facebook }} </li>
<li><b>Twitter: </b>{{ $estructura->twitter }} </li>
<li><b>Instagram: </b>{{ $estructura->instagram }} </li>







            </ul>
            <!-- ends card ; -->
        </div>
        <div class="card-footer">
        </div>
    </div>




@endsection
