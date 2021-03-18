
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $header ?? 'LL2020' }}
                
                



                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


@section('card-container')

@show



                </div>
                <div class="card-footer text-muted">
                {{ $footer ?? 'LL2020' }}
    
            </div>

            </div>
        </div>
    </div>
