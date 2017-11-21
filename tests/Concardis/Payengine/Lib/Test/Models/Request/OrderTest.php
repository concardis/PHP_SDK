<?php

namespace Concardis\Payengine\Lib\Test\Models\Request;

require_once __DIR__ . "/../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Constants\Channel;
use Concardis\Payengine\Lib\Internal\Constants\Products;
use Concardis\Payengine\Lib\Internal\Constants\TransactionType;
use Concardis\Payengine\Lib\Models\Request\Order;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;
use Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'description' => 'test',
            'initialAmount' => 100
        );

        $order = new Order();
        $order->setCurrency('');
        $order->setDescription('test');
        $order->setInitialAmount(100);

        $actual = $order->__toArray();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function toArray() {
        $item = array(
            'articleNumber' => 'PE12345',
            'name' => 'test',
            'quantity' => 4,
            'tax' => 19,
            'totalPrice' => 400,
            'totalPriceWithTax' => 476,
            'unitPrice' => 100,
            'unitPriceWithTax' => 119
        );

        $async = new Async();
        $async->setSuccessUrl('https://google.de');
        $async->setFailureUrl('https://google.de');
        $async->setCancelUrl('https://google.de');

        $payment = new Payment();
        $payment->setPaymentInstrumentId('paymentInstrumentId');

        $expected = array(
            'description' => 'testString',
            'initialAmount' => 100,
            'currency' => 'EUR',
            'basket' => array($item),
            'async' => $async->__toArray(),
            'billingAddress' => 'billingAddressId',
            'channel' => Channel::ECOM,
            'customer' => 'customerId',
            'ipAddress' => '127.0.0.1',
            'merchantOrderId' => 'merchantOrderId',
            'persona' => 'personaId',
            'privacy' => 12345600000,
            'shippingAddress' => 'shippingAddressId',
            'source' => 'unitTest',
            'statementDescription' => 'statementDescription',
            'terms' => 12345600000,
            'allowedProducts' => array(Products::SEPA, Products::PAYDIREKT),
            'transactionType' => TransactionType::PREAUTH
        );

        $order = new Order();
        $order->setDescription('testString');
        $order->setInitialAmount(100);
        $order->setCurrency('EUR');
        $order->setBasket(array($item));
        $order->setAsync($async);
        $order->setBillingAddress('billingAddressId');
        $order->setChannel(Channel::ECOM);
        $order->setCustomer('customerId');
        $order->setIpAddress('127.0.0.1');
        $order->setMerchantOrderId('merchantOrderId');
        $order->setPersona('personaId');
        $order->setPrivacy(12345600);
        $order->setShippingAddress('shippingAddressId');
        $order->setSource('unitTest');
        $order->setStatementDescription('statementDescription');
        $order->setTerms(12345600);
        $order->setAllowedProducts(array(Products::SEPA, Products::PAYDIREKT));
        $order->setTransactionType(TransactionType::PREAUTH);

        $actual = $order->__toArray();

        $this->assertEquals($expected, $actual);
    }

}