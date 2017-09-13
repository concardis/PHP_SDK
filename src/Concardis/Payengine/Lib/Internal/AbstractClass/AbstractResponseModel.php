<?php

namespace Concardis\Payengine\Lib\Internal\AbstractClass;


abstract class AbstractResponseModel extends AbstractModel
{

    /**
     * @var integer
     */
    protected $createdAt;

    /**
     * @var integer
     */
    protected $modifiedAt;

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return int
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param int $modifiedAt
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    }


}