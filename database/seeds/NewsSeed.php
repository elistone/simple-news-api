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
                'title' => $faker->sentence(),
                'content' => $faker->realText(),
                'image' => $faker->imageUrl(),
                'category_id' => $faker->numberBetween(1,3),
                'likes' => $faker->randomNumber(),
                'dislikes' => $faker->randomNumber()
            ]);
        }
    }
}
