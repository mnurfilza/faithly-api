<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

       $lang= DB::table('language')->where('code','=','EN')->get();

       $versions = [
           'language_id' => $lang[0]->id,
           'code'=>'KJV',
           'name'=>'King James (Authorised) Version'
       ];

       DB::table('versions')->insert($versions);
    }
}
