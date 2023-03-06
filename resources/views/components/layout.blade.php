
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
        <a href="/"><img class="" style="width: 200px; height:90px;" src={{URL("images/ebilllogo.png")}} alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold text-white uppercase">
                    <a class="text-white decoration-none" href="/home">Welcome {{auth()->user()->name}}</a>
                </span>
            </li>
             
            {{-- <li>
                <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                    Manage Listings</a>
            </li> --}}
            <li>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button class="text-white"  type="submit"><i class="fa-solid text-white fa-door-closed"></i>Logout</button>
                </form>
            </li>
            @else

            <li>
                <a href="/register" class="hover:text-back text-white px-2"><i class="fa-solid fa-user-plus"></i>
                    Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-back text-white px-2"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login
                </a>
            </li>
            @endauth
        </ul>
    </nav>

    <main>
        {{$slot}}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved </p>

        {{-- <a href="/bills/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Add Bills</a> --}}
        {{--
        <x-flash-message />
        <x-failed-message /> --}}
    </footer>
</body>

</html>