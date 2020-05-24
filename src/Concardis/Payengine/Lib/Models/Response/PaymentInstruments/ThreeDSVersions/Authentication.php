<?php
namespace Concardis\Payengine\Lib\Models\Response\PaymentInstruments\ThreeDSVersions;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
class Authentication extends AbstractResponseModel
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $paymentInstrumentId;
    /**
     * @var string
     */
    private $threeDsVersionId;
    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\PaymentInstruments\AuthenticationResult
     */
    private $authenticationResult;



    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @param integer $paymentInstrumentId
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
     * @param integer $threeDsVersionId
     */
    public function getThreeDsVersionId()
    {
        return $this->threeDsVersionId;
    }
    /**
     * @param string $threeDsVersionId
     */
    public function setThreeDsVersionId($threeDsVersionId)
    {
        $this->threeDsVersionId = $threeDsVersionId;
    }
    /**
     * @param object $authenticationResult
     */
    public function getAuthenticationResult()
    {
        return $this->authenticationResult;
    }
    /**
     * @param object $authenticationResult
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->authenticationResult = $authenticationResult;
    }
}