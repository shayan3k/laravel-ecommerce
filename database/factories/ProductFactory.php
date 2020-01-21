<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->paragraph(),
        'price' => $faker->randomFloat(2, $min = .5, $max = 300),
        'thumbnail' => $faker->name,

    ];
});
