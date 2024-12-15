<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('password123'), // You can change this password
            'role' => '1', // Assuming you have a 'role' column to define user roles
        ]);

        User::create([
            'name' => ' Sub Admin',
            'email' => 'sub@admin.com',
            'password' => Hash::make('password123'), // You can change this password
            'role' => '2', // Assuming you have a 'role' column to define user roles
        ]);
    }
}
