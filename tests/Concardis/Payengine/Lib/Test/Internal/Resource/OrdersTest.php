<?php

namespace Concardis\Payengine\Lib\Test\Internal\Resource;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Debit;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Preauth;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\OrderFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class OrdersTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource
 */
class OrdersTest extends TestCase
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
            ->will($this->returnValue(OrderFixture::getResponse()->__toArray()));

        $mock->method('patch')
            ->will($this->returnValue(OrderFixture::getResponse()->__toArray()));

        $mock->method('delete')
            ->will($this->returnValue(null));

        return $mock;
    }

    /**
     * @test
     */
    public function postTest(){
        $result = $this->payengine->orders()->post(array());
        $this->assertEquals(OrderFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function patchTest(){
        $result = $this->payengine->orders()->patch(array());
        $this->assertEquals(OrderFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getOneTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/orders/test_123')
            ->will($this->returnValue(OrderFixture::getResponse()->__toArray()
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->orders('test_123')->get();
        
        $this->assertInstanceOf('\Concardis\Payengine\Lib\Models\Response\Order', $result);
        $this->assertEquals(OrderFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getAllTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/orders')
            ->will($this->returnValue(
                array(
                    'totalPages' => 2,
                    'elements' => array(
                        OrderFixture::getResponse()->__toArray(),
                        OrderFixture::getResponse()->__toArray()
                    )
                )
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->orders()->get();
        $this->assertTrue(is_a($result, ListWrapper::class));
        $this->assertEquals(2, $result->getTotalPages());
        $this->assertEquals(2, count($result->getElements()));

        $this->assertTrue(is_array($result->getElements()));
        foreach($result->getElements() as $element){
            $this->assertEquals(OrderFixture::getResponse(), $element);
        }
    }

    /**
     * @test
     */
    public function getSubResourcePreauth_should_succeed(){
        $this->assertTrue(is_a($this->payengine->orders("test")->preauth(), Preauth::class));
    }
    /**
     * @test
     */
    public function getSubResourceDebit_should_succeed(){
        $this->assertTrue(is_a($this->payengine->orders("test")->debit(), Debit::class));
    }

    /**
     * @test
     */
    public function getSubResourceTransactions_should_succeed()
    {
        $this->assertTrue(is_a($this->payengine->orders("test")->transactions(),Transactions::class));
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function getSubResourceTransactions_should_fail()
    {
        $this->payengine->orders()->transactions();
    }



}
