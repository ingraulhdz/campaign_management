<!-- Bootstrap core JavaScript-->
<script src="/js/vendor/jquery/jquery.min.js"></script>

<script src="/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<script src="/js/sbadmin/sb-admin-2.min.js"></script>

<script src="/js/toastr.min.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>


@if (Session::has('message'))
    <script>
        toastr["success"]('  {{ session('message') }}');

    </script>
@endif
@if (Session::has('error'))

    <script>
        toastr["error"](' {{ Session::get('error') }} ');

    </script>

@endif

@if ($errors->any())
    <script>
        var message = '<small>';

    </script>

    @foreach ($errors->all() as $error)
        <script>
            var err = '{{ $error }}';
            // toastr["error"](err);
            toastr.options = {
                "closeButton": true,
                "timeOut": "15000",
            }

            message = message + "<li>" + err + "</li>";

        </script>
    @endforeach


    <script>
        toastr["error"](message + "</small> ", "check the follows errors")
        /*Swal.fire({
          type: 'error',
          title: 'Oops... Please check the errors',
          html: message
        })

        */

    </script>


@endif




@if (session('status'))


    <script>
        toastr["info"](' {{ Session::get('status') }} ');
        toastr["info"]('  {{ session('status') }}');

    </script>

@endif



@yield('js')
