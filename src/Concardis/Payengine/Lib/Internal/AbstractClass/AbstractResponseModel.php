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
	 * @var array
	 */
	protected $errors;

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

	/**
	 * @return array
	 */
	public function getErrors()
	{
		return $this->errors ? $this->errors : [];
	}

	/**
	 * @param array $errors
	 */
	public function setErrors($errors)
	{
		$this->errors = $errors;
	}

}
