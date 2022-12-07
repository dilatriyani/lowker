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
            'id_role' => 1,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('admin'),
        ]);

        User::create([
            'id_role' => '0',
            'name'=>'Pekerja',
            'email'=>'pekerja@gmail.com',
            'password'=> bcrypt('pekerja'),
        ]);
    }
}
