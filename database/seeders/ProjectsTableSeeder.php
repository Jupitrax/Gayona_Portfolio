<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        // Blender Projects
        DB::table('projects')->insert([
            'title' => 'Magindara - Final Render',
            'category' => 'Blender',
            'image_path' => 'Magindara - Final Render (Full View).png',
            'description' => '3D character model and final render created using Blender software.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'Magindara - CloseUp',
            'category' => 'Blender',
            'image_path' => 'Magindara - Final Render (CloseUp).png',
            'description' => '3D character model and final render created using Blender software.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'Bakunawa - Final Render',
            'category' => 'Blender',
            'image_path' => 'Bakunawa - Final Render.png',
            'description' => '3D weapon model and final render created using Blender software.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Concept Art Projects
        DB::table('projects')->insert([
            'title' => 'Character - Concept Art',
            'category' => 'Concept Art',
            'image_path' => 'Character - Concept Art.png',
            'description' => 'Initial concept designs and illustrations.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'Bakunawa - Concept Art',
            'category' => 'Concept Art',
            'image_path' => 'Bakunawa -  Concept Art.png',
            'description' => 'Mythical weapon concept design.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // Sprite Projects
        DB::table('projects')->insert([
            'title' => 'Chrono - Player Sprite',
            'category' => 'Sprite',
            'image_path' => 'Chrono - Player Sprite.png',
            'description' => 'Pixel art sprite for game character.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'Chrono - Ondina Boss Sprite',
            'category' => 'Sprite',
            'image_path' => 'Chrono - Ondina Boss Sprite.png',
            'description' => 'Boss character sprite design.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // AWS Projects
        DB::table('projects')->insert([
            'title' => 'AWS - Pandesal',
            'category' => 'AWS',
            'image_path' => 'AWS - Pandesal.png',
            'description' => 'AWS Learning Club USLS mascot illustration.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'AWS - Pandora',
            'category' => 'AWS',
            'image_path' => 'AWS - Pandora.png',
            'description' => 'AWS Learning Club USLS mascot illustration.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        // HALINAW Projects (Philippine Mythology)
        DB::table('projects')->insert([
            'title' => 'HALINAW - Lalahon',
            'category' => 'HALINAW',
            'image_path' => 'HALINAW - Lalahon.png',
            'description' => 'Character design for the Visayan goddess of fire.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'HALINAW - Licalibutan',
            'category' => 'HALINAW',
            'image_path' => 'HALINAW - Licalibutan.png',
            'description' => 'Character design for the Visayan god of earth.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'HALINAW - Lidagat',
            'category' => 'HALINAW',
            'image_path' => 'HALINAW - Lidagat.png',
            'description' => 'Character design for the Visayan goddess of the sea.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('projects')->insert([
            'title' => 'HALINAW - Lihangin',
            'category' => 'HALINAW',
            'image_path' => 'HALINAW - Lihangin.png',
            'description' => 'Character design for the Visayan god of the wind.',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
