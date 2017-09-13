<?php

namespace Concardis\Payengine\Lib\Test\Models\Response;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Test\Fixture\Model\PaymentInstrumentFixture;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentInstrumentTest
 * @package Concardis\Payengine\Lib\Test\Models\Response
 */
class PaymentInstrumentTest extends TestCase
{

    /**
     * @var PaymentInstrument
     */
    private $testedClass;

    public function setUp()
    {
        $this->testedClass = PaymentInstrumentFixture::getResponse();
        parent::setUp();
    }

    /**
     * @test
     */
    public function toArrayTest(){
        $modelToArray = $this->testedClass->__toArray();

        $this->assertArrayHasKey('paymentInstrumentId', $modelToArray);
        $this->assertArrayHasKey('merchantPaymentInstrumentId', $modelToArray);
        $this->assertArrayHasKey('product', $modelToArray);
        $this->assertArrayHasKey('recurring', $modelToArray);
        $this->assertArrayHasKey('attributes', $modelToArray);

        $this->assertEquals($this->testedClass->getCreatedAt(), $modelToArray['createdAt']);
        $this->assertEquals($this->testedClass->getModifiedAt(), $modelToArray['modifiedAt']);
        $this->assertEquals($this->testedClass->getPaymentInstrumentId(), $modelToArray['paymentInstrumentId']);
        $this->assertEquals($this->testedClass->getMerchantPaymentInstrumentId(), $modelToArray['merchantPaymentInstrumentId']);
        $this->assertEquals($this->testedClass->getProduct(), $modelToArray['product']);
        $this->assertEquals($this->testedClass->getAttributes(), $modelToArray['attributes']);
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

        $actualModel = new PaymentInstrument();
        $actualModel->__fromArray($modelArray);

        $this->assertEquals($expectedModel, $actualModel);
    }

    /**
     * @test
     */
    public function fromJsonTest(){
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();

        $actualModel = new PaymentInstrument();
        $actualModel->__fromJson($jsonString);

        $this->assertEquals($expectedModel, $actualModel);
    }

}
