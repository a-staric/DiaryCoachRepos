<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    $name = $faker->unique()->randomNumber();
    return [
        'name' =>  $name,
        'is_news' => $faker->boolean(50),
    ];
});
