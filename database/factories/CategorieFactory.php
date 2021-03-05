<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4,true),
        'created_at' => now()
    ];
});
