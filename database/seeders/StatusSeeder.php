<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'новое', 'created_at' => now()],
            ['name' => 'подтверждено', 'created_at' => now()],
            ['name' => 'отказано', 'created_at' => now()],
        ]);
    }
}
