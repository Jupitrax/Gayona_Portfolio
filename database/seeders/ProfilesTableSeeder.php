<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('profiles')->insert([
            'full_name' => 'John Andrei Gayona',
            'title' => 'Welcome to My Creative Portfolio',
            'bio' => 'I am John Andrei Gayona, a creative and driven Computer Science student with a strong passion for game design, concept art, and digital illustration. Skilled in visual storytelling, worldbuilding, and interactive design, I thrive in transforming ideas into immersive experiences. Alongside my creative expertise, I bring proven leadership from various student organizations, where I have led projects, managed teams, and fostered collaboration to achieve shared goals. Combining artistry with organizational leadership, I aim to contribute both innovative design concepts and strong coordination skills to the gaming and creative industries.',
            'email' => 'jndreigayona@gmail.com',
            'location' => 'Bacolod City, Philippines',
            'phone' => '09999156029',
            'linkedin' => 'https://www.linkedin.com/in/andrei-gayona-b59445326',
            'profile_image' => 'andrei.png',
            'title_image' => 'title.png'
        ]);
    }
}
