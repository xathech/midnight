<div class="p-0">
    <div class="list-group list-group-horizontal-sm text-center">

        @if ($activenav == 'profile')
            <a href="{{ route('userProfile') }}" class="list-group-item list-group-item-warning list-group-item-action  active">Profile</a>
            <a href="{{ route('userReviews') }}" class="list-group-item list-group-item-warning list-group-item-action">Reviews</a>
        @else    
            <a href="{{ route('userProfile') }}" class="list-group-item list-group-item-warning list-group-item-action">Profile</a>
            <a href="{{ route('userReviews') }}" class="list-group-item list-group-item-warning list-group-item-action active">Reviews</a>
        @endif
       
    </div>
</div>