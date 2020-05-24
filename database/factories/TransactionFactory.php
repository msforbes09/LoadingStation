<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Supplier;
use App\Transaction;
use Faker\Generator as Faker;

$factory->define(Transaction::class, function (Faker $faker) {
    $transactable = collect([
        Customer::get()->random(),
        Supplier::get()->random(),
    ])->random();

    return [
        'transactable_type' => get_class($transactable),
        'transactable_id' => $transactable->id,
        'date' => $faker->date,
        'amount' => $faker->randomFloat(2, 10, 200),
        'balance' => $faker->randomFloat(2, 1000, 5000),
    ];
});
