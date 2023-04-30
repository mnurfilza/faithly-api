<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $status = [
            [
                'name'=>'In Active',
                'domain'=> 'user',
                'priority' => 1,
            ],

            [
                'name'=>'Active',
                'domain'=> 'user',
                'priority' => 2,
            ],

            [
                'name'=>'Active',
                'domain'=> 'card',
                'priority' => 1,
            ],
            [
                'name'=>'Unpaid',
                'domain'=> 'payment',
                'priority' => 1,
            ],
            [
                'name'=>'Paid',
                'domain'=> 'payment',
                'priority' => 2,
            ],
            [
                'name'=>' Days Left',
                'domain'=> 'billing',
                'priority' => 1,
            ],
            [
                'name'=>'Waiting For Payment',
                'domain'=> 'billing',
                'priority' => 2,
            ],
            [
                'name'=>'Issued',
                'domain'=> 'billing',
                'priority' => 3,
            ],

            [
                'name'=>'Overdue',
                'domain'=> 'billing',
                'priority' => 4,
            ]
        
        ];
        DB::table('statuses')->insert($status);
    }
}
