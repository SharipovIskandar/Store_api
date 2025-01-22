<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            'order_date' => Carbon::now()->format('Y-m-d'),
            'customer_id' => 1,
            'status' => 'pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('orders')->insert([
            'order_date' => Carbon::now()->format('Y-m-d'),
            'customer_id' => 2,
            'status' => 'pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
