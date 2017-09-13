<?php
namespace Concardis\Payengine\Lib\Models\Response;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;
use Concardis\Payengine\Lib\Models\Response\Customers\Persona;

class Customer extends AbstractResponseModel
{
    /**
     * @var array
     */
    protected $subModels = array(
        'addresses' => Address::class,
        'personas' => Persona::class,
        'paymentInstruments' => PaymentInstrument::class
    );

    /**
     * @var string
     */
    private $customerId;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $merchantCustomerId;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Customers\Address
     */
    private $addresses;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\Customers\Persona
     */
    private $personas;

    /**
     * @var array of Concardis\Payengine\Lib\Models\Response\PaymentInstrument
     */
    private $paymentInstruments;

    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param string $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * @param string $merchantCustomerId
     */
    public function setMerchantCustomerId($merchantCustomerId)
    {
        $this->merchantCustomerId = $merchantCustomerId;
    }

    /**
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param array $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @return array
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * @param array $personas
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;
    }

    /**
     * @return array
     */
    public function getPaymentInstruments()
    {
        return $this->paymentInstruments;
    }

    /**
     * @param array $paymentInstruments
     */
    public function setPaymentInstruments($paymentInstruments)
    {
        $this->paymentInstruments = $paymentInstruments;
    }
}