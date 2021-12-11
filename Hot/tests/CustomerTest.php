<?php


require(dirname(__FILE__).'/../Classes/customer_class.php');

class CustomerTest extends PHPUnit\Framework\TestCase {

    public function testAddCustomer(){
        
        //$customer = new App\Customer;
        $customer = new Customer();
        $result = $customer->addCustomer('Kwame', 'kwame@gmail.com', 'c14098ac9a3f0ff2e1a4bfe75e90f9eb', 'Ghana', 'Accra', '0246000307', '', 1);
        $this->assertTrue($result);
    }

    public function testEditCustomer(){
        //require(dirname(__FILE__).'/../Classes/customer_class.php');
        $customer = new Customer();
        $id = $customer->findCustomer('kwame@gmail.com');
        $result = $customer->editCustomer($id['customer_id'], 'Kofi', 'kwame@gmail.com', 'c14098ac9a3f0ff2e1a4bfe75e90f9eb', 'Ghana', 'Achimota', '0246000307', '', 1);
        $this->assertTrue($result);
    }

    public function testSelect_Customers(){
        $customer = new Customer();
        $result = $customer->select_customers();
        $this->assertIsArray($result);
    }


    public function testFindCustomer(){
        $customer = new Customer();
        $email = "kwame@gmail.com";
        $result = $customer->findCustomer($email);
        $this->assertIsArray($result);
        $this->assertContains($email, $result);
    }

    public function testFindEmail(){
        $customer = new Customer();
        $email = "kwame@gmail.com";
        $result = $customer->findEmail($email);
        $this->assertContains($email, $result);
    }

    public function testFindID(){
        $customer = new Customer();
        $email = "kwame@gmail.com";
        $id = $customer->findCustomer('kwame@gmail.com');
        $result = $customer->findID($email);
        $this->assertEquals($id['customer_id'], $result['customer_id']);
    }

    public function testFindRole(){
        $customer = new Customer();
        $role = 1;
        $email = "kwame@gmail.com";
        $result = $customer->find_role($email);
        $this->assertEquals($role, $result['user_role']);
    }

    public function testDeleteCustomer(){
        
        $customer = new Customer();
        $id = $customer->findCustomer('kwame@gmail.com');
        $result = $customer->deleteCustomer($id['customer_id']);
        $this->assertTrue($result);
    }

    

   



}