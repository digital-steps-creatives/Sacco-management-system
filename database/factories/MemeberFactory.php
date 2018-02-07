<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    $phoneNumber = $faker->unique()->numerify('07########');

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($phoneNumber), // secret
        'phoneNumber' => $phoneNumber,
        'remember_token' => str_random(10),
    ];
});
