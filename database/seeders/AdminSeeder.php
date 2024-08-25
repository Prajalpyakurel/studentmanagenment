<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Main Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Use a secure password
            'is_admin' => true, // Assuming this field exists
        ]);
    }
}
