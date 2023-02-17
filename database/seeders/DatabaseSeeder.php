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
                'name' => 'admin',
                'email' => 'admin@coal.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'stakeholder',
                'email' => 'stakeholer@coal.com',
                'password' => Hash::make('password')
            ],
        ]);
    }
}
