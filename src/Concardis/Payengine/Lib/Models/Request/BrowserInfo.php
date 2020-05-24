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
     * @var boolean
     */
    private $javaEnabled;

    /**
     * @var string
     */
    private $language;
    
    /**
     * @var integer
     */
    private $colorDepth;
    
    /**
     * @var integer
     */
    private $screenHeight;

    /**
     * @var integer
     */
    private $screenWidth;
    
    /**
     * @var integer
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
    public function getAcceptHeader()
    {
        return $this->acceptHeader;
    }

    /**
     * @param string $acceptHeader
     */
    public function setAcceptHeader($acceptHeader)
    {
        $this->acceptHeader = $acceptHeader;
    }

    /**
     * @return string
    */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * @return string
    */
    public function getJavaEnabled()
    {
        return $this->javaEnabled;
    }
    
    /**
     * @param string $javaEnabled
     */
    public function setJavaEnabled($javaEnabled)
    {   
        $this->javaEnabled = (boolean) $javaEnabled;
    }

    /**
     * @return string
    */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
    */
    public function getColorDepth()
    {
        return $this->colorDepth;
    }
   
    /**
     * @param string $colorDepth
     */
    public function setColorDepth($colorDepth)
    {
        $this->colorDepth = $colorDepth;
    }

    /**
     * @return string
    */
    public function getScreenHeight()
    {
        return $this->screenHeight;
    }
    
    /**
     * @param string $screenHeight
     */
    public function setScreenHeight($screenHeight)
    {
        $this->screenHeight = (int)$screenHeight;
    }

    /**
     * @return string
    */
    public function getScreenWidth()
    {
        return $this->screenWidth;
    }   
    /**
     * @param string $screenWidth
     */
    public function setScreenWidth($screenWidth)
    {
        $this->screenWidth = (int)$screenWidth;
    }

    /**
     * @return string
    */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $screenHeight
     */
    public function setTimezone($timezone)
    {
        $this->timezone = (int)$timezone;
    }

    /**
     * @return string
    */
    public function getUserAgent()
    {
        return $this->userAgent;
    }
    
    /**
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return string
    */
    public function getWindowSize()
    {
        return $this->windowSize;
    }

    /**
     * @param string $windowSize
     */
    public function setWindowSize($windowSize)
    {
        $this->windowSize = $windowSize;
    }
}