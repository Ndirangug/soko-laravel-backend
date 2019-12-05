<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => "",
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => password_hash($faker->password, PASSWORD_BCRYPT),
        'address_line1' => $faker->streetAddress,
        'address_line2' => $faker->secondaryAddress,
        'address_line3' => "",
        'phone' => substr(str_replace(['-', '+', '.', ' ', 'x', '(', ')'], '', $faker->phoneNumber), 0, 12),
        'county' => $faker->country,
        'town' => $faker->city,
        'photo' => $faker->url,
        'facebook_url' => $faker->url,
        'twitter_url' => $faker->url,
        'instagram_url' => $faker->url,
        'whatsapp' => $faker->phoneNumber,
        'pinterest_url' => $faker->url,
        'sex' => $faker->randomElement(['male', 'female'])
    ];
});
