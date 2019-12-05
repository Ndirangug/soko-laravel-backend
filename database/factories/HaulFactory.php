<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Haul;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Haul::class, function (Faker $faker) {
    return [
        'pickup' => '{"latitude": "' . $faker->latitude . '", longitude: "' . $faker->longitude . '"}',
        'destination' => '{"latitude": "' . $faker->latitude . '", longitude: "' . $faker->longitude . '"}',
        'begin_time' => Carbon::now(),
        'end_time' => Carbon::now()->addRealHours(rand(1, 72)),
        'driverID' => rand(1, 100)
    ];
});
