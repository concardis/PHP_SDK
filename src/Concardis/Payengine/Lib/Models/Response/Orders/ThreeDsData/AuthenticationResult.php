<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult\ChallengeData;
use Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult\ErrorDetails;

class AuthenticationResult extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

	protected $subModels = array(
		'challengedata' => ChallengeData::CLASSNAME,
		'errordetails' => ErrorDetails::CLASSNAME
	);

    /**
     * @var string
     */
    private $version;

	/**
	 * @var string
	 */
    private $status;

	/**
	 * @var string
	 */
    private $redirectUrl;

	/**
	 * @var ChallengeData
	 */
    private $challengeData;

	/**
	 * @var string
	 */
    private $transactionId;

	/**
	 * @var string
	 */
    private $authenticationValue;

	/**
	 * @var string
	 */
    private $eci;

	/**
	 * @var ErrorDetails
	 */
    private $errorDetails;

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param string $version
	 */
	public function setVersion($version) {
		$this->version = $version;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getRedirectUrl() {
		return $this->redirectUrl;
	}

	/**
	 * @param string $redirectUrl
	 */
	public function setRedirectUrl($redirectUrl) {
		$this->redirectUrl = $redirectUrl;
	}

	/**
	 * @return ChallengeData
	 */
	public function getChallengeData() {
		return $this->challengeData;
	}

	/**
	 * @param ChallengeData $challengeData
	 */
	public function setChallengeData($challengeData) {
		$this->challengeData = $challengeData;
	}

	/**
	 * @return string
	 */
	public function getTransactionId() {
		return $this->transactionId;
	}

	/**
	 * @param string $transactionId
	 */
	public function setTransactionId($transactionId) {
		$this->transactionId = $transactionId;
	}

	/**
	 * @return string
	 */
	public function getAuthenticationValue() {
		return $this->authenticationValue;
	}

	/**
	 * @param string $authenticationValue
	 */
	public function setAuthenticationValue($authenticationValue) {
		$this->authenticationValue = $authenticationValue;
	}

	/**
	 * @return string
	 */
	public function getEci() {
		return $this->eci;
	}

	/**
	 * @param string $eci
	 */
	public function setEci($eci) {
		$this->eci = $eci;
	}

	/**
	 * @return ErrorDetails
	 */
	public function getErrorDetails() {
		return $this->errorDetails;
	}

	/**
	 * @param ErrorDetails $errorDetails
	 */
	public function setErrorDetails($errorDetails) {
		$this->errorDetails = $errorDetails;
	}
}
