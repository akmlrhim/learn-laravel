<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // $category = Category::create([
        //     'name' => 'Laravel',
        //     'slug' => 'laravel'
        // ]);

        // $post =  Post::create([
        //     'category_id' => 1,
        //     'author_id' => 1,
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'body' => 'A seeder class only contains one method by default: run. This method is called when the db:seed Artisan command is executed. Within the run method, you may insert data into your database however you wish. You may use the query builder to manually insert data or you may use Eloquent model factories.',
        // ]);

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
