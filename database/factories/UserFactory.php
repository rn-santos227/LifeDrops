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

$factory->define(LifeDrops\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(LifeDrops\BloodBank::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'contact' => $faker->phoneNumber,
        'email' => $faker->email,
        'location' => $faker->paragraph(1),        
    ];
});

$factory->define(LifeDrops\Recipient::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,        
        'location' => $faker->phoneNumber,
        'blood_type' => 'O',
        'birthday' => $faker->date,        
    ];
});