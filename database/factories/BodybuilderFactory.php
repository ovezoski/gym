<?php

use Faker\Generator as Faker;

$factory->define(App\Bodybuilder::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nickname' => $faker->word,
    ];
});


// $table->increments('id');
// $table->string('firstname');
// $table->string('lastname');
// $table->string('nickname')->default('0');
// $table->timestamp('subscription_date')->useCurrent();
// $table->timestamps();