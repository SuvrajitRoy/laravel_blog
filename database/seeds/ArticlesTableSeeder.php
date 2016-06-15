<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Delete all database then create data 
    	Eloquent::unguard();
    	Article::truncate();
	
	// Create database
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
		     Article::insert([
	            'title' => $faker->sentence,
	            'description' => $faker->paragraph,
	            // 'image' => $faker->image
	        ]);
    	}
    }
}
