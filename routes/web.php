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

    //Route::get('/test1', 'ReviewController@test1');
    
    Route::get('/reviews/search', 'ReviewController@index')->name('searchReviews');
    Route::get('/users/search', 'UserController@index')->name('searchUsers');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::resource('reviews', 'ReviewController');

    //Route::get('users/profile', 'UserController@index')->name('profile'); Save for user profile

    Auth::routes();
    
});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
