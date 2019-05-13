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
                        <form method="POST" action="/reviews/store">
                            @csrf

                            <div class="form-group">
                                <label for="input-title">{{ __('Review Title') }}</label>
                                <input id="input-title" type="text" name="review-title" class="form-control" placeholder="{{ __('Enter the review title') }}">
                            </div>

                            <label>{{ __('Review Image') }}</label>
                            <div class="input-group mb-3">                                
                                <div class="custom-file">                                    
                                    <input type="file" class="custom-file-input" id="customFile" lang="{{ app()->getLocale() }}">
                                    <label class="custom-file-label" for="customFile" data-browse="{{ __('Browse') }}">{{ __('Choose File') }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input-game">{{ __('Game Title') }}</label>
                                <input id="input-game" type="text" name="review-game" class="form-control" placeholder="{{ __('Enter the game title') }}">
                            </div>

                            <div class="form-group text-dark">
                                    <label class="text-light" for="review-body">{{ __('Review Body') }}</label>
                                    <textarea name="review-body" id="editor"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-warning">{{__('Create')}}</button>
                            <a class="btn btn-outline-danger ml-1" href="{{ route('home') }}">{{ __('Go back') }}</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                language:'{{ app()->getLocale() }}',
                removePlugins: [ 'image', 'media', 'table' ],
                toolbar: [ 'heading', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo' ]
            })
            .catch( error => {
                console.error( error );
            });
    </script>
@endsection