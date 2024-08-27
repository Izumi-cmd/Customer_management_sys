<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => Str::random(10),
                'email' => 'admin@example.com',
                'password' => 'admin',
                'shop_id' => 1,
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
                'shop_id' => 1,
                'role_id' => 2,
            ],
            [
                'id' => 3,
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => Hash::make('password'),
                'shop_id' => 1,
                'role_id' => 3,
            ],
        ]);
    }
}
