<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use PhpParser\Node\Expr\Cast\Double;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'amount_to_pay' => $faker->randomFloat(3, 100.000),
        'is_paid' => $faker->randomElement([true, false]),
        'outstanding_amount' => $faker->randomFloat(3, 100.000),
        'customerID' => rand(1, 100)
    ];
});
