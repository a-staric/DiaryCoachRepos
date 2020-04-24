<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Distance;
use Faker\Generator as Faker;

$factory->define(Distance::class, function (Faker $faker) {

    return [
        'name' => $faker->unique()->sentence(3, true),
    ];
});
