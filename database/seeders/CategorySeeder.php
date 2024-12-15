<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 10 fake categories
        for ($i = 0; $i < 50; $i++) {
            Category::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
            ]);
        }
    }
}
