<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['title' => 'Halinaw','description' => 'Card-Based RPG Game', 'tech_stack' => 'Front-End', 'year' => '2025'],
         ]);
    }
}
