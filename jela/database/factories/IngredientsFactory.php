<?php

use Faker\Generator as Faker;

$factory->define(App\Ingredients::class, function (Faker $faker) {
    return [
        'id_jela'=>$faker->numberBetween(1,5),
        'title'=>$faker->numerify($faker->realText(10).'##'),
        'slug'=>$faker->numerify($faker->word.'##')
        //
    ];
});
