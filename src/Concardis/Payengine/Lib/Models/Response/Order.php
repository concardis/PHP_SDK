<?php

namespace Concardis\Payengine\Lib\Models\Response;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;
use Concardis\Payengine\Lib\Models\Response\Orders\Item;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;
use Concardis\Payengine\Lib\Models\Response\Orders\Meta;

class Order extends AbstractResponseModel
{

    protected $subModels = array(
        'basket' => Item::class,
        'customer' => Customer::class,
        'persona' => Persona::class,
        'billingAddress' => Address::class,
        'shippingAddress' => Address::class,
        'paymentInstrument' => PaymentInstrument::class,
        'transactions' => Transaction::class,
        'meta' => Meta::class,
    );

    /**
     * @var integer
     */
    private $terms;

    /**
     * @var integer
     */
    private $privacy;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $merchantOrderId;

    /**
     * @var string
     */
    private $paymentProviderTransactionId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $statementDescription;

    /**
     * @var integer
     */
    private $initialAmount;

    /**
     * @var integer
     */
    private $preauthorizedAmount;

    /**
     * @var integer
     */
    private $capturedAmount;

    /**
     * @var integer
     */
    private $refundedAmount;

    /**
     * @var integer
     */
    private $canceledAmount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Orders\Item
     */
    private $basket;

    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Persona
     */
    private $persona;

    /**
     * @var Address
     */
    private $billingAddress;

    /**
     * @var Address
     */
    private $shippingAddress;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var PaymentInstrument
     */
    private $paymentInstrument;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Orders\Transaction
     */
    private $transactions;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $redirectUrl;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $product;

    /**
     * @var array
     */
    private $allowedProducts;

    /**
     * @var boolean
     */
    private $settled;

    /**
     * @var integer
     */
    private $settlementDate;

    /**
     * @var string
     */
    private $transactionType;

    /**
     * @var Meta
     */
    private $meta;

    /**
     * @return integer
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * @param integer $terms
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;
    }

    /**
     * @return integer
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * @param integer $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
    public function getPaymentProviderTransactionId()
    {
        return $this->paymentProviderTransactionId;
    }

    /**
     * @param string $paymentProviderTransactionId
     */
    public function setPaymentProviderTransactionId($paymentProviderTransactionId)
    {
        $this->paymentProviderTransactionId = $paymentProviderTransactionId;
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
     * @return int
     */
    public function getPreauthorizedAmount()
    {
        return $this->preauthorizedAmount;
    }

    /**
     * @param int $preauthorizedAmount
     */
    public function setPreauthorizedAmount($preauthorizedAmount)
    {
        $this->preauthorizedAmount = $preauthorizedAmount;
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
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @param Persona $persona
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
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
     * @return PaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->paymentInstrument;
    }

    /**
     * @param PaymentInstrument $paymentInstrument
     */
    public function setPaymentInstrument($paymentInstrument)
    {
        $this->paymentInstrument = $paymentInstrument;
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
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
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
     * @return bool
     */
    public function isSettled()
    {
        return $this->settled;
    }

    /**
     * @param bool $settled
     */
    public function setSettled($settled)
    {
        $this->settled = $settled;
    }

    /**
     * @return integer
     */
    public function getSettlementDate()
    {
        return $this->settlementDate;
    }

    /**
     * @param integer $settlementDate
     */
    public function setSettlementDate($settlementDate)
    {
        $this->settlementDate = $settlementDate;
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

    /**
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }

}