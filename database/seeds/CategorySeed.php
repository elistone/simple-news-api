<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;


class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorys    = array('Technology','Science','Education','Entertainment & Arts');
        $description  = array('The application of scientific knowledge for practical purposes, especially in industry.',
                              'The intellectual and practical activity encompassing the systematic study of the structure and behaviour of the physical and natural world through observation and experiment.',
                              'The process of receiving or giving systematic instruction, especially at a school or university.',
                              'The action of providing or being provided with amusement or enjoyment.');

        for($i = 0; $i < count($categorys); $i++){
            Category::Create
            ([
                'title' => $categorys[$i],
                'description' => $description[$i]

            ]);
        }
    }
}
