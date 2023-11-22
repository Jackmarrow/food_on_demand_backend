<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Classic Margherita',
                'desc' => 'Savor the simplicity of our Classic Margherita, a perfect fusion of fresh tomatoes, melting mozzarella, and fresh basil on a crispy crust. An authentic Italian experience with every bite.',
                'category_id' => 1,
                'price' => 20 ,
                'ingredient_id' => 1 ,
                'image' => 'pizza.png',
                
            ]
            ]);
    }
}
