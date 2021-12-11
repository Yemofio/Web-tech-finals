<?php
require(dirname(__FILE__).'/../classes/table_class.php');

class TableTest extends PHPUnit\Framework\TestCase{


    public function testAddtoCart(){
        $table = new Table();
        $result = $table->update_one_team_position(1,'Kasanoma',4,1,1,13);
        $this->assertTrue($result);
    }

    // public function testRemoveFromCart(){
    //     $cart = new Cart();
    //     $result = $cart->remove_cart(2, '::1', 7, 5);
    //     $this->assertTrue($result);
    // }


    // public function testViewCart(){
    //     $cart = new Cart();
    //     $result = $cart->view_cart('::1', 7);
    //     $this->assertIsArray($result);
    // }

    // public function testManageQty(){
    //     $cart = new Cart();
    //     $result = $cart->manage_qty(2, 7, '::1', 6);
    //     $this->assertTrue($result);
    // }

    // public function checkproduct(){
    //     $cart = new Cart();
    //     $result = $cart->checkproduct(2, '::1', 7);
    //     $this->assertIsArray($result);

    // }

    // public function testQtyInCart(){
    //     $cart = new Cart();
    //     $result = $cart->total_qty_in_cart(7);
    //     $this->assertIsArray($result);
    // }




    

}