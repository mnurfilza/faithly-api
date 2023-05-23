<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $level = [
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'general_refs'=> 4,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'reward_coins'=>200,
                'isFinalLevel' => false,

            ],
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'general_refs'=> 4,

                'reward_coins'=>200,
                'isFinalLevel' => false,

            ],
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'reward_coins'=>200,
                'isFinalLevel' => false,
                'general_refs'=> 4,

            ],
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'reward_coins'=>200,
                'isFinalLevel' => false,
                'general_refs'=> 4,

            ],
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'reward_coins'=>200,
                'isFinalLevel' => false,
                'general_refs'=> 4,

            ],
            [
                'chapter_id'=> 1,
                'questions'=> 10,
                'time_per_question'=> 5,
                'free_answer' => 3,
                'reward_coins'=>200,
                'isFinalLevel' => true,
                'general_refs'=> 4,

            ],
        ];

        DB::table('level')->insert($level);
    }
}
