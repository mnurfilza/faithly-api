<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role =[
            [
                'name' => 'Individual',

            ],
            [
                'name' => 'Parent',

            ],
            [
                'name' => 'Childern',

            ],
            [
                'name' => 'Organization Admin',

            ],
            [
                'name' => 'Organization Member',

            ],
        ];

        DB::table('role')->insert($role);
    }
}
