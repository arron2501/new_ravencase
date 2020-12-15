<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title'){{ config('app.name') }} </title>
    <link rel="icon" href="{{ URL::asset('/images/shortcut.png') }}" type="image/x-icon"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
    <div id="app">
        <nav class="navbar @yield('fixed-top') navbar-expand-md navbar-light shadow-sm" style="background-color: #CBF3F9;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ URL::asset('/images/icon.png') }}" alt="Raven Case" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @yield('home_status')">
                            <a href="{{ url('/') }}" class="nav-link">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item @yield('cases_status')">
                            <a href="{{ url('/products') }}" class="nav-link">
                                CASES
                            </a>
                        </li>
                        <li class="nav-item @yield('faq_status')">
                            <a href="{{ url('/faq') }}" class="nav-link">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item @yield('about_status')">
                            <a href="{{ url('/about') }}" class="nav-link">
                                ABOUT US
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item @yield('login_status') pr-2">
                                    <a class="nav-link btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item @yield('register_status')">
                                    <a class="nav-link btn btn-primary text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        {{ __('My Orders') }}
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#">
                                        {{ __('Edit Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        {{ __('Change Password') }}
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
            {{--  START Footer Section  --}}
            <footer>
                <div class="text-center @yield('footer_status') text-white py-4" style="background: #1c252e">
                    <div class="footer-copyright text-center">
                        © 2020 Raven Case:<strong> All Rights Reserved.</strong>
                    </div>
                </div>
            </footer>
            {{--  END Footer Section  --}}
        </main>
    </div>
</body>
</html>
