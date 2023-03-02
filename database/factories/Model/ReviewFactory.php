<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use App\Models\Model\Review;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model\Review>
 */
class ReviewFactory extends Factory
{

    protected $models =  \App\Models\Model\Review::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => function() {
                return Product::all()->random();
            },
            'customer' =>$this-> faker->name,
            'review' =>$this-> faker->paragraph,
            'star' =>$this-> faker->numberBetween(0,5)
        ];
    }
}
