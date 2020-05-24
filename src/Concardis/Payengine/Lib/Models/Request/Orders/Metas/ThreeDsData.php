<?php

namespace Concardis\Payengine\Lib\Models\Request\Orders\Metas;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class ThreeDsData extends AbstractModel
{

    /**
     * @var object
     */
    private $threeDsAuthenticationId;

    /**
     * @param object $threeDsAuthenticationId
     */
    public function setThreeDsAuthenticationId($threeDsAuthenticationId)
    {
        $this->threeDsAuthenticationId = $threeDsAuthenticationId;
    }

    /**
     * @return object
     */
    public function getThreeDsAuthenticationId()
    {
        return $this->threeDsAuthenticationId;
    }

}