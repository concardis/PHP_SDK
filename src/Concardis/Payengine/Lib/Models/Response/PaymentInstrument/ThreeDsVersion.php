<?php

namespace Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;


class ThreeDsVersion extends AbstractResponseModel
{
	const CLASSNAME = __CLASS__;

    protected $subModels = array(
        'threedsversionspecificdata' => ThreeDsVersionSpecificData::CLASSNAME
    );

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $createdAt;

    /**
     * @var int
     */
    private $modifiedAt;

    /**
     * @var string
     */
    private $version;

    /**
     * @var ThreeDsVersionSpecificData
     *                    
     */
    private $specificData;

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getCreatedAt() {
		return $this->createdAt;
	}

	/**
	 * @param int $createdAt
	 */
	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;
	}

	/**
	 * @return int
	 */
	public function getModifiedAt() {
		return $this->modifiedAt;
	}

	/**
	 * @param int $modifiedAt
	 */
	public function setModifiedAt($modifiedAt) {
		$this->modifiedAt = $modifiedAt;
	}

	/**
	 * @return string
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * @param string $version
	 */
	public function setVersion($version) {
		$this->version = $version;
	}

	/**
	 * @return ThreeDsVersionSpecificData
	 */
	public function getSpecificData() {
		return $this->specificData;
	}

	/**
	 * @param ThreeDsVersionSpecificData $specificData
	 */
	public function setSpecificData($specificData) {
		$this->specificData = $specificData;
	}

}
