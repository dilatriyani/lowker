<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Lowker',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        User::create([
            'name' => 'Pekerja Lowker',
            'level' => 'pekerja',
            'email' => 'pekerja@gmail.com',
            'password' => bcrypt('pekerja'),
        ]);
    }
}
