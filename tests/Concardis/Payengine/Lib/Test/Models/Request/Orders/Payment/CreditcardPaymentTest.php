<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders\Payment;

require_once __DIR__ . "/../../../../../../../../../autoload.php";

use \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use \PHPUnit\Framework\TestCase;

class CreditcardPaymentTest extends TestCase
{
    /**
     * @test
     */
    public function toArray() {
        $creditcardPayment = new Payment();
        $creditcardPayment->setCardNumber('cardnumber');
        $creditcardPayment->setCardHolder('cardholder');
        $creditcardPayment->setVerification('verification');
        $creditcardPayment->setExpiryYear('expiryyear');
        $creditcardPayment->setExpiryMonth('expirymonth');

        $creditcardPaymentSetter = new Payment();
        $creditcardPaymentSetter->setCreditcard(
            'cardholder', 'cardnumber', 'verification', 'expirymonth', 'expiryyear'
        );

        $actual = $creditcardPayment->__toArray();
        $actualSetter = $creditcardPaymentSetter->__toArray();

        $expected = array(
            'cardNumber' => "cardnumber",
            'cardHolder' => "cardholder",
            'verification' => "verification",
            'expiryYear' => "expiryyear",
            'expiryMonth' => "expirymonth"
        );
        
        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

    /**
     * @test
     */
    public function toArrayWithPaymentInstrument() {
        $creditcardPayment = new Payment();
        $creditcardPayment->setPaymentInstrumentId('paymentinstrumentid');

        $creditcardPaymentSetter = new Payment();
        $creditcardPaymentSetter->setCreditcardWithPaymentInstrument('paymentinstrumentid');

        $actual = $creditcardPayment->__toArray();
        $actualSetter = $creditcardPaymentSetter->__toArray();

        $expected = array(
            'paymentInstrumentId' => "paymentinstrumentid"
        );

        $this->assertEquals($expected, $actual);
        $this->assertEquals($expected, $actualSetter);
    }

}
