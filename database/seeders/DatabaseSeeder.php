<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@coal.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Stakeholder',
                'email' => 'stakeholder@coal.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Engineer',
                'email' => 'engineer@coal.com',
                'password' => Hash::make('password')
            ],
        ]);
    }
}
