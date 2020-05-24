<?php
namespace Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstruments\CardCheck;
// use Concardis\Payengine\Lib\Internal\Resource\PaymentInstruments\ThreeDSVersions\Authentications;

class CardChecks extends AbstractResource implements Postable
{
    protected $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT_CARD_CHECK;

    /**
     * @param $data
     *
     * @return CardCheck
     */
    public function post($data)
    {
        /**
         * @var $result CardCheck
         */

        $result = parent::post($data);


        return $result;
    }

    /**
     * @return CardCheck
     */
    protected function getResponseModel()
    {
        return new CardCheck();
    }
}