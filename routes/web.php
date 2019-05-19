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
    Route::get('/reviews/create', 'ReviewController@create')->name('createReviews')->middleware('auth');
    Route::post('/reviews/create', 'ReviewController@store')->name('storeReviews')->middleware('auth');
    Route::get('/reviews/{review}', 'ReviewController@show')->name('viewReviews');
    Route::delete('/reviews/{review}/delete', 'ReviewController@destroy')->name('deleteReview')->middleware('auth');

    /**Users*/
    Route::get('/users/search', 'UserController@index')->name('searchUsers');
    Route::get('/users/profile', 'UserController@edit')->name('userProfile')->middleware('auth');
    Route::get('/users/profile/password', 'UserController@editPassword')->name('userPassword')->middleware('auth');
    Route::get('/users/profile/reviews', 'UserController@reviews')->name('userReviews')->middleware('auth');
    Auth::routes();

    /**Comments*/
    Route::post('/reviews/{review}', 'CommentController@store')->name('storeComments')->middleware('auth');

    /**About*/
    Route::get('/about', 'HomeController@about')->name('about');

    /*Users posts*/
    Route::put('users/update', 'UserController@update' )->name('updateUser')->middleware('auth');
    Route::delete('/users/delete', 'UserController@destroy')->name('deleteUser')->middleware('auth');
    Route::put('users/updatePassword', 'UserController@updatePassword' )->name('updatePassword')->middleware('auth');

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
