<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'status' => fake()->word(),
            'project' => fake()->paragraph(),
            'plant' => fake()->paragraph(),
            'size' => fake()->buildingNumber(),
            'bedrooms' => fake()->word(),
            'bathrooms' => fake()->word(),
            'image' => 'https://picsum.photos/1024/768',
            'visibility' => fake()->boolean(),
            'address' => fake()->address(),
            'maps' => fake()->url(),
        ];
    }
}
