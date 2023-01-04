<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('front/css/style.css') }}>
</head>
<body class="@yield('class')">
    <div id="menu">
        <nav>
            <ul>
                <li><a href="{{ URL::to('/') }}">Articles</a></li>
                <li><a href="{{ URL::to('/formulaire') }}">Formulaire</a></li>
                <li><a href="{{ URL::to('/register') }}">Registrer</a></li>
                <li><a href="{{ URL::to('/login') }}">Se connecter</a></li>
            </ul>
        </nav>
    </div>
    @yield('body')
    <footer>
        <small>Site developpé en php</small>
    </footer>
</body>
</html>