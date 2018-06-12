<?php

use Faker\Generator as Faker;

$factory->define(App\GitRepository::class, function (Faker $faker) {
    return [
        'type' => 'github',
        'path' => $faker->firstName . $faker->unique()->domainWord
    ];
});
