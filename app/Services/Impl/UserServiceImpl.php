<?php 

namespace App\Services\Impl;

use App\Models\User;
use App\Services\UserService;

class UserServiceImpl implements UserService {
    function create($data): User {
        $user = User::create($data);
        return $user;
    }
}