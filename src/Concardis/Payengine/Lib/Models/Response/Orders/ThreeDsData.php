<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
use Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult;

class ThreeDsData extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    protected $subModels = array(
        'authenticationresult' => AuthenticationResult::CLASSNAME
    );

    /**
     * @var AuthenticationResult
     */
    private $authenticationResult;

	/**
	 * @return AuthenticationResult
	 */
	public function getAuthenticationResult() {
		return $this->authenticationResult;
	}

	/**
	 * @param AuthenticationResult $authenticationResult
	 */
	public function setAuthenticationResult($authenticationResult) {
		$this->authenticationResult = $authenticationResult;
	}
	
}
