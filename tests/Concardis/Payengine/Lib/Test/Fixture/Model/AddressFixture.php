<?php


namespace Concardis\Payengine\Lib\Test\Fixture\Model;


use Concardis\Payengine\Lib\Models\Response\Customers\Address as ResponseModel;
use Concardis\Payengine\Lib\Models\Request\Customers\Address as RequestModel;

class AddressFixture
{

    /**
     * @return ResponseModel
     */
    public static function getResponse(){
        $address = new ResponseModel();
        $address->setCreatedAt(123456789);
        $address->setModifiedAt(123456789);
        $address->setAdditionalDetails("SomeInfo");
        $address->setAddressId("address_123");
        $address->setCity("Koeln");
        $address->setCountry("DE");
        $address->setFax("0221/123456789");
        $address->setFirstName("Test");
        $address->setHouseNumber("35");
        $address->setLastName("Tester");
        $address->setMobile("0221/123456789");
        $address->setPhone("0221/123456789");
        $address->setState("NRW");
        $address->setStreet("Richard-Bryd-Strasse");
        $address->setTitle("Dr.");
        $address->setZip("50829");
        return $address;
    }

    /**
     * @return RequestModel
     */
    public static function getRequest(){
        $address = new RequestModel();
        $address->setAdditionalDetails("SomeInfo");
        $address->setCity("Koeln");
        $address->setCountry("DE");
        $address->setFax("0221/123456789");
        $address->setFirstName("Test");
        $address->setHouseNumber("35");
        $address->setLastName("Tester");
        $address->setMobile("0221/123456789");
        $address->setPhone("0221/123456789");
        $address->setState("NRW");
        $address->setStreet("Richard-Bryd-Strasse");
        $address->setTitle("Dr.");
        $address->setZip("50829");
        return $address;
    }

}