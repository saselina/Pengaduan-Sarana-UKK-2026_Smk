<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin Sekolah',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

       
        \App\Models\Kategori::create([
            'ket_kategori' => 'Sarana & Prasarana',
        ]);

        \App\Models\Kategori::create([
            'ket_kategori' => 'Kebersihan Lingkungan',
        ]);

        \App\Models\Kategori::create([
            'ket_kategori' => 'Keamanan Sekolah',
        ]);
    }
}
