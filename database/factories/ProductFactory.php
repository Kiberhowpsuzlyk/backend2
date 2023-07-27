<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
        $user = DB::table('users')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $brand = DB::table('brands')->inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'category_id' => $category->id,
            'brand_id' => $brand->id,
            'name' => fake()->unique()->jobTitle(),
            'description' => fake()->paragraph(),
            'stock' => rand(0, 10),
            'barcode' => fake()->unique()->isbn13(),
            'price' => fake()->randomFloat($nbMaxDecimals = 1, $min = 10, $max = 500),

        ];
    }
}
