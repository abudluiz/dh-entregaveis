<?php

use Faker\Generator as Faker;

$factory->define(App\GeneroModel::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'ranking'=>$faker->unique()->numberBetween(14,100),
        'active'=>$faker->boolean($chanceOfGettingTrue=80)
    ];
});
