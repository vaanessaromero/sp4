<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->realText(100),
        'last_name' => $faker->realText(100),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',// secret
        'admin' => $faker->int_random(10),
        'admin' => $faker->realText(100),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Journal::class, function (Faker $faker) {
    return [
        'title' => ucfirst($faker->realText(15)),
        'author' => $faker->realText(100),
        'date' => $faker->date(),
        'abstract' => $faker->realText(500),
        'office' => $faker->realText(100),
        'pdf_url' => $faker->realText(50),
    ];
});