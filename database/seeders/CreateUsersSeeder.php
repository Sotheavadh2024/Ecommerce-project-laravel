<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@abc.com',
                'is_admin' => 1,
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'User',
                'email' => 'user@abc.com',
                'is_admin' => 0,
                'password' => bcrypt('123'),
            ],
        ];
        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}