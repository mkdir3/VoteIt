<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IdeaTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_check_if_idea_id_voted_for_by_user()
    {
        $user = User::factory()->create();
        $userTwo = User::factory()->create();
        $categoryOne = Category::factory()->create(['name' => 'Categorie 1']);

        $statusOne = Status::factory()->create(['name' => 'Ouvert', 'classes' => 'bg-gray-200']);

        $idea = Idea::factory()->create([
            'user_id' => $user->id,
            'title' => 'Ma première idée',
            'category_id' => $categoryOne->id,
            'status_id' => $statusOne->id,
            'description' => 'Description de ma première idée',
        ]);

        Vote::factory()->create([
            'idea_id' => $idea->id,
            'user_id' => $user->id,
        ]);

        $this->assertTrue($idea->isVotedByUser($user));
        $this->assertFalse($idea->isVotedByUser($userTwo));
        $this->assertFalse($idea->isVotedByUser(null));
    }
}
