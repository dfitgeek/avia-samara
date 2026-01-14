<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class AdminRegister extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';

    #[Layout('components.layouts.admin')]

    public function mount()
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'You must be logged in to access the registration page.');
        }
    }

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        // Optional: Login the user immediately
        Auth::login($user);

        Session::flash('message', 'Registration successful!');

        // Redirect to dashboard or home
        return $this->redirect(route('dashboard'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin-register');
    }
}
