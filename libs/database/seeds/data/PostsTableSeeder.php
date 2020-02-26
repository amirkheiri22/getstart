<?php

//use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Post::class,20)->create()->each(function ($post){
            $post->categories()->saveMany(factory(App\Category::class,2)->make());
        });
    }
}
