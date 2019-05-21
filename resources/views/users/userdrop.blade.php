<!--User dropdown-->
<div id="divformu" class="collapse col-sm-12 col-md-12 col-lg-3 col-xl-2 p-2">
    <div id="divformu-items" class="text-light text-center">
        <a href="{{ route('createReviews') }}" class="dropdown-item"><i class="fa fa-pencil-square-o"></i> {{__('Create Review')}}</a>
        <a href="{{ route('userProfile') }}" class="dropdown-item"><i class="fa fa-user-circle"></i> {{__('My Profile')}}</a>
        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i> {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>