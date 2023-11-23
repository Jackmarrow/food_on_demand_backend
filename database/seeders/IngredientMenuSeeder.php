<?php

namespace Database\Seeders;

use App\Models\IngredientMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IngredientMenu::insert([
            [
                'menu_id' => 1,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 1,
                'ingredient_id'=>2            
            ],
            [
                'menu_id' => 2,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 2,
                'ingredient_id'=>2            
            ],
            [
                'menu_id' => 3,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 4,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 5,
                'ingredient_id'=>1           
            ],
            [
                'menu_id' => 6,
                'ingredient_id'=>1          
            ],
            [
                'menu_id' => 7,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 8,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 9,
                'ingredient_id'=>1            
            ],
            [
                'menu_id' => 10,
                'ingredient_id'=>1           
            ],
            [
                'menu_id' => 11,
                'ingredient_id'=>1           
            ],
            [
                'menu_id' => 12,
                'ingredient_id'=>1            
            ]
        ]);
    }
}
