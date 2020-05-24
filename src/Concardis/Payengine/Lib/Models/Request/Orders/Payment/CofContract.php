<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Payment;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class CofContract extends AbstractModel
{
 /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    //protected $createdAt; ////already in AbstractResponseModel

    /**
     * @var integer
     */
    //private $modifiedAt; //already in AbstractResponseModel

    /**
     * @var string
     */
    private $type;

    
    /**
     * @var string
     */
    private $channel;
    
    /**
     * @var string
     */
    private $recurringExpiry;
    
    /**
     * @var int
     */
    private $recurringFrequency;
    
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return integer
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
     * @return integer
     */
    public function getChannel()
    {
        return $this->channel;
    }    
    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return integer
     */
    public function getRecurringExpiry()
    {
        return $this->recurringExpiry;
    }    
    /**
     * @param string $recurringExpiry
     */
    public function setRecurringExpiry($recurringExpiry)
    {
        $this->recurringExpiry = $recurringExpiry;
    }

    /**
     * @return integer
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }    
    /**
     * @param string $recurringFrequency
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;
    }    
}