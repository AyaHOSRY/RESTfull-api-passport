<?php

use Faker\Generator as Faker;
use App\Model\Product;
use App\User;
$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'detail'=> $this->faker->paragraph,
        'price'=> $this->faker->numberBetween(100,1000),
        'stock' => $this->faker->randomDigit,
        'discount' =>$this->faker->numberBetween(2,30),
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});
