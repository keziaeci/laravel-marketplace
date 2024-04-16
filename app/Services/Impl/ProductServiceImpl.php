<?php 

namespace App\Services\Impl;

use App\Models\Product;
use App\Services\ProductService;

class ProductServiceImpl implements ProductService {
    function all() {
        $data = Product::latest()->get();
        return $data;
    }

    function create($data) : Product {
        dd($data);
    }
}