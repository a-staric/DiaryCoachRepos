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
        factory(App\User::class, 1)->create();

        factory(App\Distance::class, 10)->create();

        factory(App\Student::class, 10)->create()->each(function($student) {

            $student->student_distances()->saveMany(factory(App\StudentDistance::class, 2)->make());
            
        });

    }
}
