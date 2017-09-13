<?php

namespace Concardis\Payengine\Lib\Internal\Resource\Orders\Transactions;


use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Orders\Transaction;

class Cancel extends AbstractResource implements Postable
{

    protected $resourcePath = Api::RECOURCE_ORDERS_TRANSACTIONS_CANCEL;

    /**
     * @param $data
     *
     * @return Transaction
     */
    public function post($data)
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
        return new Transaction();
    }


}