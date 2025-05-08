<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX_RECORDS = 50;
    public function run(): void
    {
        for ($i = 1; $i <= self::MAX_RECORDS; $i++) {
            for ($a = 1; $a <= rand(1,4); $a++) {
                DB::table('orders')->insert([
                    'user_id' => $i,
                    'order_name' => "sanpham".$a,
                ]);
            }
        }
    }
   
}
