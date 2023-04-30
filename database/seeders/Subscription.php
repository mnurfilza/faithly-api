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
                'name'=>'Individual',
                'users'=> 0,
                'yearly_amount'=>0.0,
                'monthly_amount'=>0.0
            ],
            [
                'name'=>'Parent',
                'users'=> 0,
                'yearly_amount'=>0.0,
                'monthly_amount'=>0.0

            ],
            [
                'name'=>'Organization',
                'users'=> 0,
                'yearly_amount'=>0.0,
                'monthly_amount'=>0.0

            ],
        ];

        DB::table('subscription')->insert($subs);
    }
}
