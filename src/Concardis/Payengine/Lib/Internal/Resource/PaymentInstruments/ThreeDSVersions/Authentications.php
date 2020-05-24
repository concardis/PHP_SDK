<?php
namespace Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments\ThreeDSVersions;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
// use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
// use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;

use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\ThreeDSVersions\Authentication;

// class Authentications extends AbstractResource implements Postable, Getable, Patchable
class Authentications extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT_THREEDSVERSION_AUTHENTICATION;

    /**
     * @param $data
     *
     * @return Authentication
     */
    public function post($data)
    {
        /**
         * @var $result Authentication
         */
        $result = parent::post($data);
        return $result;
    }

    /**
     * @return Authentication
     */
    protected function getResponseModel()
    {
        // echo '<br>' . 'Authentication::getResponseModel()';
        return new Authentication();
    }

    public function getResourcePath()
    {
        return $this->resourcePath;
    }
}