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

                            @auth
                                
                                @if ($review->user_id == Auth::user()->id || Auth::user()->role == 1)
                                    
                                    <div class="text-right">
                                        <button class="btn btn-outline-danger" type="button" data-toggle="modal" data-target="#modal">{{__('Delete review')}}</button>
                                    </div>                            

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content" style="background-color:#29225A;">
                                                <div class="modal-body text-center text-light">                                
                                                    {{__('Do you really want to delete this review?')}}
                                                </div>
                                                <div class="modal-footer justify-content-around">
                                                    <button type="submit" class="btn btn-warning" data-dismiss="modal">{{__('Cancel')}}</button>
                                                    <form action="{{ route('deleteReview', $review) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">{{__('Yes, I want to delete this review')}}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endif

                            @endauth
                                                        
                        </div>                        
                </div>                
                @include('comments.commentslist')                
            </div>
        </div>
    </div>
    @include('layouts.ckeditor')
@endsection