<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeSourceSeeder extends Seeder
{
    public function run()
    {
        DB::table('income_sources')->insert([
            [
                'name' => 'Salary',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Investment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gift',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
