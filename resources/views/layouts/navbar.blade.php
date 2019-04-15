<!--NAVBAR-->
<nav class="navbar navbar-expand-sm navbar-dark">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Midnight') }}<!--Page name-->
    </a>
    <!--Drop-down button-->
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
        
        <!--Language selector-->

        

        <!--Search-->
        <form class="form" action=""><!--FILL ACTION-->
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
                {{ __('Login') }}
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

@guest

    @include('layouts.logform')

@else

    @include('layouts.userdrop')
    
@endguest