<?php
namespace Concardis\Payengine\Lib\Models\Response\PaymentInstruments\ThreeDSVersions;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResponseModel;
class SpecificData extends AbstractResponseModel
{
    /**
     * @var string
     */
    private $methodUrl;
    /**
     * @var string
     */
    private $base64EncodedThreeDsMethodData;

    public function getMethodUrl()
    {
        return $this->methodUrl;
    }
    /**
     * @param string $id
     */
    public function setMethodUrl($methodUrl)
    {
        $this->methodUrl = $methodUrl;
    }
    /**
     * @return integer
     */

    public function getBase64EncodedThreeDsMethodData()
    {
        return $this->base64EncodedThreeDsMethodData;
    }
    /**
     * @param string $version
     */
    public function setBase64EncodedThreeDsMethodData($base64EncodedThreeDsMethodData)
    {
        $this->base64EncodedThreeDsMethodData = $base64EncodedThreeDsMethodData;
    }

}