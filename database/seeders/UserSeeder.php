<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //         'name' => 'Test User',
        //         'email' => 'test@example.com',
        //     ]);
        $faker = Faker::create();
        
        for ($i=0; $i < 25; $i++) { 
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'role' => 'user',
                'password' => Hash::make( value: 'password'),
                'email_verified_at' => now() 
            ]);
        }
        
        // User::create([
        //     'name' => 'leci',
        //     'email' => 'leci@gmail.com',
        //     'role' => 'admin',
        //     'password' => Hash::make( value: 'password'),
        //     'email_verified_at' => now() 
        // ]);
    }
}
