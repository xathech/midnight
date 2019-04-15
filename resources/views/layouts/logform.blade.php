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
            <label for="inputEmail">{{ __('E-Mail Address') }}</label>

            @if ($errors->has('email'))<!--ES POSIBLE QUE SE SALGA-->
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        
        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>
            <label for="inputPassword">{{ __('Password') }}</label>

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

            <div class="text-center mt-3">

                <a class="text-center btn-sm btn-danger" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>

            </div>
            
        @endif

    </form>

    <div class="dropdown-divider mt-1"></div><!--Separador-->

    <div class="text-light text-center mb-2">
        <div>{{__('You do not have an account?')}}</div>
        <a class="btn btn-sm btn-warning font-weight-bold m-1" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
</div>