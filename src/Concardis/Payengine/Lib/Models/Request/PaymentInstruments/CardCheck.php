<?php
namespace Concardis\Payengine\Lib\Models\Request\PaymentInstruments;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;
use Concardis\Payengine\Lib\Models\Request\Orders\Payment;
use Concardis\Payengine\Lib\Models\Request\Orders\Metas;


class CardCheck extends AbstractModel
{
    /**
     * @var CredentialOnFile
     */
    private $cofContract;

    /**
     * @var ThreeDsData
     */
    private $threeDsData;

    /**
     * @return CredentialOnFile
     */
    public function getCofContract()
    {
        return $this->cofContract;
    }
    /**
     * @param CredentialOnFile $cofContract
     */
    public function setCofContract($cofContract)
    {
        $this->cofContract = $cofContract;
    }

    /**
     * @return ThreeDsData
     */
    public function getThreeDsData()
    {
        return $this->threeDsData;
    }
    /**
     * @param ThreeDsData $threeDsData
     */
    public function setThreeDsData($threeDsData)
    {
        $this->threeDsData = $threeDsData;
    }
}