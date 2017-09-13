<?php

namespace Concardis\Payengine\Lib\Test\Models\Response;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Models\Response\Customer;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;
use Concardis\Payengine\Lib\Test\Fixture\Model\CustomerFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class CustomerTest
 * @package Concardis\Payengine\Lib\Test\Models\Response
 */
class CustomerTest extends TestCase
{

    /**
     * @var Customer
     */
    private $testedClass;

    public function setUp()
    {
        $this->testedClass = CustomerFixture::getResponse();
        parent::setUp();
    }

    /**
     * @test
     */
    public function toArrayTest(){
        $modelToArray = $this->testedClass->__toArray();

        $this->assertTrue(is_array($modelToArray));
        $this->assertArrayHasKey('createdAt', $modelToArray);
        $this->assertArrayHasKey('modifiedAt', $modelToArray);
        $this->assertArrayHasKey('customerId', $modelToArray);
        $this->assertArrayHasKey('email', $modelToArray);
        $this->assertArrayHasKey('merchantCustomerId', $modelToArray);
        $this->assertArrayHasKey('paymentInstruments', $modelToArray);
        $this->assertArrayHasKey('addresses', $modelToArray);
        $this->assertArrayHasKey('personas', $modelToArray);

        $this->assertEquals($this->testedClass->getCreatedAt(), $modelToArray['createdAt']);
        $this->assertEquals($this->testedClass->getModifiedAt(), $modelToArray['modifiedAt']);
        $this->assertEquals($this->testedClass->getCustomerId(), $modelToArray['customerId']);
        $this->assertEquals($this->testedClass->getEmail(), $modelToArray['email']);
        $this->assertEquals($this->testedClass->getMerchantCustomerId(), $modelToArray['merchantCustomerId']);

        $this->assertTrue(is_array($modelToArray['paymentInstruments']));
        $this->assertTrue(is_array($modelToArray['paymentInstruments'][0]));
        $this->assertArrayHasKey('createdAt', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('modifiedAt', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('paymentInstrumentId', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('merchantPaymentInstrumentId', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('product', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('recurring', $modelToArray['paymentInstruments'][0]);
        $this->assertArrayHasKey('attributes', $modelToArray['paymentInstruments'][0]);

        /**
         * @var $paymentInstrument PaymentInstrument
         */
        $paymentInstrument = $this->testedClass->getPaymentInstruments()[0];
        $this->assertEquals($paymentInstrument->getCreatedAt(), $modelToArray['paymentInstruments'][0]['createdAt']);
        $this->assertEquals($paymentInstrument->getModifiedAt(), $modelToArray['paymentInstruments'][0]['modifiedAt']);
        $this->assertEquals($paymentInstrument->getPaymentInstrumentId(), $modelToArray['paymentInstruments'][0]['paymentInstrumentId']);
        $this->assertEquals($paymentInstrument->getMerchantPaymentInstrumentId(), $modelToArray['paymentInstruments'][0]['merchantPaymentInstrumentId']);
        $this->assertEquals($paymentInstrument->getProduct(), $modelToArray['paymentInstruments'][0]['product']);
        $this->assertEquals($paymentInstrument->isRecurring(), $modelToArray['paymentInstruments'][0]['recurring']);
        $this->assertEquals($paymentInstrument->getAttributes(), $modelToArray['paymentInstruments'][0]['attributes']);

        $this->assertTrue(is_array($modelToArray['addresses']));
        $this->assertTrue(is_array($modelToArray['addresses'][0]));
        $this->assertArrayHasKey('createdAt', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('modifiedAt', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('firstName', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('lastName', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('addressId', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('additionalDetails', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('city', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('country', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('fax', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('houseNumber', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('mobile', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('phone', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('state', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('street', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('title', $modelToArray['addresses'][0]);
        $this->assertArrayHasKey('zip', $modelToArray['addresses'][0]);

        /**
         * @var $address Address
         */
        $address = $this->testedClass->getAddresses()[0];
        $this->assertEquals($address->getCreatedAt(), $modelToArray['addresses'][0]['createdAt']);
        $this->assertEquals($address->getModifiedAt(), $modelToArray['addresses'][0]['modifiedAt']);
        $this->assertEquals($address->getFirstName(), $modelToArray['addresses'][0]['firstName']);
        $this->assertEquals($address->getLastName(), $modelToArray['addresses'][0]['lastName']);
        $this->assertEquals($address->getAddressId(), $modelToArray['addresses'][0]['addressId']);
        $this->assertEquals($address->getAdditionalDetails(), $modelToArray['addresses'][0]['additionalDetails']);
        $this->assertEquals($address->getCity(), $modelToArray['addresses'][0]['city']);
        $this->assertEquals($address->getCountry(), $modelToArray['addresses'][0]['country']);
        $this->assertEquals($address->getFax(), $modelToArray['addresses'][0]['fax']);
        $this->assertEquals($address->getHouseNumber(), $modelToArray['addresses'][0]['houseNumber']);
        $this->assertEquals($address->getMobile(), $modelToArray['addresses'][0]['mobile']);
        $this->assertEquals($address->getPhone(), $modelToArray['addresses'][0]['phone']);
        $this->assertEquals($address->getState(), $modelToArray['addresses'][0]['state']);
        $this->assertEquals($address->getStreet(), $modelToArray['addresses'][0]['street']);
        $this->assertEquals($address->getTitle(), $modelToArray['addresses'][0]['title']);
        $this->assertEquals($address->getZip(), $modelToArray['addresses'][0]['zip']);

        $this->assertTrue(is_array($modelToArray['personas']));
        $this->assertTrue(is_array($modelToArray['personas'][0]));
        $this->assertArrayHasKey('createdAt', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('modifiedAt', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('personaId', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('title', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('phone', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('mobile', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('lastName', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('firstName', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('fax', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('birthday', $modelToArray['personas'][0]);
        $this->assertArrayHasKey('gender', $modelToArray['personas'][0]);

        /**
         * @var $persona Persona
         */
        $persona = $this->testedClass->getPersonas()[0];
        $this->assertEquals($persona->getCreatedAt(), $modelToArray['personas'][0]['createdAt']);
        $this->assertEquals($persona->getModifiedAt(), $modelToArray['personas'][0]['modifiedAt']);
        $this->assertEquals($persona->getPersonaId(), $modelToArray['personas'][0]['personaId']);
        $this->assertEquals($persona->getTitle(), $modelToArray['personas'][0]['title']);
        $this->assertEquals($persona->getPhone(), $modelToArray['personas'][0]['phone']);
        $this->assertEquals($persona->getMobile(), $modelToArray['personas'][0]['mobile']);
        $this->assertEquals($persona->getLastName(), $modelToArray['personas'][0]['lastName']);
        $this->assertEquals($persona->getFirstName(), $modelToArray['personas'][0]['firstName']);
        $this->assertEquals($persona->getFax(), $modelToArray['personas'][0]['fax']);
        $this->assertEquals($persona->getBirthday(), $modelToArray['personas'][0]['birthday']);
        $this->assertEquals($persona->getGender(), $modelToArray['personas'][0]['gender']);
    }

    /**
     * @test
     */
    public function toJsonTest(){
        $modelToArray = $this->testedClass->__toArray();
        $modelToJson = $this->testedClass->__toJson();

        $this->assertEquals(json_encode($modelToArray), $modelToJson);
    }

    /**
     * @test
     */
    public function fromArrayTest(){
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();
        $modelArray = json_decode($jsonString, true);

        $actualModel = new Customer();
        $actualModel->__fromArray($modelArray);

        $this->assertEquals($expectedModel, $actualModel);
    }

    /**
     * @test
     */
    public function fromJsonTest(){
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();

        $actualModel = new Customer();
        $actualModel->__fromJson($jsonString);

        $this->assertEquals($expectedModel, $actualModel);
    }

}
