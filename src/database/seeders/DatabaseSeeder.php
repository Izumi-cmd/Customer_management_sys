<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\CustomerLog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShopTableSeeder::class,
            RoleTableSeeder::class,
            UserTableSeeder::class,
        ]);

        User::factory(10)->create();
        Customer::factory(100)->create();
        CustomerLog::factory(100)->create();
    }
}
