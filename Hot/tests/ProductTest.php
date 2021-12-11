<?php

require(dirname(__FILE__).'/../Classes/ProductModel.php');

class ProductTest extends PHPUnit\Framework\TestCase {

    public function testAddCategory(){
        $product = new Product();
        $result = $product->add_category("airpods");
        $this->assertTrue($result);
    }

    public function testSelectCategory(){
        $product = new Product();
        $result = $product->select_category("airpods");
        $this->assertIsArray($result);
        $this->assertContains("airpods", $result);
    }

    public function testAddProduct(){
        $product = new Product();
        $cat_id = $product->select_category("airpods");
        $result = $product->add_product($cat_id['cat_id'], 'airpod pro', 4500, 'A wireless earpiece with noice cancellation', '', 'Airpods pro', 'NEW');
        $this->assertTrue($result);
    }

    // public function testUpdateProduct(){
    //     $product = new Product();
    // }

    public function testSelectFeatureProducts(){
        $product = new Product();
        $result = $product->select_feature_products();
        $this->assertIsArray($result);
    }

    public function testSelectAllProducts(){
        $product = new Product();
        $result = $product->select_all_products();
        $this->assertIsArray($result);
    }

    // public function testSelectOneProduct(){
    //     $product = new Product();
    // }


    

    // public function testUpdateCategory(){
    //     $product = new Product();
    // }

    

    // public function testGetCategoryProducts(){
    //     $product = new Product();
    // }

    public function testSearchProduct(){
        $product = new Product();
        $word = 'laptop';
        $result = $product->search_product($word);
        $this->assertIsArray($result);
        //$this->assertContains($word, $result);
    }

    // public function testDeleteProduct(){
    //     $product = new Product();
    // }

}






?>