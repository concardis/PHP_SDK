<?php
namespace Concardis\Payengine\Lib\Internal\Resource\Orders;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Cancel;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Capture;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions\Refund;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

class Transactions extends AbstractResource implements Patchable, Getable
{
    protected $resourcePath = Api::RECOURCE_ORDERS_TRANSACTIONS;

    /**
     * @param $data
     *
     * @return Transaction
     */
    public function patch($data)
    {
        /**
         * @var $result Transaction
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Transaction 
     * A list of Transactions if $queryParams provided or one Transaction 
     * if called with ID set, if transactionId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @return Refund
     */
    public function refund(){
        return new Refund($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Capture
     */
    public function capture(){
        return new Capture($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Cancel
     */
    public function cancel(){
        return new Cancel($this->connection, null, $this->resourcePathWithId);
    }

    /**
     * @return Transaction
     */
    protected function getResponseModel()
    {
        return new Transaction();
    }
}