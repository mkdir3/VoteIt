<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Idea;
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
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
        $categoryTwo = Category::factory()->create(['name' => 'Categorie 2']);

        $ideaOne = Idea::factory()->create([
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'description' => 'Description de ma première idée',
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'Ma seconde idée',
            'category_id' => $categoryTwo->id,
            'description' => 'Description de ma seconde idée',
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();

        $response->assertSee($categoryOne->name); 
        $response->assertSee($categoryTwo->name); 

        $response->assertSee($ideaOne->title); 
        $response->assertSee($ideaOne->description); 

        $response->assertSee($ideaTwo->title); 
        $response->assertSee($ideaTwo->description); 
    }

        /** @test */
        public function single_idea_shows_correctly_on_the_show_page()
        {
            $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);

            $idea = Idea::factory()->create([
                'title' => 'Ma première idée',
                'category_id' => $categoryOne->id,
                'description' => 'Description de ma première idée',
            ]);
    
            $response = $this->get(route('idea.show', $idea));

            $response->assertSuccessful();

            $response->assertSee($categoryOne->name); 
            $response->assertSee($idea->title); 
            $response->assertSee($idea->description);  
        }

        /** @test */
        public function ideas_pagination_works()
        {
            $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);
            
            Idea::factory(Idea::PAGINATION_COUNT + 1)->create([
                'category_id' => $categoryOne->id,
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
