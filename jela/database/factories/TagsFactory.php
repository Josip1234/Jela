<?php

use Faker\Generator as Faker;

$factory->define(App\Tags::class, function (Faker $faker) {
    return [
        'id_jela'=>$faker->numberBetween(1,5),
        'title'=>$faker->numerify($faker->realText(15)."##"),
        'slug'=>$faker->numerify($faker->slug(1,true)."##"),
        //
    ];
});
