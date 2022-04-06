<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::factory(20)->create();
        $tags = Tag::factory(50)->create();
        $posts = Post::factory(200)->create();

        foreach ($posts as $post) {
          $tagIds = $tags->random(5)->pluck('id');
          $post->tags()->attach($tagIds);
        }
    }
}
