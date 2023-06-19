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
            'location' => $this->faker->city().', '.$this->faker->country(),
            'size' => 'M',
            'tags' => 'reindeer, snowman, wool, handmade',
            'description' => $this->faker->paragraph()
        ];
    }
}
