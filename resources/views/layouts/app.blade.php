<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Midnight') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Font-awesome icons-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:rgb(41, 34, 90)">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Midnight') }}<!--Nombre página-->
        </a>
        <!--Botón desplegable-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcont" aria-controls="nabvarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navcont" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Ejemplo<span class="sr-only"(current)></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ejemplo2<span class="sr-only"(current)></span></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->            

            <!--Buscar-->
            <form class="form" action=""><!--RELLENAR ACTION-->
                <div class="input-group">
                    <input class="form-control" type="search" aria-label="Search" placeholder="Buscar">
                    <div class="input-group-append">
                        <button class="btn btn-secondary mr-sm-3" type="submit">
                            <span class="fa fa-search pb-1" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Authentication Links -->
            @guest
                <button class="btn btn-outline-warning my-2 my-sm-0" data-toggle="collapse" href="#divformu" type="button">
                    Iniciar sesion
                </button>
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
        </div>
    </nav>

    <!--Formulario-->
    <div id="divformu" class="collapse col-sm-12 col-md-5 col-lg-3 col-xl-2"><!--COLLAPSE ES LA PROPIEDAD QUE LO ANIMA-->
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            @csrf

            <div class="text-center">
                <div class="btn-group mb-3">
                    <button type="button" data-toggle="collapse" href="#divformu" class="btn btn-danger fa fa-arrow-up fa-2x"></button>
                    <button type="reset" class="btn btn-primary fa fa-trash fa-2x"></button>
                </div>
            </div>
            
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))<!--ES POSIBLE QUE SE SALGA-->
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="custom-control custom-checkbox mb-3 text-light">
                <input type="checkbox" id="remember" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="custom-control-label">{{ __('Remember Me') }}</label>
            </div>
            
            <button class="btn btn-lg btn-warning btn-block" type="submit">{{ __('Login') }}</button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>

        <div class="dropdown-divider mt-1"></div><!--Separador-->

        <div class="text-light text-center mb-2">
            <div>{{__('You do not have an account?')}}</div>
            <a class="btn btn-sm btn-warning font-weight-bold m-1" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>

    <!--Contenido-->
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
