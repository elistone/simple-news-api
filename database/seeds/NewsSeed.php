<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\News;

use Faker\Factory as Faker;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++){
            News::Create
            ([
                'title' => $faker->realText(255),
                'content' => $faker->realText(),
                'image' => $faker->imageUrl(),
                'category_id' => $faker->numberBetween(1,4),
                'likes' => $faker->numberBetween(0,200),
                'dislikes' => $faker->numberBetween(0,100)
            ]);
        }
    }
}
