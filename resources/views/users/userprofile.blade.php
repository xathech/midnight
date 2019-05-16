@extends('layouts.app')

<!--View Profile-->

@section('title', __('Your Profile'))

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                
                @include('users.userprofilenav', ['activenav' => 'profile'])

                <div style="background-color:#29225A;" class="p-4 text-light">

                    @include('errors.showerrors')

                    <form action="{{ route('updateUser') }}" method="post">
                        @csrf
                        @method('PUT')
                    
                        <div class="form-group row">
                            <label for="usernameid" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="usernameid" name="username" placeholder="Username" value="{{$currentUser->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailid" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="emailid" name="email" placeholder="Email" value="{{$currentUser->email}}">
                            </div>
                        </div>
                        <div class="row px-3 justify-content-between">
                            <button class="btn btn-outline-danger" type="button" data-toggle="modal" data-target="#modal">Delete account</button>
                            <button class="btn btn-warning" type="submit">Save changes</button>
                        </div>
                    </form>
    
                    <!-- Modal -->
                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" style="background-color:#29225A;">
                            <div class="modal-body text-center text-light">                                
                                {{__('Do you really want to delete your account?')}}
                            </div>
                            <div class="modal-footer justify-content-around">
                                <button type="submit" class="btn btn-warning" data-dismiss="modal">{{__('Cancel')}}</button>
                                <form action="{{ route('deleteUser') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{__('Yes, delete my account')}}</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    
@endsection