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
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=2211510102312134&autoLogAppEvents=1"></script>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success position-fixed " style="width: 100%">
            <a class="navbar-brand" href="#">
                Policia Yacuiba
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>                  

                
                <ul class="navbar-nav ml-auto">                
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
                            </div>
                        </li>
                    @endguest
                </ul>    
            </div>
        </nav>
        <main class="py-4">
            <br><br><br>
            @yield('content')
        </main>
        <div class="container bg-white border rounded shadow">
            <div class="row">
                
                    <div class="fb-comments" data-href="https://www.facebook.com/bolivianoticias1/videos/424404171555281/UzpfSTQ3OTMzOTQyNTgyOTI3Mzo3NTUzNjc3ODgyMjY0MzQ/?__tn__=kC-R&amp;eid=ARDaGoF7cvU_G-ZzrfCiTtLtM3AKOdC9x4bRolGKzGLc4-zi9yK0eb0Nu0ROAU9CQyeHvNJCkNYXdh2Q&amp;hc_ref=ARQzEEiegSsVXSv4rf3szDOPRMPnRAgMkDtQ7xuzUsSOyyPeBTHnlMVj8tVLPkfq3Hg&amp;__xts__[0]=68.ARCTl9RyyqR7A1CDYiuml8juap5DDrG9guDDtUWqmGd5G9tWS_OU1hB7DCr5RpIpWq8u_i37yCr1TZ8dEcpgL9cQ76MTOFFguljxudoNs6wzh0Wfs2c7Ae1lCSMO23XKNRc1oYm5NBPbO-Ch5vBupNuCL6mOJ1Eb1tTb8yrjT5DsuY6PS1EEQ5IrdutOsJNhkqPbhZn8VUayJUAdiwjQzlBBr5vYFyQoWpkwlABQlrYxKWofL3_BrBLFWg1nVvYdSN2hOnDxOBixZkifC6XFRoZl10gVPgG6dYnxBS0d5u3IJqiSYHajAvac2EH0KAM7457A2Hpb8vp11wZ8wvyHpHX5dp4dRw0dPlCkLZKynjyLWvQIg48QuXZItMDPA-kcmqjSQ-btMSZGAvIAgC7hPFjmcFzC30iixRqtStTPYyhHsMzy3CrDjeQIIxAWg72ca-X4LC272PiCsTUIc6niUXD6Dtyt_UjJEtvE-qYuKBWFCKCbwCo-fEzeQMJ7Ue0" data-width="" data-numposts="5"></div>
                
                
                    <iframe class="mt-2 ml-4" width="560" height="315" src="https://www.youtube.com/embed/Wl2mrlhE5Ww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            </div>
        </div>
        <br>
        <div class="container center">
            <canvas id="canvas" width="1100" height="200"></canvas>
        </div>
    </div>
    <script>
    var img = new Image();

// User Variables - customize these to change the image being scrolled, its
// direction, and the speed.

img.src = 'https://i.pinimg.com/564x/2f/4f/ae/2f4fae4162aa93bc4314c61ad5e8b442.jpg';
var CanvasXSize = 800;
var CanvasYSize = 200;
var speed = 5; // lower is faster
var scale = 1.05;
var y = -4.5; // vertical offset

// Main program

var dx = 0.75;
var imgW;
var imgH;
var x = 0;
var clearX;
var clearY;
var ctx;

img.onload = function() {
    imgW = img.width * scale;
    imgH = img.height * scale;
    
    if (imgW > CanvasXSize) {
        // image larger than canvas
        x = CanvasXSize - imgW;
    }
    if (imgW > CanvasXSize) {
        // image width larger than canvas
        clearX = imgW;
    } else {
        clearX = CanvasXSize;
    }
    if (imgH > CanvasYSize) {
        // image height larger than canvas
        clearY = imgH;
    } else {
        clearY = CanvasYSize;
    }
    
    // get canvas context
    ctx = document.getElementById('canvas').getContext('2d');
 
    // set refresh rate
    return setInterval(draw, speed);
}

function draw() {
    ctx.clearRect(0, 0, clearX, clearY); // clear the canvas
    
    // if image is <= Canvas Size
    if (imgW <= CanvasXSize) {
        // reset, start from beginning
        if (x > CanvasXSize) {
            x = -imgW + x;
        }
        // draw additional image1
        if (x > 0) {
            ctx.drawImage(img, -imgW + x, y, imgW, imgH);
        }
        // draw additional image2
        if (x - imgW > 0) {
            ctx.drawImage(img, -imgW * 2 + x, y, imgW, imgH);
        }
    }

    // image is > Canvas Size
    else {
        // reset, start from beginning
        if (x > (CanvasXSize)) {
            x = CanvasXSize - imgW;
        }
        // draw aditional image
        if (x > (CanvasXSize-imgW)) {
            ctx.drawImage(img, x - imgW + 1, y, imgW, imgH);
        }
    }
    // draw image
    ctx.drawImage(img, x, y,imgW, imgH);
    // amount to move
    x += dx;
}
    </script>
</body>
</html>
