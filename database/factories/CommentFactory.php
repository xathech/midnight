<?php

use App\User;
use App\Review;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    //factory(App\Comment::class, 5)->create();

    //Variables

    $users_id = User::pluck('id');//retrieve all user id's as collections passed to array
    $reviews_id = Review::pluck('id');//retrieve all reviews id's as collections passed to array

    $locales = LaravelLocalization::getSupportedLanguagesKeys();

    return [
        'user_id' => $faker->randomElement($users_id),
        'review_id' => $faker->randomElement($reviews_id),
        'body' => $faker->text($maxNbChars = 191),
        'language' => $faker->randomElement($locales),
    ];
});
