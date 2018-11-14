<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Video;

$factory->define(Video::class, function (Faker $faker) {
    $users = User::pluck('id')->all();
    return [
        'user_id' => $faker->randomElement($users),
        'title' => $faker->realText(15),
        'url' => $faker->url,
    ];
});
