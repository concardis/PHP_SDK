<?php
namespace Concardis\Payengine\Lib\Models\Request\PaymentInstruments\ThreeDSVersions;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
class Authentication extends AbstractModel
{
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $customerId;

    /**
     * @var string
     */
    private $browserInfoId;

    /**
     * @var array
     */
    private $transactionData;
    

    /**
     * @var array
     */
    private $async;

     /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /**
     * @param string $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    /**
     * @return array
     */
    public function getAsync()
    {
        return $this->async;
    }
    /**
     * @param array $async
     */
    public function setAsync($async)
    {
        $this->async = $async;
    }
        /**
     * @return string
     */
    public function getBrowserInfoId()
    {
        return $this->browserInfoId;
    }
    /**
     * @param array $browserInfoId
     */
    public function setBrowserInfoId($browserInfoId)
    {
        $this->browserInfoId = $browserInfoId;
    }

    /**
     * @return string
     */
    public function getTransactionData()
    {
        return $this->transactionData;
    }
    /**
     * @param array $transactionData
     */
    public function setTransactionData($transactionData)
    {
        $this->transactionData = $transactionData;
    }

    
    
}