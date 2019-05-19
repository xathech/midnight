<h3 class="text-light text-center mb-0 p-2">{{ __('Recent Reviews') }}</h3>
    <div class="recent-reviews-overflow-container"><!--Contenedor con scroll-->

        @foreach ($reviews as $review)
            
            <div class="card text-light col-12 col-md-6 col-lg-4 col-xl-3">
                <img style="height:30vh;" id="day-review-img" src="{{ asset('storage/'.$review->image) }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm-10 text-wrap"><h5>{{ Str::limit($review->title,50) }}</h5></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date" class="font-weight-bold">{{$review->created_at->diffForHumans()}}</div>
                            <div id="week-review-author" class="text-warning">{{ $review->user->name }}</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">{!!Str::limit($review->body,45)!!}</p>
                    <a href="{{ route('viewReviews', $review) }}" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
        </div>
        @endforeach

    </div>