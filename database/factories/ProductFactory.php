<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description_summary' => $faker->paragraph,
        'image1' => $faker->url,
        'image2' => $faker->url,
        'image3' => $faker->url,
        'image4' => $faker->url,
        'image5' => $faker->url,
        'price' => $faker->randomFloat(3, 100.00),
        'rating' => rand(0, 5),
        'specifications_document' => $faker->url,
        'description_document' => $faker->url,
        'sku' => Str::random(10),
        'variation' => $faker->url,
        'offer_type' => $faker->randomElement([null, '{"pc_discount": true, "flat_discount": false}', '{"pc_discount": false, "flat_discount": true}']),
        'offer_amount' => 0,
        'shipping_from' => $faker->randomElement(['local', 'inhouse', 'abroad']),
        'brand' => $faker->word,
        'sellerID' => rand(1, 100)
    ];
});
