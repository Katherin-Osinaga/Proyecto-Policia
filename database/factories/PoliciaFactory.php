<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\policia;
use Faker\Generator as Faker;

$factory->define(policia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'ap_paterno' => $faker->lastName,
        'ap_materno' =>$faker->lastName,
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'id_grado' => $faker->numberBetween($min = 1, $max = 5),
    ];
});
