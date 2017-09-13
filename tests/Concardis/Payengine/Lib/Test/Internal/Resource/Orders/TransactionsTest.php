<?php

namespace Concardis\Payengine\Lib\Test\Internal\Resource\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\TransactionFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class TransactionsTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource\Orders
 */
class TransactionsTest extends TestCase
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

        $mock->method('patch')
            ->will($this->returnValue(TransactionFixture::getResponseParent()->__toArray()));

        return $mock;
    }

    /**
     * @test
     */
    public function patchTest(){
        $result = $this->payengine->orders('test123')->transactions()->patch(array());
        $this->assertEquals(TransactionFixture::getResponseParent(), $result);
    }

    /**
     * @test
     */
    public function getOneTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/orders/test123/transactions/test123')
            ->will($this->returnValue(TransactionFixture::getResponseParent()->__toArray()
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->orders('test123')->transactions('test123')->get();

        $this->assertInstanceOf('\Concardis\Payengine\Lib\Models\Response\Orders\Transaction', $result);
        $this->assertEquals(TransactionFixture::getResponseParent(), $result);
    }

    /**
     * @test
     */
    public function getAllTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/orders/test123/transactions')
            ->will($this->returnValue(
                array(
                    'totalPages' => 2,
                    'elements' => array(
                        TransactionFixture::getResponseParent()->__toArray(),
                        TransactionFixture::getResponseParent()->__toArray()
                    )
                )
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->orders('test123')->transactions()->get();
        $this->assertTrue(is_a($result, ListWrapper::class));
        $this->assertEquals(2, $result->getTotalPages());
        $this->assertEquals(2, count($result->getElements()));

        $this->assertTrue(is_array($result->getElements()));
        foreach($result->getElements() as $element){
            $this->assertEquals(TransactionFixture::getResponseParent(), $element);
        }
    }

}
