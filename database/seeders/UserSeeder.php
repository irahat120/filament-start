<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        DB::table('users')->insert([

           [
            'name' => 'rahat',
            'email' => 'rahat@gmail.com',
            'password' => Hash::make('123456'),
            ],
            [
            'name' => 'Khan',
            'email' => 'Khan@gmail.com',
            'password' => Hash::make('123456'),
            ]

        ]);
    }
}
