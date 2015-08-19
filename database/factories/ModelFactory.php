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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Mission::class, function ($faker) {
    return [
        'title' => $faker->sentence(3),
        'description' => $faker->paragraph(1),
        'filename' => pathinfo($faker->image(public_path() . "/images/missions"), PATHINFO_BASENAME)
    ];
});