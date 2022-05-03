<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Status;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilter extends Component
{
    public $status;
    public $statusCount;


    // If on a single idea, remove the query string
    public function mount()
    {
        $this->statusCount = Status::getCount();
        $this->status = request()->status ?? 'Toutes';

        if (Route::currentRouteName() === 'idea.show') {
            $this->status = null;
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;
        $this->emit('queryStringUpdatedStatus', $this->status);

        // If current route is idea show, redirect to index
        if ($this->getPreviousRouteName() === 'idea.show') {
            return redirect()->route('idea.index', [
                'status' => $this->status,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.status-filter');
    }

    // Function to get the previous route name,
    // fix the on status click getting the livewire component name instead of the full page name
    private function getPreviousRouteName()
    {
        return app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
    }
}
