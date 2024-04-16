<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UserService;

class RegisterForm extends Component
{
    public $email, $password;
    // private $userService;
    private UserService $userService;
    // public function mount() {
    //     $this->userService = app()->make(UserService::class);
    // }
    // public function mount(UserService $userService) {
    //     $this->userService = $userService;
    // }

    // public function __construct(private UserService $userService) {
        // }
    function boot(UserService $userService)  {
        $this->userService = $userService;  
    }

    function store() {
        // dd($this->userService);
        $this->userService->create($this->validate());
        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.register-form');
    }

    function rules() {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ];
    }
}
