<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Driver;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Driver::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => "",
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'national_id' => (string) rand(10000000, 50000000),
        'password' => password_hash($faker->password, PASSWORD_BCRYPT),
        'phone' => substr(str_replace(['-', '+', '.', ' ', 'x', '(', ')'], '', $faker->phoneNumber), 0, 12),
        'county' => $faker->country,
        'town' => $faker->city,
        'photo' => $faker->url,
        'whatsapp' => $faker->phoneNumber,
        'sex' => $faker->randomElement(['male', 'female']),
        'vehicle_reg_number' => 'K' . $faker->randomLetter . $faker->randomLetter . " " . rand(100, 999) . $faker->randomLetter,
        'vehicle_type'  => $faker->randomElement(['saloon', 'station_wagon', 'van', 'small_truck', 'big_truck']),
        'vehicle_description' => $faker->paragraph,
        'vehicle_photo' => $faker->url,
        'shipperID' => rand(1, 100)
    ];
});
