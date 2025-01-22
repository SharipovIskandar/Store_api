<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SaleSeeder extends Seeder
{
    public function run()
    {
        DB::table('sales')->insert([
            'sale_date' => Carbon::now()->format('Y-m-d'),
            'customer_id' => 1,
            'total_amount' => 5000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('sales')->insert([
            'sale_date' => Carbon::now()->format('Y-m-d'),
            'customer_id' => 2,
            'total_amount' => 5000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
