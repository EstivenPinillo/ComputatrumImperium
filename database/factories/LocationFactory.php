<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'area_id' => 1,
            'user_id' => 1,
            'condition_id' => 1,
            'position' => fake()->word(),
            'cardinality' => fake()->text(90),
            'network_point' => fake()->text(90),
            'observation' => fake()->text(90),
        ];
    }
}
