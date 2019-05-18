@extends('layouts.app')

<!--View Review-->

@section('title', __('Review'))

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-12">
                <div class="card">

                        <img class="card-img-top" src="{{ asset('storage/'.$review->image) }}" alt="review-image">

                        <div class="card-body">
                            <h3 class="card-title">{{ $review->title }}</h3>
                            <hr id="review-divider">
                            <div class="card-text row align-items-center">
                                <div class="col">
                                    <div>
                                        <span id="review-user" class="p-2 font-weight-bold text-dark rounded">{{ $review->user->name }}</span>
                                    </div>                                
                                </div>                                
                                <div class="col text-right">
                                    <div>{{$review->game_title}}</div>
                                    <div class="font-weight-bold mt-2">{{$review->created_at->diffForHumans()}}</div>                                    
                                </div>
                            </div>
                            <hr id="review-divider">
                            <p class="card-text text-justify">{!!$review->body!!}</p>
                        </div>                        
                </div>
                @include('comments.commentslist')                
            </div>
        </div>
    </div>
    @include('layouts.ckeditor')
@endsection