<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'amount' => $faker->randomFloat(3, 100.000),
        'paid_by' => $faker->firstName,
        'transaction_code' => Str::random(10),
        'mode_of_payment' => $faker->randomElement(['mpesa', 'bank', 'cash', 'bonga', 'visa', 'mastercard', 'airtel_money', 'tkash', 'wallet']),
        'orderID' => rand(1, 100)
    ];
});
