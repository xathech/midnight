@extends('layouts.app')

<!--Create Review-->

@section('title', __('Create Review'))

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xl-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Create Review') }}</h3></div>

                    <div class="card-body">

                        <!--Errores aquí-->
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">

                                @foreach ($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach

                            </div>
                        @endif
                        

                        <form method="POST" action="{{ route('storeReviews') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="input-title">{{ __('Review Title') }}</label>
                                <input id="input-title" type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="{{ __('Enter the review title') }}">
                            </div>

                            <label>{{ __('Review Image') }}</label>
                            <div class="input-group mb-3">                                
                                <div class="custom-file">                                    
                                    <input type="file" name="image" value="{{ old('image') }}" class="custom-file-input" id="customFile" lang="{{ app()->getLocale() }}">
                                    <label class="custom-file-label" for="customFile" data-browse="{{ __('Browse') }}">{{ __('Choose File') }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input-game">{{ __('Game title') }}</label>
                                <input id="input-game" type="text" name="game" value="{{ old('game') }}" class="form-control" placeholder="{{ __('Enter the game title') }}">
                            </div>

                            <div class="form-group text-dark">
                                    <label class="text-light" for="review-body">{{ __('Review Body') }}</label>
                                    <textarea name="body" id="editor">{!! Request::old('body') !!}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-warning">{{__('Create')}}</button>
                            <a class="btn btn-outline-danger ml-1" href="{{ route('home') }}">{{ __('Go back') }}</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.ckeditor')
@endsection