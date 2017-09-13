<?php

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class PaymentInstrument extends AbstractModel
{

    /**
     * @var string
     */
    private $cardNumber;

    /**
     * @var string
     */
    private $accountHolder;

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
    private $merchantPaymentInstrumentId;

    /**
     * @var string
     */
    private $product;

    /**
     * @var string
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $expiryMonth;

    /**
     * @var string
     */
    private $bankName;

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
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;
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
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
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
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
    }


}