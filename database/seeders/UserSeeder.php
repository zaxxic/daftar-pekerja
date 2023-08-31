<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'alamat' => 'lorem',
            'jenis_kelamin' => 'laki-laki',
            'no_telp' => 'laki-laki',
            'cv' => 'laki-laki',
            'lamaran' => 'laki-laki',
            'foto' => 'laki-laki',
            'role' => 'admin',
            'jenis_kelamin' => 'laki-laki',
            'jenis_kelamin' => 'laki-laki',
            'jenis_kelamin' => 'laki-laki',
            'jenis_kelamin' => 'laki-laki',
        ]);
    }
}
