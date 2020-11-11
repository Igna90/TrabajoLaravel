<?php

use Faker\Generator as Faker;

$factory->define(App\visit::class, function (Faker $faker) {
    return [
        'tracing_id' => \App\tracing::all()->random()->id,
        'enterprise_id' => \App\enterprise::all()->random()->id,
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'kms' => $faker->numberBetween($min = 1, $max = 200),
        'accepted' => $faker->boolean = false,
        'deleted' => $faker->boolean = false,
    ];
});