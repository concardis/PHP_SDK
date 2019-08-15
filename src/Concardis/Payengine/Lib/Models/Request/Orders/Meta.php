<?php
namespace Concardis\Payengine\Lib\Models\Request\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Meta\Invoicing;
use Concardis\Payengine\Lib\Models\Request\Orders\Meta\ThreeDsData;

class Meta extends AbstractModel
{

    /**
     * @var Invoicing
     */
    private $invoicing;

    /**
     * @var string
     */
    private $preferredLanguage;

	/**
	 * @var string
	 */
	private $referenceId;

	/**
	 * @var bool
	 */
	private $addressOverride;

	/**
	 * @var string
	 */
	private $tan;

	/**
	 * @var bool
	 */
	private $mobileView;

	/**
	 * @var ThreeDsData
	 */
	private $threeDsData;

	/**
	 * @return Invoicing
	 */
	public function getInvoicing() {
		return $this->invoicing;
	}

	/**
	 * @param Invoicing $invoicing
	 */
	public function setInvoicing($invoicing) {
		$this->invoicing = $invoicing;
	}

	/**
	 * @return string
	 */
	public function getPreferredLanguage() {
		return $this->preferredLanguage;
	}

	/**
	 * @param string $preferredLanguage
	 */
	public function setPreferredLanguage($preferredLanguage) {
		$this->preferredLanguage = $preferredLanguage;
	}

	/**
	 * @return string
	 */
	public function getReferenceId() {
		return $this->referenceId;
	}

	/**
	 * @param string $referenceId
	 */
	public function setReferenceId($referenceId) {
		$this->referenceId = $referenceId;
	}

	/**
	 * @return bool
	 */
	public function isAddressOverride() {
		return $this->addressOverride;
	}

	/**
	 * @param bool $addressOverride
	 */
	public function setAddressOverride($addressOverride) {
		$this->addressOverride = $addressOverride;
	}

	/**
	 * @return string
	 */
	public function getTan() {
		return $this->tan;
	}

	/**
	 * @param string $tan
	 */
	public function setTan($tan) {
		$this->tan = $tan;
	}

	/**
	 * @return bool
	 */
	public function isMobileView() {
		return $this->mobileView;
	}

	/**
	 * @param bool $mobileView
	 */
	public function setMobileView($mobileView) {
		$this->mobileView = $mobileView;
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
