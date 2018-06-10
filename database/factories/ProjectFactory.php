<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'description' => $faker->text(200),
        'git_link' => $faker->url,
        'download_link' => $faker->url,
        'report_file' => 'report.pdf',
        'status' => $faker->randomElement(['finished', 'in developement', 'abandoned', 'waiting']),
        'status_explain' => $faker->paragraph
    ];
});
