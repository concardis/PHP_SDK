<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders\Metas;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class ThreeDsData extends AbstractResponseModel
{

    /**
     * @var string
     * relevant for Kreditkarte
     */
    private $authenticationResult;

    /**
     * @return object
     */
    public function getAuthenticationResult()
    {
        return $this->authenticationResult;
    }

    /**
     * @param object $authenticationResult
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->authenticationResult = $authenticationResult;
    }

}