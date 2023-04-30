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

        $this->call(Subscription::class);
        $this->call(CouponSeed::class);
        $this->call(StatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);


    }

}
