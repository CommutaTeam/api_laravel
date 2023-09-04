<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            ['name' => 'Ciências Exatas e da Terra'],
            ['name' => 'Ciências Biológicas'],
            ['name' => 'Engenharias'],
            ['name' => 'Ciências da Saúde'],
            ['name' => 'Ciências Agrárias'],
            ['name' => 'Ciências Sociais'],
            ['name' => 'Ciências Humanas'],
            ['name' => 'Linguística, Letras e Artes'],
        ]);
    }
}
