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

        $categorys = array('Tec','Science','Education','Entertainment & Arts');

        for($i = 0; $i < count($categorys); $i++){
            Category::Create
            ([
                'title' => $categorys[$i],
                'description' => $faker->word()

            ]);
        }
    }
}
