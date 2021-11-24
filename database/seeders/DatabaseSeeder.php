<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Idea;
use Database\Factories\IdeaFactory;
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
        // \App\Models\User::factory(10)->create();

        Category::factory()->create(['name' => 'Categorie 1']);
        Category::factory()->create(['name' => 'Categorie 2']);
        Category::factory()->create(['name' => 'Categorie 3']);
        Category::factory()->create(['name' => 'Categorie 4']);
        
        Idea::factory(30)->create();

    }
}
