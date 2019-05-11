@extends('layouts.app')

<!--Users list-->

@section('title', __('Users'))

@section('content')

    @if ($users->total() == 0)
        <div class="container-fluid text-center">
            <div class="jumbotron jumbotron-fluid rounded">
                <div class="container">
                    <h1 class="display-4">{{__('There are no registered users')}} <i class="fa fa-frown-o"></i> </h1>
                    <div class="dropdown-divider my-4"></div>
                    @guest
                        <p class="lead">{{__('Do you want to create one?')}}</p>
                        <a class="btn btn-warning btn-lg" href="/register" role="button">{{__('Click here!')}}</a>
                    @endguest
                </div>
            </div>
        </div>
    @else
        
        <div id="users-table-container" class="table-responsive table-sm container-fluid text-center">
        
            <table id="users-table" class="table table-dark table-hover table-bordered">
                <thead class="p-3">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <a href="">
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        </a>
                    @endforeach
                </tbody>
            </table>
            <div id="paginator-container" class="container-fluid col-sm-mt-3">
                {{ $users->links() }}
            </div>
        </div>

    @endif
    
@endsection