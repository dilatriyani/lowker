<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'SMA'
        ]);

        Category::create([
            'category_name' => 'SMK'
        ]);

        Category::create([
            'category_name' => 'MA'
        ]);

        Category::create([
            'category_name' => 'S1'
        ]);

        Category::create([
            'category_name' => 'S2'
        ]);
    }
}
