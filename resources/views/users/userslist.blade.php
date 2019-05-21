@extends('layouts.app')

<!--Users list-->

@section('title', __('Users'))

@section('content')

    @if ($users->total() == 0)
        <div class="container-fluid text-center">
            <div class="jumbotron jumbotron-fluid rounded">
                <div class="container">
                    <h1 class="display-4">{{__('User not found')}} <i class="fa fa-frown-o"></i> </h1>
                    <div class="dropdown-divider my-4"></div>
                    @guest
                        <p class="lead">{{__('Do you want to create one?')}}</p>
                    @endguest

                        <a class="btn btn-warning btn-lg mr-1" href="{{ route('searchUsers') }}" role="button">{{__('Go back')}}</a>

                    @guest
                        <a class="btn btn-warning btn-lg" href="/register" role="button">{{__('Click here!')}}</a>
                    @endguest
                </div>
            </div>
        </div>
    @else
        
        <div id="users-table-container" class="table-responsive table-sm container-fluid text-center">

            @include('users.usersearch')
        
            <table id="users-table" class="table table-dark table-hover table-bordered">
                <thead class="p-3">
                    <tr>
                        <th scope="col">{{__('Role')}}</th>
                        <th scope="col">{{__('Username')}}</th>
                        <th scope="col">{{__('E-Mail Address')}}</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">
                                @if ($user->role == 0)
                                    {{__('User')}}
                                @else
                                    {{__('Admin')}}
                                @endif
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a class="btn btn-warning fa fa-envelope" href="mailto:{{$user->email}}"></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>            
        </div>
        <div id="paginator-container" class="container-fluid col-sm-mt-3">
            {{ $users->links() }}
        </div>

    @endif
    
@endsection