<?php 

namespace App\Services;

use App\Models\Product;

interface ProductService {
    function all();
    function find($id): ?Product;
    function store($data) : Product;
    function update($id, $data) : Product;
    function delete($id);
}
