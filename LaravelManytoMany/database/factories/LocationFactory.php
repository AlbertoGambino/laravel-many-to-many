<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

use App\Location;

use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {


    return [


        'street' => $faker -> address,
        'state' => $faker -> country,


    ];
});
