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
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">

            <div class="navbar-header">
                <!--   Collapsed Hamburger -->
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{--branding image --}}
                <a href="{{url('/')}}" class="navbar-brand">
                    {{config('app.name','Laravel')}}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="vav navbar-nav">
                    &nbsp
                </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{route('admin.companies.index')}}">Companies</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            {{Auth::user()->name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{route('logout')}}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log
                                    out</a>
                                <form action="{{route('logout')}}" method="post" id="logout-form"
                                      style="display: none;">
                                    {{csrf_token()}}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>


        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
