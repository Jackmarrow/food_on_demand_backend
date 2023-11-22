<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ingredient::insert([
            [
                'name' => 'Extra cheese',
                'price'=> 2
            ],
            [
                'name' => 'Extra sauce',
                'price'=> 4
            ],
        ]);
    }
}
