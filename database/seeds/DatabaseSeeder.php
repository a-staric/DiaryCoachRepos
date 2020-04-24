<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $countUsers = count(DB::select('select * from users'));
        $countUsers == 0 ? factory(App\User::class, 1)->create() : "";

        factory(App\Distance::class, 10)->create();
        factory(App\Competition::class, 10)->create();
        factory(App\TrainingKind::class, 10)->create();

        factory(App\Student::class, 10)->create()->each(function($student) {

            $student->student_distances()->saveMany(factory(App\StudentDistance::class, 2)->make());
            $student->competition_results()->saveMany(factory(App\CompetitionResult::class, 2)->make());
            $student->plans()->saveMany(factory(App\Plan::class, 5)->make());
            
        });

    }
}
