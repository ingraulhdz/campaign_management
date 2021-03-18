@extends('main')


@section('css')

    <link rel="stylesheet" href="/vendor/bootstrap-select/css/bootstrap-select.css">

@endsection
@section('content')



                            <!-- Dropdown Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">Agregar persona</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opciones:</div>
                                            <a class="dropdown-item" href="{{route('estructuras.create')}}">Agregar </a>
                                            <a class="dropdown-item" href="#">Asignar</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">


            <form action="{{ route('personas.store') }}" method="POST" id="needs-validation" novalidate enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">



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
                            <a href="#contacto" class="nav-link" data-toggle="tab">Contacto</a>
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
                                    id="nombre" value="{{ old('nombre') }}" placeholder="Nombre (s)"
                                    required />
                                    <div class="invalid-feedback"><small>Por favor ingrese Nombre.</small></div>
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="apellido_paterno">Apellido Materno</label>
                                    <input  name="apellido_paterno" type="text" class="form-control @if ($errors->any()) {{ $errors->has('apellido_materno') ? 'is-invalid' : 'is-valid' }} @endif" id="apellido_materno" value="{{ old('apellido_materno') }}"
                                    placeholder="Apellido Materno" required>

                                    <div class="invalid-feedback"><small>Por favor ingrese Apellido Materno.</small></div>
                                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="apellido_paterno">Apellido paterno</label>
                                    <input  name="apellido_materno" type="text" class="form-control @if ($errors->any()) {{ $errors->has('apellido_paterno') ? 'is-invalid' : 'is-valid' }} @endif" id="apellido_paterno" value="{{ old('apellido_paterno') }}"
                                    placeholder="Apellido paterno">

                                    <div class="invalid-feedback"><small>Por favor ingrese Apellido paterno.</small></div>
                                    {!! $errors->first('apellido_paterno', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                            </div>

                            <div class="row">

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input  name="fecha_nacimiento"  type="date" class="form-control" id="fecha_nacimiento"
                                        placeholder="Fecha de Nacimiento" value="{{ old('fecha_nacimiento') }}" required />
                                    <div class="invalid-feedback">Por favor ingrese Fecha de Nacimiento.</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="curp">CURP</label>
                                    <input  name="curp" value="{{ old('curp') }}" type="text" class="form-control @if ($errors->any()) {{ $errors->has('curp') ? 'is-invalid' : 'is-valid' }} @endif"
                                    id="curp" value="{{ old('curp') }}" placeholder="CURP"
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese curp.</small></div>
                                    {!! $errors->first('curp', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="clave_electoral">Clave electoral</label>
                                    <input  name="clave_electoral" value="{{ old('clave_electoral') }}"  type="text" class="form-control @if ($errors->any()) {{ $errors->has('clave_electoral') ? 'is-invalid' : 'is-valid' }} @endif" id="clave_electoral" value="{{ old('clave_electoral') }}"
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
                                    <input  name="calle" value="{{ old('calle') }}"  type="text" class="form-control @if ($errors->any()) {{ $errors->has('calle') ? 'is-invalid' : 'is-valid' }} @endif"
                                    id="calle" value="{{ old('calle') }}" placeholder="Calle" required
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese calle.</small></div>
                                    {!! $errors->first('calle', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_exterior">Numero exterior</label>
                                    <input  name="numero_exterior" type="number"  value="{{ old('numero_exterior') }}" class="form-control @if ($errors->any()) {{ $errors->has('numero_exterior') ? 'is-invalid' : 'is-valid' }} @endif" id="numero_exterior" value="{{ old('numero_exterior') }}"
                                    placeholder="Numero exterior" required
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese numero_exterior.</small></div>
                                    {!! $errors->first('numero_exterior', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_interior">Numero interior</label>
                                    <input  name="numero_interior" type="text"  value="{{ old('numero_interior') }}" class="form-control @if ($errors->any()) {{ $errors->has('numero_interior') ? 'is-invalid' : 'is-valid' }} @endif" id="numero_interior" value="{{ old('numero_interior') }}"
                                    placeholder="Numero interior"
                                    />
                                    <div class="invalid-feedback"><small>Por favor ingrese numero_interior.</small></div>
                                    {!! $errors->first('numero_interior', '<div class="invalid-feedback">:message        </div>') !!}

                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Estado</label>
                                    <select  name="estado_id"  class="custom-select" id="estado" required>
                                        <option value="">Selecciona un estado</option>

                                        @foreach (App\Models\Estado::get() as $estado)

                                            <option value="{{ $estado->id }}" @if($estado->id ==  old('estado_id') ) selected @endif >{{ $estado->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Estado</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Municipio</label>
                                    <select  name="municipio_id"  class="custom-select" id="municipios" required>
                                        <option value="">"Selecciona un Municipio"</option>

                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Municipio</div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Colonia/Localidad</label>
                                    <select  name="localidad_id" class="custom-select" id="localidades">
                                        <option value="">"Colonia/Localidad"</option>

                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Colonia/Localidad</div>
                                </div>








                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Distrito Federal</label>
                                    <select  name="distrito_federal_id" class="custom-select" id="distritos-federales" required>
                                        <option value="">Selecciona un Distrito Federal</option>

                                        @foreach (App\Models\DistritoFederal::get() as $distrito)
                                            <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>

                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona "Distrito Federal"</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Distrito Local</label>
                                    <select  name="distrito_local_id" class="custom-select" id="distritos-locales" required>
                                        <option value="">"Selecciona un Distrito Federal"</option>

                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Distrito Local</div>
                                </div>



                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Seccion</label>
                                    <select  name="seccion_id" class="custom-select" id="secciones" required>
                                        <option value="">"selecciona un Distrito Local"</option>

                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona Seccion </div>
                                </div>







                            </div>

                        </div>



                        <div class="tab-pane fade show" id="contacto">
                            <h4 class="mt-2">Contacto</h4>
                            <div class="row">
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_celular">Telefono celular</label>
                                    <input  name="telefono_celular"  value="{{ old('telefono_celular') }}" type="number" pattern="^\d{10}$" class="form-control" id="numero_celular"
                                        placeholder="Telefono celular" aria-describedby="inputGroupPrepend" required />
                                    <div class="invalid-feedback">
                                        Por favor ingrese 10 digit Telefono celular.
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="numero_casa">Telefono casa</label>
                                    <input  name="telefono_casa" type="telefono_casa" value="{{ old('telefono_casa') }}"  pattern="^\d{10}$" class="form-control" id="numero_casa"
                                        placeholder="Telefono casa" aria-describedby="inputGroupPrepend" />
                                    <div class="invalid-feedback">
                                        Por favor ingrese 10 digit Telefono casa.
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Email </label>
                                    <input  name="email" type="email" class="form-control" value="{{ old('email') }}"  id="email" placeholder="email "
                                        aria-describedby="inputGroupPrepend" required />
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Facebook </label>
                                    <input  name="facebook" type="email" class="form-control" value="{{ old('facebook') }}" id="facebook" placeholder="Facebook "
                                        aria-describedby="inputGroupPrepend"  />
                                    <div class="invalid-feedback">
                                        Please provide a valid Facebook.
                                    </div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Twitter </label>
                                    <input  name="twitter" type="email" class="form-control" value="{{ old('twitter') }}" id="email" placeholder="email "
                                        aria-describedby="inputGroupPrepend"  />
                                    <div class="invalid-feedback">
                                        Please provide a valid Twitter.
                                    </div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="email">Instagram </label>
                                    <input  name="instagram" type="email" class="form-control" value="{{ old('instagram') }}"  id="Instagram" placeholder="email "
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
                                        <option value="">Selecciona Nivel Academico</option>
                                        @foreach (App\Models\NivelAcademico::get() as $nivel)
                                            <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Porfavor selecciona nivel academico</div>
                                </div>


                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="Gender">Profesion</label>
                                    <select  name="area_profesional_id"  class="custom-select" required>
                                        <option value="">Selecciona una area Profesional</option>
                                        @foreach (App\Models\AreaProfesion::get() as $area)
                                            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">Por favor selecciona Profesion</div>
                                </div>

                                <div class="col-sm-4 col-md-4 col-xs-12">
                                    <label for="actividad">Actividad Actual</label>
                                    <input  value="{{old('actividad_actual')}} " name="actividad_actual" type="text" class="form-control" id="actividad" placeholder="Actividad Actual"
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



@section('js')
    <script type="text/javascript">

        $("#cargo_campana").on("change", function() {
            cargo = $("#cargo_campana").val();


switch (cargo) {
 
  case '1':
      $("#distrito_federal_asignado").prop('disabled', 'disabled');
        $("#distrito_local_asignado").prop('disabled', 'disabled');
        $("#seccion_asignada").prop('disabled', 'disabled');  
          break;


     case '2':


 $("#distrito_federal_asignado").prop('disabled', 'disabled');
        $("#distrito_local_asignado").removeAttr("disabled");
        $("#seccion_asignada").removeAttr("disabled");

    break;
 
}







        //     if(cargo==1){
        // $("#distrito_federal_asingado").prop('disabled', 'disabled');
        // $("#distrito_local_asignado").prop('disabled', 'disabled');
        // $("#seccion_asignada").prop('disabled', 'disabled');
        //     }else{
        //                 $("#distrito_federal_asingado").removeAttr("disabled");
        //                 $("#distrito_local_asignado").removeAttr("disabled");
        //                 $("#seccion_asignada").removeAttr("disabled");

        //     }
        });



        $("#estado").on("change", function() {
            console.log("estado: " + this.value);
            var estado = this.value;
            $.ajax({
                url: '/estado-municipios/' + estado,
                type: 'GET',
                success: function(data) {
                    $("#municipios").empty();
                    $("#municipios").append($("<option value=''>Selecciona un municipio</option>"));
                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#municipios").append(option);
                    });
                }
            });
        });


        $("#municipios").on("change", function() {

            var municipio = this.value;
            $.ajax({
                url: '/municipio-localidades/' + municipio,
                type: 'GET',
                success: function(data) {
                    $("#localidades").empty();
                    $("#localidades").append($(
                        "<option value=''>Selecciona uns Localidad o Colonia</option>"));
                    console.log(data);

                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#localidades").append(option);
                    });
                }
            });
        });






        $("#distritos-federales").on("change", function() {

            var distritoFederal = this.value;
            $.ajax({
                url: '/distritoFederal-distritosLocales/' + distritoFederal,
                type: 'GET',
                success: function(data) {
                    $("#distritos-locales").empty();
                    $("#distritos-locales").append($(
                        "<option value=''>Selecciona un Distrito Local</option>"));
                    console.log(data);

                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#distritos-locales").append(option);
                    });
                }
            });
        });





        $("#distritos-locales").on("change", function() {

            var distritoLocal = this.value;
            $.ajax({
                url: '/distritoLocal-secciones/' + distritoLocal,
                type: 'GET',
                success: function(data) {
                    $("#secciones").empty();
                    $("#secciones").append($("<option value=''>Selecciona una seccion </option>"));
                    console.log(data);

                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#secciones").append(option);
                    });
                }
            });
        });




        $("#distritos_federales_asignados").on("change", function() {

            var distritoFederal = this.value;
            $.ajax({
                url: '/distritoFederal-distritosLocales/' + distritoFederal,
                type: 'GET',
                success: function(data) {
                    $("#distritos_locales_asignados").empty();
                    $("#distritos_locales_asignados").append($(
                        "<option value=''>Selecciona un Distrito Local</option>"));
                    console.log(data);

                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#distritos_locales_asignados").append(option);
                    });
                }
            });
        });




        $("#distritos_locales_asignados").on("change", function() {

            var distritoFederal = this.value;
            $.ajax({
                url: '/distritoLocal-secciones/' + distritoFederal,
                type: 'GET',
                success: function(data) {
                    $("#secciones_asignadas").empty();
                    $("#secciones_asignadas").append($(
                        "<option value=''>Selecciona un Distrito Local</option>"));
                    console.log(data);

                    $.each(data, function(value, key) {

                        var option = $("<option value='" + key.id + "'>" + key.nombre +
                            "</option>");
                        $("#secciones_asignadas").append(option);
                    });
                }
            });
        });





    </script>

<!-- 

    <script type="text/javascript">
        (function() {
            "use strict";
            window.addEventListener(
                "load",
                function() {
                    var form = document.getElementById("needs-validation");
                    form.addEventListener(
                        "submit",
                        function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
        toastr["error"]( "El formulario contiene errores, por favor revisalo antes de guardar");
                            }

                            form.classList.add("was-validated");
                        },
                        false
                    );
                },
                false
            );
        })();

    </script> -->


    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="/vendor/bootstrap-select/js/bootstrap-select.js"></script>

    <script>
        function createOptions(number) {
            var options = [],
                _options;

            for (var i = 0; i < number; i++) {
                var option = '<option value="' + i + '">Option ' + i + '</option>';
                options.push(option);
            }

            _options = options.join('');

            $('#number')[0].innerHTML = _options;
            $('#number-multiple')[0].innerHTML = _options;

            $('#number2')[0].innerHTML = _options;
            $('#number2-multiple')[0].innerHTML = _options;
        }

        var mySelect = $('#first-disabled2');

        createOptions(4000);

        $('#special').on('click', function() {
            mySelect.find('option:selected').prop('disabled', true);
            mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function() {
            mySelect.find('option:disabled').prop('disabled', false);
            mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });

    </script>
@endsection
