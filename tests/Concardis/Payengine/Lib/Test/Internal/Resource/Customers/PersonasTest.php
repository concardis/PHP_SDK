<?php

namespace Concardis\Payengine\Lib\Test\Internal\Resource\Customers;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\PersonaFixture;
use PHPUnit\Framework\TestCase;

/**
 * Class PersonasTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource\Customers
 */
class PersonasTest extends TestCase
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
            ->will($this->returnValue(PersonaFixture::getResponse()->__toArray()));
        return $mock;
    }

    /**
     * @test
     */
    public function postTest(){
        $result = $this->payengine->customer('test123')->personas()->post(array());
        $this->assertEquals(PersonaFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getOneTest() {
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/customers/test123/personas/foobar123')
            ->will($this->returnValue(PersonaFixture::getResponse()->__toArray()
            ));
        $this->payengine->setConnection($mock);

        $result = $this->payengine->customer('test123')->personas('foobar123')->get();

        $this->assertInstanceOf('\Concardis\Payengine\Lib\Models\Response\Customers\Persona', $result);
        $this->assertEquals(PersonaFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getAllTest() {
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/customers/test123/personas')
            ->will($this->returnValue(
                array(
                    'totalPages' => 2,
                    'elements' => array(
                        PersonaFixture::getResponse()->__toArray(),
                        PersonaFixture::getResponse()->__toArray()
                    )
                )
            ));
        $this->payengine->setConnection($mock);

        $result = $this->payengine->customer('test123')->personas()->get();
        $this->assertTrue(is_a($result, ListWrapper::class));
        $this->assertEquals(2, $result->getTotalPages());
        $this->assertEquals(2, count($result->getElements()));

        $this->assertTrue(is_array($result->getElements()));
        foreach($result->getElements() as $element) {
            $this->assertEquals(PersonaFixture::getResponse(), $element);
        }
    }
}