<?php

namespace Tests\Feature;

use App\Http\Livewire\StatusFilter;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StatusFiltersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function index_page_contains_status_filters_livewire_component()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusOpen = Status::factory()->create(['name' => 'Ouvert']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description de ma première idée',
        ]);

        $this->get(route('idea.index'))
            ->assertSeeLivewire('status-filter');
    }

    /** @test */
    public function show_page_contains_status_filters_livewire_component()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusOpen = Status::factory()->create(['name' => 'Ouvert']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description de ma première idée',
        ]);

        $this->get(route('idea.show', $idea))
            ->assertSeeLivewire('status-filter');
    }

    /** @test */
    public function show_correct_status_count()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Validé']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        Livewire::test(StatusFilter::class)
            ->assertSee('TOUTES (2)')
            ->assertSee('VALIDÉ (2)');
    }

    /** @test */
    public function filtering_works_when_query_string_in_place()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusOpen = Status::factory()->create(['name' => 'Ouvert']);
        $statusConsidering = Status::factory()->create(['name' => 'En attente']);
        $statusInProgress = Status::factory()->create(['name' => 'En cours', 'classes' => 'bg-yellow']);
        $statusImplemented = Status::factory()->create(['name' => 'Validé', 'classes' => 'bg-green']);
        $statusClosed = Status::factory()->create(['name' => 'Clos']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma cinquième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusInProgress->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma sixième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusInProgress->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma septième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma huitième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        $response = $this->get(route('idea.index', ['status' => 'En cours']));
        $response->assertSuccessful();
        $response->assertSee('bg-yellow text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4', false);
        $response->assertDontSee('bg-green text-xxs font-bold uppercase leading-none rounded-full transition duration-150 ease-in text-center w-28 h-7 py-2 px-4', false);
    }

    /** @test */
    public function show_page_does_not_show_selected_status()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Validé']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        $response = $this->get(route('idea.show', $idea));
        $response->assertDontSee('border-blue text-gray-900');
    }

    /** @test */
    public function index_page_does_not_show_selected_status()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $statusImplemented = Status::factory()->create(['id' => 4, 'name' => 'Validé']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusImplemented->id,
            'description' => 'Description de ma première idée',
        ]);

        $response = $this->get(route('idea.index'));
        $response->assertSee('border-blue text-gray-900');
    }
}
