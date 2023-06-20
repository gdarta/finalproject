<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'size' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL', 'XXL']),
            'tags' => implode(',', fake()->randomElements(
                ['reindeer', 'snowman', 'wool', 'handmade', 'polyester', 'knit', 'crochet', 'santa claus', 'christmas tree']
                , null)),
            'description' => $this->faker->paragraph()
        ];
    }
}
