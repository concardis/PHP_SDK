<?php

namespace Concardis\Payengine\Lib\Models\Request\Customers;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class PaymentInstrument extends AbstractModel
{
    const CLASSNAME = __CLASS__;
    
    /**
     * @var string
     */
    private $paymentInstrumentId;

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

}
