<?php

namespace Database\Seeders;

use App\Models\TransferAccessoryReEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransferAccessoryReEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransferAccessoryReEntry::factory()->count(3)->create();
    }
}
