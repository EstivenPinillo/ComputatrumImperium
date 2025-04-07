<?php

namespace Database\Seeders;

use App\Models\ReEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReFactory::factory()->count(3)->create();
    }
}
