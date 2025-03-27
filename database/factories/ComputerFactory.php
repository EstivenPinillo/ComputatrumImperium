<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'provider_id' => 1,
            'condition_id' => 1,
            'provider_serial' => fake()->text(100),
            'brand' => fake()->text(90),
            'factory_serial' => fake()->text(140),
            'motherboard' => fake()->text(140),
            'processor' => fake()->text(140),
            'ram_memory' => fake()->text(140),
            'storage' => fake()->text(90),
            'grafic_card' => fake()->text(90),
            'observation' => fake()->text(90)
        ];
    }
}
