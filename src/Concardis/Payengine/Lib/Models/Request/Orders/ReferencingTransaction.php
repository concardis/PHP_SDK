<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class ReferencingTransaction extends AbstractModel
{

    /**
     * @var integer
     */
    private $initialAmount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $basket;

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

}