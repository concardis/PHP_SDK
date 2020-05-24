<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class Meta extends AbstractResponseModel
{

    /**
     * @var string
     * relevant for RatePAY
     */
    private $riskIdentId;

    /**
     * @var integer
     * relevant for RatePAY Installment
     */
    private $totalAmount;

    /**
     * @var integer
     * relevant for RatePAY Installment
     */
    private $numberOfRates;

    /**
     * @var integer
     * relevant for RatePAY Installment
     */
    private $rate;

    /**
     * @var integer
     * relevant for RatePAY Installment
     */
    private $lastRate;

    /**
     * @var float
     * relevant for RatePAY Installment
     */
    private $interestRate;

    /**
     * @var integer
     * relevant for RatePAY Installment
     */
    private $paymentFirstDay;

    /**
     * @var string
     * relevant for RatePAY Installment
     */
    private $descriptor;

    /**
     * @var string
     * relevant for creditcard payments
     */
    private $threeDs;

    /**
     * @var string
     * relevant for creditcard payments
     */
    private $cofContract;    

    /**
     * @var string
     * relevant for creditcard payments
     */
    private $flexibleThreeDS;

    /**
     * @var object
     * relevant for creditcard payments
     */
    private $threeDsData;
    
    /**
     * @return string
     */
    public function getRiskIdentId()
    {
        return $this->riskIdentId;
    }

    /**
     * @param string $riskIdentId
     */
    public function setRiskIdentId($riskIdentId)
    {
        $this->riskIdentId = $riskIdentId;
    }

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param int $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @return int
     */
    public function getNumberOfRates()
    {
        return $this->numberOfRates;
    }

    /**
     * @param int $numberOfRates
     */
    public function setNumberOfRates($numberOfRates)
    {
        $this->numberOfRates = $numberOfRates;
    }

    /**
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return int
     */
    public function getLastRate()
    {
        return $this->lastRate;
    }

    /**
     * @param int $lastRate
     */
    public function setLastRate($lastRate)
    {
        $this->lastRate = $lastRate;
    }

    /**
     * @return float
     */
    public function getInterestRate()
    {
        return $this->interestRate;
    }

    /**
     * @param float $interestRate
     */
    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }

    /**
     * @return int
     */
    public function getPaymentFirstDay()
    {
        return $this->paymentFirstDay;
    }

    /**
     * @param int $paymentFirstDay
     */
    public function setPaymentFirstDay($paymentFirstDay)
    {
        $this->paymentFirstDay = $paymentFirstDay;
    }

    /**
     * @return string
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }

    /**
     * @param string $descriptor
     */
    public function setDescriptor($descriptor)
    {
        $this->descriptor = $descriptor;
    }

    
    /**
     * @return string
     */
    public function getThreeDs()
    {
        return $this->threeDs;
    }

    /**
     * @param string $threeDs
     */
    public function setThreeDs($threeDs)
    {
        $this->threeDs = $threeDs;
    }

    
    /**
     * @return string
     */
    public function getFlexibleThreeDS()
    {
        return $this->flexibleThreeDS;
    }

    /**
     * @param string $flexibleThreeDS
     */
    public function setFlexibleThreeDS($flexibleThreeDS)
    {
        $this->flexibleThreeDS = $flexibleThreeDS;
    }

    /**
     * @return object
     */
    public function getThreeDsData()
    {
        return $this->threeDsData;
    }

    /**
     * @param object $threeDsData
     */
    public function setThreeDsData($threeDsData)
    {
        $this->threeDsData = $threeDsData;
    }

        /**
     * @return object
     */
    public function getCofContract()
    {
        return $this->cofContract;
    }

    /**
     * @param object $cofContract
     */
    public function setCofContract($cofContract)
    {
        $this->cofContract = $cofContract;
    }

}