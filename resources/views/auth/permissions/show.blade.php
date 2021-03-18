@extends('main')


@section('content')


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"># {{$permission->id}}-</h6>
    </div>
    <div class="card-body">         







<b>Information</b>		 
		<ul >
    <li ><b>ID del permission: </b>{{$permission->id}}</li>
    <li ><b>guard_name: </b>{{$permission->guard_name}}</li>
    <li ><b>Front Name: </b>{{$permission->front_name}}</li>
	<li ><b>Name: </b>{{$permission->name}}</li>
	<li ><b>Description: </b>{{$permission->description}}</li>
    
    <ul>
          <b>{{__('Users With this  Permission')}}</b>
@foreach($permission->users as $permission)

<li>{{$permission->name}}</li>
@endforeach



    </ul>


    <ul>
          <b>{{__('Roles With this  Permission')}}</b>
@foreach($permission->roles) as $permission)

<li>{{$permission->name}}</li>
@endforeach



    </ul>

  
		  </ul>

</div>
</div>
@endsection