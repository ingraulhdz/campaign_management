@if (Session::has('message'))
    <li style="color:green"> Mensaje: {{ session('message') }}</li>

@endif
@if (Session::has('error'))
    <li style="color:red">Error: {{ Session::get('error') }} </li>
@endif

@if ($errors->any())

    @foreach ($errors->all() as $error)
        <li style="color:red">Errores {{ $error }}'</li>

    @endforeach





@endif
