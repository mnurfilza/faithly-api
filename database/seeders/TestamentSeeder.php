<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


class TestamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testamen = [
            [
                'order'=>'1',

            ],
            [
                'order'=>'2',

            ],

        ];


        DB::table('testaments')->insert($testamen);


        $testnamen_name = [
            [
                'version_id'=>1,
                'testament_id'=>1,
                'name'=>'Old Testaments'
            ],
            [
                'version_id'=>1,
                'testament_id'=>2,
                'name'=>'New Testaments'
            ]
        ];

        DB::table('testament_names')->insert($testnamen_name);


    }
}
