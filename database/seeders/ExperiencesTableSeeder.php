<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    public function run()
    {
        // Work Experience
        DB::table('experiences')->insert([
            'type' => 'work',
            'role' => 'President',
            'organization' => 'AWS USLS Learning Club',
            'year' => '2024 - 2025',
            'description' => 'Leads a multi-department student organization focused on cloud computing, AI, and cybersecurity. Spearheads initiatives in education, training, and advocacy to promote digital literacy. Oversees coordination of events, finances, and cross-departmental programs.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('experiences')->insert([
            'type' => 'work',
            'role' => 'Undersecretary',
            'organization' => 'Student Government',
            'year' => '2023 - 2024',
            'description' => 'Supported advocacy and administrative campaigns. Contributed to background strategies that strengthened student participation and engagement.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('experiences')->insert([
            'type' => 'work',
            'role' => 'Vice Governor',
            'organization' => 'Senior High School Student Council',
            'year' => '2022 - 2023',
            'description' => 'Managed student programs and assisted in large-scale school activities. Represented the student body in organizational and leadership roles.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Education
        DB::table('experiences')->insert([
            'type' => 'education',
            'role' => 'Bachelor of Science in Computer Science',
            'organization' => 'University of St. La Salle',
            'year' => 'Expected Graduation: 2027',
            'description' => '',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
