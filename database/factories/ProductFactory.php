<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

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
        return [
            "pname" => $this->faker->words(1, true),
            "pdesc" => $this->faker->sentence(1, true),
            "enable" => '1',
            "featured" => $this->faker->randomElement([0,1]),
            "pprice" => $this->faker->numberBetween(100, 1000),
            "pimg" => $this->faker->randomElement(['p1.jpg', 'p2.jpg', 'p3.jpg']),
            "cid" => category::all()->random()->cid,
            "quantity" => $this->faker->numberBetween(1, 100),
        ];
    }
}