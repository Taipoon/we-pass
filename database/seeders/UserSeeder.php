<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => '平山泰暉',
                'email' => 'hirayama@test.com',
                'password' => Hash::make('password123'),
                'age' => 22,
                'occupation' => '学生',
            ],
            [
                'name' => '尾崎隆一郎',
                'email' => 'ozaki@test.com',
                'password' => Hash::make('password123'),
                'age' => 21,
                'occupation' => '学生',
            ],
        ]);
    }
}
