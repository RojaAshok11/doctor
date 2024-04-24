<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;
use App\Models\Admin\Auth\User;
use Illuminate\Support\Facades\Hash;

class RegisterLivewire extends Component
{
    public $name;
    public $email;
    public $phone;
    public $password;
    public $role_id = 1;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required|numeric|unique:users',

        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();


        // Create a new user
       $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'role_id' => $this->role_id,
            'password' =>$this->password,
        ]);

        session()->flash('message', 'Registration successful!');
        return redirect()->route('adminshowlogin');
    }

    public function render()
    {
        return view('livewire.admin.auth.register-livewire');
    }
}
