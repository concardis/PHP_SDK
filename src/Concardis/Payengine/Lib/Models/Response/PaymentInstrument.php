<?php

namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\Attributes;

class PaymentInstrument extends AbstractResponseModel
{
    protected $subModels = array(
        'attributes' => Attributes::class,
    );

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
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $recurring;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var boolean
     */
    private $cofContract; 

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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $product
     */
    public function setType($type)
    {
        $this->type = $type;
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
    
    /**
     * @return array
     */
    public function getCofContract()
    {
        return $this->cofContract;
    }

    /**
     * @param array $attributes
     */
    public function setCofContract($cofContract)
    {
        $this->cofContract = $cofContract;
    }


}