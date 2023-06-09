<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'collection_id' => rand(1,6),
            'price' => fake()->randomFloat(2,1,100),
            'description' => fake()->sentence(),
            'image_url' => "https://source.unsplash.com/collection/190727/300x300"
        ];
    }
}
