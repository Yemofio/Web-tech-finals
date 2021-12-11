
<?php
require(dirname(__FILE__).'/../Classes/PaymentModel.php');

class PaymentTest extends PHPUnit\Framework\TestCase{

    public function testAddOrder(){
        $payment = new Payment();
        $result = $payment->add_order(7, '38230183', '20-12-2022', 'PENDING');
        $this->assertTrue($result);
    }

    public function testGetOrder(){
        $payment = new Payment();
        $id = $payment->get_order(7, '38230183', '20-12-2022' );
        $this->assertIsString($id['order_id']);
    }

    public function testGetAllOrders(){
        $payment = new Payment();
        $result = $payment->get_all_orders();
        $this->assertIsArray($result);
    }

    public function testAddOrderDetails(){
        $payment = new Payment();
        $id = $payment->get_order(7, '38230183', '20-12-2022' );
        $result = $payment->add_order_details($id['order_id'], 2, 5);
        $this->assertTrue($result);
    }


}
?>