@extends('layouts.app')

<!--View Password Change-->

@section('title', __('Your Password'))

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                
                @include('users.userprofilenav', ['activenav' => 'password'])

                <div style="background-color:#29225A;" class="p-4 text-light">

                    @include('errors.showerrors')

                    <form action="{{ route('updatePassword') }}" method="post">
                        @csrf
                        @method('PUT')
                    
                        <div class="form-group row">
                            <label for="passwordid" class="col-sm-2 col-form-label">{{__('Password')}}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="passwordid" name="password" placeholder="{{ __('Write your password') }}">
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="passwordid" class="col-sm-2 col-form-label">{{__('New password')}}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="new_passwordid" name="new_password" placeholder="{{ __('Write your new password') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="passwordid" class="col-sm-2 col-form-label">{{__('Repeat new password')}}</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="new_password_confirmationid" name="new_password_confirmation" placeholder="{{ __('Repeat your new password') }}">
                            </div>
                        </div>
                        <div class="row px-3 justify-content-center">
                            <button class="btn btn-warning" type="submit">{{__('Save changes')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>

@endsection