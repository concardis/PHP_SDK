<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstruments;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\Attributes\CofContract;
use Concardis\Payengine\Lib\Models\Response\Orders\Metas\ThreeDsData;

class CardCheck extends AbstractResponseModel
{
    protected $subModels = array(
        'cofContract' => CofContract::class,
        'threeDsData' => ThreeDsData::class
    );
    /**
     * @var string
     */
    private $id;
    
    /**
     * @var string
     */
    private $status;

    private $errorDetails;

    /**
     * @var integer
     */
    //protected $createdAt; ////already in AbstractResponseModel

    /**
     * @var integer
     */
    //private $modifiedAt; //already in AbstractResponseModel
    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->id;
    }
    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return object
     */
    public function getCofContract()
    {
        return $this->cofContract;
    }
    /**
     * @param array $cofContract
     */
    public function setCofContract($cofContract)
    {
        $this->cofContract = $cofContract;
    }

    /**
     * @return object
     */
    public function getThreeDsData()
    {
        return $this->threeDsData;
    }
    /**
     * @param array $threeDsData
     */
    public function setThreeDsData($threeDsData)
    {
        $this->threeDsData = $threeDsData;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }
    
}