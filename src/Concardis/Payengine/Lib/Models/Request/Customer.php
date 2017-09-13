<?php

namespace Concardis\Payengine\Lib\Models\Request;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Customer extends AbstractModel
{
    /**
     * Email of the customer
     * @var string
     */
    private $email;

    /**
     * Id for this customer on your System
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

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