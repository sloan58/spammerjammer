<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Ucm;
use Faker\Generator as Faker;

$factory->define(Ucm::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence(4)
    ];
});
