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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
})->define(App\Pessoa::class, function (Faker\Generator $faker){
	return [
        'nome' => $faker->name,
        'cpf' => $faker->randomElement(['311.075.470-32','355.476.300-47', '961.932.480-30']),
        'email' => $faker->unique()->safeEmail,
        'data_nasc' => $faker->randomElement(['01/02/2001','01/03/2002','01/03]4/2004']),
        'nacionalidade' => $faker->randomElement(['Brasileiro(a)','Frances(a)','Italiano(a)']),
    ];
});
