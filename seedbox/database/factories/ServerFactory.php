<?php

use App\Server;
use Faker\Generator as Faker;

$factory->define(Server::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url' => $faker->url,
        'status' => $faker->randomKey(Server::STATUS),
    ];
});
