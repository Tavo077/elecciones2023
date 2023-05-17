<?php

namespace App\Http\Livewire\Admin;

use App\Models\Party;
use Livewire\Component;
use Livewire\WithPagination;

class PartiesIndex extends Component
{
    use WithPagination;
    protected $listeners = ['delete'];
    protected $paginationTheme = "bootstrap";
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete(Party $partido)
    {
        $partido->delete();
    }

    public function render()
    {
        $parties = Party::where('nombre_partido', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.parties-index', compact('parties'));
    }
}
