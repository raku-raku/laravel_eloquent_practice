<?php

use Faker\Generator as Faker;
use App\Models\Phone;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'tel' => $faker->phoneNumber,
    ];
});
