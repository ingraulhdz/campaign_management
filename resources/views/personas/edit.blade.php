@extends('main')


@section('content')

          

                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success"> Editando </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">


  <form action="{{ route('personas.update', $persona) }}" method="POST" id="needs-validation" novalidate enctype="multipart/form-data">

                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $persona->id }}">



                <div class="bs-example">
                    <ul class="nav nav-tabs">

                        <li class="nav-item">
                            <a href="#personal" class="nav-link active" data-toggle="tab">Informacion
                                Personal</a>
                        </li>

                        <li class="nav-item">
                            <a href="#direccion" class="nav-link" data-toggle="tab">Direccion</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contacto" class="nav-link" data-toggle="tab">contacto</a>
                        </li>

                        <li class="nav-item">
                            <a href="#educacion" class="nav-link" data-toggle="tab">Educacion</a>
                        </li>
               



                    </ul>
                    <div class="tab-content">




                        <div class="tab-pane fade show active" id="personal">
                            <h4 class="mt-2">Informacion personal</h4>
                            <div class="row">

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="nombre">Nombre (s)</label>
                                    <input name="nombre" type="text" class="form-control @if ($errors->any()) {{ $errors->has('nombre') ? 'is-invalid' : 'is-valid' }} @endif"
                                    id="nombre" value="@if( old('nombre') ) {{ old('nombre') }}  @else {{$persona->nombre}}  @endif" placeholder="Nombre (s)"
                                    required />
                                    <div class="invalid-feedback"><small>Por favor ingrese Nombre.</small></div>
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="apellido_paterno">Apellido Materno</label>
                                    <input  name="apellido_paterno" type="text" class="form-control @if ($errors->any()) {{ $errors->has('apellido_materno') ? 'is-invalid' : 'is-valid' }} @endif" id="apellido_materno" value="@if( old('apellido_materno') ) {{ old('apellido_materno') }}  @else {{$persona->apellido_materno}}  @endif"   placeholder="Apellido Materno" required>

                                    <div class="invalid-feedback"><small>Por favor ingrese Apellido Materno.</small></div>
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="apellido_paterno">Apellido paterno</label>
                                    <input value="@if( old('apellido_paterno') ) {{ old('apellido_paterno') }}  @else {{$persona->apellido_paterno}}  @endif"   name="apellido_materno" type="text" class="form-control @if ($errors->any()) {{ $errors->has('apellido_paterno') ? 'is-invalid' : 'is-valid' }} @endif" id="apellido_paterno" 
                                    placeholder="Apellido paterno">

                                    <div class="invalid-feedback"><small>Por favor ingrese Apellido paterno.</small></div>
                                    {!! $errors->first('apellido_paterno', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                            </div>

                            <div class="row">

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input value="{{$persona->fecha_nacimiento}}"  name="fecha_nacimiento"  type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha de Nacimiento"  required />
                                    <div class="invalid-feedback">Por favor ingrese Fecha de Nacimiento.</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="curp">CURP</label>
                                    <input  name="curp" type="text" class="form-control @if ($errors->any()) {{ $errors->has('curp') ? 'is-invalid' : 'is-valid' }} @endif"
                                    id="curp" value="@if( old('curp') ) {{ old('curp') }}  @else {{$persona->curp}}  @endif"   placeholder="CURP"
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese curp.</small></div>
                                    {!! $errors->first('curp', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="clave_electoral">Clave electoral</label>
                                    <input  name="clave_electoral" value="@if( old('clave_electoral') ) {{ old('clave_electoral') }}  @else {{$persona->clave_electoral}}  @endif"   type="text" class="form-control @if ($errors->any()) {{ $errors->has('clave_electoral') ? 'is-invalid' : 'is-valid' }} @endif" id="clave_electoral" value="{{ old('clave_electoral') }}"
                                    placeholder="Clave electoral"
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese clave_electoral.</small></div>
                                    {!! $errors->first('clave_electoral', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>




                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label>Fotografia</label>
                                        <div class="custom-file">
                                            <input  name="foto"  value="{{ old('foto') }}" type="file" class="custom-file-input" id="validatedCustomFile"
                                                required />
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback"><small>
                                                    Elija una foto para subir</small>
                                            </div>
                                            {!! $errors->first('clave_electoral', '<div class="invalid-feedback">:message        </div>') !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="tab-pane fade show" id="direccion">
                            <h4 class="mt-2">Direccion</h4>
                            <div class="row">

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="calle">Calle</label>
                                    <input  name="calle" value="@if( old('calle') ) {{ old('calle') }}  @else {{$persona->calle}}  @endif"   type="text" class="form-control @if ($errors->any()) {{ $errors->has('calle') ? 'is-invalid' : 'is-valid' }} @endif"
                                    id="calle" placeholder="Calle" required
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese calle.</small></div>
                                    {!! $errors->first('calle', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_exterior">Numero exterior</label>
                                    <input  name="numero_exterior" type="number"   class="form-control @if ($errors->any()) {{ $errors->has('numero_exterior') ? 'is-invalid' : 'is-valid' }} @endif" id="numero_exterior" value="@if( old('numero_exterior') ) {{ old('numero_exterior') }}  @else {{$persona->numero_exterior}}  @endif"  
                                    placeholder="Numero exterior" required
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese numero_exterior.</small></div>
                                    {!! $errors->first('numero_exterior', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_interior">Numero interior</label>
                                    <input  name="numero_interior" type="text" class="form-control @if ($errors->any()) {{ $errors->has('numero_interior') ? 'is-invalid' : 'is-valid' }} @endif" id="numero_interior"  value="@if( old('numero_interior') ) {{ old('numero_interior') }}  @else {{$persona->numero_interior}}  @endif"  
                                    placeholder="Numero interior"
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese numero_interior.</small></div>
                                    {!! $errors->first('numero_interior', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Estado</label>
                                    <select  name="estado_id"  class="custom-select" id="estado" required>
@if($persona->estado_id)
    <option value="{{$persona->estado_id}}"> {{$persona->estado->nombre}}</option>
@endif           

                                        @foreach (App\Models\Estado::get() as $estado)

                                            <option value="{{ $estado->id }}" @if($estado->id ==  old('estado_id') ) selected @endif >{{ $estado->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Estado</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Municipio</label>
                                    <select  name="municipio_id"  class="custom-select" id="municipios" required>
                                      @if($persona->municipio_id)
    <option value="{{$persona->municipio_id}}"> {{$persona->municipio->nombre}}</option>
@endif 
                                      

                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Municipio</div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Colonia/Localidad</label>
                                    <select  name="localidad_id" class="custom-select" id="localidades">
@if($persona->localidad_id)
    <option value="{{$persona->localidad_id}}"> {{$persona->localidad->nombre}}</option>
@endif 
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Colonia/Localidad</div>
                                </div>








                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Distrito Federal</label>
                                    <select  name="distrito_federal_id" class="custom-select" id="distritos-federales" required>
@if($persona->distrito_federal_id)
    <option value="{{$persona->distrito_federal_id}}"> {{$persona->distritoFederal->nombre}}</option>
@endif 
                                        @foreach (App\Models\DistritoFederal::get() as $distrito)
                                            <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>

                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona "Distrito Federal"</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Distrito Local</label>
                                    <select  name="distrito_local_id" class="custom-select" id="distritos-locales" required>
@if($persona->distrito_local_id)
    <option value="{{$persona->distrito_local_id}}"> {{$persona->distritoLocal->nombre}}</option>
@endif 
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Distrito Local</div>
                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Seccion</label>
                                    <select  name="seccion_id" class="custom-select" id="secciones" required>
@if($persona->seccion_id)
    <option value="{{$persona->seccion_id}}"> {{$persona->seccion->nombre}}</option>
@endif 
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Seccion </div>
                                </div>







                            </div>

                        </div>



                        <div class="tab-pane fade show" id="contacto">
                            <h4 class="mt-2">Contacto</h4>
                            <div class="row">
                                  <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_casa">Telefono casa</label>
                                    <input  name="telefono_casa" type="text" value="@if( old('telefono_celular') ) {{ old('telefono_celular') }}  @else {{$persona->telefono_celular}}  @endif"  pattern="^\d{10}$" class="form-control" id="numero_casa"
                                        placeholder="Telefono casa" aria-describedby="inputGroupPrepend" />
                                    <div class="invalid-feedback">
                                        Por favor ingrese 10 digit Telefono casa.
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_casa">Telefono casa</label>
                                    <input  name="telefono_casa" type="text" value="@if( old('telefono_casa') ) {{ old('telefono_casa') }}  @else {{$persona->telefono_casa}}  @endif"  pattern="^\d{10}$" class="form-control" id="numero_casa"
                                        placeholder="Telefono casa" aria-describedby="inputGroupPrepend" />
                                    <div class="invalid-feedback">
                                        Por favor ingrese 10 digit Telefono casa.
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Email </label>
                                    <input  name="email" type="email" class="form-control" value="@if( old('email') ) {{ old('email') }}  @else {{$persona->email}}  @endif"  id="email" placeholder="email "
                                        aria-describedby="inputGroupPrepend" required />
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Facebook </label>
                                    <input  name="facebook" type="email" class="form-control" value="@if( old('facebook') ) {{ old('facebook') }}  @else {{$persona->facebook}}  @endif" id="facebook" placeholder="Facebook "
                                        aria-describedby="inputGroupPrepend"  />
                                    <div class="invalid-feedback">
                                        Please provide a valid Facebook.
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Twitter </label>
                                    <input  name="twitter" type="email" class="form-control" value="@if( old('twitter') ) {{ old('twitter') }}  @else {{$persona->twitter}}  @endif" id="email" placeholder="email "
                                        aria-describedby="inputGroupPrepend"  />
                                    <div class="invalid-feedback">
                                        Please provide a valid Twitter.
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Instagram </label>
                                    <input  name="instagram" type="email" class="form-control" value="@if( old('instagram') ) {{ old('instagram') }}  @else {{$persona->instagram}}  @endif"  id="Instagram" placeholder="email "
                                        aria-describedby="inputGroupPrepend"  />
                                    <div class="invalid-feedback">
                                        Please provide a valid Instagram.
                                    </div>
                                </div>



                            </div>


                        </div>

                        <div class="tab-pane fade show" id="educacion">
                            <h4 class="mt-2">Educacion</h4>



                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Nivel Academico</label>
                                    <select class="custom-select" name="nivel_academico" required>

                                            <option value="{{$persona->nivel_academico_id}}"> {{$persona->nivelAcademico->nombre}}</option>
                                        @foreach (App\Models\NivelAcademico::get() as $nivel)
                                        
                                            <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona nivel academico</div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Profesion</label>
                                    <select  name="area_profesional_id"  class="custom-select" required>
                                            <option value="{{$persona->area_profesional_id}}"> {{$persona->areaProfesional->nombre}}</option>
                                        @foreach (App\Models\AreaProfesion::get() as $area)
                                            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Profesion</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="actividad">Actividad Actual</label>
                                    <input   value="@if( old('actividad_actual') ) {{ old('actividad_actual') }}  @else {{$persona->actividad_actual}}  @endif" name="actividad_actual" type="text" class="form-control" id="actividad" placeholder="Actividad Actual"
                                        required />
                                    <div class="invalid-feedback">Por favor ingrese Actividad Actual.</div>
                                </div>



                                <div class="row">






                                    <div class="col-sm-4 col-md-4 col-xs-4">
                                        <div class="form-group">
                                            <label>Curriculum</label>
                                            <div class="custom-file">
                                                <input  name="curriculum" type="file" value="{{ old('curriculum') }}" class="custom-file-input" id="validatedCustomFile"
                                                    required />
                                                <label class="custom-file-label" for="validatedCustomFile">Choose
                                                    Archivo...</label>
                                                <div class="invalid-feedback">
                                                    Sube aqui tu archivo
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>






                            </div>
                        </div>



                    </div>
                </div>



                            </div>


        <div class="card-footer">



            <button type="submit" class="  d-sm-inline-block  btn-sm  shadow-sm btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-save"></i>
                </span>
                <span class="text">Guardar</span>
            </button>

            <a href="{{ route('estructuras.index') }}"
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
