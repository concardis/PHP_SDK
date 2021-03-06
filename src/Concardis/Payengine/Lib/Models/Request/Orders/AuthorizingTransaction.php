<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

class AuthorizingTransaction extends AbstractOrder
{

    /**
     * @var \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
     */
    private $payment;

    /**
     * @var string
     */
    private $product;

    /**
     * @var Async
     */
    private $async;

    /**
     * @return \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return Async
     */
    public function getAsync()
    {
        return $this->async;
    }

    /**
     * @param Async $async
     */
    public function setAsync($async)
    {
        $this->async = $async;
    }

}