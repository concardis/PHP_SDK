<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Payment;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Payment\CofContract;

class Payment extends AbstractModel
{
    // protected $subModels = array(
    //     'cofContract' => CofContract::class
    // );

    /**
     * @var string
     */
    private $accountHolder;

    /**
     * @var string
     */
    private $bankName;

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
    private $paymentInstrumentId;

    /**
     * SEPA mandate
     *
     * @var \Concardis\Payengine\Lib\Models\Request\Orders\Mandate
     */
    private $mandate;

    /**
     * @var string
     */
    private $numberOfRates;

    /**
     * @var integer
     */
    private $rate;

    /**
     * @var integer
     */
    private $lastRate;

    /**
     * @var float
     */
    private $interestRate;

    /**
     * @var integer
     */
    private $totalAmount;

    /**
     * @var string
     */
    private $riskIdentId;

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


    private $cofContract;

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
     * @return \Concardis\Payengine\Lib\Models\Request\Orders\Mandate
     */
    public function getMandate()
    {
        return $this->mandate;
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Mandate $mandate
     */
    public function setMandate($mandate)
    {
        $this->mandate = $mandate;
    }

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
     * @return string
     */
    public function getNumberOfRates()
    {
        return $this->numberOfRates;
    }

    /**
     * @param string $numberOfRates
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
     * @param string $cardHolder
     * @param string $cardNumber
     * @param string $verfication
     * @param string $expiryMonth
     * @param string $expiryYear
     */
    public function setCreditcard($cardHolder, $cardNumber, $verfication, $expiryMonth, $expiryYear)
    {
        $this->setCardHolder($cardHolder);
        $this->setCardNumber($cardNumber);
        $this->setVerification($verfication);
        $this->setExpiryMonth($expiryMonth);
        $this->setExpiryYear($expiryYear);
    }

    /**
     * @param string $paymentInstrumentId
     */
    public function setCreditcardWithPaymentInstrument($paymentInstrumentId)
    {
        $this->setPaymentInstrumentId($paymentInstrumentId);
    }


    /**
     * @param string $riskIdentId
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     */
    public function setRatepayDirectDebit($riskIdentId, $iban, $bic, $accountHolder, $bankName)
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
    }

    /**
     * @param string $riskIdentId
     * @param string $paymentInstrumentId
     */
    public function setRatepayDirectDebitWithPaymentInstrument($riskIdentId, $paymentInstrumentId)
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setPaymentInstrumentId($paymentInstrumentId);
    }

    /**
     * @param string $riskIdentId
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     */
    public function setRatepayInstallmentWithBankData($riskIdentId, $iban, $bic, $accountHolder, $bankName, $rate, $interestRate, $numberOfRates, $totalAmount, $lastRate)
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
    }

    /**
     * @param string $riskIdentId
     * @param string $paymentInstrumentId
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     */
    public function setRatepayInstallmentWithPaymentInstrument($riskIdentId, $paymentInstrumentId, $rate, $interestRate, $numberOfRates, $totalAmount, $lastRate)
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setPaymentInstrumentId($paymentInstrumentId);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
    }

    /**
     * @param string $riskIdentId
     * @param integer $rate
     * @param float $interestRate
     * @param integer $numberOfRates
     * @param integer $totalAmount
     * @param integer $lastRate
     */
    public function setRatepayInstallment($riskIdentId, $rate, $interestRate, $numberOfRates, $totalAmount, $lastRate)
    {
        $this->setRiskIdentId($riskIdentId);
        $this->setRate($rate);
        $this->setInterestRate($interestRate);
        $this->setNumberOfRates($numberOfRates);
        $this->setTotalAmount($totalAmount);
        $this->setLastRate($lastRate);
    }

    /**
     * @param string $riskIdentId
     */
    public function setRatepayInvoice($riskIdentId)
    {
        $this->setRiskIdentId($riskIdentId);
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Mandate $mandate
     * @param string $iban
     * @param string $bic
     * @param string $accountHolder
     * @param string $bankName
     */
    public function setSepa($mandate, $iban, $bic, $accountHolder, $bankName)
    {
        $this->setMandate($mandate);
        $this->setIban($iban);
        $this->setBic($bic);
        $this->setAccountHolder($accountHolder);
        $this->setBankName($bankName);
    }

    /**
     * @param \Concardis\Payengine\Lib\Models\Request\Orders\Mandate $mandate
     * @param string $paymentInstrumentId
     */
    public function setSepaWithPaymentInstrument($mandate, $paymentInstrumentId)
    {
        $this->setMandate($mandate);
        $this->setPaymentInstrumentId($paymentInstrumentId);
    }


    /**
     * @return string
     */
    public function getCofContract()
    {
        return $this->cofContract;
    }
    /**
     * @param array $transactionData
     */
    public function setCofContract($cofContract)
    {
        $this->cofContract = $cofContract;
    }
}