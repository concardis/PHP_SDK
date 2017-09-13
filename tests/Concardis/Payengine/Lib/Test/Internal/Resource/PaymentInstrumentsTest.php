<?php
namespace Concardis\Payengine\Lib\Test\Internal\Resource;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\PaymentInstrumentFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentInstrumentsTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource
 */
class PaymentInstrumentsTest extends TestCase
{
    /**
     * @var PayEngine
     */
    private $payengine;

    public function setup(){
        $this->payengine = new PayEngine(new MerchantConfiguration());
        $this->payengine->setConnection($this->getConnectionMock());
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    protected function getConnectionMock(){
        $mock = $this->createMock(Connection::class);

        $mock->method('post')
            ->will($this->returnValue(PaymentInstrumentFixture::getResponse()->__toArray()));

        $mock->method('patch')
            ->will($this->returnValue(PaymentInstrumentFixture::getResponse()->__toArray()));

        $mock->method('delete')
            ->will($this->returnValue(null));

        return $mock;
    }

    /**
     * @test
     */
    public function postTest(){
        $result = $this->payengine->paymentinstruments()->post(array());
        $this->assertEquals(PaymentInstrumentFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function patchTest(){
        $result = $this->payengine->paymentinstruments()->patch(array());
        $this->assertEquals(PaymentInstrumentFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getOneTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/payment-instruments/test_123')
            ->will($this->returnValue(PaymentInstrumentFixture::getResponse()->__toArray()
        ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->paymentinstruments('test_123')->get();
        
        $this->assertInstanceOf('\Concardis\Payengine\Lib\Models\Response\PaymentInstrument', $result);
        $this->assertEquals(PaymentInstrumentFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getAllTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/payment-instruments')
            ->will($this->returnValue(
                array(
                    'totalPages' => 2,
                    'elements' => array(
                        PaymentInstrumentFixture::getResponse()->__toArray(),
                        PaymentInstrumentFixture::getResponse()->__toArray()
                    )
                )
            ));
        $this->payengine->setConnection($mock);

        $result = $this->payengine->paymentinstruments()->get();
        $this->assertTrue(is_a($result, ListWrapper::class));
        $this->assertEquals(2, $result->getTotalPages());
        $this->assertEquals(2, count($result->getElements()));

        $this->assertTrue(is_array($result->getElements()));
        foreach($result->getElements() as $element){
            $this->assertEquals(PaymentInstrumentFixture::getResponse(), $element);
        }
    }
}