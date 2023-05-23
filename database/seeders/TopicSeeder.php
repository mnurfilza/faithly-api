<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            [
                'name'=> 'Blessing'
            ],
            [
                'name'=> 'Family'
            ],
            [
                'name'=> 'Love'
            ],
            [
                'name'=> 'Worship'
            ],
            [
                'name'=> 'Faith'
            ],
        ];

        DB::table('topic')->insert($data);
    }
}
