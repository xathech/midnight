@extends('layouts.app')

<!--View Password Change-->

@section('title', __('Your Reviews'))

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            
            @include('users.userprofilenav', ['activenav' => 'reviews'])

            <div style="background-color:#29225A;" class="p-4 text-light">

                <table id="reviews-table" class="table table-dark table-hover table-bordered text-center">
                    <thead>
                        <th scope="col" style="width:10%">{{__('Image')}}</th>
                        <th scope="col">{{__('Title')}}</th>
                        <th scope="col">{{__('Game')}}</th>
                        <th scope="col">{{__('Comments')}}</th>
                        <th scope="col">{{__('Date')}}</th>
                        <th scope="col"></th>
                    </thead>
                    <tbody>
                        @foreach ($reviews as $review)
                            
                            <tr>
                                <td class="align-middle"><img class="img-fluid rounded" src="{{ asset('storage/'.$review->image) }}" alt="review-image"></td>
                                <td class="align-middle">{{Str::limit($review->title,'60')}}</td>
                                <td class="align-middle">{{Str::limit($review->game_title,'20')}}</td>
                                <td class="align-middle">{{$review->comments->count()}}</td>                                    
                                <td class="align-middle">{{$review->created_at->diffForHumans()}}</td>
                                <td class="align-middle"><a href='{{ route('viewReviews', $review) }}' class="btn btn-warning fa fa-eye"></a></td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>        
</div>

@endsection