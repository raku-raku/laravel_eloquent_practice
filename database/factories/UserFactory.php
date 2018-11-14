<?php

use Faker\Generator as Faker;
use App\Models\Country;
use App\Models\User;

$factory->define(User::class, function (Faker $faker) {
    $countries = Country::pluck('id')->all();
    return [
        'name' => $faker->name,
        'country_id' => $faker->randomElement($countries),
    ];
});
