@section('css')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .bs-example {
            margin: 20px;
        }

    </style>
@endsection




<div class="form-group">
    <label for="inlineFormInputGroup"> {{ __('Permissions') }}</label>
    <br>




    <div class="bs-example">
        <ul class="nav nav-tabs">

            <li class="nav-item">
                <a href="#permissions" class="nav-link active" data-toggle="tab">Permisions</a>
            </li>

            <li class="nav-item">
                <a href="#accounts" class="nav-link" data-toggle="tab">Accounts</a>
            </li>

            <li class="nav-item">
                <a href="#donations" class="nav-link" data-toggle="tab">Donations</a>
            </li>

            <li class="nav-item">
                <a href="#projects" class="nav-link" data-toggle="tab">Projects</a>
            </li>

            <li class="nav-item">
                <a href="#members" class="nav-link" data-toggle="tab">Members</a>
            </li>

            <li class="nav-item">
                <a href="#users" class="nav-link" data-toggle="tab">Users</a>
            </li>

            <li class="nav-item">
                <a href="#tickets" class="nav-link" data-toggle="tab">Tickets</a>
            </li>




        </ul>
        <div class="tab-content">




            <div class="tab-pane fade show active" id="permissions">
                <h4 class="mt-2">{{ __('System permissions') }}</h4>
                <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut,
                    mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit
                    bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in
                    rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
            </div>




            <div class="tab-pane fade show" id="accounts">
                <h4 class="mt-2">{{ __('Accounts permissions') }}</h4>
                @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%Account%')->get() as $permission)

                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per"
                            name="per[]" @foreach ($user->permissions as $up)  @if ($up->name==$permission->name)
                        checked @endif
                @endforeach
                >


                <label class="form-check-label" for="flexCheckDefault">
                    {{ $permission->front_name }}
                </label>

            </div>
            @endforeach

        </div>


        <div class="tab-pane fade show" id="donations">
            <h4 class="mt-2">{{ __('Donations permissions') }}</h4>
            @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%Donation%')->get() as $permission)

                <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per"
                        name="per[]" @foreach ($user->permissions as $up)  @if ($up->name==$permission->name)
                    checked @endif
            @endforeach
            >


            <label class="form-check-label" for="flexCheckDefault">
                {{ $permission->front_name }}
            </label>

        </div>
        @endforeach

    </div>




    <div class="tab-pane fade show" id="projects">
        <h4 class="mt-2">{{ __('Project permissions') }}</h4>
        @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%Project%')->get() as $permission)

            <div class="form-check">

                <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per" name="per[]"
                    @foreach ($user->permissions as $up) 
                    @if ($up->name==$permission->name)
                checked @endif
        @endforeach
        >


        <label class="form-check-label" for="flexCheckDefault">
            {{ $permission->front_name }}
        </label>

    </div>
    @endforeach

</div>








<div class="tab-pane fade show" id="members">
    <h4 class="mt-2">{{ __('Members permissions') }}</h4>
    @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%Member%')->get() as $permission)

        <div class="form-check">

            <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per" name="per[]" @foreach ($user->permissions as $up)  @if ($up->name==$permission->name)
            checked @endif
    @endforeach
    >


    <label class="form-check-label" for="flexCheckDefault">
        {{ $permission->front_name }}
    </label>

</div>
@endforeach

</div>








<div class="tab-pane fade show" id="users">
    <h4 class="mt-2">{{ __('Users permissions') }}</h4>
    @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%User%')->get() as $permission)

        <div class="form-check">

            <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per" name="per[]" @foreach ($user->permissions as $up)  @if ($up->name==$permission->name)
            checked @endif
    @endforeach
    >


    <label class="form-check-label" for="flexCheckDefault">
        {{ $permission->front_name }}
    </label>

</div>
@endforeach

</div>








<div class="tab-pane fade show" id="tickets">
    <h4 class="mt-2">{{ __('Tickets permissions') }}</h4>
    @foreach (Spatie\Permission\Models\Permission::where('model', 'like', '%Ticket%')->get() as $permission)

        <div class="form-check">

            <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="per" name="per[]" @foreach ($user->permissions as $up)  @if ($up->name==$permission->name)
            checked @endif
    @endforeach
    >


    <label class="form-check-label" for="flexCheckDefault">
        {{ $permission->front_name }}
    </label>

</div>
@endforeach

</div>

</div>
</div>
