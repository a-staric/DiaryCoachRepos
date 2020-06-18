<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingKindsTableSeeder extends Seeder
{

    public function run()
    {
        $trainingkinds = [
            [
                'name' => 'День отдыха (пассивынй)',
                'description' => 'Полный отдых. Отсутствие каких-либо физ-х нагрузок.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'День отдыха (активный)',
                'description' => 'Отдых от бега. По желанию можно покатать на вело, роликах или сделать лёгкое офп.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '10 км свободно (4:30 - 4:50)',
                'description' => 'Лёгкий, свободный кросс.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '10 км темповый (3:15 - 3:30)',
                'description' => 'Первую половину по 3:30, вторую разбежаться.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '5-8 км',
                'description' => 'Легкая тренировка.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '10 x 200 м (28-31 с)',
                'description' => '3 км р-ка - 10 x 200 м через 2 минуты отдыха.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '8-10 x 400 м (1:10 - 1:14)',
                'description' => '3 км р-ка - 8-10 x 400 м через 2 минуты отдыха, либо круг трусцы.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ускорения в горку (10 x 150 м)',
                'description' => 'Ускорения в горку, через трусцу вниз.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Часовой бег (4:00 - 5:00)',
                'description' => 'С возрастанием темпа.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Длительный кросс (20 км)',
                'description' => 'Описание',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Длительный кросс (30 км)',
                'description' => 'Начинаем по 4:30, а потом в раскатку.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ОФП - труники + брусья',
                'description' => '5 x 10 подтягиваний, через минуту отдыха. 5 x 20 отжиманий на брусьях',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ОФП - труники + брусья + уголки',
                'description' => '5 x 10 подтягиваний, через минуту отдыха. 5 x 20 отжиманий на брусьях. 15 минут отдыха, 5 x 15 уголки на перекладине.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ОФП - часовая круговая тренировка.',
                'description' => 'Разноплановые упражнения на все группы мышц',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];


        DB::table('training_kinds')->insert($trainingkinds);
    }
}
