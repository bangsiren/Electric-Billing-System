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
    #app {
        width: 100%;
        height: 100vh;
    }
    .nav-link,
    .btn-link {
        color: #317874;
        font-size: 20px;
    }
    .nav-link:hover {
       color: black
    }

</style>
<body>
    <div id="app" class="container mx-auto py-4">
        <div class="">
            <ul class="nav">
                <li class="nav-item">
                    <a  class="nav-link" href="/admin">
                        Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="/admin/bills">
                        Bills
                    </a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="/admin/create-bills">
                        Create Bill
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/admin/settings">
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button  type="submit" class="btn btn-link"><i class="fa-solid fa-door-closed"></i>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="mt-5">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
