<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Authentication::factory(10)->create();

        // \App\Models\Authentication::factory()->create([
        //     'name' => 'Test Authentication',
        //     'email' => 'test@example.com',
        // ]);

//        $this->call(Subscription::class);
//        $this->call(CouponSeed::class);
//        $this->call(StatusSeeder::class);
//        $this->call(RoleSeeder::class);
//        $this->call(UserSeeder::class);
        // $this->call(LanguageSeeder::class);
        // $this->call(TestamentSeeder::class);
        // $this->call(VersionSeeder::class);
        // $this->call(BooksSeeder::class);
        // $this->call(BooksNameSeed::class);
        //    $this->call(ChapterSeeder::class);

//        $this->call(HHowToPlaySeeder::class);
        // $this->call(FaqSeeder::class);

        // $this->call(VersesSeeder::class);
        // $this->call(TopicSeeder::class);
        // $this->call(LevelModelSeeder::class);
//        $this->call(GroupType::class);
    $this->call(list_feature::class);
    }


}
