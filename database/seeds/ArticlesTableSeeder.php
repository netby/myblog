<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 100000; $i++) {


        DB::table('articles')->insert([
            'title' => str_random(100),
            'slug' => str_random(100),
            'description_short' => str_random(1000),
            'description' => str_random(1000),
            'meta_description' => str_random(100),
            'meta_keyword' => str_random(100),
            'meta_title' => str_random(100),
            'published' => number_format(1),
        ]);
        }
    }
}
