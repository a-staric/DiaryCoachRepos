<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Plan;
use Faker\Generator as Faker;

$factory->define(Plan::class, function (Faker $faker) {
        $studentIds = App\Student::all('id')->toArray();
        $trainingKindIds = App\TrainingKind::all('id')->toArray();
        return [
            'student_id' => array_rand($studentIds) + 1,
            'training_kind_id' => array_rand($trainingKindIds) + 1,
            'plan_date' => $faker->date(),
        ];
});
