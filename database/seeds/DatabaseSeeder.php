<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // Create 10 records of posts
        factory(App\Post::class, 10)->create()->each(function ($post) {
            // Seed the relation with 5 comments
            $commments = factory(App\Comment::class, 5)->make();
            $post->comments()->saveMany($commments);
        });
    }
}
