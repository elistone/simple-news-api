<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

use Faker\Factory as Faker;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 6; $i++){
            Category::Create
            ([
                'title' => $faker->name(),
                'description' => $faker->word()

            ]);
        }
    }
}
