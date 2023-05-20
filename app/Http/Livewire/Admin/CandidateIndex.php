<?php

namespace App\Http\Livewire\Admin;

use App\Models\Candidate;
use Livewire\Component;
use Livewire\WithPagination;

class CandidateIndex extends Component
{

    use WithPagination;
    protected $listeners = ['delete'];
    protected $paginationTheme = "bootstrap";
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete(Candidate $candidato)
    {
        $candidato->delete();
    }

    public function render()
    {
        $candidates = Candidate::where('nombre', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.candidate-index', compact('candidates'));
    }
}
