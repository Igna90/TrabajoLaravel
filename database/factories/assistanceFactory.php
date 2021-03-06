<?php

use Faker\Generator as Faker;

$factory->define(App\assistance::class, function (Faker $faker) {
    return [
        'student_id' => \App\User::all()->random()->id,
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'assistance'=> $faker->sentence,
        'deleted' => $faker->boolean = false,
    ];
});
