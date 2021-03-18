@extends('main')


@section('content')


<form action="{{route('permissions.store')}}" method="POST" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@include('auth.permissions.partials.form')
    

    <button type="submit">Save</button>


</form>


@stop

