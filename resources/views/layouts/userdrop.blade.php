<!--User dropdown-->
<div id="divformu" class="collapse col-sm-12 col-md-5 col-lg-3 col-xl-2 p-2">
    <div id="divformu-items" class="text-light text-center">
        <a href="" class="dropdown-item"><i class="fa fa-user"></i> {{__('My Profile')}}</a>
        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i> {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>