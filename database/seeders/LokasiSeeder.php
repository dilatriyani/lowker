<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokasi::create([
            'category_name' => 'Yogyakarta',
        ]);
        Lokasi::create([
            'category_name' => 'Banguntapan',
        ]);
        Lokasi::create([
            'category_name' => 'Sleman',
        ]);
        Lokasi::create([
            'category_name' => 'Bantul',
        ]);
    }
}

