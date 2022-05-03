<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{
    use WithPagination;

    // By default, index page will show all ideas
    public $status;
    public $category;

    protected $queryString = [
        'status',
        'category'
    ];

    public function mount()
    {
        $this->status = request()->status ?? 'Toutes';
    }

    // Logic to fire event containing the chosen status to status filter
    protected $listeners = ['queryStringUpdatedStatus'];
    public function queryStringUpdatedStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->resetPage();
    }

    public function render()
    {

        $statuses = Status::all()->pluck('id', 'name');
        $categories = Category::all();

        // Using 'with' property to make less queries
        //Adding subquery to retrieve if the user has voted to this idea
        return view('livewire.ideas-index', [
            'ideas' => Idea::with('user', 'category', 'status')
                ->when($this->status && $this->status !== 'Toutes', function ($query) use ($statuses) {
                    return $query->where('status_id', $statuses->get($this->status));
                })
                ->when($this->category && $this->category !== 'Toutes', function ($query) use ($categories) {
                    return $query->where('category_id', $categories->pluck('id', 'name')->get($this->category));
                })
                ->addSelect(['voted_by_user' => Vote::select('id')
                    ->where('user_id', auth()->id())
                    ->whereColumn('idea_id', 'ideas.id')])
                ->withCount('votes')
                ->latest('id')
                ->simplePaginate(Idea::PAGINATION_COUNT),
            'categories' => $categories,
        ]);
    }
}
