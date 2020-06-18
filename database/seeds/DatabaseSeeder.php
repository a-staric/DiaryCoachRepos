<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // factory(App\Distance::class, 10)->create();
        // factory(App\TrainingKind::class, 10)->create();

        // factory(App\Album::class, 10)->create()->each(function ($album){
        //     $album->is_news == 1 ?
        //     $album->competitions()->saveMany(factory(App\Competition::class, 1)->make()):
        //     $album->news()->saveMany(factory(App\News::class, 1)->make());
        //     $album->photos()->saveMany(factory(App\Photo::class, 5)->make());
        // });



        // factory(App\Student::class, 10)->create()->each(function($student) {

        //     $student->student_distances()->saveMany(factory(App\StudentDistance::class, 2)->make());
        //     $student->competition_results()->saveMany(factory(App\CompetitionResult::class, 2)->make());
        //     $student->plans()->saveMany(factory(App\Plan::class, 5)->make());

        // });



        $this->call([
            StudentsTableSeeder::class,
            DistancesTableSeeder::class,
            RecordsTableSeeder::class,
            TrainingKindsTableSeeder::class,
            PlansTableSeeder::class,
            AlbumsTableSeeder::class,
            CompetitionsTableSeeder::class,
            CompetitionResultsTableSeeder::class,
            NewsTableSeeder::class,
            PhotosTableSeeder::class,
            ]);

    }
}
