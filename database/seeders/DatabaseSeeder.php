<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Post::truncate();
        // User::truncate();
        // Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(30)->create([
            'user_id' => $user->id,

        ]);

    }
}