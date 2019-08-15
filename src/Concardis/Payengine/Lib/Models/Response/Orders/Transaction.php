<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Order;


class Transaction extends AbstractResponseModel
{
    const CLASSNAME = __CLASS__;

    protected $subModels = array(
        'order' => Order::class,
        'transactions' => Transaction::class,
        'basket' => Item::class
    );

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $parentTransaction;

    /**
     * @var integer
     */
    private $canceledAmount;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $order;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Orders\Item
     */
    private $basket;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Orders\Transaction
     */
    private $transactions;

    /**
     * @var integer
     */
    private $refundedAmount;

    /**
     * @var integer
     */
    private $capturedAmount;

    /**
     * @var integer
     */
    private $initialAmount;

    /**
     * @var string
     */
    private $providerCode;

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
    public function getParentTransaction()
    {
        return $this->parentTransaction;
    }

    /**
     * @param string $parentTransaction
     */
    public function setParentTransaction($parentTransaction)
    {
        $this->parentTransaction = $parentTransaction;
    }

    /**
     * @return int
     */
    public function getCanceledAmount()
    {
        return $this->canceledAmount;
    }

    /**
     * @param int $canceledAmount
     */
    public function setCanceledAmount($canceledAmount)
    {
        $this->canceledAmount = $canceledAmount;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param array $transactions
     */
    public function setTransactions($transactions)
    {
        $this->transactions = $transactions;
    }

    /**
     * @return int
     */
    public function getRefundedAmount()
    {
        return $this->refundedAmount;
    }

    /**
     * @param int $refundedAmount
     */
    public function setRefundedAmount($refundedAmount)
    {
        $this->refundedAmount = $refundedAmount;
    }

    /**
     * @return int
     */
    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    /**
     * @param int $capturedAmount
     */
    public function setCapturedAmount($capturedAmount)
    {
        $this->capturedAmount = $capturedAmount;
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
    public function getProviderCode()
    {
        return $this->providerCode;
    }

    /**
     * @param string $providerCode
     */
    public function setProviderCode($providerCode)
    {
        $this->providerCode = $providerCode;
    }

}
