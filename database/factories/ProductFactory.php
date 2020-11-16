<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id'=> 1,
        'description'=>$faker->text(200),
        'purchase_price'=> $faker->numberBetween(100, 2000),
        'sale_price'=> $faker->numberBetween(100, 2000),
        'stock_qty'=> $faker->randomDigit()
    ];
});
