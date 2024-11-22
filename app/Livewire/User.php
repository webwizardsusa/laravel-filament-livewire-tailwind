<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $search = '';

    public function render()
    {
        $users = ModelsUser::search($this->search)->get();
        return view('livewire.user', ['users' => $users]);
    }
}
