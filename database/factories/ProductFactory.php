<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Categorie;

use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4,true),
        'description' => $faker->sentence(),
        'price' => $faker->randomFloat(3,2,150),
        'categorie_id' => Categorie::get('id')->random(),
        'created_at' => now()
    ];
});
