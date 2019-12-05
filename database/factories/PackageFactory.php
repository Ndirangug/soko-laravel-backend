<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Package;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Package::class, function (Faker $faker) {
    return [
        'time_received' => Carbon::now()->addRealHours(rand(1, 120)),
        'source' => '{"latitude": "' . $faker->latitude . '", longitude: "' . $faker->longitude . '"}',
        'destination' => '{"latitude": "' . $faker->latitude . '", longitude: "' . $faker->longitude . '"}',
        'review' => $faker->paragraph,
        'rating' => rand(0, 5)
    ];
});
