<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ucl_id' => 1,
            'condition_id' => 1,
            'user_id' => 1,
            'remote_access' => fake()->text(90)
        ];
    }
}
