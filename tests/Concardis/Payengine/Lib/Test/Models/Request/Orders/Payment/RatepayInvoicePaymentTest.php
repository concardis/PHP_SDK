<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \PHPUnit\Framework\TestCase;

class RatepayInvoicePaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $ratepayInvoicePayment = new Payment();
        $ratepayInvoicePayment->setRiskIdentId('riskidentid');

        $ratepayInvoicePaymentSetter = new Payment();
        $ratepayInvoicePaymentSetter->setRatepayInvoice('riskidentid');


        $actual = $ratepayInvoicePayment->__toArray();
        $actualSetter = $ratepayInvoicePaymentSetter->__toArray();
        $expected = array(
            'riskIdentId' => "riskidentid"
        );
        
        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}
