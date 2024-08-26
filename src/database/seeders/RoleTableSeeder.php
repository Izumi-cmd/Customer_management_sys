<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'リーダー', 'description' => 'リーダー'],
            ['id' => 2, 'name' => 'メンバー', 'description' => 'メンバー'],
            ['id' => 3, 'name' => 'マネージャー', 'description' => 'マネージャー'],
            ['id' => 4, 'name' => 'オーナー', 'description' => 'オーナー'],
        ]);
    }
}
