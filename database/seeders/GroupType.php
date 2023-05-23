<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'group_type' => 'General'
                
            ],
            [
                'group_type'=> 'Special'
            ]
            ];
            DB::table('group_type')->insert($data);
    }
}
