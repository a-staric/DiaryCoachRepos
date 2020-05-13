<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    $AlbumsIds = App\Album::all('id')->toArray();
    return [
        'path' => $faker->imageUrl(640,480),
        'album_id' => array_rand($AlbumsIds) + 1,
    ];
});
