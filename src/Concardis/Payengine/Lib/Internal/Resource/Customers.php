<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Addresses;
use Concardis\Payengine\Lib\Internal\Resource\Customers\CustomerPaymentInstruments;
use Concardis\Payengine\Lib\Internal\Resource\Customers\Personas;
use Concardis\Payengine\Lib\Models\Response\Customer;

class Customers extends AbstractResource implements Postable, Patchable, Getable
{
    protected $resourcePath = Api::RESOURCE_CUSTOMERS;

    /**
     * @param $data
     *
     * @return Customer
     */
    public function post($data)
    {
        /**
         * @var $result Customer
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param $data
     *
     * @return Customer
     */
    public function patch($data)
    {
        /**
         * @var $result Customer
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Customer 
     * A list of Customers if $queryParams provided or one Customer 
     * if called with ID set, if customerId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @param string $id
     *
     * @return Addresses
     * @throws \Exception
     */
    public function addresses($id = null){
        if(!isset($this->resourceId)){
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new Addresses($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @param string $id
     *
     * @return CustomerPaymentInstruments
     * @throws \Exception
     */
    public function paymentInstruments($id = null){
        if(!isset($this->resourceId)){
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new CustomerPaymentInstruments($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @param string $id
     *
     * @return Personas
     * @throws \Exception
     */
    public function personas($id = null){
        if(!isset($this->resourceId)){
            throw new \Exception(ErrorCodes::SDK_CUSTOMERID_MISSING);
        }
        return new Personas($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @return Customer
     */
    protected function getResponseModel()
    {
        return new Customer();
    }
}