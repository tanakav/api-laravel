<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    $numEnderecos = count(\App\Endereco::all());
    $numCidades = count(\App\Cidade::all());
    $numEstados = count(\App\Estado::all());

    return [
        'nome' => $faker->name,
        'endereco_id' => rand(1,$numEnderecos),
        'cidade_id' => rand(1,$numCidades),
        'estado_id' => rand(1,$numEstados)
    ];
});
