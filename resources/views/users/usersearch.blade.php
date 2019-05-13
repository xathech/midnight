<div class="jumbotron rounded">
    <h2 class="display-4 pb-3">{{__('Search Users')}}</h2>
    <form action="{{route('searchUsers')}}" method="get">
        <div class="container">                        
            <div class="input-group">
                <input name="query" class="form-control" type="search" aria-label="Search" placeholder="{{ __('Search by username') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>