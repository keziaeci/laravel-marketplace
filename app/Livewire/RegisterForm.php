<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\UserService;
use WireUi\Traits\Actions;

class RegisterForm extends Component
{
    use Actions;
    public $first_name, $last_name, $username, $address , $phone_number ,$email, $password;
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
        $this->userService->create($this->validate());
        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Success Notification!',
            'description' => 'This is a description.',
        ]);
        return redirect('login')->with('success','Your account is created successfully, now use it for login!');
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
            'phone_number' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ];
    }
}
