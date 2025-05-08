<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    const MAX_RECORDS = 50;
    private $positions = ['Nhân viên', 'Trưởng phòng', 'CEO'];

    public function run(): void
    {
        for ($i = 1; $i <= self::MAX_RECORDS; $i++) {
            DB::table('position')->insert([
             
                'name' => $this->positions[array_rand($this->positions)],
                'user_id' => $i
            ]);
        }
    }
}
