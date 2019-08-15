<?php

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class TokenizePaymentInstrument extends AbstractModel
{

    /**
     * @var string Enum:"creditcard" "sepa" "klarna" "paypal"
     */
    private $type;

    /**
     * @var string
     */
    private $merchantPaymentInstrumentId;

    /**
     * @var PaymentInstrument
     */
    private $payment;

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getMerchantPaymentInstrumentId() {
		return $this->merchantPaymentInstrumentId;
	}

	/**
	 * @param string $merchantPaymentInstrumentId
	 */
	public function setMerchantPaymentInstrumentId($merchantPaymentInstrumentId) {
		$this->merchantPaymentInstrumentId = $merchantPaymentInstrumentId;
	}

	/**
	 * @return PaymentInstrument
	 */
	public function getPayment() {
		return $this->payment;
	}

	/**
	 * @param PaymentInstrument $payment
	 */
	public function setPayment($payment) {
		$this->payment = $payment;
	}


}
