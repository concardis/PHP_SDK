<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders\Meta;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class ThreeDsData extends AbstractModel
{

    /**
     * @var string
     */
    private $threeDsAuthenticationId;

    /**
     * @var string
     */
    private $browserInfoId;

	/**
	 * @var string
	 */
	private $threeDsVersionId;

	/**
	 * @var string
	 */
	private $version;

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
	 * @return string
	 */
	public function getThreeDsAuthenticationId() {
		return $this->threeDsAuthenticationId;
	}

	/**
	 * @param string $threeDsAuthenticationId
	 */
	public function setThreeDsAuthenticationId($threeDsAuthenticationId) {
		$this->threeDsAuthenticationId = $threeDsAuthenticationId;
	}

	/**
	 * @return string
	 */
	public function getBrowserInfoId() {
		return $this->browserInfoId;
	}

	/**
	 * @param string $browserInfoId
	 */
	public function setBrowserInfoId($browserInfoId) {
		$this->browserInfoId = $browserInfoId;
	}

	/**
	 * @return string
	 */
	public function getThreeDsVersionId() {
		return $this->threeDsVersionId;
	}

	/**
	 * @param string $threeDsVersionId
	 */
	public function setThreeDsVersionId($threeDsVersionId) {
		$this->threeDsVersionId = $threeDsVersionId;
	}

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

	
}
