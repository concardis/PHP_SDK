<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstruments;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\Attributes\CofContract;

class Attributes extends AbstractResponseModel
{
    protected $subModels = array(
        'cofContracts' => CofContract::class
    );
    /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    //protected $createdAt; ////already in AbstractResponseModel

    /**
     * @var integer
     */
    //private $modifiedAt; //already in AbstractResponseModel


        /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $cardHolder;

    /**
     * @var string
     */
    private $verification;

    /**
     * @var string
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $expiryMonth;

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param string $cardHolder
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    /**
     * @return string
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * @param string $verification
     */
    public function setVerification($verification)
    {
        $this->verification = $verification;
    }

    /**
     * @return string
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param string $expiryYear
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
    }

    /**
     * @return string
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param string $expiryMonth
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * @return string
     */
    public function getCofContracts()
    {
        return $this->cofContracts;
    }

    /**
     * @param string $cofContracts
     */
    public function setCofContracts($cofContracts)
    {
        $this->cofContracts = $cofContracts;
    }
   
}