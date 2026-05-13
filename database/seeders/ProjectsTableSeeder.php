<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [

            // Blender Projects
            [
                'title' => 'Magindara Low Poly (Full View)',
                'category' => 'Blender',
                'image_path' => 'Magindara - Low Poly (Full View).png',
                'description' => '3D character model and final render created using Blender software.',
            ],
            [
                'title' => 'Magindara Low Poly (Closeup)',
                'category' => 'Blender',
                'image_path' => 'Magindara - Low Poly (Closeup).png',
                'description' => '3D character model and final render created using Blender software.',
            ],
            [
                'title' => 'Bakunawa Final Render',
                'category' => 'Blender',
                'image_path' => 'Bakunawa - Final Render.png',
                'description' => '3D weapon model and final render created using Blender software.',
            ],

            // Concept Art
            [
                'title' => 'Bakunawa Weapon Concept',
                'category' => 'Concept Art',
                'image_path' => 'Bakunawa - Weapon Concept.png',
                'description' => 'Mythical weapon concept design.',
            ],
            [
                'title' => 'Hades Artstyle Study',
                'category' => 'Concept Art',
                'image_path' => 'Hades Artstyle Study.png',
                'description' => 'Artstyle study based on Supergiant Games Hades.',
            ],

            // Sprite
            [
                'title' => 'Player Sprite',
                'category' => 'Sprite',
                'image_path' => 'Chrono - Player Sprite.png',
                'description' => 'Pixel art sprite for game character.',
            ],
            [
                'title' => 'Undine Sprite',
                'category' => 'Sprite',
                'image_path' => 'Chrono - Boss Undine Sprite.png',
                'description' => 'Boss character sprite design.',
            ],

            // AWS
            [
                'title' => 'AWS - Pandesal',
                'category' => 'AWS',
                'image_path' => 'Pandesal.png',
                'description' => 'AWS Learning Club USLS mascot illustration.',
            ],
            [
                'title' => 'Pandora',
                'category' => 'AWS',
                'image_path' => 'AWS - Pandora.png',
                'description' => 'AWS Learning Club USLS mascot illustration.',
            ],

            // HALINAW
            [
                'title' => 'Lalahon',
                'category' => 'HALINAW',
                'image_path' => 'Diwata Pixel Art - Lalahon.png',
                'description' => 'Character design for the Visayan goddess of fire.',
            ],
            [
                'title' => 'Licalibutan',
                'category' => 'HALINAW',
                'image_path' => 'Diwata Pixel Art - Licalibutan.png',
                'description' => 'Character design for the Visayan god of earth.',
            ],
            [
                'title' => 'Lidagat',
                'category' => 'HALINAW',
                'image_path' => 'Diwata Pixel Art - Lidagat.png',
                'description' => 'Character design for the Visayan goddess of the sea.',
            ],
            [
                'title' => 'Lihangin',
                'category' => 'HALINAW',
                'image_path' => 'Diwata Pixel Art - Lihangin.png',
                'description' => 'Character design for the Visayan god of the wind.',
            ],

            // Fated Sisters
            [
                'title' => 'The Maiden',
                'category' => 'Fated Sisters',
                'image_path' => 'Fated Sisters - The Maiden.png',
                'description' => 'Character design of the "Maiden" for the Fated Sisters.',
            ],
            [
                'title' => 'The Crone',
                'category' => 'Fated Sisters',
                'image_path' => 'Fated Sisters - The Crone.png',
                'description' => 'Character design of the "Crone" for the Fated Sisters.',
            ],
            [
                'title' => 'The Mother',
                'category' => 'Fated Sisters',
                'image_path' => 'Fated Sisters - The Mother.png',
                'description' => 'Character design of the "Mother" for the Fated Sisters.',
            ],
        ];

        foreach ($projects as $project) {

            DB::table('projects')->updateOrInsert(
                [
                    'title' => $project['title'],
                ],
                [
                    'category' => $project['category'],
                    'image_path' => $project['image_path'],
                    'description' => $project['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}