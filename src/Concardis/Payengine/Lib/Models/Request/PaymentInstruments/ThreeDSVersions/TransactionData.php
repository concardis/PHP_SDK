<?php
namespace Concardis\Payengine\Lib\Models\Request\PaymentInstruments\ThreeDSVersions;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class TransactionData extends AbstractModel
{
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $recurringExpiry;
    

    /**
     * @var array
     */
    private $recurringFrequency;

     /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = (int)$amount;
    }
    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    /**
     * @return array
     */
    public function getRecurringExpiry()
    {
        return $this->recurringExpiry;
    }
    /**
     * @param array $recurringExpiry
     */
    public function setRecurringExpiry($recurringExpiry)
    {
        $this->recurringExpiry = $recurringExpiry;
    }
        /**
     * @return string
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }
    /**
     * @param array $recurringFrequency
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;
    }

    
    
}