<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

class PaymentInstruments extends AbstractResource implements Postable, Getable, Patchable
{
    protected $resourcePath = Api::RESOURCE_PAYMENTINSTRUMENT;

    /**
     * @param $data
     *
     * @return PaymentInstrument
     */
    public function post($data)
    {
        /**
         * @var $result PaymentInstrument
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param $data
     *
     * @return PaymentInstrument
     */
    public function patch($data)
    {
        /**
         * @var $result PaymentInstrument
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|PaymentInstrument 
     * A list of PaymentInstrument if $queryParams provided or one PaymentInstrument 
     * if called with ID set, if paymentInstrumentId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @return PaymentInstrument
     */
    protected function getResponseModel()
    {
        return new PaymentInstrument();
    }
}