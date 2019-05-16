<div class="p-0">
    <div class="list-group list-group-horizontal-sm text-center">

        @if ($activenav == 'profile')
            <a href="{{ route('userProfile') }}" class="list-group-item list-group-item-warning list-group-item-action  active">{{__('Profile')}}</a>
            <a href="{{ route('userPassword') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Password')}}</a>
            <a href="{{ route('userReviews') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Reviews')}}</a>
            
        @endif 
        
        @if ($activenav == 'password')
            <a href="{{ route('userProfile') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Profile')}}</a>
            <a href="{{ route('userPassword') }}" class="list-group-item list-group-item-warning list-group-item-action active">{{__('Password')}}</a>
            <a href="{{ route('userReviews') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Reviews')}}</a>
        @endif

        @if ($activenav == 'reviews')
            <a href="{{ route('userProfile') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Profile')}}</a>
            <a href="{{ route('userPassword') }}" class="list-group-item list-group-item-warning list-group-item-action">{{__('Password')}}</a>
            <a href="{{ route('userReviews') }}" class="list-group-item list-group-item-warning list-group-item-action active">{{__('Reviews')}}</a>
        @endif
       
    </div>
</div>