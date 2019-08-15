<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Models\Request\AbstractClass\AbstractOrder;

class AuthorizingTransaction extends AbstractOrder {

	/**
	 * @var \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
	 */
	private $payment;

	/**
	 * @var string
	 */
	private $product;

	/**
	 * @var Async
	 */
	private $async;

	/**
	 * @var Meta
	 */
	private $meta;

	/**
	 * @var Risk
	 */
	private $risk;

	/**
	 * @return \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment
	 */
	public function getPayment() {
		return $this->payment;
	}

	/**
	 * @param \Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment $payment
	 */
	public function setPayment($payment) {
		$this->payment = $payment;
	}

	/**
	 * @return string
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * @param string $product
	 */
	public function setProduct($product) {
		$this->product = $product;
	}

	/**
	 * @return Async
	 */
	public function getAsync() {
		return $this->async;
	}

	/**
	 * @param Async $async
	 */
	public function setAsync($async) {
		$this->async = $async;
	}

	/**
	 * @return Meta
	 */
	public function getMeta() {
		return $this->meta;
	}

	/**
	 * @param Meta $meta
	 */
	public function setMeta($meta) {
		$this->meta = $meta;
	}

	/**
	 * @return Risk
	 */
	public function getRisk() {
		return $this->risk;
	}

	/**
	 * @param Risk $risk
	 */
	public function setRisk($risk) {
		$this->risk = $risk;
	}
}
