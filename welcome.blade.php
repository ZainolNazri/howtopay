<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GBN-Unit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">


    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="/">
                    {{ config('app.name', 'GBN-Unit') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="here nav-link" href="{{ url('/login') }}">{{__('Login')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/register') }}">{{ __('Register') }}</a>
                                </li>
                                    @if (Route::has('register'))
                                    @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/{{ Auth::user()->role }}_dashboard">Dashboard</a>
                                </li>
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        <div class="flex-center position-ref full-height">
            {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}">{{__('Login')}}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ Auth::logout() }}">{{ __('Logout') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
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
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav> --}}

            <div class="content">
                {{-- <img src="{{url('/images/logo.jpg')}}" width="300" height="200" alt="Image"/>
                <div class="title m-b-md">
                    Welcome To GBN-Unit SpecDel
                </div>
                <div class="links">
                    <a href="{{ url('/about') }}" class="btn btn-dark">Click Here To Know More About Us</a>
                </div> --}}

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                         <div class="flash-message">
                            @if (session('flash'))
                            <div class="alert alert-success" role="alert">
                                {{ session('flash') }}
                            </div>
                            @endif
                        </div>
                            <img src="{{url('/images/logo.jpg')}}" width="300" height="200" alt="Image"/>
                            <h1>Welcome To GBN-Unit SpecDel</h1>
                            <div class="links">
                                <a href="{{ url('/about') }}" class="btn">Click Here To Know More About Us</a>
                            </div>
                                <div>
                                    <video width="300" height="300" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                    </video>
                                </div>
                                    <div>
                                    <p>
                    We are from a company called “GBN-Unit “or “Government Brunei – Unit” where our company main focus is creating a service called “SpecDel” or “Special Delivery”, It is a website base application. This company itself is a new company that focus on the deliveries that are happening in Brunei and wanted to help others during this pandemic regarding their products to be delivered or to be received from others.
                    This service offers for customers whom purchase goods / products in the country or outside of the country who are not be available to pick it up by themselves. Not only for that purposes, customers who need to deliver their product to their colleagues or companies will be available as well. Vary by the different users, packages will be deployed and prices will be different for different users as well.
                    </p>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
            <footer class="page-footer font-small blue">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <span>GBN-Unit SpecDel</span>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->
    </body>
</html>
