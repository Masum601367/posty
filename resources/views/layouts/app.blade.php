<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty | Post your thoughts...</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">

        <ul class="flex items-center">
            <li><a href="#" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="#" class="p-3">Post</a></li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li><a href="#" class="p-3">{{ auth()->user()->name }}</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="p-3">Log Out</button>
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{ route('login') }}" class="p-3">Log In</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('contents')
</body>
</html>
