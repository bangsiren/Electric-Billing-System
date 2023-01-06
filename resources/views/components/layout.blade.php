{{--
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #000;
            color: #dddddd;
            font-family: 'Raleway', sans-serif;
            font-weight: 700;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #cdcdcd;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .sub {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="top-right links">
            <a href="">Home</a>
            <a href="" class="fw-bold">Login</a>
            <a href="" class="fw-bold">Register</a>

        </div>


        <div class="content">
            <div class="title m-b-md">
                Online Electricity Billing System
                <p class="sub">Simple PHP Project using Laravel 9 Framework</p>
            </div>
            <div class="text-center">
                <a href="{{url('/admin/login')}}"
                    class="btn btn-lg btn-primary bg-gradient bg-primary rounded-pill px-4 fw-bolder">Login to Admin
                    card</a>
            </div>
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#317874",
                        },
                    },
                },
            };
    </script>
    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between bg-laravel items-center mb-4 h-24">
        <a href="/"><img class="w-24" src={{asset("images/logo.png")}} alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            {{-- @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{auth()->user()->name}}
                </span>
            </li>

            <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                    Manage Listings</a>
            </li>
            <li>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit"><i class="fa-solid fa-door-closed"></i>Logout</button>
                </form>
            </li>
            @else --}}

            <li>
                <a href="/register" class="hover:text-back text-white px-2"><i class="fa-solid fa-user-plus"></i>
                    Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-back text-white px-2"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
            {{-- @endauth --}}
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Add Bills</a>
        {{--
        <x-flash-message />
        <x-failed-message /> --}}
    </footer>
</body>

</html>