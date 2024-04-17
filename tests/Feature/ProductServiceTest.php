<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertNotSame;
use function PHPUnit\Framework\assertNull;
use function PHPUnit\Framework\assertSame;
use function PHPUnit\Framework\assertTrue;

class ProductServiceTest extends TestCase
{
    private ProductService $productService;

    function setUp(): void {
        parent::setUp();
        $this->productService = $this->app->make(ProductService::class);
    }

    function testProductNotNull() {
        assertNotNull($this->productService);
    }

    function testGetAll() {
        assertEquals(Product::latest()->get(), $this->productService->all());
    }

    function testFindProduct() {
        assertEquals(Product::find(1),$this->productService->find(1));
        // assertNull($this->productService->find(100));
    }

    function testStoreProduct() {
        $data = [
            'name' => 'eko',
            'description' => 'eko',
            'colors' => ['eko','eko','eko'],
            'price' => 1000,
            'stock' => 1,
            'category_id' => 1
        ];
        $this->productService->store($data);
        $a = Product::latest()->first();
        assertEquals("eko",$a->name);
    }

    function testUpdateProduct() {
        $id = 1;
        $data = ['name' => 'eko'];
        $this->productService->update($id,$data);
        $a = Product::find("1");
        assertEquals("eko",$a->name);
    }
    
    function testDeleteProduct() {
        assertTrue($this->productService->delete(1));
    }
}
