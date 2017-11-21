<?php

namespace Concardis\Payengine\Lib\Test\Internal\Connection;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use Concardis\Payengine\Lib\Internal\Connection\Connection;
use Curl\Curl;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param bool $returnError
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getCurlMock($returnError = false){
        $mock = $this->createMock(Curl::class);

        if($returnError){
            $mock->method('isSuccess')->willReturn(false);
            $mock->curl_error_message = "testCase";
            $mock->http_status_code = 500;
            $mock->request_headers = array();
            $mock->response_headers = array();
            $mock->response = '{}';
        }else{
            $mock->method('isSuccess')->willReturn(true);
            $mock->response = '{ "key":"value" }';
        }
        return $mock;
    }

    /**
     * Branch test for construct
     *
     * @test
     */
    public function constructTest(){
        $this->assertInstanceOf(get_class(new Connection()), new Connection());
        $this->assertInstanceOf(get_class(new Connection()), new Connection(new Curl()));
    }

    /**
     * Branch test for isLiveMode check
     *
     * @test
     */
    public function getEndpointTest(){
        $config = new MerchantConfiguration();
        $config->setIsLiveMode(true);

        $this->connection = new Connection($this->getCurlMock());
        $this->connection->setMerchantConfig($config);

        $response = $this->connection->delete('test');
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     */
    public function postTest_positive(){
        $this->connection = new Connection($this->getCurlMock(false));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $response = $this->connection->post('test', array());
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     * @expectedException \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function postTest_negative(){
        $this->connection = new Connection($this->getCurlMock(true));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $this->connection->post('test', array());
    }

    /**
     * @test
     */
    public function patchTest_positive(){
        $this->connection = new Connection($this->getCurlMock(false));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $response = $this->connection->patch('test', array());
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     * @expectedException \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function patchTest_negative(){
        $this->connection = new Connection($this->getCurlMock(true));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $this->connection->patch('test', array());
    }

    /**
     * @test
     */
    public function deleteTest_positive(){
        $this->connection = new Connection($this->getCurlMock(false));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $response = $this->connection->delete('test');
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     * @expectedException \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function deleteTest_negative(){
        $this->connection = new Connection($this->getCurlMock(true));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $this->connection->delete('test');
    }

    /**
     * @test
     */
    public function getTest_positive(){
        $this->connection = new Connection($this->getCurlMock(false));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $response = $this->connection->get('test');
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     */
    public function getQueryStringTest_positive(){
        $this->connection = new Connection($this->getCurlMock(false));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $response = $this->connection->get('test', array('filter' => 1, 'orderBy' => 'test'));
        $this->assertArrayHasKey('key', $response);
    }

    /**
     * @test
     * @expectedException \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function getTest_negative(){
        $this->connection = new Connection($this->getCurlMock(true));
        $this->connection->setMerchantConfig(new MerchantConfiguration());
        $this->connection->get('test');
    }

}