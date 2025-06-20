<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
use App\Models\ItemCategory;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> bcrypt('123456'),
        ]);

        ItemCategory::factory(5)->create();
        Item::factory(200)->create();
    }
}
