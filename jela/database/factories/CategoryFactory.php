<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        //
        'id_jela'=>$faker->biasedNumberBetween(1,5,'sqrt'),
        'title'=>$faker->numerify($faker->realText(20,1).'##'),
        'slug'=>$faker->numerify($faker->slug(1,true).'##'),
    ];
});
