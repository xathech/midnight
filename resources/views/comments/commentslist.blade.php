<div class="card mt-2 p-3">
    <h2 class="text-center m-0">{{__('Add comment')}}</h2>
    
    @auth
        
        <form method="POST" class="m-3" action="{{ route('storeComments', $review) }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="review_id" value="{{$review->id}}">

            <div class="form-group text-dark">
                <textarea name="body" id="editor"></textarea>
            </div>
            <!--Errores aquí-->
            @if ($errors->any())
                <div class="alert alert-danger mt-3" role="alert">

                    @foreach ($errors->all() as $message)
                        <li>{{$message}}</li>
                    @endforeach

                </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-warning align-items-center">{{__('Create comment')}}</button>
            </div>
        </form>

    @else
        <div class="text-center my-3">
            <a class="btn btn-warning" href="{{ route('login') }}">
                <div>{{ __('Login') }}</div>
            </a>
        </div>
    @endauth

    <h5>{{$comments->total()}} {{__('comments')}}</h5>
    @foreach ($comments as $comment)
    <hr id="review-divider">
        <div class="m-1">
            <div class="row mb-1">
                <p class="col font-weight-bold text-warning">{{$comment->user->name}}</p>
                <p class="col font-weight-bold text-right">{{$comment->created_at->diffForHumans()}}</p>
            </div>
            <p>{!!$comment->body!!}</p>
        </div>
    @endforeach
    <hr id="review-divider">
    <div id="paginator-container" class="container-fluid mt-3">
        {{ $comments->links() }}
    </div>
</div>