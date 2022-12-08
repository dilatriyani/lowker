<?php

namespace Database\Seeders;

use App\Models\Waktu_K;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaktuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Waktu_K::create([
            'category_name' => 'Full time'
        ]);

        Waktu_K::create([
            'category_name' => 'Part time'
        ]);

        Waktu_K::create([
            'category_name' => 'Freelance'
        ]);
    }
}
