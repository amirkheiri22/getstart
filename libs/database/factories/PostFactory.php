<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'summery' => $faker->paragraph,
        'text' => $faker->text,
        'isActive' => $faker->randomElement([
            0,
            1,
        ]),
        'user_id'=>App\User::all()->random()->id
    ];
});
