<?php
namespace Concardis\Payengine\Lib\Internal\Resource\Orders;
use Concardis\Payengine\Lib\Internal\AbstractClass\AbstractResource;
use Concardis\Payengine\Lib\Internal\Constants\Api;
use Concardis\Payengine\Lib\Internal\Interfaces\Postable;
use Concardis\Payengine\Lib\Models\Response\Order;
class Intent extends AbstractResource implements Postable
{
    protected $resourcePath = '';
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
     * @return Order
     */
    protected function getResponseModel()
    {
        return new Order();
    }
}