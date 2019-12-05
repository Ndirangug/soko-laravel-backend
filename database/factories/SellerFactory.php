<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Seller::class, function (Faker $faker) {
    return [
        'seller_name' => $faker->company,
        'email' => $faker->unique()->companyEmail,
        'profile_description' => $faker->paragraph,
        'password' => password_hash($faker->password, PASSWORD_BCRYPT),
        'address_line1' => $faker->streetAddress,
        'address_line2' => $faker->secondaryAddress,
        'address_line3' => "",
        'phone' => substr(str_replace(['-', '+', '.', ' ', 'x', '(', ')'], '', $faker->phoneNumber), 0, 12),
        'county' => $faker->state,
        'town' => $faker->city,
        'photo' => $faker->url,
        'facebook_url' => $faker->url,
        'twitter_url' => $faker->url,
        'instagram_url' => $faker->url,
        'whatsapp' => $faker->phoneNumber,
        'pinterest_url' => $faker->url,
    ];
});
