<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

class Attributes extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    /**
     * @var array
     */
    private $cofContracts = [];

    /**
     * @return array
     */
    public function getCofContracts()
    {
        return $this->cofContracts;
    }

    /**
     * @param array $cofContracts
     */
    public function setCofContracts($cofContracts)
    {
        $this->cofContracts = $cofContracts;
    }
}
