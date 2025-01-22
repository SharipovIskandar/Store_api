<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IncomeSeeder extends Seeder
{
    public function run()
    {
        DB::table('incomes')->insert([
            'income_date' => Carbon::now()->format('Y-m-d'),
            'amount' => 1000.50,
            'source_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
