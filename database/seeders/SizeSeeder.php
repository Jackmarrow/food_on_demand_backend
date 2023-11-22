<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::insert([
            [
                'name' => 'Small',
                'price' => 0
            ],
            [
                'name' => 'Medium',
                'price' => 2
            ],
            [
                'name' => 'Large',
                'price' => 4
            ],
        ]);
    }
}
