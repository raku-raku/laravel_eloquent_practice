<?php

use Faker\Generator as Faker;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;

$factory->defineAs(Comment::class, 'post', function (Faker $faker) {
    $posts = Post::pluck('id')->all();
    return [
        'commentable_id' => $faker->randomElement($posts),
        'commentable_type' => 'App\Models\Post',
        'body' => $faker->realText(200),
    ];
});

$factory->defineAs(Comment::class, 'video', function (Faker $faker) {
    $videos = Video::pluck('id')->all();
    return [
        'commentable_id' => $faker->randomElement($videos),
        'commentable_type' => 'App\Models\Video',
        'body' => $faker->realText(200),
    ];
});
