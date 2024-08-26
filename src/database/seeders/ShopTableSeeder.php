<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shops')->insert([
            [
                'id' => 1,
                'name' => '東京',
            ],
            [
                'id' => 2,
                'name' => '大阪',
            ],
            [
                'id' => 3,
                'name' => '名古屋',
            ],
            [
                'id' => 4,
                'name' => '福岡',
            ],
            [
                'id' => 5,
                'name' => '札幌',
            ],
        ]);
    }
}
