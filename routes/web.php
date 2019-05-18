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
/*
	Route::get('/', function () {
        return view('home');
    })->name('home');
*/
    Route::get('/', 'ReviewController@home')->name('home');

    /**Route::get('/test1', 'ReviewController@test1');*/
    
    /**Reviews*/
    Route::get('/reviews/search', 'ReviewController@index')->name('searchReviews');
    Route::get('/reviews/create', 'ReviewController@create')->name('createReviews');
    Route::post('/reviews/create', 'ReviewController@store')->name('storeReviews');
    Route::get('/reviews/{review}', 'ReviewController@show')->name('viewReviews');

    /**Users*/
    Route::get('/users/search', 'UserController@index')->name('searchUsers');
    Route::get('/users/profile', 'UserController@edit')->name('userProfile');
    Route::get('/users/profile/password', 'UserController@editPassword')->name('userPassword');
    Route::get('/users/profile/reviews', 'UserController@reviews')->name('userReviews');
    Auth::routes();

    /**Comments*/
    Route::post('/reviews/{review}', 'CommentController@store')->name('storeComments');

    /**About*/
    Route::get('/about', 'HomeController@about')->name('about');

    /*Users posts*/
    Route::put('users/update', 'UserController@update' )->name('updateUser');
    Route::delete('/users/delete', 'UserController@destroy')->name('deleteUser');
    Route::put('users/updatePassword', 'UserController@updatePassword' )->name('updatePassword');

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
