<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fresher-Place</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="p">
        <nav class="flex justify-between items-center px-5 py-3 border-b border-white/20">
            <div>
                <a href="/" >
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
            <div class="space-x-6 font-bold flex">
                <a href="/jobs/create">Post a Job</a>

                <form method="POST" action="/logout">
                    @csrf
                    <button>Logout</button>
                </form>
            </div>
            @endauth

            @guest()
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Login</a>
                    </div>

            @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>
