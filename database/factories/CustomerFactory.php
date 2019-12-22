<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address,
        'total'=>$faker->numberBetween(100,10000)

    ];
});
