<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Computer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        $this->call([
            ConditionSeeder::class,
            ProfileSeeder::class,
            TypeDocumentSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            ComputerSeeder::class,
            AccessorySeeder::class,
            MapSeeder::class,
            AreaSeeder::class,
            LocationSeeder::class,
            UserComputerLocationSeeder::class,
            TransferSeeder::class,
            ReEntrySeeder::class,
        ]);
    }
}
