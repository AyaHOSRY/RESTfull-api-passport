<?php

use Faker\Generator as Faker;
use App\Model\Product;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name,
        'detail'=> $this->faker->paragraph,
        'price'=> $this->faker->numberBetween(100,1000),
        'stock' => $this->faker->randomDigit,
        'discount' =>$this->faker->numberBetween(2,30),
    ];
});
