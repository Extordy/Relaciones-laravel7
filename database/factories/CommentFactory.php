<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //crear nombre falso
        'body' => $faker->text,
        'user_id' => rand(1,5)
    ];
});
