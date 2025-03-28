<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\accessory>
 */
class AccessoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computers_id' => 1,
            'conditions_id' => 1,
            'provider_serial' => fake()->text(100),
            'description' => fake()->text(90),
            'brand' => fake()->text(90),
            'model' => fake()->text(90),
            'observation' => fake()->text(90),
        ];
    }
}
