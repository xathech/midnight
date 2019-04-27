@extends('layouts.app')

@section('content')
    
    <div id="main-reviews" class="row mb-3 mx-3">
        <div id="day-review" class="col-sm">
            <div class="card text-light">
                <img id="day-review-img" src="{{ asset('storage/images/tests/1.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
        </div>
        <div id="week-review" class="col-sm">
            <div class="card text-light">
                <img id="week-review-img" src="{{ asset('storage/images/tests/2.jpg') }}" class="card-img-top" alt="week-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!--Card deck-->
    <div id="recent-reviews" class="row mt-4 mb-3 mx-3">
        <h3 class="text-light text-center mb-0 p-2">{{ __('Recent Reviews') }}</h3>
        <div class="recent-reviews-overflow-container"><!--Contenedor con scroll-->
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/1.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/2.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/3.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/1.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/2.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
            <div class="card text-light col-12 col-sm-6 col-md-4 col-lg-3">
                <img id="day-review-img" src="{{ asset('storage/images/tests/3.jpg') }}" class="card-img-top" alt="day-review-image">
                <div class="card-body">
                    <div class="card-title row">
                        <div id="week-review-title" class="col-sm"><h3 class="font-weight-bold">Card title</h3></div>
                        <div id="week-review-info" class="col-sm text-sm-left text-md-right">
                            <div id="week-review-date">17/22/2020</div>
                            <div id="week-review-author">Pepe apapas</div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div><!--Divider-->
                    <p class="card-text text-wrap">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-warning float-right">{{ __('See full review') }}</a>
                </div>
            </div>
        </div>
    </div>

@endsection