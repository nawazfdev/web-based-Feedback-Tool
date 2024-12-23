<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 15; $i++) {
            DB::table('feedback')->insert([
                'title' => $faker->sentence(5),
                'description' => $faker->paragraph(3),
                'category' => $faker->randomElement(['Bug', 'Feature Request', 'General Feedback', 'UI/UX']),
                'user_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
