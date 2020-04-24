<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'last_name' => $faker->lastName,
        'first_name'=> $faker->firstName,
        'dob' => $faker->date(),
        'height' => rand(140, 200),
        'weight' => rand(40, 90),
        'description'=>$faker->realText(300)
    ];
});
