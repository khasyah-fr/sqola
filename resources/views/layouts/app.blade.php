<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sqola | E-Learning Platform</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3"> Sqola </a>
            </li>
            <li>
            <a href="#" class="p-3"> Dashboard </a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3"> Fitra Rahmani K </a>
                </li>
                <li>
                    <form action="#" method="post" class="inline p-3">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                <a href="#" class="p-3"> Login </a>
                </li>
                <li>
                    <a href="#" class="p-3"> Register </a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>