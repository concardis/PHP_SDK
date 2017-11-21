<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Customers;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Customers\CustomerUpdate;
use \PHPUnit\Framework\TestCase;

class CustomerUpdateTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $customerUpdate = new CustomerUpdate();
        $customerUpdate->setMerchantCustomerId('');

        $actual = $customerUpdate->__toArray();

        $this->assertEquals(array(), $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $expected = array(
            'merchantCustomerId' => '123'
        );

        $customerUpdate = new CustomerUpdate();
        $customerUpdate->setMerchantCustomerId('123');

        $actual = $customerUpdate->__toArray();

        $this->assertEquals($expected, $actual);
    }

}