<?php

namespace Concardis\Payengine\Lib\Models\Request;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractModel;

class BrowserInfo extends AbstractModel
{

    /**
     * @var string
     */
    private $acceptHeader;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var bool
     */
    private $javaEnabled;

    /**
     * @var string
     */
    private $language;

    /**
     * @var int
     */
    private $colorDepth;

    /**
     * @var int
     */
    private $screenHeight;

    /**
     * @var int
     */
    private $screenWidth;

    /**
     * @var int
     */
    private $timezone;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var string
     */
    private $windowSize;

	/**
	 * @return string
	 */
	public function getAcceptHeader() {
		return $this->acceptHeader;
	}

	/**
	 * @param string $acceptHeader
	 */
	public function setAcceptHeader($acceptHeader) {
		$this->acceptHeader = $acceptHeader;
	}

	/**
	 * @return string
	 */
	public function getIp() {
		return $this->ip;
	}

	/**
	 * @param string $ip
	 */
	public function setIp($ip) {
		$this->ip = $ip;
	}

	/**
	 * @return bool
	 */
	public function isJavaEnabled() {
		return $this->javaEnabled;
	}

	/**
	 * @param bool $javaEnabled
	 */
	public function setJavaEnabled($javaEnabled) {
		$this->javaEnabled = $javaEnabled;
	}

	/**
	 * @return string
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * @param string $language
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	/**
	 * @return int
	 */
	public function getColorDepth() {
		return $this->colorDepth;
	}

	/**
	 * @param int $colorDepth
	 */
	public function setColorDepth($colorDepth) {
		$this->colorDepth = $colorDepth;
	}

	/**
	 * @return int
	 */
	public function getScreenHeight() {
		return $this->screenHeight;
	}

	/**
	 * @param int $screenHeight
	 */
	public function setScreenHeight($screenHeight) {
		$this->screenHeight = $screenHeight;
	}

	/**
	 * @return int
	 */
	public function getScreenWidth() {
		return $this->screenWidth;
	}

	/**
	 * @param int $screenWidth
	 */
	public function setScreenWidth($screenWidth) {
		$this->screenWidth = $screenWidth;
	}

	/**
	 * @return int
	 */
	public function getTimezone() {
		return $this->timezone;
	}

	/**
	 * @param int $timezone
	 */
	public function setTimezone($timezone) {
		$this->timezone = $timezone;
	}

	/**
	 * @return string
	 */
	public function getUserAgent() {
		return $this->userAgent;
	}

	/**
	 * @param string $userAgent
	 */
	public function setUserAgent($userAgent) {
		$this->userAgent = $userAgent;
	}

	/**
	 * @return string
	 */
	public function getWindowSize() {
		return $this->windowSize;
	}

	/**
	 * @param string $windowSize
	 */
	public function setWindowSize($windowSize) {
		$this->windowSize = $windowSize;
	}
	
}
