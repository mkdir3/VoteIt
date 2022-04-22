<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{
    use WithPagination;

    public function render()
    {

        $statuses = Status::all()->pluck('id', 'name');

        // Using 'with' property to make less queries
        //Adding subquery to retrieve if the user has voted to this idea
        return view('livewire.ideas-index', [
            'ideas' => Idea::with('user', 'category', 'status')
                ->when(request()->status && request()->status !== 'Toutes', function ($query) use ($statuses) {
                    return $query->where('status_id', $statuses->get(request()->status));
                })
                ->addSelect(['voted_by_user' => Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('idea_id', 'ideas.id')])
                ->withCount('votes')
                ->latest('id')
                ->simplePaginate(Idea::PAGINATION_COUNT),
        ]);
    }
}
