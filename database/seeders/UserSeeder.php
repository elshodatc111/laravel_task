<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'rool_id' => 1,
            'name' => 'Meneger',
            'email' => 'meneger@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'rool_id' => 2,
            'name' => 'Clent',
            'email' => 'clent@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
