<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '06 14 55 25',
            'street_address' => 'test',
            'image' => 'test',
            'city'=> 'test',
            'country'=> 'test',
            'postal_code'=> 'test',
            'is_admin' => true,
            'password'=> '0000'
        ]);
        User::factory()->create([
            'name' => 'oussama',
            'email' => 'admin@admin.com',
            'phone' => '06 14 66 56',
            'street_address' => 'test',
            'image' => 'test',
            'city'=> 'test',
            'country'=> 'test',
            'postal_code'=> 'test',
            'is_admin' => true,
            'password'=> '0000'
        ]);

        $this->call([
            CategorySeeder::class,
            SizeSeeder::class,
            IngredientSeeder::class,
            MenuSeeder::class,
            IngredientMenuSeeder::class
        ]);
    }
}
