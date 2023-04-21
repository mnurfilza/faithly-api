<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subs = [
            [
                'name'=>'Individual',
                'disc'=>'0',
                'coupon_code'=>'xxx'

            ],
            [
                'name'=>'Parent',
                'disc'=>'0',
                'coupon_code'=>'xxx'
            ],
            [
                'name'=>'Organization',
                'disc'=>'0',
                'coupon_code'=>'xxx'
            ],
        ];

        DB::table('coupon')->insert($subs);
    }
}
