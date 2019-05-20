<!--NAVBAR-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand p-0 mr-1" href="{{ route('home') }}">
            <img src="{{ asset('storage/images/favicon.svg') }}" width="160" height="40" alt="">
        </a>
        <!--Drop-down button-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcont" aria-controls="nabvarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navcont" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('searchReviews') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('searchReviews') }}">{{ __('Reviews') }}<span class="sr-only"></span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('searchUsers') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('searchUsers') }}">{{ __('Users') }}<span class="sr-only"></span></a>
                </li>
                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('About ') }}{{ config('app.name', 'Midnight') }}<span class="sr-only"></span></a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->

            <!--Language selector-->

            <div id="langselector" class="dropdown mr-3 my-1 my-lg-0">
                <button class="btn btn-warning dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ __('Language') }}
                    <i class="fa fa-globe fa-lg"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <h6 class="dropdown-header py-0 font-weight-bold text-center">{{__('Choose a Language')}}</h6>
                    <div class="dropdown-divider"></div>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            @if (LaravelLocalization::getCurrentLocale() == $localeCode)

                                <a class="dropdown-item active" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    
                            @else

                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                
                            @endif

                                <img height="30" width="40" src="{{ asset('storage/images/flags/'.$properties['regional'].'.svg') }}" alt=""> {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </div>
            </div>

            <!-- Authentication Links -->
            @guest
                <button id="divformutog" class="btn btn-outline-warning mb-2 mb-sm-0 mt-2 mt-lg-0" data-toggle="collapse" href="#divformu" type="button">
                    <div>{{ __('Login') }}</div>
                </button>
            @else
                <button id="divformutog" class="btn btn-outline-warning mb-2 mb-sm-0 mt-2 mt-lg-0" data-toggle="collapse" href="#divformu" type="button">
                    <div><i class="fa fa-user" aria-hidden="true"></i> {{ Str::limit(Auth::user()->name,30) }}</div>
                </button>
            @endguest
        </div>
    </nav>
</header>
@guest

    @include('layouts.logform')

@else

    @include('users.userdrop')
    
@endguest