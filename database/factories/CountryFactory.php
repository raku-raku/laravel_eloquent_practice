<?php

use Faker\Generator as Faker;
use App\Models\Country;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});
