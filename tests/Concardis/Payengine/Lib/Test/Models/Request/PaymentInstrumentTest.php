<?php

namespace Concardis\Payengine\Lib\Test\Models\Request;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Constants\Products;
use \Concardis\Payengine\Lib\Models\Request\PaymentInstrument;
use \PHPUnit\Framework\TestCase;

class PaymentInstrumentTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'product' => Products::PAYPAL
        );

        $paymentInstrument = new PaymentInstrument();

        $paymentInstrument->setProduct(Products::PAYPAL);
        $paymentInstrument->setAccountHolder('');

        $actual = $paymentInstrument->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray_creditCard() {
        $expected = array(
            'product' => Products::CREDITCARD,
            'cardHolder' => 'Max Mustermann',
            'cardNumber' => '4111111111111111',
            'verification' => '123',
            'expiryMonth' => '12',
            'expiryYear' => '18',
            'merchantPaymentInstrumentId' => 'merchantPaymentInstrumentId'
        );

        $paymentInstrument = new PaymentInstrument();
        $paymentInstrument->setProduct(Products::CREDITCARD);
        $paymentInstrument->setCardHolder('Max Mustermann');
        $paymentInstrument->setCardNumber('4111111111111111');
        $paymentInstrument->setVerification('123');
        $paymentInstrument->setExpiryMonth('12');
        $paymentInstrument->setExpiryYear('18');
        $paymentInstrument->setMerchantPaymentInstrumentId('merchantPaymentInstrumentId');

        $actual = $paymentInstrument->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray_Sepa() {
        $expected = array(
            'product' => Products::SEPA,
            'accountHolder' => 'Max Mustermann',
            'iban' => 'DE72700700100700038301',
            'bic' => 'DEUTDEMMXXX',
            'bankName' => 'Deutsche Bank',
        );

        $paymentInstrument = new PaymentInstrument();
        $paymentInstrument->setProduct(Products::SEPA);
        $paymentInstrument->setAccountHolder('Max Mustermann');
        $paymentInstrument->setIban('DE72700700100700038301');
        $paymentInstrument->setBic('DEUTDEMMXXX');
        $paymentInstrument->setBankName('Deutsche Bank');

        $actual = $paymentInstrument->__toArray();

        $this->assertEquals($expected, $actual);
    }

}