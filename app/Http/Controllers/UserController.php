<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(private UserService $userService) {
    }

    function index() {
        return view('register');
    }
    function register(Request $request) {
        try {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'username' => 'required|unique:users',
                'address' => 'required',
                'phone_number' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
            ]);
    
            $this->userService->create($request);
            return redirect('/login');
        } catch (\Throwable $th) {
            throw $th;
        } 
    }
}
