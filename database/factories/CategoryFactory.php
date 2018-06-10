<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->domainWord,
        'description' => $faker->text(500),
        'parent_id' => null,
        'published' => true,
        'icon' => ''
    ];
});
