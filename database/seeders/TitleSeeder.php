<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('titles')->insert([
            ['name' => 'Professor EBTT', 'has_specialization' => true],
            ['name' => 'Professor do Magistério Superior', 'has_specialization' => true],
        ]);
    }
}
