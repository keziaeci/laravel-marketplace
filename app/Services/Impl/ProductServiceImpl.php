<?php 

namespace App\Services\Impl;

use App\Models\Product;
use App\Services\ProductService;

class ProductServiceImpl implements ProductService {
    function all() {
        $data = Product::latest()->get();
        return $data;
    }

    function find($id): ?Product {
        $data = Product::find($id);
        return $data;
    }
    function store($data) : Product {
        $result = Product::create($data);
        return $result;
    }

    function update($id, $data): Product {
        $result = tap(Product::find($id))->update($data);
        return $result;
    }

    function delete($id) {
        return Product::find($id)->delete();
    }
}