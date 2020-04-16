<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudentDistance;
use Faker\Generator as Faker;

$factory->define(StudentDistance::class, function (Faker $faker) {
        $studentIds = App\Student::all('id')->toArray();
        $distaceIds = App\Distance::all('id')->toArray();
        return [
            'student_id' => array_rand($studentIds) + 1,
            'distance_id' => array_rand($distaceIds) + 1,
        ];

});
