<?php

use Faker\Generator as Faker;
use App\Job;

$factory->define(Job::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->jobTitle,
        'description'=>$faker->paragraph(),
        'location'=>$faker->city,
        'type_of_contract'=>$faker->text,
        'salary'=>$faker->numberBetween($min = 1000, $max = 3000),
        'begining'=>$faker->date('Y-m-d'),
    ];
});
