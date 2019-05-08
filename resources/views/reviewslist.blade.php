@extends('layouts.app')

@section('content')
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">User</th>
                <th scope="col">Title</th>
                <th scope="col">Game Title</th>
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
                        <td>{{$review->user->name}}</td>
                        <td>{{$review->title}}</td>
                        <td>{{Str::limit($review->game_title,'20')}}</td>
                        <td>{{Str::limit($review->body,'70')}}</td>
                        <td>{{$review->votes}}</td>
                        <td><img class="img-fluid" src="{{ asset($review->image) }}" alt="review-image"></td>
                        <td>{{$review->language}}</td>
                        <td>{{$review->created_at}}</td>
                        <td>{{$review->updated_at}}</td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{ $reviews->links() }}
    </div>
@endsection