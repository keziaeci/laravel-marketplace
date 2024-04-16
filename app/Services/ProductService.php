<?php 

namespace App\Services;

use App\Models\Product;

interface ProductService {
    function all();
    function create($data) : Product;
}
