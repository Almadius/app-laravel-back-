<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('themes')->insert([
            [
                'name' => 'classic',
                'display_name' => 'Classic Theme',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'cuba',
                'display_name' => 'Cuba Theme',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
