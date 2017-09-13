<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \PHPUnit\Framework\TestCase;

class RatepayDirectdebitPaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $ratepayDirectdebitPayment = new Payment();
        $ratepayDirectdebitPayment->setRiskIdentId('riskidentid');
        $ratepayDirectdebitPayment->setAccountHolder('accountholder');
        $ratepayDirectdebitPayment->setBankName('bankname');
        $ratepayDirectdebitPayment->setBic('bic');
        $ratepayDirectdebitPayment->setIban('iban');

        $ratepayDirectdebitPaymentSetter = new Payment();
        $ratepayDirectdebitPaymentSetter->setRatepayDirectDebit(
            'riskidentid' , 'iban', 'bic', 'accountholder', 'bankname'
        );

        $actual = $ratepayDirectdebitPayment->__toArray();
        $actualSetter = $ratepayDirectdebitPaymentSetter->__toArray();

        $expected = array(
            'riskIdentId' => "riskidentid",
            'accountHolder' => "accountholder",
            'bankName' => "bankname",
            'bic' => "bic",
            'iban' => "iban"
        );
        
        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithPaymentInstrument() {
        $ratepayDirectdebitPayment = new Payment();
        $ratepayDirectdebitPayment->setRiskIdentId('riskidentid');
        $ratepayDirectdebitPayment->setPaymentInstrumentId('paymentinstrumentid');

        $ratepayDirectdebitPaymentSetter = new Payment();
        $ratepayDirectdebitPaymentSetter->setRatepayDirectDebitWithPaymentInstrument(
            'riskidentid' , 'paymentinstrumentid'
        );

        $actual = $ratepayDirectdebitPayment->__toArray();
        $actualSetter = $ratepayDirectdebitPaymentSetter->__toArray();

        $expected = array(
            'riskIdentId' => "riskidentid",
            'paymentInstrumentId' => "paymentinstrumentid"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}