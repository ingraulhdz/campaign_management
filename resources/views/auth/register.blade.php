<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>
<link href="/css//sbadmin/sb-admin-2.css" rel="stylesheet">
    <link href="/css/toastr.min.css" rel="stylesheet">
    <link href="/css/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                                                        <img src="assets/images/logo-2.svg" width="100%" height="100%" >

                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrarse</h1>
                            </div>
     <form method="POST" action="{{ route('register') }}" class="user">
                        @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" id="exampleFirstName"
                                            placeholder="First Name" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email"id="exampleInputEmail"
                                        placeholder="Email Address"  class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" 
                                            id="exampleInputPassword" placeholder="Password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            id="exampleRepeatPassword" placeholder="Repeat Password"  class="form-control form-control-user"  name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-user">
                                    Registar
                                </button>
                                <a href="/" class="btn btn-danger btn-user"> Cancelar</a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registese con Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registerse con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">olvidaste tu  Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Ya tienes una cuenta? Inicia sesion!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   
 <!-- Bootstrap core JavaScript-->
<script src="/js/vendor/jquery/jquery.min.js"></script>

<script src="/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<script src="/js/sbadmin/sb-admin-2.min.js"></script>

</body>

</html>