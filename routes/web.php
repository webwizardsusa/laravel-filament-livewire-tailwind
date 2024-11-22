<?php

use App\Livewire\User;
use App\Livewire\UserRegistration;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.userlist');
// });

Route::get('/user', User::class);
Route::get('/registration', UserRegistration::class);