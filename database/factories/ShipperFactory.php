<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shipper;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Shipper::class, function (Faker $faker) {
    return [
        'shipper_name' => $faker->company,
        'email' => $faker->unique()->companyEmail,
        'password' => password_hash($faker->password, PASSWORD_BCRYPT),
        'address_line1' => $faker->streetAddress,
        'address_line2' => $faker->secondaryAddress,
        'address_line3' => "",
        'phone' => substr(str_replace(['-', '+', '.', ' ', 'x', '(', ')'], '', $faker->phoneNumber), 0, 12),
        'counties' => '{' . $faker->state . ', ' . $faker->state . ', ' . $faker->state . ', ' . $faker->state . '}', //json_encode($faker->randomElements(array_fill(0, 100, $faker->state), 5)),
        'towns' => '{' . $faker->city . ', ' . $faker->city . ', ' . $faker->city . ', ' . $faker->city . '}', //json_encode($faker->randomElements(array_fill(0, 100, $faker->city), 5)),
        'category_a' => $faker->randomElement([true, false]),
        'category_b' => $faker->randomElement([true, false]),
        'category_c' => $faker->randomElement([true, false]),
    ];
});
