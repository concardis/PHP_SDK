<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Models\Response\Customer as ResponseModel;
use Concardis\Payengine\Lib\Models\Request\Customer as RequestModel;

class CustomerFixture
{

    public static function getResponse(){
        $customer = new ResponseModel();
        $customer->setCreatedAt(123456789);
        $customer->setModifiedAt(123456789);
        $customer->setCustomerId("test_123");
        $customer->setEmail("test@tester.com");
        $customer->setMerchantCustomerId("merchant_test_123");
        $customer->setPersonas(array(
            PersonaFixture::getResponse()
        ));
        $customer->setAddresses(array(
            AddressFixture::getResponse()
        ));
        $customer->setPaymentInstruments(array(
            PaymentInstrumentFixture::getResponse()
        ));
        return $customer;
    }

    public static function getRequest($uniqueId){
        $customer = new RequestModel();
        $customer->setEmail($uniqueId . "@testemail.io");
        $customer->setMerchantCustomerId("customer_" . $uniqueId);
        return $customer;
    }

}