<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstruments;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;

use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\ThreeDSVersions\SpecificData;

class ThreeDSVersion extends AbstractResponseModel
{
    protected $subModels = array(
        'specificData' => SpecificData::class
    );
    /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    //protected $createdAt; ////already in AbstractResponseModel

    /**
     * @var integer
     */
    //private $modifiedAt; //already in AbstractResponseModel

    /**
     * @var string
     */
    private $version;
    
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
     * @return integer
     */

    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }
        // public function getCreatedAt()
    // {
    //     return $this->createdAt;
    // }
    // /**
    //  * @param integer $createdAt
    //  */
    // public function setCreatedAt($createdAt)
    // {
    //     $this->createdAt = $createdAt;
    // }
    // /**
    //  * @return integer
    //  */
    // public function getModifiedAt()
    // {
    //     return $this->modifiedAt;
    // }
    // /**
    //  * @param integer $modifiedAt
    //  */
    // public function setModifiedAt($modifiedAt)
    // {
    //     $this->modifiedAt = $modifiedAt;
    // }
}