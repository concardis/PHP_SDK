<?php

namespace Concardis\Payengine\Lib\Models\Request\Customers;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class CustomerUpdate extends AbstractModel
{

    /**
     * Id for this customer on your System
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string $merchantCustomerId
     */
    public function setMerchantCustomerId($merchantCustomerId)
    {
        $this->merchantCustomerId = $merchantCustomerId;
    }

}