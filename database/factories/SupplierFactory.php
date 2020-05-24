<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'contact' => $faker->e164PhoneNumber,
        'name' => $faker->name,
        'description' => $faker->text(50),
    ];
});
