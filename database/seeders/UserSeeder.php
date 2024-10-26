<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('adminperpus'),
                'role' => 'admin',
                'nim' => NULL,
                'prodi' => NULL,
                'gender' => NULL,
                'address' => NULL,
                'phone' => NULL,
            ],
            [
                'name' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt('mahasiswaperpus'),
                'role' => 'mahasiswa',
                'nim' => '1234567890',
                'prodi' => 'Teknik Informatika',
                'gender' => 'Laki-laki',
                'address' => 'Jl. Raya No. 1 Banyuwangi',
                'phone' => '081234567890',
            ]
        ]);
    }
}
