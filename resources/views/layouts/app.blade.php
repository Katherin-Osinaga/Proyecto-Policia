<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">    
    <style>
        body {
            background-image: url(img/fondo.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="app">
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-success position-fixed " style="width: 100%">
            <a class="navbar-brand" href="/home">
                Policia Yacuiba
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>                  

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">                        
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Policia
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">                                                     
                            <a class="dropdown-item text-dark " href="/policia/create">Registro Policia</a>                            
                            <a class="dropdown-item text-dark " href="/policia">Lista de Policia</a>                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="/caso" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Casos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark" href="/historial">Historial</a>                            
                            <a class="dropdown-item text-dark" href="/policia">Policia</a>                            
                            <a class="dropdown-item text-dark" href="/caso/create">Registro Caso</a>                            
                            <a class="dropdown-item text-dark" href="/caso">Lista Caso</a>                            
                        </div>
                    </li>                        
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="/caso" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Autor
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">                            
                            <a class="dropdown-item text-dark" href="/delincuente/create">Registro Autor</a>                            
                            <a class="dropdown-item text-dark" href="/historial/create">Registro Historial</a>                            
                            <a class="dropdown-item text-dark" href="/delincuente">Lista de Autor</a>                            
                        </div>
                    </li>   
                    <li class="nav-item ">
                        <a href="/grado/create" class="text-white nav-link">Crear Grado</a>                                     
                    </li>
                    <li class="nav-item ">
                        <a href="/contacto/create" class="text-white nav-link">Sugerencias</a>                                     
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-auto">                
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="/juego">Juego</a>
                    </li>
                    <a class="nav-link text-white" href="/video/os_simpsons_s25e22_720p.mp4">
                        Acerca de Nosotros
                    </a>    
                    @guest
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">                            
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                    @endguest
                </ul>    
            </div>
        </nav>
        <main class="py-4">
            <br><br><br>
            @yield('content')
        </main>
    </div>
</body>
</html>
