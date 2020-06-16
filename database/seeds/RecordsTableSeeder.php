<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'student_id' => 1,
                'distance_id' => 2,
                'result_time' => '00:00:57',
                'result_date' => '2020-01-20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'distance_id' => 4,
                'result_time' => '00:02:03',
                'result_date' => '2020-01-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'distance_id' => 5,
                'result_time' => '00:02:40',
                'result_date' => '2020-02-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'distance_id' => 6,
                'result_time' => '00:04:13',
                'result_date' => '2019-03-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'distance_id' => 14,
                'result_time' => '00:01:59',
                'result_date' => '2019-07-21',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 1,
                'distance_id' => 15,
                'result_time' => '00:02:37',
                'result_date' => '2019-07-20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'distance_id' => 14,
                'result_time' => '00:01:56',
                'result_date' => '2020-06-11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'distance_id' => 15,
                'result_time' => '00:02:33',
                'result_date' => '2020-06-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 2,
                'distance_id' => 16,
                'result_time' => '00:04:04',
                'result_date' => '2020-06-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'distance_id' => 14,
                'result_time' => '00:01:59',
                'result_date' => '2020-06-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'distance_id' => 15,
                'result_time' => '00:02:35',
                'result_date' => '2020-06-7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 3,
                'distance_id' => 16,
                'result_time' => '00:04:08',
                'result_date' => '2019-06-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'distance_id' => 12,
                'result_time' => '00:00:59',
                'result_date' => '2019-07-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'distance_id' => 14,
                'result_time' => '00:02:08',
                'result_date' => '2020-06-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 4,
                'distance_id' => 16,
                'result_time' => '00:04:23',
                'result_date' => '2020-06-10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'distance_id' => 18,
                'result_time' => '00:07:40',
                'result_date' => '2019-03-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 6,
                'distance_id' => 20,
                'result_time' => '00:09:40',
                'result_date' => '2018-03-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'distance_id' => 1,
                'result_time' => '00:00:28',
                'result_date' => '2020-03-08',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'distance_id' => 2,
                'result_time' => '00:00:56',
                'result_date' => '2020-03-07',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'distance_id' => 11,
                'result_time' => '00:00:26',
                'result_date' => '2019-03-13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'student_id' => 7,
                'distance_id' => 12,
                'result_time' => '00:00:55',
                'result_date' => '2019-03-12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('student_distances')->insert($records);
    }
}
