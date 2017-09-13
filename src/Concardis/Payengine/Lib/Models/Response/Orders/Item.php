<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class Item extends AbstractModel
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $articleNumber;

    /**
     * @var integer
     */
    private $totalPrice;

    /**
     * @var integer
     */
    private $totalPriceWithTax;

    /**
     * @var integer
     */
    private $unitPrice;

    /**
     * @var integer
     */
    private $unitPriceWithTax;

    /**
     * @var integer
     */
    private $tax;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * @param string $articleNumber
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
    }

    /**
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @return int
     */
    public function getTotalPriceWithTax()
    {
        return $this->totalPriceWithTax;
    }

    /**
     * @param int $totalPriceWithTax
     */
    public function setTotalPriceWithTax($totalPriceWithTax)
    {
        $this->totalPriceWithTax = $totalPriceWithTax;
    }

    /**
     * @return int
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getUnitPriceWithTax()
    {
        return $this->unitPriceWithTax;
    }

    /**
     * @param int $unitPriceWithTax
     */
    public function setUnitPriceWithTax($unitPriceWithTax)
    {
        $this->unitPriceWithTax = $unitPriceWithTax;
    }

    /**
     * @return int
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}