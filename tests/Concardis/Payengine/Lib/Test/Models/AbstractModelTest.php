<?php
namespace Concardis\Payengine\Lib\Test\Models;

require_once __DIR__ . "/../../../../../../autoload.php";

use Concardis\Payengine\Lib\Test\Fixture\Model\PaymentInstrumentFixture;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;
use Concardis\Payengine\Lib\Test\Fixture\Model\AuthorizingTransactionFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractModelTest
 *
 * @package Concardis\Payengine\Lib\Test\Models
 */
class AbstractModelTest extends TestCase
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
    public function toArrayTest() {
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
    public function authorizingTransactionToArray() {
        $request = AuthorizingTransactionFixture::getRequest();
        $actual = $request->__toArray();
        $expected = array(
            'async' => array(
                'successUrl' => 'http://success.url',
                'failureUrl' => 'http://failure.url',
                'cancelUrl' => 'http://cancel.url'
            ),
            'initialAmount' => 100,
            'currency' => 'EUR',
            'channel' => 'ECOM',
            'product' => 'paypal'
        );

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function emptyObjectTest() {
        $request = AuthorizingTransactionFixture::getRequest();
        $request->setAsync(null);
        $actual = $request->__toArray();
        $expected = array(
            'initialAmount' => 100,
            'currency' => 'EUR',
            'channel' => 'ECOM',
            'product' => 'paypal'
        );

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toJsonTest() {
        $modelToArray = $this->testedClass->__toArray();
        $modelToJson = $this->testedClass->__toJson();

        $this->assertEquals(json_encode($modelToArray), $modelToJson);
    }

    /**
     * @test
     */
    public function fromArrayTest() {
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
    public function fromJsonTest() {
        $expectedModel = $this->testedClass;

        $jsonString = $this->testedClass->__toJson();

        $actualModel = new PaymentInstrument();
        $actualModel->__fromJson($jsonString);

        $this->assertEquals($expectedModel, $actualModel);
    }
}