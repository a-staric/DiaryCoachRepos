<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CompetitionResult;
use Faker\Generator as Faker;

$factory->define(CompetitionResult::class, function (Faker $faker) {
        $studentIds = App\Student::all('id')->toArray();
        $distaceIds = App\Distance::all('id')->toArray();
        $competitionIds = App\Competition::all('id')->toArray();
        return [
            'student_id' => array_rand($studentIds) + 1,
            'distance_id' => array_rand($distaceIds) + 1,
            'result_time' => $faker->time(),
            'competition_id' => array_rand($competitionIds) + 1,
        ];
});
