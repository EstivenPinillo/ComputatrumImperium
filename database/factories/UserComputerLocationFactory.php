<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserComputerLocation>
 */
class UserComputerLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => 1,
            'computer_id' => 1,
            'condition_id' => 1,
            'remote_access' => fake()->text(90)
        ];
    }
}
