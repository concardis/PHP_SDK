<?php
namespace Concardis\Payengine\Lib\Internal\Connection;

use \Curl\Curl;

use \Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use \Concardis\Payengine\Lib\Internal\Constants\Api;
use \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException;

class Connection implements ConnectionInterface
{

    /**
     * @var MerchantConfiguration
     */
    private $merchantConfig;

    /**
     * @var Curl
     */
    private $curl;

    /**
     * @param Curl $curl
     */
    function __construct(Curl $curl = null)
    {
        $this->curl = $curl;
        if (is_null($curl)){
            $this->curl = new Curl();
        }
    }

    /**
     * Set default Header to curl wrapper
     */
    private function setDefaultHeader(){
        $this->curl->setHeader('Authorization', 'Basic ' . $this->getMerchantConfig()->getAuthorizationHeader());
        $this->curl->setHeader('Content-Type', 'application/json');
    }


    /**
     * @return MerchantConfiguration
     */
    public function getMerchantConfig()
    {
        return $this->merchantConfig;
    }

    /**
     * @param MerchantConfiguration $merchantConfig
     */
    public function setMerchantConfig($merchantConfig)
    {
        $this->merchantConfig = $merchantConfig;
    }

    /**
     * @return string
     */
    protected function getEndpoint(){
        $mode = Api::API_ENDPOINT_TEST;
        if($this->merchantConfig->isIsLiveMode()){
            $mode = Api::API_ENDPOINT_PROD;
        }
        
        if (!is_null($this->merchantConfig->getEndpoint())) {
            $mode = $this->merchantConfig->getEndpoint();
        }
        return $mode;
    }

    /**
     * @param       $path
     * @param array $payload
     *
     * @return mixed
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function post($path, array $payload )
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;
        $payload = json_encode($payload);
        $this->curl->post($resourceEndpoint, $payload);

        if(!$this->curl->isSuccess()) {
            $requestException = new PayengineResourceException(
                $this->curl->error_message, $this->curl->http_status_code
            );
            $requestException->setResourceEndpoint($resourceEndpoint);
            $requestException->setPayload($payload);
            $requestException->setRequestHeaders($this->curl->request_headers);
            $requestException->setResponseHeader($this->curl->response_headers);
            $requestException->setResponseBody($this->curl->response);
            throw $requestException;
        }

        return json_decode($this->curl->response, true);
    }

    /**
     * @param       $path
     * @param array $payload
     *
     * @return mixed
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function patch($path, array $payload)
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;
        $payload = json_encode($payload);
        $this->curl->patch($resourceEndpoint, $payload, true);
        if(!$this->curl->isSuccess()){
            $requestException = new PayengineResourceException(
                $this->curl->error_message, $this->curl->http_status_code
            );
            $requestException->setResourceEndpoint($resourceEndpoint);
            $requestException->setPayload($payload);
            $requestException->setResponseHeader($this->curl->response_headers);
            $requestException->setResponseBody($this->curl->response);
            throw $requestException;
        }
        return json_decode($this->curl->response, true);
    }

    /**
     * @param       $path
     *
     * @return mixed
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function delete($path)
    {
        $this->setDefaultHeader();
        $resourceEndpoint = $this->getEndpoint() . $path;
        $this->curl->delete($resourceEndpoint);
        if(!$this->curl->isSuccess()){
            $requestException = new PayengineResourceException(
                $this->curl->error_message, $this->curl->http_status_code
            );
            $requestException->setResourceEndpoint($resourceEndpoint);
            $requestException->setResponseHeader($this->curl->response_headers);
            $requestException->setResponseBody($this->curl->response);
            throw $requestException;
        }
        return json_decode($this->curl->response, true);
    }

    /**
     * @param       $path
     * @param array $queryParams
     *
     * @return mixed
     * @throws \Concardis\Payengine\Lib\Internal\Exception\PayengineResourceException
     */
    public function get($path, $queryParams = array())
    {
        $url = $this->getEndpoint() . $path;
        if(count($queryParams) > 0){
            $url .= '?'.http_build_query($queryParams);
        }

        $url = preg_replace('/(%5B[0-9]%5D)/', '', $url);

        $this->setDefaultHeader();
        $this->curl->get($url, array());
        if(!$this->curl->isSuccess()){
            $requestException = new PayengineResourceException(
                $this->curl->error_message, $this->curl->http_status_code
            );
            $requestException->setResourceEndpoint($url);
            $requestException->setResponseHeader($this->curl->response_headers);
            $requestException->setResponseBody($this->curl->response);
            throw $requestException;
        }
        return json_decode($this->curl->response, true);
    }


}