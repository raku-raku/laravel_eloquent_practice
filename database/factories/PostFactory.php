<?php

use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\User;

$factory->define(Post::class, function (Faker $faker) {
    $users = User::pluck('id')->all();
    return [
        'user_id' => $faker->randomElement($users),
        'title' => $faker->realText(15),
        'body' => $faker->realText(200),
    ];
});
