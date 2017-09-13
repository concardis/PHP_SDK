<?php
namespace Concardis\Payengine\Lib\Test\Fixture\Model;

use Concardis\Payengine\Lib\Models\Request\Orders\AuthorizingTransaction as RequestModel;
use Concardis\Payengine\Lib\Internal\Constants\Products;
use Concardis\Payengine\Lib\Internal\Constants\Channel;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;

class AuthorizingTransactionFixture
{
    public static function getRequest() {
        $async = new Async();
        $async->setCancelUrl('http://cancel.url');
        $async->setFailureUrl('http://failure.url');
        $async->setSuccessUrl('http://success.url');
        $authorizingTransaction = new RequestModel();
        $authorizingTransaction->setAsync($async);
        $authorizingTransaction->setInitialAmount(100);
        $authorizingTransaction->setCurrency('EUR');
        $authorizingTransaction->setChannel(Channel::ECOM);
        $authorizingTransaction->setProduct(Products::PAYPAL);

        return $authorizingTransaction;
    }
}