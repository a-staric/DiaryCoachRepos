<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Competition;
use Faker\Generator as Faker;

$factory->define(Competition::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(5, true),
        'event_date' => $faker->date(), 
        'event_link' => $faker->url, 
        'place' => $faker->address, 
        'description' => $faker->realText(300),
    ];
});
