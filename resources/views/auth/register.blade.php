<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GHIT Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<header class="header-bar">

<div class="container d-flex flex-column flex-md-row align-items-center p-3">
  @auth
  <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">GHIT Management</a></h4>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active text-white" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/register">Register</a>
    </li>
    <li class="nav-item">
      <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn btn-link nav-link text-white">Logout</button>
      </form>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/dashboard">Dashboard</a>
    </li>
  </ul>
</div>
@else

  <h4 class="my-0 mr-md-auto font-weight-normal"><a href="/" class="text-white">GHIT Management</a></h4>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active text-white" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/register">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="/dashboard">Dashboard</a>
    </li>
  </ul>
  @endauth
</div>

</header>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="/registersave" method="POST" class="user">
                                @csrf
                                <div class="form-group">

                            <input type="text" name='name' value="{{old('name')}}" class="form-control form-control-user" id="exampleFirstName" placeholder=" Name">
                                    @error('name')
                                    <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                    @enderror


                                </div>
                                <div class="form-group">
                                    <input type="email" name='email' value="{{old('email')}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                    @error('email')
                                    <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name='password' class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        @error('password')
                                        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name='password_confirmation' class="form-control form-control-user " id="exampleRepeatPassword" placeholder="Repeat Password">
                                        @error('password_confirmation')
                                        <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="auth/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>