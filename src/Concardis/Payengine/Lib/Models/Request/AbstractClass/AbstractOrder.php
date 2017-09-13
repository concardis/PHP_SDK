<?php

namespace Concardis\Payengine\Lib\Models\Request\AbstractClass;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class AbstractOrder extends AbstractModel
{

    /**
     * @var \DateTime
     */
    protected $terms;

    /**
     * @var \DateTime
     */
    protected $privacy;

    /**
     * @var string
     */
    protected $merchantOrderId;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $statementDescription;

    /**
     * @var integer
     */
    protected $initialAmount;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var array
     */
    protected $basket;

    /**
     * @var string
     */
    protected $customer;

    /**
     * @var string
     */
    protected $persona;

    /**
     * @var string
     */
    protected $billingAddress;

    /**
     * @var string
     */
    protected $shippingAddress;

    /**
     * @var string
     */
    protected $ipAddress;

    /**
     * @var string
     */
    protected $channel;

    /**
     * @var string
     */
    protected $source;

    /**
     * @return \DateTime
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param \DateTime $terms
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }

    /**
     * @return \DateTime
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param \DateTime $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }

    /**
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->merchantOrderId;
    }

    /**
     * @param string $merchantOrderId
     */
    public function setMerchantOrderId($merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getStatementDescription()
    {
        return $this->statementDescription;
    }

    /**
     * @param string $statementDescription
     */
    public function setStatementDescription($statementDescription)
    {
        $this->statementDescription = $statementDescription;
    }

    /**
     * @return int
     */
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }

    /**
     * @param int $initialAmount
     */
    public function setInitialAmount($initialAmount)
    {
        $this->initialAmount = $initialAmount;
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
    public function getBasket()
    {
        return $this->basket;
    }

    /**
     * @param array $basket
     */
    public function setBasket($basket)
    {
        $this->basket = $basket;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return string
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param string $persona
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;
    }

    /**
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param string $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param string $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
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
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

}