<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'zipcode' => $faker->postcode,
        'state' => $faker->state ,
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
