<?php
namespace Concardis\Payengine\Lib\Internal\Exception;

class PayengineResourceException extends \Exception
{
    /**
     * Resource endpoint of the request
     *
     * @var string
     */
    protected $resourceEndpoint;

    /**
     * Payload of the request (request body)
     *
     * @var string
     */
    protected $payload;

    /**
     * Request headers
     *
     * @var array
     */
    protected $requestHeaders;

    /**
     * Body of the API response
     *
     * @var string
     */
    protected $responseBody;

    /**
     * Header of the API response
     *
     * @var array
     */
    protected $responseHeader;

    /**
     * Get resource endpoint of the request
     *
     * @return string
     */
    public function getResourceEndpoint() {
        return $this->resourceEndpoint;
    }

    /**
     * Set resource endpoint of the request
     *
     * @param string $resourceEndpoint
     * @return void
     */
    public function setResourceEndpoint($resourceEndpoint) {
        $this->resourceEndpoint = $resourceEndpoint;
    }

    /**
     * Get payload of the request (request body)
     *
     * @return string
     */
    public function getPayload() {
        return $this->payload;
    }

    /**
     * Set payload of the request (request body)
     *
     * @param string $payload
     * @return void
     */
    public function setPayload($payload) {
        $this->payload = $payload;
    }

    /**
     * Get request headers
     *
     * @return array
     */
    public function getRequestHeaders() {
        return $this->requestHeaders;
    }

    /**
     * Set request headers
     *
     * @param array $requestHeaders
     * @return void
     */
    public function setRequestHeaders($requestHeaders) {
        $this->requestHeaders = $requestHeaders;
    }

    /**
     * Get body of the API response
     *
     * @return string
     */
    public function getResponseBody() {
        return $this->responseBody;
    }

    /**
     * Set body of the API response
     *
     * @param string $responseBody
     * @return void
     */
    public function setResponseBody($responseBody) {
        $this->responseBody = $responseBody;
    }

    /**
     * Get header of the API response
     *
     * @return array
     */
    public function getResponseHeader() {
        return $this->responseHeader;
    }

    /**
     * Set header of the API response
     *
     * @param array $responseHeader
     * @return void
     */
    public function setResponseHeader($responseHeader) {
        $this->responseHeader = $responseHeader;
    }
}