<?php
namespace Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\ThreeDSVersion;
use Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments\ThreeDSVersions\Authentications;

class ThreeDSVersions extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT_THREEDSVERSION;

    /**
     * @param $data
     *
     * @return ThreeDSVersion
     */
    public function post($data = array())
    {
        /**
         * @var $result ThreeDSVersion
         */

        $result = parent::post($data);

        return $result;
    }

    /**
     * @return Authentications
     */
    public function authentication(){
        return new Authentications($this->connection, null, $this->resourcePathWithId);
    }



    /**
     * @return ThreeDSVersion
     */
    protected function getResponseModel()
    {
        return new ThreeDSVersion();
    }
}