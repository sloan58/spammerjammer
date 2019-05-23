<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\CallFilter;
use Faker\Generator as Faker;

$factory->define(CallFilter::class, function (Faker $faker) {
    return [
        'from_number' => $faker->phoneNumber,
        'to_number' => $faker->phoneNumber
    ];
});
