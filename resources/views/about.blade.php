@extends('layouts.app')

<!--About Page-->

@section('title', __('About ').config('app.name', 'Midnight'))

@section('content')

    <div class="container">
        <div class="card">
            <div class="jumbotron">
                <h3 class="display-4">{{__('About ')}}{{ config('app.name', 'Midnight') }}</h2>
                    <hr id="review-divider">
                <p class="lead">{{__("Midnight it's a videogames reviews web page developed under the PHP framework Laravel and the CSS framework Bootstrap.")}}</p>

                <div id="accordion" class="text-center">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none text-warning collapsed stretched-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                {{__('External Laravel modules used')}}
                            </button>
                        </h5>
                        </div>
                    
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                
                                <div class="list-group">
                                    <a href="https://laravel.com/docs/5.8/scout" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laravel scout 7.1</a>
                                    <a href="https://laravel.com/docs/5.8/telescope" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laravel telescope 2.0</a>
                                    <a href="https://github.com/Laraveles/spanish" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laraveles spanish 1.2</a>
                                    <a href="https://github.com/mcamara/laravel-localization" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laravel-Localization 1.3</a>
                                    <a href="https://github.com/yabhq/laravel-scout-mysql-driver" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laravel Scout Mysql-Driver 2.3</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none text-warning collapsed stretched-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                {{__('Documentation')}}
                            </button>
                        </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">

                                <div class="list-group">
                                    <a href="https://laravel.com/docs/5.8/" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Laravel 4.8</a>
                                    <a href="https://getbootstrap.com/docs/4.3/" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Bootstrap 4.3</a>
                                    <a href="https://github.com/xathech/midnight" class="list-group-item list-group-item-action list-group-item-dark stretched-link">{{ config('app.name', 'Midnight') }}</a>                                
                                </div>

                            </div>
                        </div>
                    </div> 
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none text-warning collapsed stretched-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                {{__('External Javascript code')}}
                            </button>
                        </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">

                                <div class="list-group">
                                    <a href="https://github.com/Johann-S/bs-custom-file-input" class="list-group-item list-group-item-action list-group-item-dark stretched-link">bs-custom-file-input 1.3.2</a>
                                    <a href="https://github.com/auxiliary/rpage" class="list-group-item list-group-item-action list-group-item-dark stretched-link">rpage</a>
                                    <a href="https://ckeditor.com/ckeditor-4/" class="list-group-item list-group-item-action list-group-item-dark stretched-link">ckeditor 4</a>
                                    <a href="https://ckeditor.com/cke4/addon/wordcount" class="list-group-item list-group-item-action list-group-item-dark stretched-link">ckeditor wordcount</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-decoration-none text-warning collapsed stretched-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                {{__('External CSS code')}}
                            </button>
                        </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">

                                <div class="list-group">
                                    <a href="https://getbootstrap.com/docs/4.3/examples/floating-labels/" class="list-group-item list-group-item-action list-group-item-dark stretched-link">floating-labels</a>
                                    <a href="https://fontawesome.com/v4.7.0/" class="list-group-item list-group-item-action list-group-item-dark stretched-link">Fontawesome 4.7.0</a>                                    
                                </div>

                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>

@endsection