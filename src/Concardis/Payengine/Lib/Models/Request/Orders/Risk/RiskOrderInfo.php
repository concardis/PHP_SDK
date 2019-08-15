<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Risk;

class RiskOrderInfo extends AbstractModel {

	/**
	 * @var bool
	 */
	private $isReorder;

	/**
	 * @var string
	 */
	private $preOrderIndicator;

	/**
	 * @var string
	 */
	private $preOrderDate;

	/**
	 * @var string
	 */
	private $orderType;

	/**
	 * @return bool
	 */
	public function isReorder() {
		return $this->isReorder;
	}

	/**
	 * @param bool $isReorder
	 */
	public function setIsReorder($isReorder) {
		$this->isReorder = $isReorder;
	}

	/**
	 * @return string
	 */
	public function getPreOrderIndicator() {
		return $this->preOrderIndicator;
	}

	/**
	 * @param string $preOrderIndicator
	 */
	public function setPreOrderIndicator($preOrderIndicator) {
		$this->preOrderIndicator = $preOrderIndicator;
	}

	/**
	 * @return string
	 */
	public function getPreOrderDate() {
		return $this->preOrderDate;
	}

	/**
	 * @param string $preOrderDate
	 */
	public function setPreOrderDate($preOrderDate) {
		$this->preOrderDate = $preOrderDate;
	}

	/**
	 * @return string
	 */
	public function getOrderType() {
		return $this->orderType;
	}

	/**
	 * @param string $orderType
	 */
	public function setOrderType($orderType) {
		$this->orderType = $orderType;
	}
}
