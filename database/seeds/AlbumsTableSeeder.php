<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                'name' =>  'Чемпионат и первенство Витебской области по кроссу 18.10.2019',
                'is_news' => false,
            ],
            [
                'name' =>  'Чемпионат и первенство Беларуси по кроссу - 01.11.2019',
                'is_news' => false,
            ],
            [
                'name' =>  'Осенний городской легкоатлетический кросс среди СУЗов - 16.10.2019',
                'is_news' => false,
            ],
            [
                'name' =>  'Могилевский Мебелаин Марафон - 06.10.2019',
                'is_news' => false,
            ],
            [
                'name' =>  'Минский полумарафон 2019',
                'is_news' => false,
            ],
            [
                'name' =>  'DISCOVERY НЯСВIЖ - 03.07.2019',
                'is_news' => false,
            ],
            [
                'name' => 'Вузы города Витебска - Лёгкая атлетика - 03.05.2019',
                'is_news' => false,
            ],
            [
                'name' => 'Весенняя 30-ка - 28.03.2020 ( маршрут: ВГУОР - Октябрьская школа )',
                'is_news' => true,
            ],
            [
                'name' => 'Побьёт ли Искандер Ядгаров мировой рекорд?',
                'is_news' => true,
            ],
            [
                'name' => '27 февраля в Австрии 38-летний немецкий ультрамарафонец Флориан Нойшвандер',
                'is_news' => true,
            ],
            [
                'name' => 'Поздравляем Буковца Анатолия с Победой! на дистанции 3000м - 9.40',
                'is_news' => true,
            ],
            [
                'name' => 'Поздравляем Никифоренко Алексея с 3 местом - 3000м',
                'is_news' => true,
            ],
            [
                'name' => 'Четырехкратный Олимпийский чемпион Мо Фара возвращается на дорожку!',
                'is_news' => true,
            ],
            [
                'name' => 'Что почитать о беге и зож?',
                'is_news' => true,
            ],
        ];

        DB::table('albums')->insert($albums);

    }
}
