<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'Весенняя 30-ка - 28.03.2020 ( маршрут: ВГУОР - Октябрьская школа )',
                'description' => '',
                'news_date' => '2020-03-20',
                'album_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Побьёт ли Искандер Ядгаров мировой рекорд?',
                'description' => 'Завтра на Кавминводах может быть установлен первый в истории мировой рекорд! \n Отчаянный Искандер Ядгаров побежит 50 километров на беговой дорожке в рамках проекта "остаемся дома".
                Как Вы считаете побьёт ли Искандер мировой рекорд и пробежит быстрее чем за 2.56 50 километров?',
                'news_date' => '2020-04-18',
                'album_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => '27 февраля в Австрии 38-летний немецкий ультрамарафонец Флориан Нойшвандер',
                'description' => 'Для кого-то беговая дорожка – это вынужденная необходимость в периоды плохой погоды для тренировок, а для кого-то – возможность попасть в список рекордсменов мира!<hr>
                27 февраля в Австрии 38-летний немецкий ультрамарафонец Флориан Нойшвандер побил мировой рекорд в беге на 50 км на беговой дорожке, показав результат 2 часа 57 минут и 25 секунд!<br>
                Средний темп бега составил 3:33 на километр.<hr>
                А вы помните свой максимальный километраж за одну тренировки на беговой дорожке?',
                'news_date' => '2020-02-27',
                'album_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Поздравляем Буковца Анатолия с Победой! на дистанции 3000м - 9.40',
                'description' => 'Поздравляем Буковца Анатолия с Победой! на дистанции 3000м - 9.40, /n на первенстве Республики Беларусь среди юношей 2005-2006 гг.р. - город Брест',
                'news_date' => '2020-02-16',
                'album_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Поздравляем Никифоренко Алексея с 3 местом - 3000м',
                'description' => 'Поздравляем Никифоренко Алексея с 3 местом - 3000м на Первенстве Республики Беларусь среди юниоров 2001-2002 гг.р',
                'news_date' => '2020-02-13',
                'album_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Четырехкратный Олимпийский чемпион Мо Фара возвращается на дорожку!',
                'description' => 'Это будет очень интересный эксперимент, еще никто не возвращался на дорожку после длительного и довольно успешного марафонского периода - победа на Мэйджоре и рекорд Европы это весьма прилично. Фара ни разу не бежал марафон на официальных чемпионатах, вполне мог и выиграть чемпионат мира.
                Пока Фара повторил достижение финна Лассе Вирена - 4 стайерских побед на двух Олимпиадах подряд. У Эмиля Затопека тоже 4 Олимпийских золота. Если Мо выиграет Токио-2020, то станет самым успешным бегуном послевоенного периода.',
                'news_date' => '2019-11-29',
                'album_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Что почитать о беге и зож?',
                'description' => 'Если на выходных есть настроение мирно полежать на диване, поглощая интересное чтиво — эта подборка ревью и саммари специально для вас.<hr>
                Некоторые из них мотивируют на новые подвиги, другие помогут оптимизировать процесс тренировок либо питание — в общем, смотрите:',
                'news_date' => '2019-02-2',
                'album_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('news')->insert($news);
    }
}
