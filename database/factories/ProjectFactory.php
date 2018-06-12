<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'short_description' => $faker->text(),
        'description' => $faker->text(2000),
        'download_link' => $faker->url,
        'report_file' => 'report.pdf',
        'status' => $faker->randomElement(['finished', 'in developement', 'abandoned', 'waiting']),
        'status_explain' => $faker->paragraph,
        'published' => true
    ];
});
