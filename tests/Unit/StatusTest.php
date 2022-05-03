<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class StatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_count_of_each_status()
    {
        $user = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);

        $statusOpen = Status::factory()->create(['name' => 'Ouvert']);
        $statusConsidering = Status::factory()->create(['name' => 'En attente']);
        $statusInProgress = Status::factory()->create(['name' => 'En cours']);
        $statusImplemented = Status::factory()->create(['name' => 'Validé']);
        $statusClosed = Status::factory()->create(['name' => 'Clos']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma deuxieme idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOpen->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma troisième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusConsidering->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma quatrième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusConsidering->id,
            'description' => 'Description de ma première idée',
        ]);

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

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma neuvieme idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id,
            'description' => 'Description de ma première idée',
        ]);

        Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma dixième idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusClosed->id,
            'description' => 'Description de ma première idée',
        ]);

        $this->assertEquals(10, Status::getCount()['all_statuses']);
        $this->assertEquals(2, Status::getCount()['open']);
        $this->assertEquals(2, Status::getCount()['considering']);
        $this->assertEquals(2, Status::getCount()['in_progress']);
        $this->assertEquals(2, Status::getCount()['implemented']);
        $this->assertEquals(2, Status::getCount()['closed']);
    }
}
