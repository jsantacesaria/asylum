<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/main.css" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="subpage">
                <!-- Header -->
                        <header id="header">
                                <div class="logo"><a href="/">Asylum <span></span></a></div>
                                <a href="#menu">Menu</a>
                        </header>

                <!-- Nav -->
                        <nav id="menu">
                                <ul class="links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="login">Login</a></li>
                                        <li><a href="contact">Contact</a></li>
                                </ul>
                        </nav>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Asylum 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
                <!-- Footer -->
                        <footer id="footer">
                                <div class="container">
                                        <ul class="icons">
<li><a href="https://fetlife.com/users/6986766" target="_blank"> <img src="fet_logo.png" style="width:25px;height:25px;border:0;"><span class="label"></span></a></li>
  <li><a href="https://twitter.com/AsylumBuffalo" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
  <li><a href="https://www.instagram.com/asylum_buffalo/?hl=en" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
  <li><a href= "mailto: asylumbuffalo@gmail.com" class="icon fa-envelope-o" target="_blank"><span class="label">Email</span></a></li>
                                        </ul>
                                </div>
                         <div class="ncsf_partner">
                          <a href="https://ncsfreedom.org/" target="_blank"> <img src="/images/ncsf_partner.png" style="width:200px;height:100px;"></a>
                         </div>
                                <div class="copyright">
                                        &copy; Asylum by Sad Blue Dragon. All rights reserved.
                                </div>
                        </footer>

                <!-- Scripts -->
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="assets/js/jquery.scrollex.min.js"></script>
                        <script src="assets/js/skel.min.js"></script>
                        <script src="assets/js/util.js"></script>
                        <script src="assets/js/main.js"></script>

</body>
</html>
