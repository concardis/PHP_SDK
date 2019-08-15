<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Models\Request\Orders\Risk\RiskCustomerAccount;
use Concardis\Payengine\Lib\Models\Request\Orders\Risk\RiskOrderInfo;
use Concardis\Payengine\Lib\Models\Request\Orders\Risk\RiskShippingInfo;

class Risk extends AbstractModel
{

    /**
     * @var RiskCustomerAccount
     */
    private $customerAccount;

    /**
     * @var RiskShippingInfo
     */
    private $shippingInfo;

	/**
	 * @var RiskOrderInfo
	 */
	private $orderInfo;

	/**
	 * @return RiskCustomerAccount
	 */
	public function getCustomerAccount() {
		return $this->customerAccount;
	}

	/**
	 * @param RiskCustomerAccount $customerAccount
	 */
	public function setCustomerAccount($customerAccount) {
		$this->customerAccount = $customerAccount;
	}

	/**
	 * @return RiskShippingInfo
	 */
	public function getShippingInfo() {
		return $this->shippingInfo;
	}

	/**
	 * @param RiskShippingInfo $shippingInfo
	 */
	public function setShippingInfo($shippingInfo) {
		$this->shippingInfo = $shippingInfo;
	}

	/**
	 * @return RiskOrderInfo
	 */
	public function getOrderInfo() {
		return $this->orderInfo;
	}

	/**
	 * @param RiskOrderInfo $orderInfo
	 */
	public function setOrderInfo($orderInfo) {
		$this->orderInfo = $orderInfo;
	}

}
