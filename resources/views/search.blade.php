@extends('layouts.app')

@section('content')
    <div class="row container-fluid text-center">

        @if ($button == 'reviews' )

            @include('layouts.reviewslist')
            
        @else

            @include('layouts.userslist')

        @endif
        
    </div>
@endsection