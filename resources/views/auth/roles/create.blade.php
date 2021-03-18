@extends('main')


@section('content')


<form action="{{route('roles.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@include('auth.roles.partials.form')
    

    <button type="submit">Save</button>


</form>


@stop

