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
            'title' => 'Magindara - Low Poly (Full View)',
            'category' => 'Blender',
            'image_path' => 'Magindara - Low Poly (Full View).png',
            'description' => '3D character model and final render created using Blender software.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'Magindara - Low Poly (Closeup)',
            'category' => 'Blender',
            'image_path' => 'Magindara - Low Poly (Closeup).png',
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
            'title' => 'Bakunawa - Weapon Concept',
            'category' => 'Concept Art',
            'image_path' => 'Bakunawa - Weapon Concept.png',
            'description' => 'Mythical weapon concept design.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'Hades Artstyle Study',
            'category' => 'Concept Art',
            'image_path' => 'Hades Artstyle Study.png',
            'description' => 'Artstyle study based on Supergiant Games Hades.',
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
            'title' => 'Chrono - Boss Undine Sprite',
            'category' => 'Sprite',
            'image_path' => 'Chrono - Boss Undine Sprite.png',
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
            'image_path' => 'Diwata Pixel Art - Lalahon.png',
            'description' => 'Character design for the Visayan goddess of fire.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'HALINAW - Licalibutan',
            'category' => 'HALINAW',
            'image_path' => 'Diwata Pixel Art - Licalibutan.png',
            'description' => 'Character design for the Visayan god of earth.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'HALINAW - Lidagat',
            'category' => 'HALINAW',
            'image_path' => 'Diwata Pixel Art - Lidagat.png',
            'description' => 'Character design for the Visayan goddess of the sea.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'HALINAW - Lihangin',
            'category' => 'HALINAW',
            'image_path' => 'Diwata Pixel Art - Lihangin.png',
            'description' => 'Character design for the Visayan god of the wind.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'Fated Sisters - The Maiden',
            'category' => 'Fated Sisters',
            'image_path' => 'Fated Sisters - The Maiden.png',
            'description' => 'Character design of the "Maiden" for the Fated Sisters.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'Fated Sisters - The Crone',
            'category' => 'Fated Sisters',
            'image_path' => 'Fated Sisters - The Crone.png',
            'description' => 'Character design  of the "Crone" for the Fated Sisters.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('projects')->insert([
            'title' => 'Fated Sisters - The Mother',
            'category' => 'Fated Sisters',
            'image_path' => 'Fated Sisters - The Mother.png',
            'description' => 'Character design of the "Mother" for the Fated Sisters.',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
