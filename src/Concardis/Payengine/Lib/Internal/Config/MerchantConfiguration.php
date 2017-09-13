<?php
namespace Concardis\Payengine\Lib\Internal\Config;

class MerchantConfiguration
{
    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var boolean
     */
    private $isLiveMode;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * @return string
     */
    public function getAuthorizationHeader(){
        return base64_encode($this->merchantId . ":" . $this->apiKey);
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     */
    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return bool
     */
    public function isIsLiveMode()
    {
        return $this->isLiveMode;
    }

    /**
     * @param bool $isLiveMode
     */
    public function setIsLiveMode($isLiveMode)
    {
        $this->isLiveMode = $isLiveMode;
    }

    /**
     * @return string
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     * @return void
     */
    public function setEndpoint($endpoint) {
        $this->endpoint = $endpoint;
    }

}