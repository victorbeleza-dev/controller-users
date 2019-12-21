<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Usuario::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cpf'=> $faker->randomNumber(9),
        'dataNascimento'=> $faker->dateTime,
        'email'=> $faker->email,
        'telefone'=> $faker->randomNumber(9),
        'endereco'=> $faker->name,
        'cidade'=> $faker->city,
        'estado'=> $faker->state,
        'cep'=> $faker->randomNumber(8),
    ];
});
