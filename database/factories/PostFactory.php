<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title'=>$faker->jobTitle,
        'description'=>$faker->paragraph()
    ];
});
