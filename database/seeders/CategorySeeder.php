<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        Category::create([
            'name' => 'Code Igniter',
            'slug' => 'code-igniter'
        ]);

        Category::create([
            'name' => 'Yii Framework',
            'slug' => 'yii-framework'
        ]);
    }
}
