<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Review::class, function (Faker $faker) {

    //factory(App\Review::class, 5)->create();

    //Variables

    $users_id = App\User::pluck('id');//retrieve all user id's as collections passed to array

    $images = array(
        'storage/images/tests/1.jpg',
        'storage/images/tests/2.jpg',
        'storage/images/tests/3.jpg'
    );

    $locales = LaravelLocalization::getSupportedLanguagesKeys();

    return [
        'user_id' => $faker->randomElement($users_id),
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'body' => $faker->text($maxNbChars = 600),
        'image' => $faker->randomElement($images),
        'language' => $faker->randomElement($locales),
    ];
});