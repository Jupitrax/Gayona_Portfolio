<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProfilesTableSeeder::class,
            ContactsTableSeeder::class,
            SkillsTableSeeder::class,
            ProjectsTableSeeder::class,
            ExperiencesTableSeeder::class
        ]);
    }
}
