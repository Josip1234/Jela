<?php

use Faker\Generator as Faker;


$factory->define(App\Meals::class, function (Faker $faker) {

    return [
        'title' => substr($faker->sentence(2), 0, -1),
    'description' => substr($faker->sentence(2), 0, -1),
    'status'=>'created',
        //
    ];
});
