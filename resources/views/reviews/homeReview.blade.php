<div class="card text-light" id="home-review">
    <h4 class="card-header">
        <i class="{{ $icon }} text-warning mr-1" aria-hidden="true"></i> <span class="font-weight-bold">{{ $message }}</span>
    </h4>
    <img id="day-review-img" src="{{ asset('storage/'.$review->image) }}" class="card-img-top" alt="day-review-image">
    <div class="card-body">
        <div class="card-title row">
            <div id="week-review-title" class="col-12"><h4>{{ Str::limit($review->title,98) }}</h4></div>
            <div id="week-review-info" class="col-12 text-right align-self-center">
                <div id="week-review-date" class="font-weight-bold">{{$review->created_at->diffForHumans()}}</div>
                <div id="week-review-author" class="text-warning">{{ $review->user->name }}</div>
            </div>
        </div>
        <div class="dropdown-divider"></div><!--Divider-->
        <p class="card-text">{!!Str::limit($review->body,250)!!}</p>
        <a href="{{ route('viewReviews', $review) }}" class="btn btn-warning float-right">{{ __('See full review') }}</a>
    </div>
</div>