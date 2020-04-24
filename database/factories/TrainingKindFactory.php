<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TrainingKind;
use Faker\Generator as Faker;

$factory->define(TrainingKind::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->sentence(5, true),
        'description' => $faker->realText(200)
    ];
});
