<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\delincuente;
use Faker\Generator as Faker;

$factory->define(delincuente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'ap_paterno' => $faker->lastName,
        'ap_materno' =>$faker->lastName,
        'direccion' => $faker->address,        
    ];
});
