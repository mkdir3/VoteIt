<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeasIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CategoryFiltersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function selecting_category_filters_correctly()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);
        $categoryThree = Category::factory()->create(['name' => 'Categorie 3']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaThree = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaFour = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('category', 'Categorie 2')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() === 2
                    && $ideas->first()->category->name === 'Categorie 2';
            });
    }

    /** @test */
    public function category_query_string_filters_correctly()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);
        $categoryThree = Category::factory()->create(['name' => 'Categorie 3']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaThree = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaFour = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
        ]);

        Livewire::withQueryParams(['category' => 'Categorie 1'])
            ->test(IdeasIndex::class)
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() === 1
                    && $ideas->first()->category->name === 'Categorie 1';
            });
    }

    /** @test */
    public function selecting_status_and_category_filters_correctly()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);
        $categoryThree = Category::factory()->create(['name' => 'Categorie 3']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);
        $statusTwo = Status::factory()->create(['name' => 'En attente', 'classes' => 'bg-yellow-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id,
            'status_id' => $statusTwo->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaThree = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusTwo->id,
        ]);
        $ideaFour = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('status', 'En attente')
            ->set('category', 'Categorie 2')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() === 1
                    && $ideas->first()->status->name === 'En attente'
                    && $ideas->first()->category->name === 'Categorie 2';
            });
    }

    /** @test */
    public function category_query_string_filters_correctly_with_status_and_category()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);
        $categoryThree = Category::factory()->create(['name' => 'Categorie 3']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaThree = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaFour = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
        ]);

        Livewire::withQueryParams(['category' => 'Categorie 1', 'status' => 'Ouvert'])
            ->test(IdeasIndex::class)
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() === 1
                    && $ideas->first()->category->name === 'Categorie 1'
                    && $ideas->first()->status->name === 'Ouvert';
            });
    }

    /** @test */
    public function selecting_all_categories_filters_correctly()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);
        $categoryThree = Category::factory()->create(['name' => 'Categorie 3']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaThree = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id,
            'status_id' => $statusOne->id,
        ]);
        $ideaFour = Idea::factory()->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
        ]);

        Livewire::test(IdeasIndex::class)
            ->set('category', 'Toutes')
            ->assertViewHas('ideas', function ($ideas) {
                return $ideas->count() === 4;
            });
    }
}
