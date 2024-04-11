<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => Hash::make('password123'),
                'created_at' => "2024/1/05 10:10:10",
            ]
        );
    }
}