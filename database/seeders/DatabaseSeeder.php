<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            IncomeSourceSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
            SaleSeeder::class,
            SaleItemSeeder::class,
            IncomeSeeder::class,
            StockSeeder::class,
        ]);
    }
}
