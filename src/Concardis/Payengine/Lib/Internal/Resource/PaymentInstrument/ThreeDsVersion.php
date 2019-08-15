<?php
namespace Concardis\Payengine\Lib\Internal\Resource\PaymentInstrument;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument\ThreeDsVersion;

class ThreeDsVersions extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT_3DSVERSION;

    /**
     * @param $data
     *
     * @return Transaction
     */
    public function post($data = [])
    {
        /**
         * @var $result Transaction
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @return Transaction
     */
    protected function getResponseModel()
    {
        return new ThreeDsVersion();
    }
}
