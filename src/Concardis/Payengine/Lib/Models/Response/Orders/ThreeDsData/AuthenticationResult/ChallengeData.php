<?php

namespace Concardis\Payengine\Lib\Models\Response\Orders\ThreeDsData\AuthenticationResult;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;


class ChallengeData extends AbstractResponseModel
{
    const CLASSNAME = __CLASS__;

    /**
     * @var string
     */
    private $acsUrl;

	/**
	 * @var string
	 */
    private $base64EncodedChallengeRequest;

	/**
	 * @var string
	 */
    private $challengeWindowSize;

	/**
	 * @return string
	 */
	public function getAcsUrl() {
		return $this->acsUrl;
	}

	/**
	 * @param string $acsUrl
	 */
	public function setAcsUrl($acsUrl) {
		$this->acsUrl = $acsUrl;
	}

	/**
	 * @return string
	 */
	public function getBase64EncodedChallengeRequest() {
		return $this->base64EncodedChallengeRequest;
	}

	/**
	 * @param string $base64EncodedChallengeRequest
	 */
	public function setBase64EncodedChallengeRequest($base64EncodedChallengeRequest) {
		$this->base64EncodedChallengeRequest = $base64EncodedChallengeRequest;
	}

	/**
	 * @return string
	 */
	public function getChallengeWindowSize() {
		return $this->challengeWindowSize;
	}

	/**
	 * @param string $challengeWindowSize
	 */
	public function setChallengeWindowSize($challengeWindowSize) {
		$this->challengeWindowSize = $challengeWindowSize;
	}
}
