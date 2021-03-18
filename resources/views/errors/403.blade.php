@extends('main')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- 404 Error Text
403
User does not have the right permissions.
 -->
<div class="text-center">
    <div class="error mx-auto" data-text="403" style="color:red">403</div>
    <p class="lead text-gray-800 mb-5">{{__('Invalid access')}}</p>
    <p class="text-gray-700 mb-0">403
{{__('User does not have the right permissions.')}}</p>    
<p class="text-gray-500 mb-0">
{{__('Contatact admin if you need access')}}</p>
    <a href="/home">&larr; {{__('Back to Dashboard')}}</a>
</div>

</div>
<!-- /.container-fluid -->
@endsection