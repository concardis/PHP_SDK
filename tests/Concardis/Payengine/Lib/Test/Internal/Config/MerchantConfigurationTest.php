<?php

namespace Concardis\Payengine\Lib\Test\Internal\Config;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Config\MerchantConfiguration;
use PHPUnit\Framework\TestCase;

/**
 * Class MerchantConfigurationTest
 * @package Concardis\Payengine\Lib\Test\Internal\Config
 */
class MerchantConfigurationTest extends TestCase
{

    /**
     * @var MerchantConfiguration
     */
    private $testedClass;

    public function setup(){
        $this->testedClass = new MerchantConfiguration();
    }


    /**
     * @test
     */
    public function authHeaderTest(){
        $this->testedClass->setMerchantId("merchant_123");
        $this->testedClass->setApiKey("test123");
        $this->testedClass->setIsLiveMode(true);

        $this->assertEquals("merchant_123", $this->testedClass->getMerchantId());
        $this->assertEquals("test123", $this->testedClass->getApiKey());
        $this->assertEquals(base64_encode("merchant_123:test123"), $this->testedClass->getAuthorizationHeader());
        $this->assertTrue($this->testedClass->isIsLiveMode());
    }

}
