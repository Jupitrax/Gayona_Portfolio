<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    public function run()
    {
        // Creative Skills
        DB::table('skills')->insert([
            'name' => 'Photoshop',
            'level' => 'Advanced',
            'category' => 'Digital Art',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Digital Painting',
            'level' => 'Advanced',
            'category' => 'Digital Art',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Concept Art',
            'level' => 'Advanced',
            'category' => 'Digital Art',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Visual Storytelling',
            'level' => 'Advanced',
            'category' => 'Digital Art',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Game Design
        DB::table('skills')->insert([
            'name' => 'Worldbuilding',
            'level' => 'Advanced',
            'category' => 'Game Design',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Character Design',
            'level' => 'Advanced',
            'category' => 'Game Design',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'System Design',
            'level' => 'Intermediate',
            'category' => 'Game Design',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Narrative Development',
            'level' => 'Intermediate',
            'category' => 'Game Design',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Illustration
        DB::table('skills')->insert([
            'name' => 'Traditional Sketching',
            'level' => 'Advanced',
            'category' => 'Illustration',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Digital Sketching',
            'level' => 'Advanced',
            'category' => 'Illustration',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Model Sheet Creation',
            'level' => 'Intermediate',
            'category' => 'Illustration',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Creative Direction
        DB::table('skills')->insert([
            'name' => 'Thematic Consistency',
            'level' => 'Intermediate',
            'category' => 'Creative Direction',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Branding',
            'level' => 'Beginner',
            'category' => 'Creative Direction',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Programming
        DB::table('skills')->insert([
            'name' => 'HTML',
            'level' => 'Intermediate',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('skills')->insert([
            'name' => 'C++',
            'level' => 'Advanced',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('skills')->insert([
            'name' => 'Java',
            'level' => 'Intermediate',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'SQL',
            'level' => 'Beginner',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Laravel',
            'level' => 'Beginner',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);

            DB::table('skills')->insert([
            'name' => 'PHP',
            'level' => 'Intermediate',
            'category' => 'Programming',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Cloud Computing
        DB::table('skills')->insert([
            'name' => 'AWS',
            'level' => 'Beginner',
            'category' => 'Cloud Computing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Data Analytics',
            'level' => 'Beginner',
            'category' => 'Cloud Computing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Cybersecurity',
            'level' => 'Beginner',
            'category' => 'Cloud Computing',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Leadership
        DB::table('skills')->insert([
            'name' => 'Event Organization',
            'level' => 'Advanced',
            'category' => 'Leadership',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Public Speaking',
            'level' => 'Advanced',
            'category' => 'Leadership',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('skills')->insert([
            'name' => 'Student Organization Management',
            'level' => 'Advanced',
            'category' => 'Leadership',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
