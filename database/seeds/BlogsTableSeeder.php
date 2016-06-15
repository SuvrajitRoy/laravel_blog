<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder
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
    	Blog::truncate();
	
	// Create database
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
		     Blog::insert([
	            'title' => $faker->title,
	            'description' => $faker->paragraph,
	            'username' => $faker->firstName,
                'image' => $faker->image
	        ]);
    	}
	}
}
