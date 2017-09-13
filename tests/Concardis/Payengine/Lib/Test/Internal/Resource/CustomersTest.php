<?php

namespace Concardis\Payengine\Lib\Test\Internal\Resource;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Addresses;
use Concardis\Payengine\Lib\Internal\Resource\Customers\CustomerPaymentInstruments;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Personas;
use Concardis\Payengine\Lib\Models\Response\ListWrapper;
use Concardis\Payengine\Lib\PayEngine;
use Concardis\Payengine\Lib\Test\Fixture\Model\CustomerFixture;
use Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException;
use PHPUnit\Framework\TestCase;

/**
 * Class CustomersTest
 * @package Concardis\Payengine\Lib\Test\Internal\Resource
 */
class CustomersTest extends TestCase
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
            ->will($this->returnValue(CustomerFixture::getResponse()->__toArray()));

        $mock->method('patch')
            ->will($this->returnValue(CustomerFixture::getResponse()->__toArray()));

        $mock->method('delete')
            ->will($this->returnValue(null));

        return $mock;
    }

    /**
     * @test
     */
    public function postTest(){
        $result = $this->payengine->customer()->post(array());
        $this->assertEquals(CustomerFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function postCustomerResourceException() {
        $mock = $this->createMock(\Curl\Curl::class);
        $mock->method('post')->will($this->returnValue(null));
        $connection = new Connection($mock);
        $connection->setMerchantConfig(new MerchantConfiguration());
        $this->payengine->setConnection($connection);
        $customer = CustomerFixture::getRequest('postcustomerresourceexceptiontest');

        try {
            $result = $this->payengine->customer()->post($customer->__toArray());
            $this->fail();
        } catch (PayengineResourceException $e) {
            $this->assertEquals('https://apitest.payengine.de/v1/customers', $e->getResourceEndpoint());
            $this->assertEquals(
                '{"email":"postcustomerresourceexceptiontest@testemail.io","merchantCustomerId":"customer_postcustomerresourceexceptiontest"}', 
                $e->getPayload()
            );
        }
    }

    /**
     * @test
     */
    public function patchTest(){
        $result = $this->payengine->customer()->patch(array());
        $this->assertEquals(CustomerFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function patchCustomerResourceException() {
        $mock = $this->createMock(\Curl\Curl::class);
        $mock->method('patch')->will($this->returnValue(null));
        $connection = new Connection($mock);
        $connection->setMerchantConfig(new MerchantConfiguration());
        $this->payengine->setConnection($connection);
        $customer = CustomerFixture::getRequest('patchcustomerresourceexceptiontest');

        try {
            $result = $this->payengine->customer('oneid')->patch($customer->__toArray());
            $this->fail();
        } catch (PayengineResourceException $e) {
            $this->assertEquals('https://apitest.payengine.de/v1/customers/oneid', $e->getResourceEndpoint());
            $this->assertEquals(
                '{"email":"patchcustomerresourceexceptiontest@testemail.io","merchantCustomerId":"customer_patchcustomerresourceexceptiontest"}', 
                $e->getPayload()
            );
        }
    }

    /**
     * @test
     */
    public function getOneTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/customers/test_123')
            ->will($this->returnValue(CustomerFixture::getResponse()->__toArray()
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->customer('test_123')->get();

        $this->assertInstanceOf('\Concardis\Payengine\Lib\Models\Response\Customer', $result);
        $this->assertEquals(CustomerFixture::getResponse(), $result);
    }

    /**
     * @test
     */
    public function getAllTest(){
        $mock = $this->createMock(Connection::class);
        $mock->method('get')
            ->with('/customers')
            ->will($this->returnValue(
                array(
                    'totalPages' => 2,
                    'elements' => array(
                        CustomerFixture::getResponse()->__toArray(),
                        CustomerFixture::getResponse()->__toArray()
                    )
                )
            ));
        $this->payengine->setConnection($mock);


        $result = $this->payengine->customer()->get();
        $this->assertTrue(is_a($result, ListWrapper::class));
        $this->assertEquals(2, $result->getTotalPages());
        $this->assertEquals(2, count($result->getElements()));

        $this->assertTrue(is_array($result->getElements()));
        foreach($result->getElements() as $element){
            $this->assertEquals(CustomerFixture::getResponse(), $element);
        }
    }

    /**
     * @test
     */
    public function getCustomerResourceException() {
        $mock = $this->createMock(\Curl\Curl::class);
        $mock->method('get')->will($this->returnValue(null));
        $connection = new Connection($mock);
        $connection->setMerchantConfig(new MerchantConfiguration());
        $this->payengine->setConnection($connection);

        try {
            $result = $this->payengine->customer()->get();
            $this->fail();
        } catch (PayengineResourceException $e) {
            $this->assertEquals('https://apitest.payengine.de/v1/customers', $e->getResourceEndpoint());
        }
    }

    /**
     * @test
     */
    public function getSubResourceAddresses_should_succeed(){
        $this->assertTrue(is_a($this->payengine->customer("test")->addresses(), Addresses::class));
    }
    /**
     * @test
     */
    public function getSubResourcePersonas_should_succeed(){
        $this->assertTrue(is_a($this->payengine->customer("test")->personas(), Personas::class));
    }

    /**
     * @test
     */
    public function getSubResourcePaymentInstruments_should_succeed(){
        $this->assertTrue(is_a($this->payengine->customer("test")->paymentInstruments(), CustomerPaymentInstruments::class));
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function getSubResourceAddresses_should_fail(){
        $this->payengine->customer()->addresses();
    }
    /**
     * @test
     * @expectedException \Exception
     */
    public function getSubResourcePersonas_should_fail(){
        $this->payengine->customer()->personas();
    }

    /**
     * @test
     * @expectedException \Exception
     */
    public function getSubResourcePaymentInstruments_should_fail(){
        $this->payengine->customer()->paymentInstruments();
    }
}
