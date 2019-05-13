<div class="jumbotron rounded">
    <h2 class="display-4 pb-3">{{__('Search Reviews')}}</h2>
    <form action="{{route('searchReviews')}}" method="get">
        <div class="container">                        
            <div class="input-group">
                <input name="query" class="form-control" type="search" aria-label="Search" placeholder="{{ __('Search by title') }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <a class="btn btn-warning mt-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                {{__('Sort')}}
            </a>
            <div class="collapse mt-3" id="collapseExample">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sortDefault" name="sort" value="default" class="custom-control-input">
                    <label class="custom-control-label" for="sortDefault">{{__('Default')}}</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sortVotes" name="sort" value="votes" class="custom-control-input">
                    <label class="custom-control-label" for="sortVotes">{{__('Votes')}}</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sortLang" name="sort" value="lang" class="custom-control-input">
                    <label class="custom-control-label" for="sortLang">{{__('Language')}}</label>
                </div>
            </div>
        </div>
    </form>
</div>