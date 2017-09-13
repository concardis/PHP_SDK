<?php

namespace Concardis\Payengine\Lib\Test\Fixture\Model;

use Concardis\Payengine\Lib\Internal\Constants\Channel;
use Concardis\Payengine\Lib\Internal\Constants\OrderStatus;
use Concardis\Payengine\Lib\Internal\Constants\OrderType;
use Concardis\Payengine\Lib\Internal\Constants\Products;
use Concardis\Payengine\Lib\Models\Response\Order as ResponseModel;
use Concardis\Payengine\Lib\Models\Request\Order as RequestModel;

class OrderFixture
{

    public static function getResponse(){
        $order = new ResponseModel();
        $order->setCreatedAt(123456789);
        $order->setModifiedAt(123456789);
        $order->setProduct(Products::SEPA);
        $order->setAllowedProducts(array(
            Products::SEPA,
            Products::CREDITCARD,
            Products::PAYDIREKT,
            Products::PAYPAL,
            Products::RATEPAY_DIRECTDEBIT,
            Products::RATEPAY_INVOICE
        ));
        $order->setBasket(array(
            ItemFixture::getFixture(),
            ItemFixture::getFixture()
        ));
        $order->setBillingAddress(AddressFixture::getResponse());
        $order->setCanceledAmount(12345);
        $order->setCapturedAmount(12345);
        $order->setChannel(Channel::ECOM);
        $order->setCurrency("EUR");
        $order->setCustomer(CustomerFixture::getResponse());
        $order->setDescription("UnitTest");
        $order->setInitialAmount(12345);
        $order->setIpAddress("128.0.0.1");
        $order->setMerchantOrderId("merchant_order_12345");
        $order->setOrderId("order_12345");
        $order->setPaymentInstrument(PaymentInstrumentFixture::getResponse());
        $order->setPaymentProviderTransactionId("sepa_order_12345");
        $order->setPersona(PersonaFixture::getResponse());
        $order->setPreauthorizedAmount(12345);
        $order->setPrivacy(123456789);
        $order->setRedirectUrl("https://someUrl.com");
        $order->setRefundedAmount(12345);
        $order->setSettled(false);
        $order->setSettlementDate(123456789);
        $order->setShippingAddress(AddressFixture::getResponse());
        $order->setSource("unittest");
        $order->setStatementDescription("unittesting is nice");
        $order->setStatus(OrderStatus::OPEN);
        $order->setTerms(123456789);
        $order->setTransactions(array(
            TransactionFixture::getResponseParent(3)
        ));
        $order->setTransactionType(OrderType::PREAUTH);
        $order->setMeta(MetaFixture::getResponse());
        return $order;
    }

    public static function getRequest(){
        $order = new RequestModel();
        $order->setAllowedProducts(array(
            Products::PAYDIREKT,
            Products::PAYPAL
        ));
        return $order;
    }


}