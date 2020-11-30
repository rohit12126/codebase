<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enquiry;
use Faker\Generator as Faker;

$factory->define(Enquiry::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_nu'=>$faker->unique()->numberBetween($min = 6000000000, $max = 9999999999),
        'message'=>$faker->text(),
    ];
});
