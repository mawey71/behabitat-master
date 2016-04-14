<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\User::class, function (Faker\Generator $faker) {
	$faker = Faker\Factory::create('es_ES');
    return [
        'username' 		 => $faker->username,
        'email' 		 => $faker->email,
        'password' 		 => bcrypt(str_random(10)),
        'es_admin' 		 => false,
        'nombre' 	 	 => $faker->name,
        'apellido1' 	 => $faker->firstName,
        'apellido2' 	 => $faker->lastName,
        'es_empresa' 	 => false,
        'nif' 			 => $faker->unique()->randomNumber(8) . strtoupper($faker->randomLetter(1)),
        'razon_social' 	 => null,
        'cif' 			 => null,
        'direccion' 	 => $faker->streetAddress,
        'localidad' 	 => $faker->city,
        'provincia' 	 => $faker->state,
        'codigo_postal'  => $faker->postcode,
        'telefono'		 => $faker->phoneNumber,
        'telefono_movil' => $faker->phoneNumber,
        'remember_token' => str_random(10),
    ];
});
