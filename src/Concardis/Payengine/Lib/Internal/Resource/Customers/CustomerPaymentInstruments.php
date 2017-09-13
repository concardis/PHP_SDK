<?php
namespace Concardis\Payengine\Lib\Internal\Resource\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Deleteable;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\PaymentInstrument;

class CustomerPaymentInstruments extends AbstractResource implements Postable, Deleteable, Getable
{
    protected $resourcePath = Api::RESOURCE_CUSTOMERS_PAYMENTINSTRUMENTS;

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

    public function delete()
    {
        parent::delete();
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|PaymentInstrument 
     * A list of PaymentInstruments if $queryParams provided or one PaymentInstrument 
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