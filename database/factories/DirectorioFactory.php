<?php

use Faker\Generator as Faker;
use Illuminate\Http\File;
use App\Models\Directorio;

$factory->define(Directorio::class, function (Faker $faker) {
    return [
        //se va a llenar los datos en las tablas de la base de datos
        'nombre' => $faker->firstName($gender = null|'male'|'female'),
        'apepaterno' => $faker->lastName,
        'apematerno' => $faker->lastName,
        'direccion' => $faker->streetAddress,
        'email' => $faker->freeEmail,
        'departamento' => $faker->word,
        'cargo' => $faker->word,
        'telefonos' => $faker->phoneNumber,
        'area' => $faker->word,
        'descripcion' => $faker->text($maxNbChars = 200),
        'foto' => $faker->imageUrl(240, 240, 'cats', true, 'Faker', true)
    ];
});
