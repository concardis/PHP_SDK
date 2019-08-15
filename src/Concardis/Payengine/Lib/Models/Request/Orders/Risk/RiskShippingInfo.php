<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Risk;

class RiskShippingInfo extends AbstractModel {

	/**
	 * @var string
	 */
	private $shippingEqualsBillingAddress;

	/**
	 * @var string
	 */
	private $shippingIndicator;

	/**
	 * @var string
	 */
	private $deliveryTime;

	/**
	 * @var string
	 */
	private $deliveryEmail;

	/**
	 * @return string
	 */
	public function getShippingEqualsBillingAddress() {
		return $this->shippingEqualsBillingAddress;
	}

	/**
	 * @param string $shippingEqualsBillingAddress
	 */
	public function setShippingEqualsBillingAddress($shippingEqualsBillingAddress) {
		$this->shippingEqualsBillingAddress = $shippingEqualsBillingAddress;
	}

	/**
	 * @return string
	 */
	public function getShippingIndicator() {
		return $this->shippingIndicator;
	}

	/**
	 * @param string $shippingIndicator
	 */
	public function setShippingIndicator($shippingIndicator) {
		$this->shippingIndicator = $shippingIndicator;
	}

	/**
	 * @return string
	 */
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}

	/**
	 * @param string $deliveryTime
	 */
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
	}

	/**
	 * @return string
	 */
	public function getDeliveryEmail() {
		return $this->deliveryEmail;
	}

	/**
	 * @param string $deliveryEmail
	 */
	public function setDeliveryEmail($deliveryEmail) {
		$this->deliveryEmail = $deliveryEmail;
	}

}
