<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;


class ErrorDetails extends AbstractResponseModel
{
    const CLASSNAME = __CLASS__;

    /**
     * @var string
     */
    private $providerCode;

	/**
	 * @var string
	 */
    private $providerMessage;

	/**
	 * @return string
	 */
	public function getProviderCode() {
		return $this->providerCode;
	}

	/**
	 * @param string $providerCode
	 */
	public function setProviderCode($providerCode) {
		$this->providerCode = $providerCode;
	}

	/**
	 * @return string
	 */
	public function getProviderMessage() {
		return $this->providerMessage;
	}

	/**
	 * @param string $providerMessage
	 */
	public function setProviderMessage($providerMessage) {
		$this->providerMessage = $providerMessage;
	}
}
