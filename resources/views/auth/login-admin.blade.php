<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/common.css') }}" rel="stylesheet">
    @yield('custom_css')
</head>

<style>
    body>#app{
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    body>#app>nav{
        width: 100%;
        border-radius: 0px;
    }
    body>#app>.container{
       flex-shrink: 1;
       flex-grow: 1;
       display: flex;
       align-items: center;
       justify-content: center
    }
    </style>
<body>

    <div id="app">
        <div class="container">
            <div class="col-lg-5 col-md-6 col-sm-10 col-xs-12">
                <div class="card rounded-0 shadow text-reset">
                    <div class="card-header">
                        <div class="card-title h3 fw-bold text-center my-2">Admin Login</div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form class="form-horizontal" method="POST" action="">
                               @csrf
        
                                <div class="mb-3 ">
                                    <label for="email" class="control-label">Email Address</label>
        
                                    <div class="">
                                        <input id="email" type="email" class="form-control rounded-0" name="email" value="{{ old('email') }}" required autofocus>
        
                                    
                                            <span class="help-block">
                                                <strong></strong>
                                            </span>
                              
                                    </div>
                                </div>
        
                                <div class="mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="control-label">Password</label>
        
                                    <div class="">
                                        <input id="password" type="password" class="form-control rounded-0" name="password" required>
        
                                   
                                            <span class="help-block">
                                                <strong></strong>
                                            </span>
                                
                                    </div>
                                </div>
        
                                <div class="">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
        
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary rounded-0 bg-gradient">
                                        Login
                                    </button>
                                </div>
                                <div class="">
                                    <a class="btn btn-link" href="">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>






