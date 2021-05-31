<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drone Stock| Register Page</title>
    <link rel="stylesheet" href="{{ asset('vendors/core/core.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo_1/style.css') }}">
    <style>input{width: 100% !important;}</style>
</head>
<body class="sidebar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            @if(Session::has('badInfo'))
                            <div style="background-color: #ff2015"
                                class="alert alert-danger alert-dismissible fade show text-center text-white font-weight-bold"
                                role="alert">
                                {{ Session::get('badInfo') }}
                                <button type="button" class="close" style="color: black; outline: none"
                                    data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            @if(Session::has('success'))
                            <div 
                                class="alert alert-success alert-dismissible fade show text-center text-white font-weight-bold"
                                role="alert">
                                {{ Session::get('success') }}
                                <button type="button" class="close" style="color: black; outline: none"
                                    data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                    <a href="/"><img src="images/logo.png" style="max-width: 40%"></a>
                                    </div>
                                    <div class="auth-form-wrapper px-4 py-5">
                                        
                                        <h5 class="text-muted font-weight-normal mb-4">Create Your Account Here</h5>
                                        <form method="post" action="/register" class="forms-sample">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input value="{{ old('email') }}" type="email" name="email"
                                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                    placeholder="Enter Email">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">
                                                    <small
                                                        class="font-weight-bold">{{ $errors->first('email') }}</small>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label>Username</label>
                                                <input value="{{ old('username') }}" type="text" name="username"
                                                    class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                                    placeholder="Enter Username">
                                                @if ($errors->has('username'))
                                                <span class="text-danger">
                                                    <small
                                                        class="font-weight-bold">{{ $errors->first('username') }}</small>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password"
                                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                    placeholder="Enter Password">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">
                                                    <small
                                                        class="font-weight-bold">{{ $errors->first('password') }}</small>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input type="password" name="confirm_password"
                                                    class="form-control {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}"
                                                    placeholder="Confirm Password">
                                                @if ($errors->has('confirm_password'))
                                                <span class="text-danger">
                                                    <small
                                                        class="font-weight-bold">{{ $errors->first('confirm_password') }}</small>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="mt-3">
                                                <input type="hidden" name="_token" value={{csrf_token()}}>
                                                 
                                                <button type="submit"
                                                    class="btn btn-primary btn-block mr-2 mb-2 mb-md-0 text-white" style="background-color: #3f0aa7; color: white">Register</button>

                                                    <div class="mt-3 text-center">
                                                  
                                                     <a href="/login"><p style="color:#3f0aa7; cursor: pointer;" >Already a User? Create an account</p></a>
                                                    </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="{{ asset('vendors/core/core.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>