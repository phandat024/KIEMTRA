<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX_RECORDS = 10;
    public function run(): void
    {
        for ($i = 1; $i <= 2; $i++) {
            for ($i = 1; $i <= 10; $i++) {
                DB::table('orders')->insert([
                    'user_id' => $i,
                    'order_list' => rand(1,4),
        ]);
            }
        }
    }
   
}
