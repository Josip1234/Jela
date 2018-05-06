<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        //
        'id_jela'=>$faker->biasedNumberBetween(1,5,'sqrt'),
        'title'=>$faker->realText(20,1),
        'slug'=>$faker->slug(1,true),
    ];
});
