<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $plans = [
            [
                'student_id' => 1,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 2,
                'plan_date' => Carbon::today()->subDays(9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 3,
                'plan_date' => Carbon::today()->subDays(8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 4,
                'plan_date' => Carbon::today()->subDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 5,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'training_kind_id' => 11,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 2,
                'plan_date' => Carbon::today()->subDays(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 3,
                'plan_date' => Carbon::today()->subDays(9),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 3,
                'plan_date' => Carbon::today()->subDays(8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 4,
                'plan_date' => Carbon::today()->subDays(7),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 5,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'training_kind_id' => 11,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'training_kind_id' => 5,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'training_kind_id' => 11,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'student_id' => 4,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'training_kind_id' => 2,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'training_kind_id' => 12,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 5,
                'training_kind_id' => 5,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 5,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 5,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 5,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 5,
                'training_kind_id' => 11,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'training_kind_id' => 5,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'training_kind_id' => 11,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'training_kind_id' => 6,
                'plan_date' => Carbon::today()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'training_kind_id' => 1,
                'plan_date' => Carbon::today()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'training_kind_id' => 10,
                'plan_date' => Carbon::today()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'training_kind_id' => 12,
                'plan_date' => Carbon::today()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('plans')->insert($plans);

    }
}
