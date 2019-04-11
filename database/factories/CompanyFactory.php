<?php

use Faker\Generator as Faker;
use App\Company;

$factory->define(Company::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->company,
        'address'=>$faker->address,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,

    ];
});
