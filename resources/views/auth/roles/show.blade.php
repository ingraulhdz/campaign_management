@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"># {{$role->id}}-</h6>
    </div>
    <div class="card-body">         







<b>Information</b>		 
		<ul >
    <li ><b>ID del role: </b>{{$role->id}}</li>
    <li ><b>guard_name: </b>{{$role->email}}</li>
	<li ><b>Name: </b>{{$role->name}}</li>
  
	<ul>
          <li><b>Permissions</b></li>	
@foreach($role->permissions as $permission)

<li>{{$permission->front_name}}</li>
@endforeach



    </ul>
</ul>
</div>
</div>
@endsection