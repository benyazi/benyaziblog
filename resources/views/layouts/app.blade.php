<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a class="nav-link" href="{{ route('career') }}">My Career</a></li>
                        <li><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="media">
                            <img class="align-self-center mr-3 rounded-circle" style="width: 100px;" src="https://benyazi.ru/imgs/self_benyazi.jpg" alt="Benjamin Yazi picture">
                            <div class="media-body">
                                <h2 class="mt-0">Sergey Klabukov</h2>
                                <h5 class="mt-2">Middle PHP-developer</h5>
                                <div class="mt-2">
                                    <strong>Skills: </strong> PHP5.3 - PHP7.1, Laravel, Yii, Symfony, Phalcon Framework, JavaScript, Vue.js, jQuery, Go, Lua, C#, Unity3D. Defold Game Engine.
                                </div>
                                <div class="mt-2">
                                    <strong>Links: </strong> <a href="https://github.com/benyazi">Github</a>, <a href="https://www.linkedin.com/in/sergeyklabukov/">LinkedIn</a>, <a href="mailto:yo@benyazi.ru">yo@benyazi.ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
