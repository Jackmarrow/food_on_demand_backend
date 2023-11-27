<?php

namespace Database\Seeders;

use App\Models\MenuSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MenuSize::insert([
            [
                'menu_id' => 1 ,
                'size_id' => 2
            ],
            [
                'menu_id' => 1 ,
                'size_id' => 2
            ],
            [
                'menu_id' => 1 ,
                'size_id' => 3
            ],
            [
                'menu_id' => 2 ,
                'size_id' => 2
            ],
            [
                'menu_id' => 2 ,
                'size_id' => 3
            ],
            [
                'menu_id' => 3 ,
                'size_id' => 3
            ],
            ]);
    }
}
