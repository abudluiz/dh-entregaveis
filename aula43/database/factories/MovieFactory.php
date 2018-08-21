<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'awards'=>$faker->numberBetween(1,10),
        'release_date'=>$faker->date,
        'genre_id'=>$faker->numberBetween(1,10),
        'length'=>$faker->numberBetween(100,200),
        'revenue'=>$faker->randomFloat($nbMaxDecimals = 2, $min=1, $max=10),
    ];
});
