<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;


class ThreeDsVersionSpecificData extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    /**
     * @var string
     */
    private $methodUrl;

    /**
     * @var int
     */
    private $base64EncodedThreeDsMethodData;

	/**
	 * @return string
	 */
	public function getMethodUrl() {
		return $this->methodUrl;
	}

	/**
	 * @param string $methodUrl
	 */
	public function setMethodUrl($methodUrl) {
		$this->methodUrl = $methodUrl;
	}

	/**
	 * @return int
	 */
	public function getBase64EncodedThreeDsMethodData() {
		return $this->base64EncodedThreeDsMethodData;
	}

	/**
	 * @param int $base64EncodedThreeDsMethodData
	 */
	public function setBase64EncodedThreeDsMethodData($base64EncodedThreeDsMethodData) {
		$this->base64EncodedThreeDsMethodData = $base64EncodedThreeDsMethodData;
	}
}
