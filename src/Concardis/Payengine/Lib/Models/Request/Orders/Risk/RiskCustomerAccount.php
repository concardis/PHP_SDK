<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Risk;

class RiskCustomerAccount extends AbstractModel {

	/**
	 * @var string
	 */
	private $accountIdentifier;

	/**
	 * @var string
	 */
	private $creationDate;

	/**
	 * @var string
	 */
	private $lastChangeDate;

	/**
	 * @var string
	 */
	private $changeIndicator;

	/**
	 * @var string
	 */
	private $lastPasswordChangeDate;
	/**
	 * @var string
	 */
	private $passwordChangeIndicator;

	/**
	 * @var string
	 */
	private $authenticationMethod;

	/**
	 * @var string
	 */
	private $authenticationTimestamp;

	/**
	 * @var string
	 */
	private $shippingAddressUsageIndicator;

	/**
	 * @var string
	 */
	private $shippingAddressFirstUsage;

	/**
	 * @var int
	 */
	private $transactionCountLastDay;

	/**
	 * @var int
	 */
	private $transactionCountLastYear;

	/**
	 * @var int
	 */
	private $orderCountLast6Months;

	/**
	 * @var bool
	 */
	private $suspiciousActivity;

	/**
	 * @var bool
	 */
	private $accountEqualsShippingName;

	/**
	 * @var string
	 */
	private $paymentAccountAgeIndicator;

	/**
	 * @var string
	 */
	private $paymentAccountEnrollementDate;

	/**
	 * @return string
	 */
	public function getAccountIdentifier() {
		return $this->accountIdentifier;
	}

	/**
	 * @param string $accountIdentifier
	 */
	public function setAccountIdentifier($accountIdentifier) {
		$this->accountIdentifier = $accountIdentifier;
	}

	/**
	 * @return string
	 */
	public function getCreationDate() {
		return $this->creationDate;
	}

	/**
	 * @param string $creationDate
	 */
	public function setCreationDate($creationDate) {
		$this->creationDate = $creationDate;
	}

	/**
	 * @return string
	 */
	public function getLastChangeDate() {
		return $this->lastChangeDate;
	}

	/**
	 * @param string $lastChangeDate
	 */
	public function setLastChangeDate($lastChangeDate) {
		$this->lastChangeDate = $lastChangeDate;
	}

	/**
	 * @return string
	 */
	public function getChangeIndicator() {
		return $this->changeIndicator;
	}

	/**
	 * @param string $changeIndicator
	 */
	public function setChangeIndicator($changeIndicator) {
		$this->changeIndicator = $changeIndicator;
	}

	/**
	 * @return string
	 */
	public function getLastPasswordChangeDate() {
		return $this->lastPasswordChangeDate;
	}

	/**
	 * @param string $lastPasswordChangeDate
	 */
	public function setLastPasswordChangeDate($lastPasswordChangeDate) {
		$this->lastPasswordChangeDate = $lastPasswordChangeDate;
	}

	/**
	 * @return string
	 */
	public function getPasswordChangeIndicator() {
		return $this->passwordChangeIndicator;
	}

	/**
	 * @param string $passwordChangeIndicator
	 */
	public function setPasswordChangeIndicator($passwordChangeIndicator) {
		$this->passwordChangeIndicator = $passwordChangeIndicator;
	}

	/**
	 * @return string
	 */
	public function getAuthenticationMethod() {
		return $this->authenticationMethod;
	}

	/**
	 * @param string $authenticationMethod
	 */
	public function setAuthenticationMethod($authenticationMethod) {
		$this->authenticationMethod = $authenticationMethod;
	}

	/**
	 * @return string
	 */
	public function getAuthenticationTimestamp() {
		return $this->authenticationTimestamp;
	}

	/**
	 * @param string $authenticationTimestamp
	 */
	public function setAuthenticationTimestamp($authenticationTimestamp) {
		$this->authenticationTimestamp = $authenticationTimestamp;
	}

	/**
	 * @return string
	 */
	public function getShippingAddressUsageIndicator() {
		return $this->shippingAddressUsageIndicator;
	}

	/**
	 * @param string $shippingAddressUsageIndicator
	 */
	public function setShippingAddressUsageIndicator($shippingAddressUsageIndicator) {
		$this->shippingAddressUsageIndicator = $shippingAddressUsageIndicator;
	}

	/**
	 * @return string
	 */
	public function getShippingAddressFirstUsage() {
		return $this->shippingAddressFirstUsage;
	}

	/**
	 * @param string $shippingAddressFirstUsage
	 */
	public function setShippingAddressFirstUsage($shippingAddressFirstUsage) {
		$this->shippingAddressFirstUsage = $shippingAddressFirstUsage;
	}

	/**
	 * @return int
	 */
	public function getTransactionCountLastDay() {
		return $this->transactionCountLastDay;
	}

	/**
	 * @param int $transactionCountLastDay
	 */
	public function setTransactionCountLastDay($transactionCountLastDay) {
		$this->transactionCountLastDay = $transactionCountLastDay;
	}

	/**
	 * @return int
	 */
	public function getTransactionCountLastYear() {
		return $this->transactionCountLastYear;
	}

	/**
	 * @param int $transactionCountLastYear
	 */
	public function setTransactionCountLastYear($transactionCountLastYear) {
		$this->transactionCountLastYear = $transactionCountLastYear;
	}

	/**
	 * @return int
	 */
	public function getOrderCountLast6Months() {
		return $this->orderCountLast6Months;
	}

	/**
	 * @param int $orderCountLast6Months
	 */
	public function setOrderCountLast6Months($orderCountLast6Months) {
		$this->orderCountLast6Months = $orderCountLast6Months;
	}

	/**
	 * @return bool
	 */
	public function isSuspiciousActivity() {
		return $this->suspiciousActivity;
	}

	/**
	 * @param bool $suspiciousActivity
	 */
	public function setSuspiciousActivity($suspiciousActivity) {
		$this->suspiciousActivity = $suspiciousActivity;
	}

	/**
	 * @return bool
	 */
	public function isAccountEqualsShippingName() {
		return $this->accountEqualsShippingName;
	}

	/**
	 * @param bool $accountEqualsShippingName
	 */
	public function setAccountEqualsShippingName($accountEqualsShippingName) {
		$this->accountEqualsShippingName = $accountEqualsShippingName;
	}

	/**
	 * @return string
	 */
	public function getPaymentAccountAgeIndicator() {
		return $this->paymentAccountAgeIndicator;
	}

	/**
	 * @param string $paymentAccountAgeIndicator
	 */
	public function setPaymentAccountAgeIndicator($paymentAccountAgeIndicator) {
		$this->paymentAccountAgeIndicator = $paymentAccountAgeIndicator;
	}

	/**
	 * @return string
	 */
	public function getPaymentAccountEnrollementDate() {
		return $this->paymentAccountEnrollementDate;
	}

	/**
	 * @param string $paymentAccountEnrollementDate
	 */
	public function setPaymentAccountEnrollementDate($paymentAccountEnrollementDate) {
		$this->paymentAccountEnrollementDate = $paymentAccountEnrollementDate;
	}
}
