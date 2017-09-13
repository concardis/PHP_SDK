<?php

namespace Concardis\Payengine\Lib\Test\Internal\Resource\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\OrderFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class PreauthTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource\Orders
 */
class PreauthTest extends TestCase
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

        return $mock;
    }

    /**
     * @test
     */
    public function postTest(){
        $result = $this->payengine->orders()->preauth()->post(array());
        $this->assertEquals(OrderFixture::getResponse(), $result);
    }

}
