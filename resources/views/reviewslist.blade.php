@extends('layouts.app')

@section('content')
    
        <table class="table table-dark">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Votes</th>
                <th scope="col">Image</th>
                <th scope="col">Language</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
            </thead>
            <tbody>
                @foreach ($reviews as $review)

                    <tr>
                    <th scope="row">{{$review->id}}</th>
                        <td>{{$review->user_id}}</td>
                        <td>{{$review->title}}</td>
                        <td>{{Str::limit($review->body,'70')}}</td>
                        <td>{{$review->votes}}</td>
                        <td>{{$review->image}}</td>
                        <td>{{$review->language}}</td>
                        <td>{{$review->created_at}}</td>
                        <td>{{$review->updated_at}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>

@endsection