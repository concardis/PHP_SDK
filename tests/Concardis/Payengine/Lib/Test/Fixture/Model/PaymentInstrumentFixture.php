<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Internal\Constants\Products;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument as ResponseModel;
use Concardis\Payengine\Lib\Models\Request\PaymentInstrument as RequestModel;

class PaymentInstrumentFixture
{
    /**
     * @return ResponseModel
     */
    public static function getResponse(){
        $paymentInstrument = new ResponseModel();
        $paymentInstrument->setCreatedAt(123456789);
        $paymentInstrument->setModifiedAt(123456789);
        $paymentInstrument->setPaymentInstrumentId("test_123");
        $paymentInstrument->setProduct(Products::SEPA);
        $paymentInstrument->setMerchantPaymentInstrumentId("merchant_123");
        $paymentInstrument->setRecurring(true);
        $paymentInstrument->setAttributes(array(
            'iban' => 'DE72700700100700038301',
            'bic' => 'DEUTDEMMXXX',
            'accountHolder' => 'Test Tester',
            'bankName' => 'Deutsche Bank',
        ));
        return $paymentInstrument;
    }

    /**
     * @return RequestModel
     */
    public static function getRequest(){
        $paymentInstrument = new RequestModel();
        $paymentInstrument->setProduct(Products::SEPA);
        $paymentInstrument->setMerchantPaymentInstrumentId('merchant_123');
        $paymentInstrument->setAccountHolder('Test Tester');
        $paymentInstrument->setBankName('Deutsche Bank');
        $paymentInstrument->setBic('DEUTDEMMXXX');
        $paymentInstrument->setIban('DE72700700100700038301');
        return $paymentInstrument;
    }

}