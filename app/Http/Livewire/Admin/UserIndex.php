<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;


class UserIndex extends Component
{
    use WithPagination;
    protected $listeners = ['delete'];
    protected $paginationTheme = "bootstrap";
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete(User $usuario)
    {
        $usuario->delete();
    }


    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.user-index', compact('users'));
    }
}
