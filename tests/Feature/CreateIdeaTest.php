<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateIdeaTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function create_idea_form_does_not_show_when_logged_out()
    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('Inscrivez-vous et postez votre première idée !');
        $response->assertDontSee('Dites nous ce qu\'il vous passe par la tête.');
    }

    /**
     * @test
     */
    public function create_idea_form_does_show_when_logged_in()
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertDontSee('Inscrivez-vous et postez votre première idée !');
        $response->assertSee('Dites nous ce qu\'il vous passe par la tête.', false);
    }

    /**
     * @test
     */
    public function main_page_contains_create_idea_livewire_component()
    {
        $this->actingAs(User::factory()->create())
            ->get(route('idea.index'))
            ->assertSeeLivewire('create-idea');
    }

    /**
     * @test
     */
    public function create_idea_form_validation_works()
    {
        Livewire::actingAs(User::factory()->create())
            ->test(CreateIdea::class)
            ->set('title', '')
            ->set('category', '')
            ->set('description', '')
            ->call('createIdea')
            ->assertHasErrors(['title', 'category', 'description']);
    }

    /**
     * @test
     */
    public function creating_an_idea_works_correctly()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        Livewire::actingAs($user)
            ->test(CreateIdea::class)
            ->set('title', 'Ma premiere idée')
            ->set('category', $categoryOne->id)
            ->set('description', 'Ceci est ma premiere idée')
            ->call('createIdea')
            ->assertRedirect('/');

        $response = $this->actingAs($user)->get(route('idea.index'));
        $response->assertSuccessful();
        $response->assertSee('Ma premiere idée');
        $response->assertSee('Ceci est ma premiere idée');

        $this->assertDatabaseHas('ideas', ['title' => 'Ma premiere idée']);
    }
}
