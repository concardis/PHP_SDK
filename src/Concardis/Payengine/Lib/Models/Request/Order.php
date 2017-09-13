<?php
namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

class Order extends AbstractOrder
{
    /**
     * @var \Concardis\Payengine\Lib\Models\Request\Orders\Async
     */
    private $async;

    /**
     * @var array
     */
    private $allowedProducts;

    /**
     * @var string
     */
    private $transactionType;

    /**
     * @return mixed
     */
    public function getAsync()
    {
        return $this->async;
    }

    /**
     * @param mixed $async
     */
    public function setAsync($async)
    {
        $this->async = $async;
    }

    /**
     * @return array
     */
    public function getAllowedProducts()
    {
        return $this->allowedProducts;
    }

    /**
     * @param array $allowedProducts
     */
    public function setAllowedProducts($allowedProducts)
    {
        $this->allowedProducts = $allowedProducts;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }

}