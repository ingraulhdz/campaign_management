<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$member->fullName()}}</h6>
    </div>
    <div class="card-body">         

    @yield('card-content')
    </div>
<div class="card-footer">         
</div>
</div>