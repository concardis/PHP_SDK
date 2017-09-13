<?php

namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;


class PaymentInstrument extends AbstractResponseModel
{

    /**
     * @var string
     */
    private $paymentInstrumentId;

    /**
     * @var  string
     */
    private $merchantPaymentInstrumentId;

    /**
     * @var string
     */
    private $product;

    /**
     * @var boolean
     */
    private $recurring;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @return string
     */
    public function getPaymentInstrumentId()
    {
        return $this->paymentInstrumentId;
    }

    /**
     * @param string $paymentInstrumentId
     */
    public function setPaymentInstrumentId($paymentInstrumentId)
    {
        $this->paymentInstrumentId = $paymentInstrumentId;
    }

    /**
     * @return string
     */
    public function getMerchantPaymentInstrumentId()
    {
        return $this->merchantPaymentInstrumentId;
    }

    /**
     * @param string $merchantPaymentInstrumentId
     */
    public function setMerchantPaymentInstrumentId($merchantPaymentInstrumentId)
    {
        $this->merchantPaymentInstrumentId = $merchantPaymentInstrumentId;
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
     * @return bool
     */
    public function isRecurring()
    {
        return $this->recurring;
    }

    /**
     * @param bool $recurring
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }


}