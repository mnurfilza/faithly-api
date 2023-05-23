<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data =[
            [
                'code'=>'EN',
                'name'=>'English'
            ],
            [
                'code'=>'ES',
                'name'=>'Spanish'
            ],
            [
                'code'=>'FR',
                'name'=>'French'
            ],
            [
                'code'=>'IT',
                'name'=>'Italian'
            ],
        ];

        DB::table('language')->insert($data );

    }
}
