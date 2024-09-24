<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'anjaldulal@gmail.com',  // Change this to your desired admin email
            'password' => Hash::make('password'),  // Change this to a secure password
            'role' => 'admin',  // Set the role as 'admin'
        ]);
        $this->call(DiseaseSeeder::class);

    }
}
