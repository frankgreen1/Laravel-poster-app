<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-300 ">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class=" flex items-center">
            <li>
                <a href="/"class="p-3">Home</a>
            </li>
            <li>
            <a href="{{ route('dashboard')}}"class="p-3">Dashboard</a>
            </li>
            <li>
            <a href="{{ route('post')}}"class="p-3">Post</a>
            </li>

        </ul>





        <ul class=" flex items-center">
            @auth
                <li>
                    <a href=""class="p-3">{{ auth()->user()->name}}</a>
                </li>
                <li>
                <form action="{{ route('logout')}}" method="POST" class="inline">
                    @csrf
                    <button type="submit">logout</button>
                </form>
                </li>
            @endauth

            @guest

                <li>
                <a href="{{ route('login')}}"class="p-3">Login</a>
                </li>
                <li>
                <a href="{{ route('register')}}"class="p-3">Register</a>
                </li>
            @endguest



        </ul>
    </nav>
    @yield('content')
</body>
</html>
