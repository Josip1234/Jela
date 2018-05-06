<?php

use Faker\Generator as Faker;






$factory->define(App\Meals::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
    return [
        'title' => $faker->foodName(),
    'description' => $faker->realText(200,2),
    'status'=>'created',
        //
    ];
});
