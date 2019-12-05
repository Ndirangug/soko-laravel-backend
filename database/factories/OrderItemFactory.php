<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderItem;
use Faker\Generator as Faker;

$factory->define(OrderItem::class, function (Faker $faker) {
    return [
        'price' => $faker->randomFloat(3, 100.000),
        'review' => $faker->paragraph,
        'rating' => rand(0, 5),
        'order_status' => $faker->randomElement(['pending', 'waiting to fulfil', 'waiting to ship', 'shipping', 'delivered', 'cancelled', 'returned', 'complete']),
        'productID' => rand(1, 100),
        'orderID' => rand(1, 100),
        'packageID' => rand(1, 100)
    ];
});
