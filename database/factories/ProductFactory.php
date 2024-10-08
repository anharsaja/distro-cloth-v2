<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words(3, true); // 3 kata produk
        $slug = Str::slug($product_name, '-');

        static $counter = 1;
        return [
            'name' => $product_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(100000, 500000),
            'SKU' => 'PRD' . $this->faker->unique()->numberBetween(100, 500),
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(10, 50),
            'image' => 'product-' . $counter++,
            'category_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
