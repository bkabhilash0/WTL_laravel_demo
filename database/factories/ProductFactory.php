<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $title = fake()->sentence();
//        $slug = Str::slug($title);
//        return [
//            'name' => $title,
//            'slug' => $slug,
//            'price' => fake()->numberBetween(100,500),
//            'description' => fake()->text()
//        ];
        $title = fake()->sentence();
        $slug = Str::slug($title);
        return [
            'name' => $title,
            'slug' => $slug,
            'price' => fake()->numberBetween(100, 500),
            'imageUrl' => "uploads/product_images/p2.jpg",
            'description' => fake()->text()
        ];
    }
}
