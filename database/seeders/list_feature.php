<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class list_feature extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'feature' => 'lorem 1',
                'subscription_id' => 1
            ],
            [
                'feature' => 'lorem 2',
                'subscription_id' => 1
            ],
            [
                'feature' => 'lorem 2',
                'subscription_id' => 1
            ],
            [
                'feature' => 'lorem 2',
                'subscription_id' => 1
            ],
        ];

        DB::table('list_feature')->insert($data);
    }
}
