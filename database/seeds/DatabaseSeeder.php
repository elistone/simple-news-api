<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Category::truncate();
        Model::unguard();

        $this->call('CategorySeed');
        $this->call('NewsSeed');

        Model::reguard();
    }
}
