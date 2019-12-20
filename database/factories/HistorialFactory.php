<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\historial;
use Faker\Generator as Faker;

$factory->define(historial::class, function (Faker $faker) {
    return [
        'historial' => $faker->text($maxNbChars = 50) ,
        'sentencia' => $faker->word ,        
        'id_delincuente' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
