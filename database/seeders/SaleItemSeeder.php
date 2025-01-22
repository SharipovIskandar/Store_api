<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleItemSeeder extends Seeder
{
    public function run()
    {
        DB::table('sale_items')->insert([
            [
                'sale_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 1,
                'product_id' => 2,
                'quantity' => 2,
                'price' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'sale_id' => 2,
                'product_id' => 3,
                'quantity' => 1,
                'price' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
