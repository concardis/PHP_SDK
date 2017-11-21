<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Customers;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Customers\PaymentInstrument;
use \PHPUnit\Framework\TestCase;

class PaymentInstrumentTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $paymentInstrument = new PaymentInstrument();
        $paymentInstrument->setPaymentInstrumentId('');

        $actual = $paymentInstrument->__toArray();

        $this->assertEquals(array(), $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $expected = array(
            'paymentInstrumentId' => '123'
        );

        $paymentInstrument = new PaymentInstrument();
        $paymentInstrument->setPaymentInstrumentId('123');

        $actual = $paymentInstrument->__toArray();

        $this->assertEquals($expected, $actual);
    }

}