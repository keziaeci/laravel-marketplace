<?php 

namespace App\Services;

use App\Models\User;

interface UserService {
    function create($data) : User;
}
