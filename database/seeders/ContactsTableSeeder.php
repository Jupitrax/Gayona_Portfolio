<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            'email' => 'jndreigayona@gmail.com',
            'phone' => '09999156029',
            'linkedin' => 'https://www.linkedin.com/in/andrei-gayona-b59445326',
            'github' => '',
            'location' => 'Bacolod City, Philippines'
        ]);
    }
}
