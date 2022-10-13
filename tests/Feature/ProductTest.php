<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_product_get_by_price()
    {
        $response = $this->get('api/product_by_price/1098');

        $response->assertStatus(200);
    }
    public function test_product_create()
    {
        $response = $this->post('api/product', [
            'sales_point_id' => 2,
            'price' => 500,
            'quantity' => 10,
            'name' => "Орхидея",
            'description' => "Сорт карликовая, цвет: бордо"
        ]);
        // dd($response)
        $data = $response->json();
        
        $response->assertExactJson($data);
    }

    public function test_products()
    {
        $response = $this->get('api/products');

        $data = $response->json();
        $response->assertJson($data);
    }

    public function test_product_create_fragment()
    {
        $response = $this->post('api/product', [
            'sales_point_id' => 2,
            'price' => 500,
            'quantity' => 10,
            'name' => "Орхидея",
            'description' => "Сорт карликовая, цвет: бордо"
        ]);
        // dd($response)
        $data = $response->json();
        
        $response->assertJsonFragment(['price' => 500]);
    }

    public function test_product_delete_by_status()
    {
        $response = $this->delete('api/product/2');

        $response->assertStatus(200);
    }


    
}
