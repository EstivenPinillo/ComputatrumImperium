<?php

namespace Database\Seeders;

use App\Models\UserComputerLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserComputerLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserComputerLocation::factory()->count(3)->create();
    }
}
