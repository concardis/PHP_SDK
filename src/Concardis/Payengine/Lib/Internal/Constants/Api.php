<?php

namespace Concardis\Payengine\Lib\Internal\Constants;

class Api
{

    const API_ENDPOINT_PROD = "https://api.payengine.de/v1";
    const API_ENDPOINT_TEST = "https://apitest.payengine.de/v1";

    const RECOURCE_ORDERS = "/orders";
    const RECOURCE_ORDERS_DEBIT = "/debit";
    const RECOURCE_ORDERS_PREAUTH = "/preauth";
    const RECOURCE_ORDERS_TRANSACTIONS = "/transactions";
    const RECOURCE_ORDERS_TRANSACTIONS_REFUND = "/refund";
    const RECOURCE_ORDERS_TRANSACTIONS_CAPTURE = "/capture";
    const RECOURCE_ORDERS_TRANSACTIONS_CANCEL = "/cancel";

    const RESOURCE_CUSTOMERS = "/customers";
    const RESOURCE_CUSTOMERS_PERSONAS = "/personas";
    const RESOURCE_CUSTOMERS_ADDRESSES = "/addresses";
    const RESOURCE_CUSTOMERS_PAYMENTINSTRUMENTS = "/payment-instruments";

    const RESOURCE_PAYMENTINSTRUMENT = "/payment-instruments";

    const RESOURCE_PAYMENTINSTRUMENT_THREEDSVERSION = "/3ds-version";
    const RESOURCE_PAYMENTINSTRUMENT_THREEDSVERSION_AUTHENTICATION = "/3ds-authentication";
    const RESOURCE_PAYMENTINSTRUMENT_CARD_CHECK = "/card-check";

    const RESOURCE_BROWSERINFO = "/browser-info";
}