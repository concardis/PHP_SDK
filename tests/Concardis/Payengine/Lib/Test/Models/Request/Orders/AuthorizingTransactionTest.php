<?php

namespace Concardis\Payengine\Lib\Test\Models\Request\Orders;

require_once __DIR__ . "/../../../../../../../../autoload.php";

use Concardis\Payengine\Lib\Internal\Constants\Channel;
use Concardis\Payengine\Lib\Internal\Constants\Products;
use Concardis\Payengine\Lib\Models\Request\Orders\Async;
use Concardis\Payengine\Lib\Models\Request\Orders\AuthorizingTransaction;
use Concardis\Payengine\Lib\Models\Request\Orders\Payment\Payment;
use PHPUnit\Framework\TestCase;

class AuthorizingTransactionTest extends TestCase
{

    /**
     * @test
     */
    public function toArray_filterEmptyStrings() {
        $expected = array(
            'description' => 'test',
            'initialAmount' => 100
        );

        $authorizingTransaction = new AuthorizingTransaction();
        $authorizingTransaction->setCurrency('');
        $authorizingTransaction->setDescription('test');
        $authorizingTransaction->setInitialAmount(100);

        $actual = $authorizingTransaction->__toArray();

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
            'payment' => $payment->__toArray(),
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
            'product' => Products::PAYPAL
        );

        $authorizingTransaction = new AuthorizingTransaction();
        $authorizingTransaction->setDescription('testString');
        $authorizingTransaction->setInitialAmount(100);
        $authorizingTransaction->setCurrency('EUR');
        $authorizingTransaction->setBasket(array($item));
        $authorizingTransaction->setAsync($async);
        $authorizingTransaction->setPayment($payment);
        $authorizingTransaction->setProduct(Products::PAYPAL);
        $authorizingTransaction->setBillingAddress('billingAddressId');
        $authorizingTransaction->setChannel(Channel::ECOM);
        $authorizingTransaction->setCustomer('customerId');
        $authorizingTransaction->setIpAddress('127.0.0.1');
        $authorizingTransaction->setMerchantOrderId('merchantOrderId');
        $authorizingTransaction->setPersona('personaId');
        $authorizingTransaction->setPrivacy(12345600);
        $authorizingTransaction->setShippingAddress('shippingAddressId');
        $authorizingTransaction->setSource('unitTest');
        $authorizingTransaction->setStatementDescription('statementDescription');
        $authorizingTransaction->setTerms(12345600);

        $actual = $authorizingTransaction->__toArray();

        $this->assertEquals($expected, $actual);
    }

}