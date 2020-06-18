<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results = [
          [
            'student_id' => 1,
            'distance_id' => 21,
            'result_time' => '00:15:59',
            'competition_id' => 1,
            'place' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 2,
            'distance_id' => 21,
            'result_time' => '00:16:10',
            'competition_id' => 1,
            'place' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 3,
            'distance_id' => 21,
            'result_time' => '00:16:12',
            'competition_id' => 1,
            'place' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 4,
            'distance_id' => 19,
            'result_time' => '00:06:40',
            'competition_id' => 1,
            'place' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 3,
            'distance_id' => 21,
            'result_time' => '00:16:40',
            'competition_id' => 2,
            'place' => 20,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 2,
            'distance_id' => 19,
            'result_time' => '00:09:40',
            'competition_id' => 2,
            'place' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 19,
            'result_time' => '00:09:50',
            'competition_id' => 2,
            'place' => 9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 19,
            'result_time' => '00:05:55',
            'competition_id' => 3,
            'place' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 2,
            'distance_id' => 19,
            'result_time' => '00:06:03',
            'competition_id' => 3,
            'place' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 22,
            'result_time' => '00:34:23',
            'competition_id' => 4,
            'place' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 22,
            'result_time' => '00:35:03',
            'competition_id' => 4,
            'place' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 21,
            'result_time' => '00:16:40',
            'competition_id' => 5,
            'place' => 19,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 2,
            'distance_id' => 21,
            'result_time' => '00:16:30',
            'competition_id' => 5,
            'place' => 17,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 3,
            'distance_id' => 21,
            'result_time' => '00:16:20',
            'competition_id' => 5,
            'place' => 15,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 4,
            'distance_id' => 21,
            'result_time' => '00:16:50',
            'competition_id' => 5,
            'place' => 24,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 5,
            'distance_id' => 21,
            'result_time' => '00:16:45',
            'competition_id' => 5,
            'place' => 22,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 7,
            'distance_id' => 21,
            'result_time' => '00:18:40',
            'competition_id' => 5,
            'place' => 36,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 22,
            'result_time' => '00:37:45',
            'competition_id' => 6,
            'place' => 6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 3,
            'distance_id' => 22,
            'result_time' => '00:33:40',
            'competition_id' => 6,
            'place' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
          [
            'student_id' => 1,
            'distance_id' => 14,
            'result_time' => '00:02:03',
            'competition_id' => 7,
            'place' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ],
        ];
        DB::table('competition_results')->insert($results);

    }
}
