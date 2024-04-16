<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Laravel\Prompts\error;

class LoginForm extends Component
{
    public $username, $password , $remember;

    function auth() {
        $this->validate();
        $remember = $this->remember == null ? false : true;
        if (Auth::attempt(['username'=> $this->username,'password'=> $this->password],$remember)) {
            request()->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        $this->addError('error', 'The provided credentials do not match our records.');
        // return info('err');
    }
    public function render()
    {
        return view('livewire.login-form');
    }
    
    function rules() {
        return [
            'username' => 'required',
            'password' => 'required',
            'remember' => 'nullable',
        ];
    }
}
