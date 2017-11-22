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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Author::class, function (Faker $faker) {

    return [
        'name' => $faker->firstName,
    ];

});

$factory->define(App\Book::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'isbn' => $faker->isbn13,
        'summary' => $faker->text,
        'author_id' => $faker->numberBetween(1, 10),
        'created_by' => $faker->numberBetween(1, 10)
    ];

});
