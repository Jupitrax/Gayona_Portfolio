<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
           ['name' => 'HTML','level' => 'Advanced'],
           ['name' => 'CSS','level' => 'Intermediate'],
           ['name' => 'JavaScript','level' => 'Intermediate'],
           ['name' => 'PHP','level' => 'Advanced'], 
           ['name' => 'laravel','level' => 'Beginner'], 
        ]);
    }
}
