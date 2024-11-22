<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserRegistration extends Component
{
    public $name, $email, $password, $password_confirmation;
    public $status = 'inactive';

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'status' => 'required|in:active,inactive', // Validate status field
    ];

    public function register()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'status' => $this->status, // Save the status
        ]);

        session()->flash('message', 'Registration successful!');

        // Reset form fields
        $this->reset(['name', 'email', 'password', 'password_confirmation', 'status']);
    }

    public function render()
    {
        return view('livewire.user-registration');
    }
}
