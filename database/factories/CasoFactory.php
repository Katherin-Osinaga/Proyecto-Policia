<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\caso;
use Faker\Generator as Faker;

$factory->define(caso::class, function (Faker $faker) {
    return [
        'nombre' => 'Caso '.$faker->name,
        'descripcion' => $faker->text($maxNbChars = 50) ,
        'tipo_caso' =>$faker->word,
        'estado' => 'activo',
        'id_policia' => $faker->numberBetween($min = 1, $max = 100),
        'id_delincuente' => $faker->numberBetween($min = 1, $max = 100),
    ];
});
