<?php

use Faker\Generator as Faker;

$factory->define(App\worksheet::class, function (Faker $faker) {
    return [
        
        'date' => $faker -> date($format = 'Y-m-d', $max = 'now'),
        'description' => $faker->sentence,
        'student_id' => \App\User::all()->random()->id,
        'accepted' => $faker->boolean = false,
        'deleted' => $faker->boolean = false,
    ];
});
