<?php
namespace Concardis\Payengine\Lib\Internal\Resource;

use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Constants\ErrorCodes;
use Concardis\Payengine\Lib\Internal\Interfaces\Getable;
use Concardis\Payengine\Lib\Internal\Interfaces\Patchable;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Debit;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Preauth;
use Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions;
use Concardis\Payengine\Lib\Models\Response\Order;

class Orders extends AbstractResource implements Postable, Patchable, Getable
{
    protected $resourcePath = Api::RECOURCE_ORDERS;

    /**
     * @param $data
     *
     * @return Order
     */
    public function post($data)
    {
        /**
         * @var $result Order
         */
        $result = parent::post($data);

        return $result;
    }

    /**
     * @param $data
     *
     * @return Order
     */
    public function patch($data)
    {
        /**
         * @var $result Order
         */
        $result = parent::patch($data);

        return $result;
    }

    /**
     * @param array $queryParams
     *
     * @return \Concardis\Payengine\Lib\Models\Response\ListWrapper|Order 
     * A list of Orders if $queryParams provided or one Order 
     * if called with ID set, if orderId is set $queryParams will be ignored.
     */
    public function get($queryParams = null)
    {
        return parent::get($queryParams);
    }

    /**
     * @return Debit
     */
    public function debit(){
        return new Debit($this->connection, null, $this->resourcePath);
    }

    /**
     * @return Preauth
     */
    public function preauth(){
        return new Preauth($this->connection, null, $this->resourcePath);
    }

    /**
     * @param string $id
     *
     * @return Transactions
     * @throws \Exception
     */
    public function transactions($id = null){
        if(!isset($this->resourceId)){
            throw new \Exception(ErrorCodes::SDK_ORDERID_MISSING);
        }

        return new Transactions($this->connection, $id, $this->resourcePathWithId);
    }

    /**
     * @return Order
     */
    protected function getResponseModel()
    {
        return new Order();
    }
}