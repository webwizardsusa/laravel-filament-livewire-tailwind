<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{
    public $users;

    public function render()
    {
        $this->users = ModelsUser::where('status','active')->get();
        return view('livewire.user');
    }
}
