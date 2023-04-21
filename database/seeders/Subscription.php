<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Subscription extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subs = [
            [
                'name'=>'Individual'
            ],
            [
                'name'=>'Parent'
            ],
            [
                'name'=>'Organization'
            ],
        ];

        DB::table('subscription')->insert($subs);
    }
}
