<div class="card text-light">
    <img id="day-review-img" src="{{ asset('storage/'.$review->image) }}" class="card-img-top" alt="day-review-image">
    <div class="card-body">
        <div class="card-title row">
            <div id="week-review-title" class="col-sm-10"><h4>{{ Str::limit($review->title,90) }}</h4></div>
            <div id="week-review-info" class="col-sm text-sm-left text-md-right align-self-center">
                <div id="week-review-date" class="font-weight-bold">{{$review->created_at->diffForHumans()}}</div>
                <div id="week-review-author" class="text-warning">{{ $review->user->name }}</div>
            </div>
        </div>
        <div class="dropdown-divider"></div><!--Divider-->
        <p class="card-text">{!!Str::limit($review->body,300)!!}</p>
        <a href="{{ route('viewReviews', $review) }}" class="btn btn-warning float-right">{{ __('See full review') }}</a>
    </div>
</div>