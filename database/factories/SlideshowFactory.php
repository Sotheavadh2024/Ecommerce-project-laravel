<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Slideshow;
use Faker\Factory as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slideshow>
 */
class SlideshowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(1, true),
            "subtitle" => $this->faker->sentence(1, true),
            "text" => $this->faker->sentence(3, true),
            "enable" => '1',
            "img" => $this->faker->randomElement(['girl1.jpg', 'girl2.jpg', 'girl3.jpg']),
            "ssorder" => $this->faker->numberBetween(1, 100),
        ];
    }
}