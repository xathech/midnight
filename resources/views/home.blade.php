@extends('layouts.app')

@section('title', __('Home'))

@section('content')
    
    <div id="main-reviews" class="row mb-3 mx-3">
        <div id="day-review" class="col-md">

            @include('reviews.homeReview',['review' => $mostCommentedEver, 'icon' => 'fa fa-star' ,'message' => __('Most commented review')])

        </div>

        <div id="week-review" class="col-md">

            @include('reviews.homeReview',['review' => $randomReview, 'icon' => 'fa fa-refresh' ,'message' => __('Random review')])

        </div>

    </div>

    <div id="recent-reviews" class="row mt-4 mb-3 mx-3">

        @include('reviews.recentDeck',['reviews' => $recentList])

    </div>

@endsection