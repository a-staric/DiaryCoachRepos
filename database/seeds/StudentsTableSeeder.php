<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students  =[
            [
                'last_name' => 'Старченко',
                'first_name'=> 'Андрей',
                'dob' => '2000-01-14',
                'height' => 181,
                'weight' => 64,
                'description'=> 'Занимается с 2017 года. Тренировок не пропускает, все задания выполняет качественно.',
                'image_path' => 'staric_avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        [
                'last_name' => 'Никифоренко',
                'first_name'=> 'Алексей',
                'dob' => '2000-06-17',
                'height' => 178,
                'weight' => 58,
                'description'=> 'Краткое описание',
                'image_path' => 'niki_avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
                'last_name' => 'Васильев',
                'first_name'=> 'Влад',
                'dob' => '1998-06-06',
                'height' => 176,
                'weight' => 63,
                'description'=> 'Краткое описание',
                'image_path' => 'vlad_avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
                'last_name' => 'Козлов',
                'first_name'=> 'Никита',
                'dob' => '2003-10-14',
                'height' => 178,
                'weight' => 60,
                'description'=> 'Краткое описание',
                'image_path' => 'kozl_avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
                'last_name' => 'Буковец',
                'first_name'=> 'Анатолий',
                'dob' => '2005-02-01',
                'height' => 179,
                'weight' => 62,
                'description'=> 'Краткое описание',
                'image_path' => 'buka_avatar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
                'last_name' => 'Пзанский',
                'first_name'=> 'Юра',
                'dob' => '2000-05-15',
                'height' => 176,
                'weight' => 57,
                'description'=> 'Краткое описание',
                'image_path' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],
        [
                'last_name' => 'Симаненков',
                'first_name'=> 'Назар',
                'dob' => '2000-05-27',
                'height' => 187,
                'weight' => 75,
                'description'=> 'Краткое описание',
                'image_path' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]
        ];
        DB::table('students')->insert($students);
    }
}
