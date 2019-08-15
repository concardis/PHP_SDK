<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class Meta extends AbstractResponseModel {

	const CLASSNAME = __CLASS__;

	protected $subModels = [
		'cofContract' => CredentialOnFile::CLASSNAME,
		'threedsdata' => ThreeDsData::CLASSNAME,
	];

	/**
	 * @var string
	 * relevant for RatePAY
	 */
	private $riskIdentId;

	/**
	 * @var integer
	 * relevant for RatePAY Installment
	 */
	private $totalAmount;

	/**
	 * @var integer
	 * relevant for RatePAY Installment
	 */
	private $numberOfRates;

	/**
	 * @var integer
	 * relevant for RatePAY Installment
	 */
	private $rate;

	/**
	 * @var integer
	 * relevant for RatePAY Installment
	 */
	private $lastRate;

	/**
	 * @var float
	 * relevant for RatePAY Installment
	 */
	private $interestRate;

	/**
	 * @var integer
	 * relevant for RatePAY Installment
	 */
	private $paymentFirstDay;

	/**
	 * @var string
	 * relevant for RatePAY Installment
	 */
	private $descriptor;

	/**
	 * @var CredentialOnFile
	 */
	private $cofContract;

	/**
	 * @var ThreeDsData
	 */
	private $threeDsData;

	/**
	 * @return string
	 */
	public function getRiskIdentId() {
		return $this->riskIdentId;
	}

	/**
	 * @param string $riskIdentId
	 */
	public function setRiskIdentId($riskIdentId) {
		$this->riskIdentId = $riskIdentId;
	}

	/**
	 * @return int
	 */
	public function getTotalAmount() {
		return $this->totalAmount;
	}

	/**
	 * @param int $totalAmount
	 */
	public function setTotalAmount($totalAmount) {
		$this->totalAmount = $totalAmount;
	}

	/**
	 * @return int
	 */
	public function getNumberOfRates() {
		return $this->numberOfRates;
	}

	/**
	 * @param int $numberOfRates
	 */
	public function setNumberOfRates($numberOfRates) {
		$this->numberOfRates = $numberOfRates;
	}

	/**
	 * @return int
	 */
	public function getRate() {
		return $this->rate;
	}

	/**
	 * @param int $rate
	 */
	public function setRate($rate) {
		$this->rate = $rate;
	}

	/**
	 * @return int
	 */
	public function getLastRate() {
		return $this->lastRate;
	}

	/**
	 * @param int $lastRate
	 */
	public function setLastRate($lastRate) {
		$this->lastRate = $lastRate;
	}

	/**
	 * @return float
	 */
	public function getInterestRate() {
		return $this->interestRate;
	}

	/**
	 * @param float $interestRate
	 */
	public function setInterestRate($interestRate) {
		$this->interestRate = $interestRate;
	}

	/**
	 * @return int
	 */
	public function getPaymentFirstDay() {
		return $this->paymentFirstDay;
	}

	/**
	 * @param int $paymentFirstDay
	 */
	public function setPaymentFirstDay($paymentFirstDay) {
		$this->paymentFirstDay = $paymentFirstDay;
	}

	/**
	 * @return string
	 */
	public function getDescriptor() {
		return $this->descriptor;
	}

	/**
	 * @param string $descriptor
	 */
	public function setDescriptor($descriptor) {
		$this->descriptor = $descriptor;
	}

	/**
	 * @return CredentialOnFile
	 */
	public function getCofContract() {
		return $this->cofContract;
	}

	/**
	 * @param CredentialOnFile $cofContract
	 */
	public function setCofContract($cofContract) {
		$this->cofContract = $cofContract;
	}

	/**
	 * @return ThreeDsData
	 */
	public function getThreeDsData() {
		return $this->threeDsData;
	}

	/**
	 * @param ThreeDsData $threeDsData
	 */
	public function setThreeDsData($threeDsData) {
		$this->threeDsData = $threeDsData;
	}
}
