<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    $AlbumsIds = App\Album::all('id')->toArray();
    return [
        'title' => $faker->unique()->sentence(5, true),
        'description' => $faker->realText(300),
        'news_date' => $faker->date(),
        'album_id' => array_rand($AlbumsIds) + 1,
    ];
});
