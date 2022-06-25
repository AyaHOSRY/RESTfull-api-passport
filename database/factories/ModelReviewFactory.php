<?php
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            return Product::all()->random();
        },
        'customer' =>$this->faker->name,
        'review' =>$this->faker->paragraph,
        'star' => $this->faker->numberBetween(1,5),
    ];
});
