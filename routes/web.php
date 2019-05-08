<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// app/Http/routes.php

Route::group([

    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]

], function(){

    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    
	Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/test1', 'ReviewController@test1');
    Route::get('/allreviews', 'ReviewController@index');
    Route::get('/search', 'HomeController@search' );

    //Route::permanentRedirect('/home', '/');// Redirect test

    //Route::get('/home', 'HomeController@index')->name('home'); Save for user profile(/profile)

    Auth::routes();
    
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
