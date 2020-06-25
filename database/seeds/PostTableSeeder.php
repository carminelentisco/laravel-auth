<?php

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker )
    {
        $posts = 20;
        for ( $i = 0; $i < $posts; $i++ ) { 
            $title = $faker->text(30);
            $newPost = new Post(); 

            $newPost->user_id = 1;
            $newPost->title = $title;
            $newPost->body = $faker->paragraphs('3', true);
            $newPost->slug = Str::slug($title, '-');
            $newPost->save();
        }
    }
}
