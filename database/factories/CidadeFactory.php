<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Cidade;

$factory->define(Cidade::class, function (Faker $faker) {
    return [
        'nome' => $faker->city
    ];
});
