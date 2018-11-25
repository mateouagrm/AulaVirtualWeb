<?php

use Faker\Generator as Faker;

$factory->define(App\Ciudad::class, function (Faker $faker) {
    return [
        'departamento' => $faker->randomElement(['lapaz', 'cochabamba','santa cruz','beni' ])
    ];
});
