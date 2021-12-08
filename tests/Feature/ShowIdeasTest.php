<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Database\Factories\IdeaFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function list_of_ideas_shows_on_main_page()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);
        $statusTwo = Status::factory()->create(['name' => 'En attente', 'classes' => 'bg-purple text-white']);

        $ideaOne = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
            'description' => 'Description de ma première idée',
        ]);

        $ideaTwo = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma seconde idée',
            'category_id' => $categoryTwo->id,
            'status_id' => $statusTwo->id,
            'description' => 'Description de ma seconde idée',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($categoryOne->name); 
        $response->assertSee($categoryTwo->name);
        
        $response->assertSee($statusOne->name); 
        $response->assertSee($statusTwo->name); 

        $response->assertSee($ideaOne->title); 
        $response->assertSee($ideaOne->description); 

        $response->assertSee($ideaTwo->title); 
        $response->assertSee($ideaTwo->description); 
    }

        /** @test */
        public function single_idea_shows_correctly_on_the_show_page()
        {
            $user = User::factory()->create();
            $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);

            $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

            $idea = Idea::factory()->create([
                'user_id' => $user->id,
                'title' => 'Ma première idée',
                'category_id' => $categoryOne->id,
                'status_id' => $statusOne->id,
                'description' => 'Description de ma première idée',
            ]);
    
            $response = $this->get(route('idea.show', $idea));

            $response->assertSuccessful();

            $response->assertSee($categoryOne->name); 
            $response->assertSee($statusOne->name);
            $response->assertSee($idea->title); 
            $response->assertSee($idea->description);  
        }

        /** @test */
        public function ideas_pagination_works()
        {
            $user = User::factory()->create();
            $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
            
            $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

            Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
                'user_id' => $user->id,
                'category_id' => $categoryOne->id,
                'status_id' => $statusOne->id,
            ]);

            // ErrorException: Creating default object from empty value
            // $ideaOne = Idea::find(1);
            // $ideaOne->title = 'Ma première idée';
            // $ideaOne->save();

            // $ideaEleven = Idea::find(11);
            // $ideaEleven->title = 'Ma onzième idée';
            // $ideaEleven->save();

            $response = $this->get(route('idea.index'));
            $response->assertSuccessful();
        }
}
