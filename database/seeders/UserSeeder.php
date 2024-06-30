<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Pastikan menggunakan Hash facade untuk enkripsi password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    User::truncate(); // Hati-hati, ini akan menghapus semua data di tabel 'users'

    User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
        'role' => 'admin',
    ]);

    User::create([
        'name' => 'User',
        'email' => 'user@example.com',
        'password' => Hash::make('user123'),
        'role' => 'user',
    ]);
}

}
