<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        //datos a crear
        'name' => $faker->sentence,
        'category_id' => rand(1,4),
        'user_id' => rand(1,5)
    ];
});
