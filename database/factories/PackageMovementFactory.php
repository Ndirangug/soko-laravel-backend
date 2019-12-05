<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PackageMovement;
use Faker\Generator as Faker;

$factory->define(PackageMovement::class, function (Faker $faker) {
    return [
        'packageID' => rand(1, 100),
        'haulID' => rand(1, 100)
    ];
});
