<?php
namespace Concardis\Payengine\Lib\Internal\Resource\Customers;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Customers\Address;

class Addresses extends AbstractResource implements Postable, Getable
{
    protected $resourcePath = Api::RESOURCE_CUSTOMERS_ADDRESSES;

    /**
     * @param $data
     *
     * @return Address
     */
    public function post($data)
    {
        /**
         * @var $result Address
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Address 
     * A list of Address if $queryParams provided or one Address 
     * if called with ID set, if addressId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @return Address
     */
    protected function getResponseModel()
    {
        return new Address();
    }
}