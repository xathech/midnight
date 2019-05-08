@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </thead>
            <tbody>
                @foreach ($users as $user)

                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection